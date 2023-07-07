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
    public function addCategory(Request $request)
    {
        $category=new Danhmuc();
        $category->category_name = $request->category_name;
        $category->save();
        return redirect()->back();
    }
    public function searchcategory(Request $request)
    {
    $category=Danhmuc::where('category_name','like','%'.$request->search.'%')->get();
    return view('admin.ManagerList',compact('category'));
    }
    public function updateAds(Request $request,$id)
    {
        $category= Danhmuc::find($id);
            $category->category_name = $request->category_name;
            $category->save();
            return back ();
        }
        public function deleteCategory(Request $request)
        {
            $category = Danhmuc::where(['id' =>$request->id])->first();
            $category->status =1;
            if($category->update()){
    return 'Xóa thành công';
}
    else{
        return'Xóa thất bại';
    }
}
        }
    
   