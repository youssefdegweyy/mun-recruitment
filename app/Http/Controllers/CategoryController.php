<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|unique:categories,name'
        ]);

        if (Category::create($request->all())) return redirect('/categories')->with('message', 'Added successfully.');
        else return redirect()->back()->with('error', 'Error adding to database.');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        request()->validate([
            'name' => 'required|' . Rule::unique('categories', 'name')->ignore($category->id),
            'status' => 'nullable'
        ]);

        $category->name = $request->name;
        $category->status = $request->status ? 1 : 0;
        if ($category->save()) return redirect('categories')->with('message', 'Updated successfully.');
        else return redirect()->back()->with('error', 'Error updating.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if ($category->delete()) return redirect('/categories')->with('message', 'Deleted successfully.');
        else return redirect()->back()->with('error', 'Error deleting record.');
    }
}
