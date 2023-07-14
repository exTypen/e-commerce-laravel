@extends("layouts.admin")
@section("title")
    Ürün Ekle
@endsection
@section("header")
    Ürün Ekle
@endsection
@section("breadcrumb")
    <li class="breadcrumb-item">Ürünler</li>
    <li class="breadcrumb-item active">Ürün Ekle</li>
@endsection

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row product-adding">
                            <div class="col-xl-5">
                                <div class="add-product">
                                    <div class="row">
                                        <div class="col-xl-9 xl-50 col-sm-6 col-9">
                                            <img src="{{asset("assets/admin/images/pro3/1.jpg")}}" alt=""
                                                 class="img-fluid image_zoom_1 blur-up lazyloaded">
                                        </div>
                                        <div class="col-xl-3 xl-50 col-sm-6 col-3">
                                            <ul class="file-upload-product">
                                                <li>
                                                    <div class="box-input-file"><input class="upload"
                                                                                       type="file"><i class="fa fa-plus"></i></div>
                                                </li>
                                                <li>
                                                    <div class="box-input-file"><input class="upload"
                                                                                       type="file"><i class="fa fa-plus"></i></div>
                                                </li>
                                                <li>
                                                    <div class="box-input-file"><input class="upload"
                                                                                       type="file"><i class="fa fa-plus"></i></div>
                                                </li>
                                                <li>
                                                    <div class="box-input-file"><input class="upload"
                                                                                       type="file"><i class="fa fa-plus"></i></div>
                                                </li>
                                                <li>
                                                    <div class="box-input-file"><input class="upload"
                                                                                       type="file"><i class="fa fa-plus"></i></div>
                                                </li>
                                                <li>
                                                    <div class="box-input-file"><input class="upload"
                                                                                       type="file"><i class="fa fa-plus"></i></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <form class="needs-validation add-product-form" action="{{route('products.store')}}" method="POST">
                                    @csrf
                                    <div class="form">
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom01"
                                                   class="col-xl-3 col-sm-4 mb-0">Ürün Adı:</label>
                                            <div class="col-xl-8 col-sm-7">
                                                <input class="form-control" id="validationCustom01" type="text" name="name" @if(isset($product)) value="{{$product->name}}" @endif>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02"
                                                   class="col-xl-3 col-sm-4 mb-0">Stok Kodu:</label>
                                            <div class="col-xl-8 col-sm-7">
                                                <input class="form-control" id="validationCustom02" type="text" name="stock_code" @if(isset($product)) value="{{$product->stock_code}}" @endif>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleFormControlSelect1"
                                                   class="col-xl-3 col-sm-4 mb-0">Kategori:</label>
                                            <div class="col-xl-8 col-sm-7">
                                                <select class="form-control digits" id="exampleFormControlSelect1" name="category_id">
                                                    <option></option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" >{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleFormControlSelect1"
                                                   class="col-xl-3 col-sm-4 mb-0">Marka:</label>
                                            <div class="col-xl-8 col-sm-7">
                                                <select class="form-control digits" id="exampleFormControlSelect2" name="brand_id">
                            r
                                                    @foreach($brands as $brand)
                                                        <option value="{{$brand->id}}" selected>{{$brand->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02"
                                                   class="col-xl-3 col-sm-4 mb-0">Fiyat:</label>
                                            <div class="col-xl-8 col-sm-7">
                                                <input class="form-control" id="validationCustom02" type="text" name="price" @if(isset($product)) value="{{$product->price}}" @endif>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-sm-4 mb-0">Stok:</label>
                                            <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7">
                                                <div class="input-group">
                                                    <input class="touchspin" type="text" value="1" name="stock" @if(isset($product)) value="{{$product->stock}}" @endif>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02"
                                                   class="col-xl-3 col-sm-4 mb-0">Kısa Açıklama:</label>
                                            <div class="col-xl-8 col-sm-7">
                                                <input class="form-control" id="validationCustom02" type="text" name="short_description" @if(isset($product)) value="{{$product->short_description}}" @endif>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-sm-4">Açıklama:</label>
                                            <div class="col-xl-8 col-sm-7 description-sm">
                                                <textarea id="editor1" name="description" cols="10" rows="4">@if(isset($product)) {{$product->description}} @endif</textarea>
                                            </div>
                                            <div class="offset-xl-3 offset-sm-4 mt-4">
                                                <button type="submit" class="btn btn-primary">Kaydet</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

    <!-- ckeditor js-->
    <script src="{{asset("assets/admin/js/editor/ckeditor/ckeditor.js")}}"></script>
    <script src="{{asset("assets/admin/js/editor/ckeditor/ckeditor.custom.js")}}"></script>

    <!-- Zoom js-->
    <script src="{{asset("assets/admin/js/jquery.elevatezoom.js")}}"></script>
    <script src="{{asset("assets/admin/js/zoom-scripts.js")}}"></script>

    <!-- touchspin js-->
    <script src="{{asset("assets/admin/js/touchspin/vendors.min.js")}}"></script>
    <script src="{{asset("assets/admin/js/touchspin/touchspin.js")}}"></script>
    <script src="{{asset("assets/admin/js/touchspin/input-groups.min.js")}}"></script>
@endsection
