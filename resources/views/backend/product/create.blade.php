@extends('backend.layouts.main')

@section('content')
    <style>.w-50 {
            width: 50%
        }</style>

    <section class="content-header">
        <h1>
            Thêm mới sản phẩm <a href="{{route('admin.product.index')}}" class="btn btn-flat btn-success pull-right "><i
                    class="fa fa-list"></i> Danh Sách SP</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12 col-lg-12">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin sản phẩm</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    <form role="form" action="{{route('admin.product.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            @if($errors->has('name'))
                                <div class="form-group has-error">
                            @else
                                <div class="form-group">
                            @endif
                                <label for="exampleInputEmail1">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                                <span class="help-block"> {{$errors->first('name')}} </span>
                            </div>

                            @if($errors ->has('image'))
                                <div class="form-group has-error">
                                    @else
                                        <div class="form-group">
                                            @endif
                                            <label for="exampleInputFile">Ảnh sản phẩm</label>
                                            <input type="file" class="" id="image" name="image">
                                            <span class="help-block"> {{$errors->first('image')}} </span>
                                        </div>
                                        <div class="row">
                                                   <div class="form-group">
                                                       @if($errors ->has('materials_id'))
                                                           <div class="col-md-6 has-error">
                                                               @else
                                                                   <div class="col-md-6">
                                                                       @endif
                                                                       <label>Chất liệu</label>
                                                                       <select class="form-control w-50" name="materials_id">
                                                                           <option value="0">-- chọn chất liệu --</option>
                                                                           @foreach($materials as $material)
                                                                               <option
                                                                                   value="{{ $material->id }}">{{ $material->name }}</option>
                                                                           @endforeach
                                                                       </select>
                                                                       <span class="help-block"> {{$errors->first('materials_id')}} </span>
                                                                   </div>
                                                           </div>
                                                           @if($errors ->has('categories_id'))
                                                               <div class="col-md-6 has-error">
                                                                   @else
                                                                       <div class="col-md-6">
                                                                           @endif
                                                                           <label>Danh mục sản phẩm</label>
                                                                           <select class="form-control w-50"
                                                                                   name="categories_id">
                                                                               <option value="0">-- chọn Danh Mục --
                                                                               </option>
                                                                               @foreach($categories as $category)
                                                                                   <option
                                                                                       value="{{ $category->id }}">{{ $category->name }}</option>
                                                                               @endforeach
                                                                           </select>
                                                                        <span class="help-block"> {{$errors->first('categories_id')}} </span>
                                                                       </div>
                                                               </div>

                                                            <div class="row">
                                                                {{--                            @if($errors ->has('sku'))--}}
                                                                {{--                                <div class="col-md-6 has-error">--}}
                                                                {{--                            @else--}}
                                                                <div class="col-md-6">
                                                                    {{--                            @endif--}}
                                                                    <label for="exampleInputEmail1">Mã hàng
                                                                        (SKU)</label>
                                                                    <input value="" type="text"
                                                                           class="form-control w-50" id="sku" name="sku"
                                                                           placeholder="Mã hàng" value="{{old('sku')}}">
                                                                    {{--                                    <span class="help-block"> {{$errors->first('sku')}} </span>--}}

                                                                </div>
                                                                <div class="col-md-6">

                                                                    <label for="exampleInputFile">Số lượng</label>
                                                                    <input type="number" class="form-control w-50"
                                                                           id="stock" name="stock" value="1"
                                                                           min="1">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputFile">Giá gốc
                                                                            (vnđ)</label>
                                                                        <input type="number" class="form-control w-50"
                                                                               id="price" name="price"
                                                                               value="0">
                                                                    </div>
                                                                </div>
                                                                <!-- /.col-lg-6 -->
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputFile">Giá khuyến mại
                                                                            (vnđ)</label>
                                                                        <input type="number" class="form-control w-50"
                                                                               id="sale" name="sale" value="0">
                                                                    </div>
                                                                </div>
                                                                <!-- /.col-lg-6 -->
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="exampleInputEmail1">Vị trí</label>
                                                                    <input type="number" class="form-control w-50"
                                                                           id="position" name="position"
                                                                           value="0">
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input type="checkbox" value="1"
                                                                                   name="is_active"> <b>Trạng thái</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input type="checkbox" value="1"
                                                                                   name="is_hot"> <b>Sản phẩm Hot</b>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Liên kết (url) tùy
                                                                    chỉnh</label>
                                                                <input type="text" class="form-control" id="url"
                                                                       name="url" placeholder="Url" value="{{old('url')}}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Mô tả</label>
                                                                <textarea id="editor2" name="description"
                                                                          class="form-control" rows="10">{{old('description')}}</textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Đặc trưng</label>
                                                                <textarea id="editor1" name="featured"
                                                                          class="form-control" rows="10">{{old('featured')}}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Thông số</label>
                                                                <textarea id="editor4" name="specifications"
                                                                          class="form-control" rows="10">{{old('specifications')}}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Bảo quản</label>
                                                                <textarea id="editor3" name="preservation"
                                                                          class="form-control" rows="10">{{old('preservation')}}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Bảo hành</label>
                                                                <textarea name="guarantee" class="form-control"
                                                                          rows="10">{{old('guarantee')}}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Cam kết</label>
                                                                <textarea name="commitment" class="form-control"
                                                                          rows="10">{{old('commitment')}}</textarea>
                                                            </div>
                                                   </div>
                                        </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Tạo</button>
                                            <input type="reset" class="btn btn-default pull-right" value="Reset">
                                        </div>
                                </div>
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
