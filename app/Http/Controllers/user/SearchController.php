<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Baiviet;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class SearchController extends Controller
{
    public function index(Request $request){
        $keyword = ($request->has('search')) ? $request->query('search') : "";
        $keyword = trim(strip_tags($keyword));
        $results = [];
        if ($keyword != ""){
            $results = Baiviet::where("title_post", "like", "%" . $keyword . "%")
            ->paginate('5')
            ->withQueryString();
        }
        return view('user.search', compact('results', 'keyword'));
    }
}
