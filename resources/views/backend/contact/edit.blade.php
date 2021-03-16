@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Sửa thông tin khách hàng <a href="{{route('admin.contact.index')}}" class="btn btn-success"><i class="fa fa-list"></i> Danh Sách Khách Hàng</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin khách hàng</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('admin.contact.update', ['id' => $data->id ] )}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Họ Tên</label>
                                <input value="{{ $data->name }}" type="text" class="form-control" id="name" name="name" placeholder="Nhập họ & tên">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input value="{{ $data->email }}" type="text" class="form-control" id="email" name="email" placeholder="Nhập Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">SĐT</label>
                                <input type="text" class="form-control" id="url" name="phone" placeholder="phone" value="{{$data->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa chỉ</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ" value="{{$data->address}}">
                            </div>
                            <div class="col-md-6">
                                <label>Danh mục sản phẩm</label>
                                <select class="form-control w-50" name="categories_id">
                                    <option value="0">-- chọn Danh Mục --</option>
                                    @foreach($products as $product)
                                        <option
                                            {{ ($data->products_id == $product->id ? 'selected':'') }} value="{{ $product -> id }}">{{ $product -> name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea id="editor1" name="content" class="form-control" rows="10" placeholder="Enter ...">{{ $data->content }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Tình trạng</label>
                                <select class="form-control" name="status">
                                    <option value="1" {{ ($data->status == 1 ) ? 'selected': '' }}>--Chọn tình trạng--</option>
                                    <option value="2" {{ ($data->status == 2 ) ? 'selected': '' }}>Đã liên hệ</option>
                                    <option value="3" {{ ($data->status == 3 ) ? 'selected': '' }}>Chưa liên hệ</option>
                                    <option value="4" {{ ($data->status == 4 ) ? 'selected': '' }}>Đã hoàn thành</option>
                                </select>
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
