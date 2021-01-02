<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Bill;
use App\Customor;
use App\BillDetail;
class AdminBills extends Controller
{
    public function getAll()
    {
        # code...
        $all_bills = DB::table('bills')->paginate(10);
        return view('admin.admin_bills', compact('all_bills'));
    }
}
