<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Interview;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class AnswerController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == User::SUPER_ADMIM) {
            $answers = Answer::with('category')->get();
            return view('answers.index', compact('answers'));
        } else {
            $answers = Answer::with('category', 'user')->where('category_id', auth()->user()->category_id)->get();
            return view('answers.index', compact('answers'));
        }
    }

    public function create()
    {
        $questions = Question::where('category_id', auth()->user()->category_id)->get();
        return view('answers.create', compact('questions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'university_id' => 'required|numeric|' . Rule::unique('answers', 'university_id')->where('category_id', auth()->user()->category_id),
            'comment' => 'required',
            'grade' => 'required|in:A,B,C,D',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
            'answers' => 'required|array',
        ]);


        $request['user_id'] = auth()->id();
        $request['category_id'] = auth()->user()->category_id;

        foreach ($request->answers as $key => $answer) {
            $request['answer' . $key] = $answer ?? null;
        }
        if ($interview = Answer::create($request->all())) {
            $image = upload(request('image'), $request->university_id);
            $imgFile = Image::make(File::get((public_path($image))));
            $imgFile->resize(1000, 1000);
            $imgFile->save($image);
            $interview->image = $image;
            if ($interview->save()) return redirect('answers')->with('message', 'Interview added successfully.');
            else return redirect()->back()->with('error', 'Error saving image to server.');
        } else return redirect()->back()->with('error', 'Error saving interview to server.');

    }

    public function show($id)
    {
        if (auth()->user()->role == User::SUPER_ADMIM) {
            $interview = Answer::findOrFail($id);
            $questions = Question::where('category_id', $interview->category_id)->get();
            return view('answers.show', compact('interview', 'questions'));
        } else {
            $interview = Answer::whereId($id)->where('category_id', auth()->user()->category_id)->first();
            $questions = Question::where('category_id', auth()->user()->category_id)->get();
            return view('answers.show', compact('interview', 'questions'));
        }
    }

    public function edit($id)
    {
        if (auth()->user()->role == User::SUPER_ADMIM) {
            $interview = Answer::findOrFail($id);
            $questions = Question::where('category_id', $interview->category_id)->get();
            return view('answers.edit', compact('interview', 'questions'));
        } else {
            $interview = Answer::whereId($id)->where('category_id', auth()->user()->category_id)->first();
            $questions = Question::where('category_id', auth()->user()->category_id)->get();
            return view('answers.edit', compact('interview', 'questions'));
        }
    }

    public function update(Request $request, $id)
    {
        $interview = Answer::whereId($id)->where('category_id', auth()->user()->category_id)->first();
        if ($interview) {
            $request->validate([
                'name' => 'required',
                'university_id' => 'required|numeric|' . Rule::unique('answers', 'university_id')->where('category_id', auth()->user()->category_id)->ignore($interview->id),
                'comment' => 'required',
                'grade' => 'required|in:A,B,C,D',
                'image' => 'nullable|mimes:jpg,jpeg,png|max:2048',
                'answers' => 'required|array',
            ]);
            foreach ($request->answers as $key => $answer) {
                $request['answer' . $key] = $answer ?? null;
            }
            if ($interview->update($request->all())) {
                if (request('image') != NULL) {
                    File::delete(public_path($interview->image));
                    File::deleteDirectory(public_path('/uploads/' . $interview->university_id));
                    $image = upload(request('image'), $request->university_id);
                    $imgFile = Image::make(File::get((public_path($image))));
                    $imgFile->resize(1000, 1000);
                    $imgFile->save($image);
                    $interview->update([
                        'image' => $image,
                    ]);
                    return redirect('/answers/' . $interview->id)->with('message', 'Updated successfully.');
                } else return redirect('/answers/' . $interview->id)->with('message', 'Updated successfully.');
            } else return redirect()->back()->with('error', 'Error updating interview.');
        } else return redirect()->back();
    }

    public function destroy($id)
    {
        $interview = Answer::findOrFail($id);
        $path = $interview->image;
        $university_id = $interview->university_id;
        if ($interview->delete()) {
            File::delete(public_path($path));
            File::deleteDirectory(public_path('/uploads/' . $university_id));
            return redirect()->back()->with('message', 'Deleted successfully.');
        } else return redirect()->back()->with('error', 'Error while deleting interview.');
    }

    public function accept_interview($id)
    {
        $interview = Answer::findOrFail($id);
        if ($interview->update(['status' => Answer::ACCEPTED])) return redirect()->back()->with('message', 'Success.');
        else return redirect()->back()->with('error', 'Error while saving.');
    }

    public function reject_interview($id)
    {
        $interview = Answer::findOrFail($id);
        if ($interview->update(['status' => Answer::PENDING_REJECTED])) return redirect()->back()->with('message', 'Success.');
        else return redirect()->back()->with('error', 'Error while saving.');
    }
}
