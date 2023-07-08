<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Caidat;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index(){
        $settings = DB::table('setting')->get();
        $breadcrumb = $this->getBreadcrumb();
        return view('user.contact', compact('settings', 'breadcrumb'));
    }

    public function getBreadcrumb()
    {
        $breadcrumb = [
            [
                'title' => 'Trang chủ',
                'url' => '/home',
            ],
            [
                'title' => 'Liên hệ',
                'url' => '/contact',
            ],
        ];

        return $breadcrumb;
    }

}
