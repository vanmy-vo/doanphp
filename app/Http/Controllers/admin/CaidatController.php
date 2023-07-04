<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CaidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        $databases = DB::select('SELECT * FROM setting');
       
        return view('admin.ManagerSettingInfo',  ['databases' => $databases]);
    }

    public function update(Request $request)
    {               
   

        $email = $request->input('email');
        $address_ = $request->input('address_');
        $describe =  $request->input('describe');
        $phone =  $request->input('phone');
        $linkfb =  $request->input('linkfb');

        DB::table('setting')->where('id', 1)->update(['address_' => $address_, 'email' => $email, 'linkfb' => $linkfb, 'phone' => $phone, 'describe' => $describe]);
        return response()->json(['message' => 'Update successfully']);
    }
}