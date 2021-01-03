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
        $all_bills = DB::table('bills')->paginate(5);
        //$data_customer = DB::table('customers')->get();
        
        
        return view('admin.admin_bills', compact('all_bills'));
    }
    
    public function chitiet_customer(){
       
        $id_customer = $_GET['id_customer'];
        $customer = Customor::find($id_customer);
        $bill = Array();
        $total_product = Array();
        $bill = Bill::where('id_customer',$id_customer)->get();
        //echo $bill->id;
        //
        // $total = Array();
   
        // $total = BillDetail::where('id_bill',$bill->id)->get();
        // echo $totalproduct;
//
        return view('admin.admin_bills_customer', compact('customer','bill'));
        //return view('admin.admin_bills_customer', compact('customer'));

    }
 
}
