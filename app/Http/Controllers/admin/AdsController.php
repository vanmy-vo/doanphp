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
            'img' => 'mimes:jpg,png,jpeg,gif,svg',
        ]);

        $img = $request->file('img')->getClientOriginalName();
        $path = $request->file('img')->move(public_path('uploads/ads'),$img);
            $ad=new Ads();
            $ad->title_ads = $request->title_ads;
            $ad->content_ads = $request->content_ads;
            $ad->link = $request->link;
            $ad->img = $img;
            $ad->save();
            return back();
    }
    public function editAds($id)
    {
        $ads=Ads::find($id);
         return view('admin.AdvertisementEdit',compact('ads'));
    }  
    public function updateAds(Request $request,$id)
    {
        $ad= Ads::find($id);
        $request->validate([
            'imageupload' => 'mimes:jpg,png,jpeg,gif,svg',
        ]);
        $img = $request->file('imageupload')->getClientOriginalName();
        $path = $request->file('imageupload')->move(public_path('uploads/ads'),$img);
        {
          
            if($request->hasfile('imageupload'))
            {
                $ad->img =$img;
            }
            $ad->title_ads = $request->title_ads;
            $ad->content_ads = $request->content_ads;
            $ad->link = $request->link;
            $ad->save();
            return back ();
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