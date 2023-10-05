<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('category')->where('role', '!=', 0)->get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('users.create', compact('categories'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:1,2,3,4',
            'category' => 'nullable|exists:categories,id',
        ]);

        $request['category_id'] = $request->category;
        $request['password'] = bcrypt($request['password']);
        if (User::create($request->all())) return redirect('users')->with('message', 'User added successfully.');
        else return redirect()->back()->with('error', 'Error creating user.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $categories = Category::all();
        return view('users.edit', compact('user', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|' . Rule::unique('users', 'email')->ignore($user->id),
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:1,2',
            'category' => 'required|exists:categories,id',
        ]);
        $request['category_id'] = $request->category;
        $request['password'] = bcrypt($request['password']);
        if ($user->update($request->all())) return redirect('users')->with('message', 'User edited successfully.');
        else return redirect()->back()->with('error', 'Error updating user.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if ($user->delete()) return redirect('users')->with('message', 'User deleted successfully.');
        else return redirect()->back()->with('error', 'Error deleting user.');
    }
}
