<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ContactResource;
use Illuminate\Support\Facades\DB;
use App\Http\Payload;
use App\Models\Lienhe;
use Carbon\Carbon;
class ContactController extends Controller
{
    public function getContact(){
        $contacts = Lienhe::all();

        if($contacts->isEmpty())
            return Payload::toJson(null, "Data Not Found", 404);   
        return Payload::toJson(ContactResource::collection($contacts), "Request Successfully", 200);
    }
    
    public function getContactById($id){
        $contact = Lienhe::where('id', $id)->first();
        if(!$contact){
            return Payload::toJson(null,'Data Not Found',404);}
        return Payload::toJson(new ContactResource($contact),'Request Successfully',200);
    }
    
    public function store(Request $request){
        $contact = new Lienhe();
        $contact->fill([
            'fullname' =>  $request->fullname,
            'email' =>  $request->email,
            'title_contact' => $request->title_contact,
            'content_contact' => $request->content_contact,
        ]);
        $contact->save();

        $contact = Lienhe::where('id',$contact->id)->first();
        return Payload::toJson(new ContactResource($contact),"Create Successfully",201);
    }

    public function update(Request $request){
        $result = Lienhe::where('id', $request->id)
            ->update([
                'fullname' =>  $request->fullname,
                'email' =>  $request->email,
                'title_contact' => $request->title_contact,
                'content_contact' => $request->content_contact,
                'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
            ],);  
        if($result == 1){
            return Payload::toJson(true,"Update Successfully",202);
        }
        return Payload::toJson(false,"Cannot Update",500);
    }

    public function remove(Request $request)
    {
        $result = Lienhe::where('id', $request->id)
            ->update(['status' => $request->status]);
        if($result == 1)
        {
            $contact = Lienhe::where('id',$request->id)->first();
            return Payload::toJson(true,"Update Successfully",202);
        }
        return Payload::toJson(null,"Cannot Update",500);
    }
    
    public function destroy($id)
    {
        $result = Lienhe::where('id', $id)->delete();
        if($result == 1)
            return Payload::toJson(true,"Remove Successfully",202);
        return Payload::toJson(false,"Cannot Update",500);
    }
}
