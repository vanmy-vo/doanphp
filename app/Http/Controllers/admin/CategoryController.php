<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Danhmuc;
use App\Models\Loaidanhmuc;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class CategoryController extends Controller
{
    public function loadCategory()
    {
        $category = Danhmuc::whereNull('deleted_at')->orderBy('id', 'desc')  
        ->paginate('10')
        ->withQueryString();
        $cat=  Danhmuc::get();
            return view('admin.ManagerList',compact('category', 'cat'));
    }  
    public function addCategory(Request $request)
    {
        $ca=new Danhmuc();
        $con = new Loaidanhmuc();

        if ($request->danhmuccha) {
            // $ca->category_name = $request->danhmuccha;
            // $ca->save();
            $con->type_name = $request->danhmuccon;
            $con->category_id = $request->danhmuccha;
            $con->save();
        } else {
            $ca->category_name = $request->danhmuccon;
            $ca->save();
        }

        return redirect()->back();
    }
    public function searchcategory(Request $request)
    {
    $ca=Danhmuc::where('category_name','like','%'.$request->search.'%')->get();
    return view('admin.ManagerList',compact('category'));
    }
    public function updateAds(Request $request,$id)
    {
        $ca= Danhmuc::find($id);
            $ca->category_name = $request->category_name;
            $ca->save();
            return back ();
        }
    }

