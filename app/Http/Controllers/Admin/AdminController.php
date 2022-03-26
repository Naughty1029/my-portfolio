<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkRequest;
use App\Models\Category;
use App\Models\Work;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $works = Work::all();
        return view('admin.dashboard',compact("works"));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.create',compact("categories"));
    }

    public function store(WorkRequest $request)
    {
        $input = $request->only(['title','comment','url','github']);
        $inputCategories = $request->input('categories');

        $work = Work::create($input);
        $work->categories()->sync($inputCategories);

        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $work = Work::findOrFail($id);
        $categories = Category::all();
        return view('admin.edit',compact("categories","work"));
    }

    public function update(WorkRequest $request,$id)
    {
        $input = $request->only(['title','comment','url','github']);
        $inputCategories = $request->input('categories');

        $work = Work::findOrFail($id);

        $work->update($input);
        $work->categories()->sync($inputCategories);

        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        $work = Work::findOrFail($id);
        $work->delete();
        return redirect()->route('dashboard');
    }

}
