<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Product;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        $products = Product::all();
        return view('backend.contact.index', [
            'data' => $contact,
            'products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        $products = Product::all();
        return view('backend.contact.edit', [
            'data' => $contact,
            'products' => $products,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        dd($request->all());
        $request->validate([
            'name' => 'required|max:255',
            'products_id' => 'nullable|exists:products,id',
            //kiem tra input có name="name"
//            required: kiểm tra có bổ trống hay k, unique: kiểm tra trùng dữ liệu --tên bảng--tên cột, max: đọ dài tối đa
            'email' =>'required|email',
//            'address' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
//            'content' => 'required',
        ], [
            'name.required' => 'Tên khách hàng không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Chưa đúng định dạng email',
//            'address. required' => 'Địa chỉ không được để trống',
            'content.required' => 'Bạn cần nhập nội dung',
            'phone.required' => 'SĐT không được để trống',
            'phone.regex' => 'SĐT không đúng định dạng',
            'product_id.exists' => 'Không có danh mục sản phẩm',
        ]);

       // dd($request->all());

        $contact = Contact::findorFail($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->content = $request->input('content');
        $contact->address = $request->input('address');
        $contact->status = $request->input('status');
        $contact->products_id = $request->input('products_id');
   // dd($contact);
        $contact->save();

        return redirect()->route('admin.contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // gọi tới hàm destroy của laravel để xóa 1 object
        // DELETE FROM ten_bang WHERE id = 33 -> execute command
        $isDelete = Contact::destroy($id);

        if ($isDelete) { // xóa thành công
            $statusCode = 200;
            $isSuccess = true;
        } else {
            $statusCode = 400;
            $isSuccess = false;
        }

        // Trả về dữ liệu json và trạng thái kèm theo thành công là 200
        return response()->json(['isSuccess' => $isSuccess], $statusCode);
    }
}
