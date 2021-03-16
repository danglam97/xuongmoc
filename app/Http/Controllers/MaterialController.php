<?php

namespace App\Http\Controllers;

use App\Material;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::all();

        return view('backend.material.index', [
            'data' => $materials
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materials =Material::all();

        // 2. max postion
        $max_position = Material::max('position');

        return view('backend.material.create',[
            'data' => $materials,
            'max_position' => $max_position
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
        $request->validate([
            'name' => 'required|unique:roles,name|max:255',
        ],[
            'name.required' => 'Tên chất liệu không được để trống',
            'name.unique' => 'Dữ liệu bị trùng',
            'name.max' => 'Độ dài tối đa 255 kí tự',
        ]);

        //luu vào csdl
        $materrials = new Material();
        $materrials->name = $request->input('name');
        $materrials->slug = Str::slug($request->input('name'));

        $is_active = 0;
        if ($request->has('is_active')) {//kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }
        $materrials->is_active = $is_active;

        $position = 0;
        if ($request->has('position')) {
            $position = $request->input('position');
        }
        $materrials->position = $position;

        $materrials->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.material.index');
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
        $data = Material::all();
        $materials = Material::findorFail($id);
        return view('backend.material.edit',[
            'data'=>$materials,
            'materials'=>$data
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
        $request->validate([
            'name' => 'required|unique:roles,name|max:255'.$id,
        ],[
            'name.required' => 'Tên chất liệu không được để trống',
            'name.unique' => 'Dữ liệu bị trùng',
            'name.max' => 'Độ dài tối đa 255 kí tự',
        ]);

        //luu vào csdl
        $materrials =  Material::findorFail($id);
        $materrials->name = $request->input('name');
        $materrials->slug = Str::slug($request->input('name'));

        $is_active = 0;
        if ($request->has('is_active')) {//kiem tra is_active co ton tai khong?
            $is_active = $request->input('is_active');
        }
        $materrials->is_active = $is_active;

        $position = 0;
        if ($request->has('position')) {
            $position = $request->input('position');
        }
        $materrials->position = $position;

        $materrials->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.material.index');
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
        $isDelete = Material::destroy($id); // return 1 | 0, true  false

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
