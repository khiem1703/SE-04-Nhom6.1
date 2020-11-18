<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getIndex(){
    	return view('page.trangchu');
    }
    public function getLoaiSp()
    {
        return view('page.loai_sanpham');
    }
    public function getChitiet()
    {
        return view('page.chitet_sanpham');
    }
    public function getLienHe()
    {
        return view('page.lienhe');
    }

    public function getGioiThieu()
    {
       return view('page.gioi_thieu');
    }
}
