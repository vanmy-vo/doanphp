<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request){
        $results = ($request->has('search')) ? $request->query('search') : "";
        $results = trim(strip_tags($results));
        $dataSearchs = [];
        if ($results != ""){
            $dataSearchs = DB::table('post')->where("title_post", "like", "%" . $results . "%")->get();
        }
        return view('user.search', compact('dataSearchs'));
    }
}
