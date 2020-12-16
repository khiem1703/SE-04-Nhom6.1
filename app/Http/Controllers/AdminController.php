<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
class AdminController extends Controller
{
    public function index(){
        return view('admin_login');
    }

    public function admin_home()
    {
        return view('admin.admin_dashboard');
    }
    
    public function admin_login(Request $request){
        // $admin_email = $req->admin_email;
        // $admin_password = md5($req->admin_password);
        // $result = User::where('email',$admin_email)->where('password',$admin_password)->first();
        // // echo ('<pre>');
        // // print_r($result); 
        // // echo('</pre>');
        // // sửa giúp t phần đn nhá

        // return view('admin.admin_dashboard');


        // Kiểm tra dữ liệu nhập vào
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);


        if ($validator->fails()) {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
            return redirect('login')->withErrors($validator)->withInput();
        } else {
            // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
            $email = $request->input('email');
            $password = $request->input('password');

            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
                return redirect('hocsinh');
            } else {
                // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
                //Session::flash('error', 'Email hoặc mật khẩu không đúng!');
                return redirect('login');
            }
        }
    }
}
