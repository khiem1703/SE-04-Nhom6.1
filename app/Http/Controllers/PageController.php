<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function getIndex(){

        $slide = Slide::all();
        // print_r($slide);
        // exit;
        //$new_product = Product::where('new',1)->get();
        $new_product = Product::where('new', 1)->paginate(4); // truyen so phan tu tren 1 trang vao paginate
        // print_r($new_product);
        // exit;
        $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(8);        
    	return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));
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
