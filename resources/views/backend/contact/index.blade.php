@extends('backend.layouts.main')
@section('content')
    <style>
        .table-hover {
            cursor: pointer;
        }
    </style>
    <section class="content-header">
        <h1>
            Danh Sách Khách Hàng
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
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>TT</td>
                                <th>Tên khách hàng</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Sản phẩm</th>
                                <th>Nội dung</th>
                                <th>Tình trạng</th>
                                <th class="text-center">Tác Vụ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $item)
                                <tr class="item-{{$item->id}}">
                                    <td>{{$key + 1}}</td>

                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>
                                        @foreach($products as $product)
                                            {{ ( $product->id == $item->products_id ) ? $product->name : '' }}
                                        @endforeach
                                    </td>
                                    <td>{{$item->content}}</td>
                                    <td>
                                        @if($item->status == 2)
                                            {{'Đã liên hệ'}}
                                        @elseif($item->status == 3)
                                            {{'Chưa liên hệ'}}
                                        @elseif($item->status == 4)
                                            {{'Đã hoàn thành'}}
                                        @else
                                             {{''}}
                                        @endif</td>
                                    <td class="text-center">
                                        <a href="{{route('admin.contact.edit',['id'=>$item->id])}}" class="btn btn-primary">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <button onclick="deleteItem('contact',{{ $item->id }})" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </section>
@endsection
@section('script')
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
@endsection
