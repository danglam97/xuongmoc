@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Danh Sách Đối Tác <a href="{{route('admin.vendor.create')}}" type="button" class="btn bg-olive btn-flat margin">Thêm mới</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>SĐT</th>
                                <th>Ảnh</th>
                                <th>Tiêu đề</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Vị trí</th>
                                <th>Trạng thái</th>
                                <th>Tác Vụ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key =>$item)
                                <tr class="item-{{$item->id}}">
                                    <td>{{$key +1}}</td>
                                    <td>{{$item->name}}
                                    </td>
                                    <td></td>
                                    <td>
                                    @if ($item->image) <!-- Kiểm tra hình ảnh tồn tại -->
                                        <img src="{{ asset($item->image)}} " width="50" height="50">
                                        @endif
                                    </td>
                                    <td>{{ $item->content_title}}</td>
                                    <td></td>

                                    <td> {{$item->address}}</td>
                                    <td>{{ $item->position }}</td>
                                    <td>{{ ($item->is_active == 1) ? 'Hiển thị' : 'Ẩn' }}</td>
                                    <td class="text-center">
                                        <a href="{{route('admin.vendor.edit',['id'=>$item->id])}}" class="btn btn-info"> <i class="fa fa-pencil-square-o"></i></a>
                                        <button onclick ="deleteItem('vendor',{{ $item->id }})" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>

                            @endforeach


                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endsection

@section('script')
    <script>
        $(function () {
            $('#example1').DataTable();
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
@endsection
