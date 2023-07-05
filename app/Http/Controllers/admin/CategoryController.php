<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Danhmuc;

class CategoryController extends Controller
{
    public function loadCategory()
    {
        $category=category::whereNull('deleted_at')->get();
         return view('admin.ManagerList',compact('category'));
    }  
    public function addCategory(Request $request)
    {
        $ca=new category();
        $ca->category_name = $request->category_name;
        $ca->save();
        return redirect()->back();
    }
    public function search(Request $request)
    {
    $category=category::where('category_name','like','%'.$request->search.'%')->get();
    return view('admin.ManagerList',compact('category'));
    }
    public function detailCategory($id)
    {
        $category=category::find($id);
        return view('admin.ManagerList',compact('category'));
    }

}

