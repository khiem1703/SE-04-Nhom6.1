<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\Cart;
use App\Customor;
use App\Slide;
use App\Product;
use App\ProductType;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Carbon;


class PageController extends Controller
{
    //
    public function getIndex()
    {

        $slide = Slide::all();
        // print_r($slide);
        // exit;
        //$new_product = Product::where('new',1)->get();
        $new_product = Product::where('new', 1)->paginate(4); // truyen so phan tu tren 1 trang vao paginate
        // print_r($new_product);
        // exit;
        $sanpham_khuyenmai = Product::where('promotion_price', '<>', 0)->paginate(8);


        return view('page.trangchu', compact('slide', 'new_product', 'sanpham_khuyenmai'));
    }
    public function getLoaiSp($type)
    {
        $sp_theoloai = Product::where('id_type', $type)->get();
        $sp_khac = Product::where('id_type', '<>', $type)->paginate(3);
        $loai = ProductType::all();
        $tenloaisp = ProductType::where('id', $type)->first();
        return view('page.loai_sanpham', compact('sp_theoloai', 'sp_khac', 'loai', 'tenloaisp'));
    }
    public function getChitiet($id)
    {
        $sanpham = Product::where('id', $id)->first();
        $sp_tuongtu = Product::where('id_type', $sanpham->id_type)->paginate(3);
        $sanpham_khuyenmai = Product::where('promotion_price', '<>', 0)->paginate(4);
        ///////////////
        $month = 10;
        $sp_new = Product::whereMonth('created_at', $month)->paginate(4);
        return view('page.chitet_sanpham', compact('sanpham', 'sp_tuongtu', 'sanpham_khuyenmai','sp_new'));
    }
    public function getLienHe()
    {
        return view('page.lienhe');
    }

    public function getGioiThieu()
    {
        return view('page.gioi_thieu');
    }
    public function getAddtoCart(Request $req, $id)
    {
        $product = Product::find($id);
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart', $cart);
        return redirect()->back();
    }
    public function getDelItemtCart($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if($cart->totalQty!=0){
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }
    public function getCheckout()
    {
        return view('page.dat_hang');
    }
    public function postCheckout(Request $req)
    {
        $cart = Session::get('cart');
        //dd($cart);
        $customer = new Customor();
        $customer->name =$req ->name;
        $customer->gender=$req->gender;
        $customer->email=$req->email;
        $customer->address=$req->address;
        $customer->phone_number=$req->phone;
        $customer->note=$req->notes;
        $customer->save();

        $bill = new Bill();
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total =$cart->totalPrice;
        $bill->payment=$req->payment_method;
        $bill->note =$req->notes;
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_detail = new BillDetail();
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product=$key;
            $bill_detail->quantity=$value['qty'];
            $bill_detail->unit_price =($value['price']/$value['qty']);
            $bill_detail->save();

        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao','đặt hàng thành công');
    }
    public function getLogin()
    {
        return view('page.dang_nhap');
    }
    public function getSignin()
    {
        return view('page.dangky');
    }
    public function postSignin(Request $req)
    {
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                're_password'=>'required:same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập dạng email',
                'email.email'=>'Không đúng định dạng email',
                'password.required'=>'vui nhập đúng mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'mật khẩu ít nhất có 6 ký tự',
                'password.max'=>'mật khẩu nhiều nhất có 20 ký tự'


            ]);

            $user = new User();
            $user->full_name= $req->fullname;
            $user->email= $req->email;
            $user->password= Hash::make($req->password);
            $user->phone= $req->phone;
            $user->address= $req->address;
            $user->save();
            return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
           
    }
    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập dạng email',
                'email.email'=>'Không đúng định dạng email',
                'password.required'=>'vui nhập đúng mật khẩu',
                'password.min'=>'mật khẩu ít nhất có 6 ký tự',
                'password.max'=>'mật khẩu nhiều nhất có 20 ký tự'

            ]
            );
            $credentials= array('email'=>$req->email,'password'=>$req->password);
            if(Auth::attempt($credentials))
            {
                return redirect()->back()->with(['flag'=>'sucess','message'=>'Đăng nhập thành công']);
            }
            else{
                return redirect()->back()->with(['flag'=>'sucess','message'=>'Vui lòng kiểm tra lại mật khẩu và tài khoản']);
            }
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('trangchu');
    }
    public function getSearch(Request $req)
    {
        $product =Product::where('name','like','%'.$req->key.'%')
                            ->orWhere('unit_price',$req->key)
                            ->get();
        return view('page.search',compact('product'));
    }

}
