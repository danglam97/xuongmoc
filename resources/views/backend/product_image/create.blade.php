@extends('backend.layouts.main')

@section('content')
    <style>.w-50 {
            width: 50%
        }</style>

    <section class="content-header">
        <h1>
            Thêm mới hình ảnh sản phẩm <a href="{{route('admin.product_image.index')}}"
                                          class="btn btn-flat btn-success pull-right "><i class="fa fa-list"></i> Danh
                Sách ảnh sản phẩm</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12 col-lg-12">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin ảnh</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.product_image.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh sản phẩm</label>
                                <input type="file" class="" id="image" name="image">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Sản phẩm</label>
                                    <select class="form-control w-50" name="products_id">
                                        <option value="0">-- chọn Danh Mục --</option>
                                        @foreach($products as $products)
                                            <option value="{{ $products->id }}">{{ $products->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Vị trí</label>
                                    <input type="number" class="form-control w-50" id="position" name="position"
                                           value="0">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" name="is_active"> <b>Trạng thái</b>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Liên kết (url) tùy chỉnh</label>
                                <input value="{{old('url')}}" type="text" class="form-control" id="url" name="url" placeholder="">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Tạo</button>
                            <input type="reset" class="btn btn-default pull-right" value="Reset">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
@endsection


