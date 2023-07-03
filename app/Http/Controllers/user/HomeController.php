<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Baiviet;

class HomeController extends Controller
{
    public function index(){
        $tinmoi = Baiviet::where(['status' => 0])->orderBy('id', 'desc')->limit(4)->get();
        $tinnoibat = Baiviet::where(['status' => 0])->orderBy('id', 'asc')->limit(4)->get();
        // dd($tinmoi);
        return view('user.index', compact('tinmoi', 'tinnoibat'));
    }
}
