<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    public function work(Request $request){
        $searchText = $request->searchText;
        $searchOptions = $request->searchOptions;

        $works = DB::table('works');

        $idArray = [];
        if($searchOptions !== null){
            foreach ($searchOptions as $searchOption){
                $worksIds = Category::find($searchOption)->works()->get()->pluck("id");
                foreach ($worksIds as $worksId){
                    array_push($idArray,$worksId);
                }
            }
            $unique = array_unique($idArray);
            $works->whereIn("id",$unique);
        }

        if($searchText !== null){
            $search_split = mb_convert_kana($searchText,"s");
            $search_split2 = preg_split('/[\s]+/',$search_split);
            foreach ($search_split2 as $value) {
                $works->where('title','like','%'.$value.'%')
                    ->orWhere('comment','like','%'.$value.'%');
            }
        }

        return $works->get();
    }

    public function category(){
        $categories = Category::all();
        return $categories;
    }
}
