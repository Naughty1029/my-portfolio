<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\WorkRequest;
use App\Models\Category;
use App\Models\Work;

class CategoryController extends Controller
{
    //
    public function dashboard()
    {
        $categories = Category::all();
        return view('category.dashboard',compact("categories"));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(CategoryRequest $request)
    {
        $input = $request->only(['category']);
        Category::create($input);

        return redirect()->route('category.dashboard');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit',compact("category"));
    }

    public function update(CategoryRequest $request,$id)
    {
        $input = $request->only(['category']);

        $category = Category::findOrFail($id);
        $category->update($input);

        return redirect()->route('category.dashboard');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.dashboard');
    }

}
