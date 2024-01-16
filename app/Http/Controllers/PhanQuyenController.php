<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhanQuyenController extends Controller
{
    public function viewPhanQuyen() {
        return view('admin.pages.phan_quyen.index');
    }
}
