<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lienhe;

class ContactController extends Controller
{
    public function index(){
        return view('user.contact');
    }
    public function addContact(Request $request)
    {
        $co=new contact();
        $co->fullname = $request->fullname;
        $co->email=$request->email;
        $co->content_contact = $request->content_contact;
        $co->title_contact=$request->title_contact;
        $co->save();
        return redirect()->back();
        // ->withErrors(['passed'=>"Bạn đã liên hệ thành công!"]);
    }
}
