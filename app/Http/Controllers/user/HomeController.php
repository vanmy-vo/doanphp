<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $databases = DB::select('SELECT * FROM ads');
        return view('user.index', ['databases' => $databases]);
    }
}
