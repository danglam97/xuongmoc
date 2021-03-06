@extends('backend.layouts.main')

@section('content')

    <section class="content-header">
        <h1>
            Danh sách sản phẩm <a href="{{route('admin.product.create')}}" type="button"
                                  class="btn bg-olive btn-flat margin">Thêm sản phẩm</a>
        </h1>
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
                                <th>TT</th>
                                <th>Tên SP</th>
                                <th>Danh Mục</th>
                                <th>Hình ảnh</th>
                                <th>Chất liệu</th>
                                <th>Vị trí</th>
                                <th>Sản phẩm Hot</th>
                                <th>Trạng thái</th>
                                <th class="text-center">Tác vụ</th>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- Lặp một mảng dữ liệu pass sang view để hiển thị -->
                            @foreach($data as $key => $item)
                                <tr class="item-{{ $item->id }}"> <!-- Thêm Class Cho Dòng -->
                                    <td>{{ $key + 1}}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        {{ @$item->categories->name }}
                                    </td>
                                    <td>
                                    @if ($item->image) <!-- Kiểm tra hình ảnh tồn tại -->
                                        <img src="{{asset($item->image)}}" width="50" height="50">
                                        @endif
                                    </td>
                                    <td>
                                        {{ @$item->materials->name }}
                                    </td>
                                    <td>{{$item->position}}</td>
                                    <td>{{ ($item->is_hot == 1) ? 'Có' : 'Không' }}</td>
                                    <td>{{ ($item->is_active == 1) ? 'Hiển thị' : 'Ẩn' }}</td>
                                    <td class="text-center">
                                        <a href="{{route('admin.product.edit',['id'=>$item->id])}}"
                                           class="btn btn-info"> <i class="fa fa-pencil-square-o"></i></a>
                                        <button onclick="deleteItem('product',{{ $item->id }})" class="btn btn-danger">
                                            <i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>

    </section>
@endsection
@section('script')
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
@endsection
