<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Product;
class AdminProduct extends Controller
{
    public function get_products()
    {
        $all_products = DB::table('products')->paginate(10);
        return view('admin.admin_product', compact('all_products'));
       
    }
    public function gettest()
    {
        return view('admin.admin_customers');
    }
}
