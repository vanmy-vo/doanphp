<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeCategoryController extends Controller
{
    public function index(){
        return view('user.type_category');
    }

    public function detailtype($id) {
        return $id;
    }
}
