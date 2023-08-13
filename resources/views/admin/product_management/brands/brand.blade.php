@extends("layouts.admin")
@section("title")
    {{isset($brand) ? 'Marka Düzenleme' : 'Marka Ekleme'}}
@endsection
@section("header")
    {{isset($brand) ? 'Marka Düzenleme' : 'Marka Ekleme'}}
@endsection
@section("breadcrumb")
    <li class="breadcrumb-item">Markalar</li>
    <li class="breadcrumb-item active">{{isset($brand) ? 'Marka Düzenleme' : 'Marka Ekleme'}}</li>
@endsection

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row product-adding">
                            <div class="col-xl-12">
                                <form class="needs-validation add-product-form" action="{{isset($brand) ? route('brands.update' , [$brand->id]) : route('brands.store')}}" method="POST">
                                    @if(isset($brand))
                                        @method('PUT')
                                    @endif

                                    @csrf

                                    <div class="form">
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom01"
                                                   class="col-xl-3 col-sm-4 mb-0">Marka Adı:</label>
                                            <div class="col-xl-8 col-sm-7">
                                                <input class="form-control" id="validationCustom01" type="text" name="name" @if(isset($brand)) value="{{$brand->name}}" @endif>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-xl-3 offset-sm-4 mt-4">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
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
