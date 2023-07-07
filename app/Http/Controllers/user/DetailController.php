<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Baiviet;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index(){
        return view('user.detail');
    }

    public function detail($slug) {
        $chitiet = Baiviet::where(['slug_post' => $slug, 'status' => 0])->first();
        $tongbinhluan = DB::table('comment')->where(['post_id' => $chitiet->id])->get();
        $databases = DB::table('ads')->get();
        $tinlienquan = DB::table('post')->where(['type_id' => $chitiet->type_id])->orderBy('created_at', 'desc')->limit(2)->get();
        $imagetinlienquan = DB::table('post_image')->get();
        $type = DB::table('type')->orderBy('created_at', 'desc')->limit(3)->get();
        return view('user.detail', compact('chitiet', 'tongbinhluan', 'databases', 'tinlienquan','imagetinlienquan','type'));
    }

    public function binhluan(Request $request) {
        // dd($request->all());
        $cmt = DB::table('comment')->insert([
            'content_comment' => $request->comment,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
            'deleted_at' => date('Y-m-d H:i:s', time()),
            'post_id' => $request->idpost,
            'email' => $request->email,
            'fullname' => $request->fullname,
        ]);

        $total = DB::table('comment')->where(['post_id' => $request->idpost])->get();

        return count($total);
        // if ($cmt) {
        //     return 'Bình luận thành công';
        // } else {
        //     return 'Bình luận không thành công';
        // }
    }
}
