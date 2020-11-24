<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Slide;
use App\Product;
use App\ProductType;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    //
    public function getIndex()
    {

        $slide = Slide::all();
        // print_r($slide);
        // exit;
        //$new_product = Product::where('new',1)->get();
        $new_product = Product::where('new', 1)->paginate(4); // truyen so phan tu tren 1 trang vao paginate
        // print_r($new_product);
        // exit;
        $sanpham_khuyenmai = Product::where('promotion_price', '<>', 0)->paginate(8);


        return view('page.trangchu', compact('slide', 'new_product', 'sanpham_khuyenmai'));
    }
    public function getLoaiSp($type)
    {
        $sp_theoloai = Product::where('id_type', $type)->get();
        $sp_khac = Product::where('id_type', '<>', $type)->paginate(3);
        $loai = ProductType::all();
        $tenloaisp = ProductType::where('id', $type)->first();
        return view('page.loai_sanpham', compact('sp_theoloai', 'sp_khac', 'loai', 'tenloaisp'));
    }
    public function getChitiet($id)
    {
        $sanpham = Product::where('id', $id)->first();
        $sp_tuongtu = Product::where('id_type', $sanpham->id_type)->paginate(3);
        return view('page.chitet_sanpham', compact('sanpham', 'sp_tuongtu'));
    }
    public function getLienHe()
    {
        return view('page.lienhe');
    }

    public function getGioiThieu()
    {
        return view('page.gioi_thieu');
    }
    public function getAddtoCart(Request $req, $id)
    {
        $product = Product::find($id);
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart', $cart);
        return redirect()->back();
    }
    public function getDelItemtCart($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items>0)){
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }
}
