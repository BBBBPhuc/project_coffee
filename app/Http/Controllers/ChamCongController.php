<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChamCongController extends Controller
{
    public function viewChamCong() {
        return view('admin.pages.cham_cong.index');
    }
}
