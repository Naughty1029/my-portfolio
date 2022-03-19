<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Work;

class WorkController extends Controller
{
    public function work(){
        $works = Work::all();
        return $works;
    }

    public function category(){
        $categories = Category::all();
        return $categories;
    }
}
