@extends("layouts.admin")
@section("title")
    {{isset($category) ? 'Kategori Düzenleme' : 'Kategori Ekleme'}}
@endsection
@section("header")
    {{isset($category) ? 'Kategori Düzenleme' : 'Kategori Ekleme'}}
@endsection
@section("breadcrumb")
    <li class="breadcrumb-item">Kategoriler</li>
    <li class="breadcrumb-item active">{{isset($category) ? 'Kategori Düzenleme' : 'Kategori Ekleme'}}</li>
@endsection

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row product-adding">
                            <div class="col-xl-12">
                                <form class="needs-validation add-product-form" action="{{isset($category) ? route('categories.update' , [$category->id]) : route('categories.store')}}" method="POST">
                                    @if(isset($category))
                                        @method('PUT')
                                    @endif

                                    @csrf

                                    <div class="form">
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom01"
                                                   class="col-xl-3 col-sm-4 mb-0">Kategori Adı:</label>
                                            <div class="col-xl-8 col-sm-7">
                                                <input class="form-control" id="validationCustom01" type="text" name="name" @if(isset($category)) value="{{$category->name}}" @endif>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleFormControlSelect1"
                                                   class="col-xl-3 col-sm-4 mb-0">Üst Kategori:</label>
                                            <div class="col-xl-8 col-sm-7">
                                                <select class="form-control digits" id="exampleFormControlSelect1" name="parent_id">
                                                    <option></option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" >{{$category->name}}</option>
                                                    @endforeach
                                                </select>
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
