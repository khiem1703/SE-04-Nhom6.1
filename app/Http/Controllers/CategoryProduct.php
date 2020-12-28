<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\ProductType;

use Illuminate\Support\Facades\Redirect;

class CategoryProduct extends Controller
{
    public function add_category_product(){
        return view('admin.add_category_product');

    } 
    public function all_category_product(){
      //  $new_product = Product::where('new', 1)->paginate(4);
      //DB::table('users')->get()
        $all_category = DB::table('type_products')->paginate(4);
        return view('admin.admin_category', compact('all_category'));
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
    public function get_update_category(){
    //    $category = ProductType::find($id);
        
        
        $id = $_GET['id'];
        $category = DB::table('type_products')->where('id', $id)->first();
        // echo '<pre>';
        // print_r($category);
        // echo '</pre>';
        return view('admin.update_category', compact('category'));
    }
    public function post_update_category(Request $request)
    {
        $id = $_GET['id'];
        $category = DB::table('type_products')->where('id', $id)->first();
      
        $this->validate($request,[
                'namecategory'=> 'required|unique:type_products,name|min:3|max:100 '
        ],
        [
                'namecategory.required' => 'Name null',
                'namecategory.unique'=>'Name da co',
                'namecategory.min'=>'do dai ten can lon hon 3',
                'namecategory.max'=>'do dai ten toi thieu la 100'

        ]);
        // $category->name= $request->namecategory;
        // $category->description = $request->description;
        // $category->image = $request->imagecategory;
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        
        //$category->updated_at  =$dt->toDateTimeString();

        $updatecategory = DB::table('type_products')
        ->where('id', $id)
        ->update([
            'name ' => $request->input('namecategory'),
            'description ' => $request->input('description'),
            'image ' => $request->input('imagecategory'),
            'updated_at ' => $request->input($dt->toDateTimeString())
            
        ]);
        echo '<pre>';
        print_r($dt->toDateTimeString());
        echo '</pre>';
        //$category-> save();

        return Redirect::to('admin.update_category')->with('thongbao','sua thanh cong');
      
    }
}
