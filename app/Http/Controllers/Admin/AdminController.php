<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Work;
use Illuminate\Http\Request;

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
}
