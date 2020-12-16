<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Session;
class AdminController extends Controller
{
    public function getAdminLogin(){
        return view('admin.admin_login');
    }

    public function admin_home()
    {
        return view('admin.admin_dashboard');
    }
    
    public function postAdminLogin(Request $req){
       $admin_email = $req->admin_email;
       $admin_password = md5($req->admin_password);
       $result = DB::table('tbl_admin')->where('admin_email',$admin_email)
       ->where('admin_password',$admin_password)->first();
       return view('/admin/admin_dashboard');

       
    }
}
