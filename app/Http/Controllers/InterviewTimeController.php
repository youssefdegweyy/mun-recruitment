<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Interview;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InterviewTimeController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == User::SUPER_ADMIM) {
            $interviews = Interview::with(['category', 'applicants'])->get();
            return view('interviews.index', compact('interviews'));
        } else {
            $interviews = Interview::with(['category', 'applicants'])->where('category_id', Auth::user()->category_id)->get();
            return view('interviews.index', compact('interviews'));
        }
    }

    public function create()
    {
        if (Auth::user()->role == User::SUPER_ADMIM) {
            $categories = Category::all();
            return view('interviews.create', compact('categories'));
        } else return view('interviews.create');
    }

    public function store(Request $request)
    {
        if (Auth::user()->role == User::SUPER_ADMIM) {
            request()->validate([
                'category' => 'required|exists:categories,id',
                'date' => 'required|date|after_or_equal:today',
                'time' => 'required',
                'type' => 'required|in:PM,AM'
            ]);
            $request['category_id'] = $request->category;
            if (Interview::create($request->all())) return redirect('/interviews-time')->with('message', 'Added successfully.');
            else return redirect()->back()->with('error', 'Error adding to database.');
        } else {
            request()->validate([
                'date' => 'required|date|after_or_equal:today',
                'time' => 'required',
                'type' => 'required|in:PM,AM'
            ]);
            $request['category_id'] = Auth::user()->category_id;
            if (Interview::create($request->all())) return redirect('/interviews-time')->with('message', 'Added successfully.');
            else return redirect()->back()->with('error', 'Error adding to database.');
        }
    }

    public function destroy($id)
    {
        if (Auth::user()->role == User::SUPER_ADMIM) {
            $interview = Interview::findOrFail($id);
            if ($interview->delete()) return redirect('/interviews-time')->with('message', 'Deleted successfully.');
            else return redirect()->back()->with('error', 'Error deleting record.');
        } else {
            $interview = Interview::whereId($id)->where('category_id', Auth::user()->category_id)->first();
            if ($interview) {
                if ($interview->delete()) return redirect('/interviews-time')->with('message', 'Deleted successfully.');
                else return redirect()->back()->with('error', 'Error deleting record.');
            } else return redirect()->back();
        }
    }
}
