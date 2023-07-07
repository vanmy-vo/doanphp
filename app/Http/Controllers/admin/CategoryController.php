<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Danhmuc;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class CategoryController extends Controller
{
    public function loadCategory()
    {
        $category = Danhmuc::whereNull('deleted_at')  
        ->paginate('1')
        ->withQueryString();

            return view('admin.ManagerList',compact('category'));
    }  
    // public function addCategory(Request $request)
    // {
    //     $ca=new Danhmuc();
    //     $ca->category_name = $request->category_name;
    //     $ca->save();
    //     return redirect()->back();
    // }
    // public function search(Request $request)
    // {
    // $ca=Danhmuc::where('category_name','like','%'.$request->search.'%')->get();
    // return view('admin.ManagerList',compact('category'));
    // }
    // public function detailCategory($id)
    // {
    //     $ca=Danhmuc::find($id);
    //     return view('admin.ManagerList',compact('category'));
    // }

}

