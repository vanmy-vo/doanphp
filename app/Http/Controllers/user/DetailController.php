<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Baiviet;

class DetailController extends Controller
{
    public function index(){
        return view('user.detail');
    }

    public function detail($slug) {
        $chitiet = Baiviet::where(['slug_post' => $slug, 'status' => 0])->first();
        return view('user.detail', compact('chitiet'));
    }
}
