<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == User::SUPER_ADMIM) {
            $questions = Question::with('category')->get();
            return view('questions.index', compact('questions'));
        } else {
            $questions = Question::with('category')->where('category_id', '=', Auth::user()->category_id)->get();
            return view('questions.index', compact('questions'));
        }
    }

    public function create()
    {
        if (Auth::user()->role == User::SUPER_ADMIM) {
            $categories = Category::all();
            return view('questions.create', compact('categories'));
        } else {
            $category = Category::where('id', Auth::user()->category_id)->first();
            return view('questions.create', compact('category'));
        }
    }

    public function store(Request $request)
    {
        if (Auth::user()->role == User::SUPER_ADMIM) {
            request()->validate([
                'category' => 'required|exists:categories,id',
                'question' => 'required',
            ]);
            $request['category_id'] = $request->category;
            if (Question::create($request->all())) return redirect('questions')->with('message', 'Question created successfully.');
            else return redirect()->back()->with('error', 'Error adding question.');
        } else {
            request()->validate([
                'question' => 'required',
            ]);
            $request['category_id'] = Auth::user()->category_id;
            if (Question::create($request->all())) return redirect()->back()->with('message', 'Question created successfully.');
            else return redirect()->back()->with('error', 'Error adding question.');
        }
    }

    public function edit($id)
    {
        if (Auth::user()->role == User::SUPER_ADMIM) {
            $question = Question::whereId($id)->first();
            if ($question) return view('questions.edit', compact('question'));
            else return redirect()->back();
        } else {
            $question = Question::where('category_id', Auth::user()->category_id)->whereId($id)->first();
            if ($question) return view('questions.edit', compact('question'));
            else return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'question' => 'required'
        ]);

        $question = Question::whereId($id)->first();
        if ($question) {
            $question->update([
                'question' => $request->question,
            ]);
            return redirect('questions')->with('message', 'Question updated successfully.');
        } else return redirect()->back();
    }

    public function destroy($id)
    {
        if (Auth::user()->role == User::SUPER_ADMIM) {
            $question = Question::findOrFail($id);
            if ($question->delete()) return redirect('questions')->with('message', 'Question deleted successfully.');
            else return redirect()->back()->with('error', 'Error deleting question.');
        } else {
            $question = Question::where('category_id', Auth::user()->category_id)->whereId($id)->first();
            if ($question) {
                if ($question->delete()) return redirect('questions')->with('message', 'Question deleted successfully.');
                else return redirect()->back()->with('error', 'Error deletng question.');
            } else return redirect()->back();
        }
    }
}
