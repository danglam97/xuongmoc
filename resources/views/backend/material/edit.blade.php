@extends('backend.layouts.main')

@section('content')

    <section class="content-header">
        <h1>
            Thêm mới chất liệu <a href="{{route('admin.material.index')}}" type="button"
                                  class="btn bg-olive btn-flat margin">Danh Sách</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-9">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin chất liệu</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    {{--                    @if ($errors->any())--}}
                    {{--                        <div class="alert alert-danger alert-dismissible">--}}
                    {{--                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>--}}
                    {{--                            <h4><i class="icon fa fa-ban"></i> Lỗi!</h4>--}}
                    {{--                            @foreach ($errors->all() as $error)--}}
                    {{--                                <p>{{ $error }}</p>--}}
                    {{--                            @endforeach--}}
                    {{--                        </div>--}}

                    {{--                    @endif--}}

                    <form role="form" action="{{ route('admin.material.update', ['id' => $data->id ]) }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            @if($errors->has('name'))
                                <div class="form-group has-error">
                                    @else
                                        <div class="form-group">
                                            @endif
                                            <label for="exampleInputEmail1">Tên chất liệu</label>
                                            <input value="{{ $data->name }}" type="text" class="form-control" id="title" name="name" placeholder="Nhập tên danh mục">
                                            <span class="help-block"> {{$errors->first('name')}} </span>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="exampleInputEmail1">Vị trí</label>
                                                <input value="{{ $data->position }}" type="number" class="form-control" id="position" name="position"
                                                       value="0">
                                            </div>

                                            <div class="col-md-6">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="1" {{ ($data->is_active == 1 ) ? 'checked': '' }} name="is_active"> Trạng thái
                                                        hiển thị
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
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

