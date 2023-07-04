<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Baiviet;

class HomeController extends Controller
{
    public function index(){
        $tinmoi = Baiviet::where(['status' => 0])->orderBy('id', 'desc')->limit(4)->get();
        $tinnoibat = Baiviet::where(['status' => 0])->orderBy('id', 'asc')->limit(4)->get();
        $tinthethao = Baiviet::where(['status' => 0])->orderBy('id', 'desc')->limit(5)->get();
        $tincongnghe = Baiviet::where(['status' => 0])->orderBy('id', 'asc')->limit(5)->get();
        $tinvang = Baiviet::where(['status' => 0])->orderBy('id', 'asc')->limit(4)->get();
        return view('user.index', compact('tinmoi', 'tinnoibat', 'tinthethao', 'tincongnghe', 'tinvang'));

        $databases = DB::select('SELECT * FROM ads');
        return view('user.index', ['databases' => $databases]);
    }
}
