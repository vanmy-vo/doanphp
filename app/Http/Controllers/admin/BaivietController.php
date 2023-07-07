<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Baiviet;
use App\Models\Taikhoan;
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
        $list = Baiviet::where(['status' => 0])->orderBy('id', 'desc')->paginate(10);
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
        // $request->validate([
        //     'imageupload' => 'mimes:jpg,png,jpeg,gif,svg',
        // ]);

        // $nameimage = $request->file('imageupload')->getClientOriginalName();

        // $path = $request->file('imageupload')->move(\public_path('uploads/posts'));
         if ($request->hasFile('imageupload')) {
            if ($request->file('imageupload')->isValid()) {
                $request->validate([
                    'imageupload' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                ]);
                // $imageName = time() . '.' . $request->imageupload->extension();
                $imageName = $request->file('imageupload')->getClientOriginalName();
                $request->imageupload->move(public_path('uploads/posts'), $imageName);
                // return $imageName;
            }
        }

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
            $slide->img = $imageName;
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
        if (!is_file('uploads/posts/'.$slide->img)) {
            $baiviet['imageload'] = 'khongtontai';
        } else {
            $baiviet['imageload'] = $slide->img;
        }
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
        if ($request->noidungbaiviet == null) {
            $baiviet->content_post = $baiviet->content_post;
        } else {
            $baiviet->content_post = $request->noidungbaiviet;
        }
        // $baiviet->title_post = $request->danhmuc;
        $baiviet->account_id = $request->tacgia;
        $baiviet->type_id = $request->loaibaiviet;

        if ($request->hasFile('imageupload')) {
            if ($request->file('imageupload')->isValid()) {
                $request->validate([
                    'imageupload' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                ]);
                // $imageName = time() . '.' . $request->imageupload->extension();
                $imageName = $request->file('imageupload')->getClientOriginalName();
                $request->imageupload->move(public_path('uploads/posts'), $imageName);
                // return $imageName;
            }
        }

        $slide = Slide::where(['post_id' => $baiviet->id])->first();
        $slide->img = $imageName;

        if ($baiviet->save() && $slide->save()) {
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
    public function destroy(Request $request)
    {
        $baiviet = Baiviet::where(['id' => $request->id])->first();
        $baiviet->status = 1;
        if ($baiviet->update()) {
            return 'Xoá thành công';
        } else {
            return 'Xóa không thành công';
        }
    }

    public function timkiem(Request $request) {
        if ($request->tenbaiviet == null && $request->danhmuc == null && $request->loaibaiviet == null) {
            $baiviet = Baiviet::orderBy('id', 'desc')->get();
            foreach ($baiviet as $key => $value) {
                echo '<tr data-key="'. $value->id .'">
                        <td class="tc1">';
                        $image = Slide::where(['post_id' => $value->id])->first();
                        if ($image) { 
                            if ($image->img) { 
                                echo '<img src="'.SITE_PATH.'/uploads/posts/'.$image->img.'" alt="'. $value->title_post .'" width="200" title="'. $value->title_post .'">';
                            } else { 
                                echo '<img src="'.SITE_PATH.'/uploads/noimg/nobanner.jpg" alt="'. $value->title_post .'" width="200" title="'. $value->title_post .'">';
                            }
                        } else {
                            echo '<img src="'.SITE_PATH.'/uploads/noimg/nobanner.jpg" alt="'. $value->title_post .'" width="200" title="'. $value->title_post .'">';
                        }
                        echo '</td>
                        <td class="tc2">
                            <p>'. $value->title_post .'</p>
                        </td>
                        <td class="tc3">';
                            $taikhoan = Taikhoan::where(['id' => $value->account_id])->first();
                            echo '<p>'. $taikhoan->fullname .'</p>
                        </td>
                        <td>';
                            $time = strtotime($value->created_at);
                            echo '<p>'. date('d-m-Y H:i:s', $time) .'</p>
                        </td>
                        <td class="tc" style="text-transform: capitalize;">                        
                            <!-- <div class="btn btn-xs btn-success">
                                <a href="#" style="color: #fff;">
                                    <i class="fa fa-edit"></i> edit
                                </a>
                            </div> -->
                            <button type="button" class="btn btn-xs btn-success" onclick="addPost(true, '. $value->id .')" style="text-transform: inherit;">
                                <i class="fa fa-edit"></i> edit
                            </button>
                            <div class="btn btn-xs btn-danger" onclick="Delete("'.$value->title_post.'", "'. $value->id .'")" style=""><i class="fa fa-remove"></i> Xoá</div>
                        </td>
                    </tr>';
            }
        } else {
            $baiviet = Baiviet::where('title_post', 'like',  "%$request->tenbaiviet%")->orWhere(['type_id' => $request->loaibaiviet])->orderBy('id', 'desc')->get();
            if (count($baiviet) != 0) {
                foreach ($baiviet as $key => $value) {
                    echo '<tr data-key="'. $value->id .'">
                            <td class="tc1">';
                            $image = Slide::where(['post_id' => $value->id])->first();
                            if ($image) { 
                                if ($image->img) { 
                                    echo '<img src="'.SITE_PATH.'/uploads/posts/'.$image->img.'" alt="'. $value->title_post .'" width="200" title="'. $value->title_post .'">';
                                } else { 
                                    echo '<img src="'.SITE_PATH.'/uploads/noimg/nobanner.jpg" alt="'. $value->title_post .'" width="200" title="'. $value->title_post .'">';
                                }
                            } else {
                                echo '<img src="'.SITE_PATH.'/uploads/noimg/nobanner.jpg" alt="'. $value->title_post .'" width="200" title="'. $value->title_post .'">';
                            }
                            echo '</td>
                            <td class="tc2">
                                <p>'. $value->title_post .'</p>
                            </td>
                            <td class="tc3">';
                                $taikhoan = Taikhoan::where(['id' => $value->account_id])->first();
                                echo '<p>'. $taikhoan->fullname .'</p>
                            </td>
                            <td>';
                                $time = strtotime($value->created_at);
                                echo '<p>'. date('d-m-Y H:i:s', $time) .'</p>
                            </td>
                            <td class="tc" style="text-transform: capitalize;">                        
                                <!-- <div class="btn btn-xs btn-success">
                                    <a href="#" style="color: #fff;">
                                        <i class="fa fa-edit"></i> edit
                                    </a>
                                </div> -->
                                <button type="button" class="btn btn-xs btn-success" onclick="addPost(true, '. $value->id .')" style="text-transform: inherit;">
                                    <i class="fa fa-edit"></i> edit
                                </button>
                                <div class="btn btn-xs btn-danger" onclick="Delete("'.$value->title_post.'", "'. $value->id .'")" style=""><i class="fa fa-remove"></i> Xoá</div>
                            </td>
                        </tr>';
                }
            } else {
                echo '<tr>Không tìm thấy dữ liệu</tr>';
            }
        }
        // return $request->all();
    }

    public function filter(Request $request) {
        $danhmuc = $request->vlauefilter;
        $type = DB::table('type')->where(['category_id' => $danhmuc])->get();
        echo '<option value="">Chọn loại bài viết</option>';
        foreach ($type as $key => $value) {
            echo '<option value="'.$value->id.'">'.$value->type_name.'</option>';
        }
    }

    public function search(Request $request) {
        $list = Baiviet::where(['status' => 0])->where('title_post', 'like', "%$request->searchpost%")->orWhere(['type_id' => $request->loaibaivietsearch])->orWhere(['category_id' => $request->danhmucsearch])->leftjoin('type', 'type.id', 'post.type_id')->leftjoin('category', 'category.id', 'type.category_id')->orderBy('post.id', 'desc')->paginate(10);
        $category = DB::table('category')->get();
        // $tacgia = DB::table('account')->where(['role_id' => 2])->get();
        $tacgia = DB::table('account')->get();
        $type = DB::table('type')->get();
        return view('admin.ManagerComment', compact('list', 'category', 'tacgia', 'type'));
    }
}
