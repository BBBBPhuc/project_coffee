<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    public function viewHoaDon() {
        return view('admin.pages.hoa_don.index');
    }
}
