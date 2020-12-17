<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();
class AdminController extends Controller
{
    public function getAdminLogin()
    {
        return view('admin.admin_login');
    }

    public function admin_home()
    {
        return view('admin.admin_dashboard');
    }

    public function postAdminLogin(Request $req)
    {
        $admin_email = $req->admin_email;
        $admin_password = md5($req->admin_password);
        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)
            ->where('admin_password', $admin_password)->first();

        if ($result) {
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_name', $result->admin_id);
            return Redirect::to('/admin_home');
        } else {
            Session::put('message','Vui lòng kiểm tra lại mật khẩu');
            return Redirect::to('/admin_login');

        }
        return view('/admin/admin_dashboard');
    }
    public function logout(Request $req)
    {
    }
}
