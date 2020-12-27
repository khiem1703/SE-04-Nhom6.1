<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class CategoryProduct extends Controller
{
    public function add_category_product(){
        return view('admin.add_category_product');

    } 
    public function all_category_product(){
        return view('admin.admin_category');
    }    
    public function save_category_product(Request $req){
        $data = array();
        $data ['name'] = $req->name_category;
        $data['description'] = $req->description_category;
        $data['image'] = $req->image_category;
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $data['created_at'] = $dt->toDateTimeString();
        $data['updated_at'] = $dt->toDateTimeString();
        //test
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        DB::table('type_products')->insert($data);
        Session::put('message', 'add successful');
        return Redirect::to('add-category-product');
    }
}
