<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ads;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class AdsController extends Controller
{
    public function index(){
        return view('user.contact');
        
    }
    public function loadAds()
    {
        $ads=ads::whereNull('deleted_at')
        ->paginate('2')
        ->withQueryString();

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
            $ad->link = $request->link;
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
        $ads=ads::find($id);
        return view('admin.ManagerAdvertisement',compact('ads'));
    }

    public function deleteAds($id)
    {
        $ads = ads::find($id)->delete();
        if($ads == 1)
            return redirect()->back();
        return false;
    }
}