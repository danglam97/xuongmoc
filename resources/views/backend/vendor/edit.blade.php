@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Thêm Đối Tác <a href="{{ route('admin.vendor.index') }}" type="button" class="btn bg-olive btn-flat margin">Danh Sách</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-9">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin Đối Tác</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.vendor.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">

                            @if($errors->has('name'))
                                <div class="form-group has-error">
                                    @else
                                        <div class="form-group">
                                            @endif
                                <label for="exampleInputEmail1">Tên đối tác</label>
                                <input type="text" class="form-control" id="title" name="name" placeholder="Nhập tên đối tác" value="{{$data->name}}">
                                            <span class="help-block"> {{$errors->first('name')}} </span>
                                        </div>

                            @if($errors ->has('new_image'))
                                <div class="form-group has-error">
                                    @else
                                        <div class="form-group">
                                            @endif
                                <label for="exampleInputFile">Ảnh</label>
                                <input type="file" id="image" name="new_image">
                                @if($data->image)
                                    <img src="{{asset($data->image)}}" alt="">
                                @endif
                                            <span class="help-block"> {{$errors->first('new_image')}} </span>
                                        </div>
                                @if($errors->has('content_title'))
                                    <div class="form-group has-error">
                                        @else
                                            <div class="form-group">
                                                @endif
                                <label for="exampleInputEmail1">Tiêu đề</label>
                                <input type="text" class="form-control" id="content_title" name="content_title" placeholder="Nhập tiêu đề" value="{{$data->content_title}}">
                                <span class="help-block"> {{$errors->first('content_title')}} </span>
                                    </div>
                                @if($errors->has('url'))
                                    <div class="form-group has-error">
                                        @else
                                            <div class="form-group">
                                                @endif
                                <label for="exampleInputEmail1">Tùy chỉnh liên kết Url</label>
                                <input type="text" class="form-control" id="url" name="url" placeholder="Url" value="{{$data->url}}">
                                                <span class="help-block"> {{$errors->first('url')}} </span>
                                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    @if($errors->has('email'))
                                        <div class="form-group has-error">
                                            @else
                                                <div class="form-group">
                                                    @endif
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{$data->email}}">
                                                    <span class="help-block"> {{$errors->first('email')}} </span>
                                                </div>
                                </div>
                                <div class="col-md-6">

                                    @if($errors->has('phone'))
                                        <div class="form-group has-error">
                                            @else
                                                <div class="form-group">
                                                    @endif
                                        <label for="exampleInputEmail1">SĐT</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{$data->phone}}">
                                                    <span class="help-block"> {{$errors->first('phone')}} </span>
                                                </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input {{ ($data->is_active == 1 ) ? 'checked': '' }} type="checkbox" value="1" name="is_active"> Trạng thái hiển thị
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vị trí</label>
                                        <input type="number" class="form-control" id="position" name="position" value="{{$data->position}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa chỉ</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ" value="{{$data->address}}">
                            </div>

                            <div class="form-group">
                                <label>Giới thiệu về đối tác </label>
                                <textarea id="editor1" name="content_description" class="form-control" rows="10" placeholder="">{{$data->content_description}}</textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
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
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>
