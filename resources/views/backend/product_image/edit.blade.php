@extends('backend.layouts.main')

@section('content')
    <style>.w-50 { width: 50% }</style>

    <section class="content-header">
        <h1>
            Thêm mới hình ảnh sản phẩm <a href="{{route('admin.product_image.index')}}" class="btn btn-flat btn-success pull-right "><i class="fa fa-list"></i> Danh Sách ảnh sản phẩm</a>
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
                    <form role="form" action="{{route('admin.product_image.update',['id' => $product_image->id ])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputFile">Thay đổi ảnh sản phẩm</label>
                                <input type="file" id="new_image" name="new_image"><br>
                                @if ($product_image->image)
                                    <img src="{{asset($product_image->image)}}" width="200">
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Sản phẩm</label>
                                    <select class="form-control w-50" name="products_id">
                                        <option value="0">-- chọn Danh Mục --</option>
                                        @foreach($products as $product)
                                            <option {{ ($product_image->products_id == $product->id ? 'selected':'') }} value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Vị trí</label>
                                    <input type="number" class="form-control w-50" id="position" name="position" value="{{ $product_image->position }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input {{ ($product->is_active) ? 'checked':'' }} type="checkbox" value="1" name="is_active"> <b>Trạng thái</b>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Liên kết (url) tùy chỉnh</label>
                                <input type="text" class="form-control" id="url" name="url" placeholder="">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <input type="reset" class="btn btn-default pull-right" value="Reset">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            // setup textarea sử dụng plugin CKeditor
            var _ckeditor = CKEDITOR.replace('editor1');
            _ckeditor.config.height = 200; // thiết lập chiều cao
            var _ckeditor = CKEDITOR.replace('editor2');
            _ckeditor.config.height = 100; // thiết lập chiều cao
            var _ckeditor = CKEDITOR.replace('editor3');
            _ckeditor.config.height = 100; // thiết lập chiều cao
            var _ckeditor = CKEDITOR.replace('editor4');
            _ckeditor.config.height = 100; // thiết lập chiều cao
        })
    </script>
@endsection
