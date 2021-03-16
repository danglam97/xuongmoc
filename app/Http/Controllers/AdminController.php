<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Trang đăng nhập
    public function login()
    {
        return view('backend.login.index');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('admin.login');
    }

    public function postLogin(Request $request)
    {
        //validate dữ liệu
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6'
        ]); // validate false => tạo ra biến $errors để toàn thông tin bị lỗi cho từng trường


        // validate thành công

        $dataLogin = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        //hàm xác thực login của framework : Auth::attemp();
        $checkLogin = Auth::attempt($dataLogin, $request->has('remember'));

        // kiểm tra xem có đăng nhập thành côngh với email và password đã nhập hay không
        if ($checkLogin) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->with('msg', 'Email hoặc Password không chính xác');;
    }

    public function dashboard ()
    {
        $date = getdate();
        $categories = Category::where('is_active', 1)->get();
        $count = "['Tháng', ";

        foreach ($categories as $key => $category) {
            $test [$key]['category_name'] = $category->name;
            $test [$key]['month'] = $date['mon'];
            $test [$key]['number'] = DB::table('contacts')
                ->select(DB::raw('COUNT(contacts.products_id) as number'))
                ->join('products', 'contacts.products_id', '=', 'products.id')
                ->join('categories', 'products.categories_id', '=' ,'categories.id')
                ->whereRaw('categories.id ='.$category->id.' and MONTH(contacts.created_at) = MONTH(CURDATE()) and YEAR(contacts.created_at) = YEAR(CURDATE())')
                ->get()->first()->number;
            $count .= "'". $category->name . "',";
        }

        $count .= "],['".$date['mon']."',";
        foreach ($test as $item) {
            $count .= $item['number'] . "," ;
        }
        $count .= "]";

        $count_day = DB::table('contacts')
            ->select(DB::raw('COUNT(contacts.id) as number'))
            ->whereRaw('DAY(contacts.created_at) = DAY(CURDATE()) and MONTH(contacts.created_at) = MONTH(CURDATE()) and YEAR(contacts.created_at) = YEAR(CURDATE())')
            ->get()->first()->number;
        $count_month = DB::table('contacts')
            ->select(DB::raw('COUNT(contacts.id) as number'))
            ->whereRaw('MONTH(contacts.created_at) = MONTH(CURDATE()) and YEAR(contacts.created_at) = YEAR(CURDATE())')
            ->get()->first()->number;;

//        dd($count);

        return view ('backend.dashboard', [
            'count' => $count,
            'count_day' => $count_day,
            'count_month' => $count_month,
        ]);
    }
}
