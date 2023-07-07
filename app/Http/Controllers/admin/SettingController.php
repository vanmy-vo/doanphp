<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class SettingController extends Controller
{
    /**
     * 
     * Layout s
     *
     */
    public function index()
    {       
        // Lấy data từ database
        $db_setting = DB::table('setting')->first();

        // Thư mực chứa file hình ảnh
        $folderPath = 'uploads\posts\imageviewsetting';

        // Đường dẫn chưa file hình ảnh
        $files = File::files(public_path($folderPath));
        $absolutePath = public_path($folderPath.'\\'.$db_setting->linkimage);
        $empty = public_path($folderPath.'\\empty.png');
        
        // Duyệt danh sách file 
        foreach ($files as $file) {
                // Path
                $fullPath = $file->getPathname();
                // Kiểm tra file
                if($fullPath != $absolutePath && $fullPath != $empty){
                    // Xóa file
                    File::delete($fullPath);
                }
        }
        return view('admin.ManagerSettingInfo',  ['db_setting' => $db_setting]);
    }

    /**
     * 
     * Cập nhật
     * 
     */
    public function update(Request $request)
    {      
        
        // Get the uploaded file
        $file = $request->file('file');

        // Update
        if ($file != null && $file != ''){
            
             // Validate the uploaded file
            $request->validate([
                'file' => 'required|file|max:1024',
            ]);

            // Lấy thông tin file tải lên
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Di chuyển file vào thư mục mong muốn
            $file->move(public_path('uploads/posts/imageviewsetting'), $fileName);

            // Thực hiện cập nhật lên database
            DB::table('setting')->where('id', 1)->update(['address_' => $request->address_, 'email' => $request->email, 'linkfb' => $request->linkfb, 'phone' => $request->phone, 'describe' => $request->describe, 'linkimage' => $fileName]);
        }
        // Update not image
        else{
            DB::table('setting')->where('id', 1)->update(['address_' => $request->address_, 'email' => $request->email, 'linkfb' => $request->linkfb, 'phone' => $request->phone, 'describe' => $request->describe]);
        }

        return response()->json(['success' => true, 'message' => 'Update successfully']);
    }
}