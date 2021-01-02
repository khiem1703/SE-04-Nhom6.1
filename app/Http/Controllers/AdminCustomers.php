<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Customor;
use Illuminate\Http\Request;

class AdminCustomers extends Controller
{
    public function getAll(){
        $all_customers = DB::table('customer')->paginate(6);
        return view('admin.admin_customers', compact('all_customers'));
    }
}
