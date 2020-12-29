<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProduct extends Controller
{
    public function get_products()
    {
        return view('admin.admin_product');
    }
}
