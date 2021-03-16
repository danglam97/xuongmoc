<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProductImage::paginate(50);

        return view('backend.product_image.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();

        return view('backend.product_image.create',[
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_image = new ProductImage();

        // Upload file
        if ($request->hasFile('image')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('image');
            // đặt tên cho file image
            $filename = time() . '_' . $file->getClientOriginalName(); // $file->getClientOriginalName() == tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/product_image/';
            // Thực hiện upload file
            $file->move($path_upload, $filename); // upload lên thư mục public/uploads/product

            $product_image->image = $path_upload . $filename;
        }
            $product_image->url = $request->input('url');
            $product_image->position = $request->input('position');
            $product_image->products_id = $request->input('products_id');

            $is_active = 0;// mặc định gán không hiển thị
            if ($request->has('is_active')) { // kiem tra is_active co ton tai khong ?
                $is_active = $request->input('is_active');
            }

            $product_image->is_active = $is_active;
            $product_image->save();

        return redirect()->route('admin.product_image.index');

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
        $product_image = ProductImage::find($id);
        $products = Product::all();


        return view('backend.product_image.edit', [
            'product_image' => $product_image,
            'products' => $products,

            //'vendors' => $vendors
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
        $product_image = ProductImage::findorFail($id);

        // Upload file
        if ($request->hasFile('new_image')) { // dòng này Kiểm tra xem có image có được chọn
            // get file
            $file = $request->file('new_image');
            // đặt tên cho file image
            $filename = time() . '_' . $file->getClientOriginalName(); // $file->getClientOriginalName() == tên ban đầu của image
            // Định nghĩa đường dẫn sẽ upload lên
            $path_upload = 'uploads/product_image/';
            // Thực hiện upload file
            $file->move($path_upload, $filename); // upload lên thư mục public/uploads/product

            $product_image->image = $path_upload . $filename;
        }
        $product_image->url = $request->input('url');
        $product_image->position = $request->input('position');
        $product_image->products_id = $request->input('products_id');

        $is_active = 0;// mặc định gán không hiển thị
        if ($request->has('is_active')) { // kiem tra is_active co ton tai khong ?
            $is_active = $request->input('is_active');
        }

        $product_image->is_active = $is_active;

        $product_image->save();

        return redirect()->route('admin.product_image.index');
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
        $isDelete = ProductImage::destroy($id); // return 1 | 0, true  false

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
