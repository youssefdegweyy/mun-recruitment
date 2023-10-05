<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Category;
use App\Models\Interview;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicants = Applicant::with(['category', 'interview'])->get();
        return view('applicants.index', compact('applicants'));
    }

    public function create()
    {
        $interviews = Interview::where('date', '>=', Carbon::now()->toDateString())->get();
        $categories = Category::all();
        return view('applicants.create', compact('interviews', 'categories'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'university_id' => 'required|numeric|unique:applicants',
            'mobile' => 'required|unique:applicants,mobile',
            'faculty' => 'required',
            'category' => 'required|exists:categories,id',
            'interview' => 'required|exists:interviews,id',
        ]);

        $request['category_id'] = $request->category;
        $request['interview_id'] = $request->interview;
        $request['user_id'] = Auth::id();
        $request['email'] = $request->first_name . $request->university_id . '@miuegypt.edu.eg';

        $interview = Interview::findOrFail($request->interview);
        if ($interview->count == 2) return redirect()->back()->with('error', 'Interview slot taken.');
        else $interview->count++;

        if (Applicant::create($request->all()) && $interview->save()) return redirect()->back()->with('message', 'Applicant added successfully.');
        else return redirect()->back()->with('error', 'Error adding applicant.');
    }

    public function edit($id)
    {
        $applicant = Applicant::findOrFail($id);
        return view('applicants.edit', compact('applicant'));
    }

    public function update(Request $request, $id)
    {
        $applicant = Applicant::findOrFail($id);
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'university_id' => 'required|numeric|' . Rule::unique('applicants', 'university_id')->ignore($applicant->id),
            'mobile' => 'required|' . Rule::unique('applicants', 'mobile')->ignore($applicant->id),
            'faculty' => 'required',
        ]);

        $request['email'] = $request->first_name . $request->university_id . '@miuegypt.edu.eg';
        if ($applicant->update($request->all())) return redirect('applicants')->with('message', 'Updated successfully.');
        else return redirect()->back()->with('error', 'Error updating applicant.');
    }

    public function destroy($id)
    {
        $applicant = Applicant::findOrFail($id);
        $interview = $applicant->interview;
        $interview->update(['count' => $interview->count - 1]);
        if ($applicant->delete()) return redirect()->back()->with('message', 'Deleted successfully.');
        else return redirect()->back()->with('error', 'Error deleting record.');
    }

    public function get_interviews()
    {
        $category_id = request('category_id');
        $interviews = Interview::where('category_id', $category_id)->where('count', '<', '2')->where('date', '>=', Carbon::now()->toDateString())->get();
        return response()->json(array('interviews' => $interviews), 200);
    }
}
