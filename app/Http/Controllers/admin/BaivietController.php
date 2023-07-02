<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Baiviet;
use App\Models\Slide;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BaivietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!session('user')['userid']) {
            return view('admin.login');
        }
        $list = Baiviet::orderBy('id', 'desc')->get();
        $category = DB::table('category')->get();
        // $tacgia = DB::table('account')->where(['role_id' => 2])->get();
        $tacgia = DB::table('account')->get();
        $type = DB::table('type')->get();
        return view('admin.ManagerComment', compact('list', 'category', 'tacgia', 'type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'imageupload' => 'mimes:jpg,png,jpeg,gif,svg',
        ]);

        $nameimage = $request->file('imageupload')->getClientOriginalName();

        $path = $request->file('imageupload')->move('public/uploads/posts');

        $baivetmoi = new Baiviet;
        $baivetmoi->title_post = $request->title;
        $baivetmoi->description = $request->descriptionshort;
        $baivetmoi->content_post = $request->noidungbaiviet;
        $baivetmoi->slug_post = Str::slug($request->title, '-');

        $baivetmoi->deleted_at = date('Y-m-d H:i:s', time());


        $baivetmoi->account_id = 3;
        $baivetmoi->type_id = 1;
        if ($baivetmoi->save()) {
            $slide = new Slide();
            $slide->img = $path . '/' . $nameimage;
            $slide->post_id = $baivetmoi->id;
            $slide->save(); 
            return redirect()->back()->with('message', 'taoj thanfh cong');
        } else {

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $baiviet  = Baiviet::where(['id' => $request['idPost']])->first();
        $slide = Slide::where(['post_id' => $baiviet->id])->first();
        $type = DB::table('type')->where(['id' => $baiviet->type_id])->first();
        $category = DB::table('category')->where(['id' => $type->category_id])->first();
        $baiviet['imageload'] = $slide->img;
        $baiviet['category_id'] = $category->id;
        return $baiviet;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $message = [];
        // dd($request->all());
        $baiviet = Baiviet::where(['id' => $request->postid])->first();

        $baiviet->title_post = $request->title;
        $baiviet->description = $request->descriptionshort;
        $baiviet->content_post = $request->noidungbaiviet;
        // $baiviet->title_post = $request->danhmuc;
        $baiviet->account_id = $request->tacgia;
        $baiviet->type_id = $request->loaibaiviet;

        if ($baiviet->save()) {
            $message['code'] = '99';
            $message['noti'] = 'Cập nhật thành công';
        } else {
            $message['code'] = '0';
            $message['noti'] = 'Cập nhật không thành công';
        }



        return redirect()->route('post.admin')->with($message['code'], $message['noti']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
