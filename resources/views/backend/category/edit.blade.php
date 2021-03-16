@extends('backend.layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Sửa Danh Mục <a href="{{route('admin.category.index')}}" class="btn bg-olive btn-flat margin"> Danh Sách</a>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin danh mục</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">

                            @if($errors->has('name'))
                                <div class="form-group has-error">
                                @else
                            <div class="form-group">
                            @endif
                                <label for="exampleInputEmail1">Tên danh mục</label>
                                <input value="{{$data->name}}" type="text" class="form-control" id="name"
                                       name="name" placeholder="Nhập tên danh mục">
                                <span class="help-block"> {{$errors->first('name')}} </span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Change File</label>
                                <input type="file" id="new_image" name="new_image"><br>
                                @if ($data->image)
                                    <img src="{{asset($data->image)}}" width="200">
                                @endif
                            </div>
                            <div class="checkbox">
                                <label>

                                    <input {{ ($data->is_active == 1) ? 'checked':'' }} type="checkbox" value="1"
                                           name="is_active"> Trạng thái
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vị trí</label>
                                <input value="{{$data->position}}" type="text" class="form-control" id="position"
                                       name="position" placeholder="Nhập tên vị trí">
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea id="editor1" name="description" class="form-control" rows="10" placeholder="Enter ...">{{ $data->description }}</textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                        </div>
                    </form>
                </div>
                <!-- /.box -->


            </div>
            <!--/.col (right) -->
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
        })
    </script>
@endsection
