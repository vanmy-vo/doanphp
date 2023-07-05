<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ads;


class AdsController extends Controller
{
    public function index(){
        return view('user.contact');
        
    }
    public function loadAds()
    {
        $ads=ads::whereNull('deleted_at')->get();
        // $ads=ads::where('deleted_at',null)->get();
         return view('admin.ManagerAdvertisement',compact('ads'));
    }  

    public function addAds(Request $request)
    {
        $request->validate([
            'imageupload' => 'mimes:jpg,png,jpeg,gif,svg',
        ]);

        $img = $request->file('imageupload')->getClientOriginalName();


        $path = $request->file('imageupload')->move('public/uploads/ads');
        {
            $ad=new ads();
            $ad->title_ads = $request->title_ads;
            $ad->content_ads = $request->content_ads;
            $ad->link_name = $request->link_name;
            $ad->img = $path . '/' . $img;
            $ad->save();
            return back ()->withErrors(['passed'=>"Bạn đã thêm thành công!"]);
        }

    }
public function searchads(Request $request)
{
$ads=ads::where('title_ads','like','%'.$request->searchads.'%')->get();

return view('admin.ManagerAdvertisement',compact('ads'));
}
public function detailAds($id)
{
    $category=ads::find($id);
    return view('admin.ManagerAdvertisement',compact('ads'));
}
}