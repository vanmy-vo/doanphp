<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\services\ContactController as ServiceContactController;


class ContactController extends Controller
{
    public function index(){
        if (!session('user')['userid']) return view('admin.login');

        $contactController = new ServiceContactController();

        $data_contact = $contactController->getContact();
        $contacts = [];
        if($data_contact['data'] != null)
            $contacts = $data_contact['data']->collection;
            
        return view('admin.ManagerContact', ['contacts' => $contacts]);
    }
    public function updateContact(Request $request){
        $contactController = new ServiceContactController();

        $result = $contactController->update($request);

        if($result==null){
            return back()->withErrors('error','Chỉnh sửa thất bại');
        }
        return redirect(route('contact-admin'));
    }
}
