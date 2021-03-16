<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor = Vendor::all();
        return view('backend.vendor.index',['data'=>$vendor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:vendors,name,',
            'content_title' => 'required|max:255',
            //kiem tra input có name="name"
//            required: kiểm tra có bổ trống hay k, unique: kiểm tra trùng dữ liệu --tên bảng--tên cột, max: đọ dài tối đa
            'image' => 'image',
            //exit kiểm tra dữ liệu có tồn tại trong bảng categories cột id hay k
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
//            'position' => 'required|integer|min:0',
//            'is_active' => 'integer|min:0|max:1',
            'email' => 'required|email',
            'address' => 'required|max:255',
            'url' => 'required',

        ], [
            'name.required' => 'Tên đối tác không được để trống',
            'name.unique' => 'Dữ liệu bị trùng',
            'name.max' => 'Độ dài tối đa 255 kí tự',
            'content_title.required' => 'Tiêu đề không được để trống',
            'content_title.max' => 'Độ dài tối đa 255 kí tự',
            'image.image' => 'Không đúng định dạng ảnh',
            'phone.required' => 'SĐT không được để trống',
            'phone.regex' => 'Không đúng định dạng SĐT',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'address.required' => 'Đại chỉ không được để trống',
            'address.max' => 'Độ dài tối đa 255 kí tự',
            'url.required' => 'URL không được để trống',
        ]);

        $vendor = new Vendor();
        $vendor->name = $request->input('name');
        $vendor->slug = Str::slug($request->input('name')); // slug

        if ($request->hasFile('image')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('image');
            // đặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); // $file->getClientOriginalName() == tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/vendor/'; // uploads/brand ; uploads/vendor
            // Thực hiện upload file
            $file->move($path_upload,$filename);

            // lưu lại cái tên
            $vendor->image = $path_upload.$filename;
        }

        // Url
        $vendor->url = $request->input('url'); // $_POST['url'];
        // Target
        $vendor->email = $request->input('email');
        // Loại
        $vendor->phone = $request->input('phone');
        $vendor->address = $request->input('address');
        // Trạng thái
        $is_active = 0;
        if ($request->has('is_active')){ //kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }
        // trạn thái
        $vendor->is_active = $is_active;
        // Vị trí
        $position=0;
        if ($request->has('position')){
            $position = $request->input('position');
        }
        $vendor->position = $position;
        $vendor->content_title = $request->input('content_title');
        $vendor->content_description = $request->input('content_description');

        // Lưu
        $vendor->save();

        // Chuyển hướng trang về trang danh sách
        return redirect()->route('admin.vendor.index');
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
    {  $data = Vendor::all();
        $vendor = Vendor::findorFail($id);
        return view('backend.vendor.edit',[
            'data'=>$vendor,
            'vendor'=>$data
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
        $vendor =  Vendor::findorFail($id);

//        dd($vendor->all());

        $request->validate([
            'name' => 'required|max:255|unique:vendors,name,'.$id,
            'content_title' => 'required|max:255',
            //kiem tra input có name="name"
//            required: kiểm tra có bổ trống hay k, unique: kiểm tra trùng dữ liệu --tên bảng--tên cột, max: đọ dài tối đa
            'new_image' => 'image',
            //exit kiểm tra dữ liệu có tồn tại trong bảng categories cột id hay k
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
//            'position' => 'required|integer|min:0',
//            'is_active' => 'integer|min:0|max:1',
            'email' => 'required|email',
            'address' => 'required|max:255',
            'url' => 'required',

        ], [
            'name.required' => 'Tên đối tác không được để trống',
            'name.unique' => 'Dữ liệu bị trùng',
            'name.max' => 'Độ dài tối đa 255 kí tự',
            'content_title.required' => 'Tiêu đề không được để trống',
            'content_title.max' => 'Độ dài tối đa 255 kí tự',
            'new_image.image' => 'Không đúng định dạng ảnh',
            'phone.required' => 'SĐT không được để trống',
            'phone.regex' => 'Không đúng định dạng SĐT',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'address.required' => 'Đại chỉ không được để trống',
            'address.max' => 'Độ dài tối đa 255 kí tự',
            'url.required' => 'URL không được để trống',
        ]);


        $vendor->name = $request->input('name');
        $vendor->slug = Str::slug($request->input('name')); // slug

        if ($request->hasFile('new_image')) { // dòng này Kiểm tra xem ảnh mới có được chọn
            // xóa file cũ
            @unlink(public_path($vendor->image)); // hàm unlink của PHP không phải laravel , chúng ta thêm @ đằng trước tránh bị lỗi
            // get new_image
            $file = $request->file('new_image');
            // đặt tên cho file new_image
            $filename = time().'_'.$file->getClientOriginalName(); // $file->getClientOriginalName() == tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/vendor/';
            // Thực hiện upload file
            $file->move($path_upload,$filename);

            $vendor->image = $path_upload.$filename; // gán giá trị ảnh mới cho thuộc tính image của đối tượng
        }

        $vendor->url = $request->input('url'); // $_POST['url'];
        // Target
        $vendor->email = $request->input('email');
        // Loại
        $vendor->phone = $request->input('phone');
        $vendor->address = $request->input('address');
        // Trạng thái
        $is_active = 0;
        if ($request->has('is_active')){ //kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }
        // trạn thái
        $vendor->is_active = $is_active;
        // Vị trí
        $position=0;
        if ($request->has('position')){
            $position = $request->input('position');
        }
        $vendor->position = $position;
        $vendor->content_title = $request->input('content_title');
        $vendor->content_description = $request->input('content_description');
        // Lưu
        $vendor->save();

        // Chuyển hướng trang về trang danh sách
        return redirect()->route('admin.vendor.index');
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
        $isDelete = Vendor::destroy($id);

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
