@extends("layouts.admin")

@section("css")
@endsection

@section("js")
@endsection

@section("title")
    {{isset($banner) ? 'Banner Düzenleme' : 'Banner Ekleme'}}
@endsection

@section("header")
    {{isset($banner) ? 'Banner Düzenleme' : 'Banner Ekleme'}}
@endsection

@section("breadcrumb")
    <li class="breadcrumb-item">Bannerlar</li>
    <li class="breadcrumb-item active">{{isset($banner) ? 'Banner Düzenleme' : 'Banner Ekleme'}}</li>
@endsection

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row product-adding">
                            <div class="col-xl-12">
                                <form class="needs-validation add-product-form" action="{{isset($banner) ? route('banners.update' , [$banner->id]) : route('banners.store')}}" method="POST" enctype="multipart/form-data">
                                    @if(isset($banner))
                                        @method('PUT')
                                    @endif
                                    @csrf
                                    <div class="form">
                                        @if(isset($banner))
                                            <img style="width: 100%; padding-right: 100px; padding-left: 100px; margin-bottom: 20px" src="{{asset('images/'.$banner->image_path)}}" alt="">
                                        @endif
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Banner:</label>
                                            <div class="col-xl-8 col-sm-7">
                                                <input class="form-control" id="validationCustom01" type="file" name="image" @if(isset($banner)) value="{{asset('images/'.$banner->image_path)}}" @endif>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="validationCustom01"
                                                   class="col-xl-3 col-sm-4 mb-0">Başlık:</label>
                                            <div class="col-xl-8 col-sm-7">
                                                <input class="form-control" id="validationCustom01" type="text" name="title" @if(isset($banner)) value="{{$banner->title}}" @endif>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="validationCustom01"
                                                   class="col-xl-3 col-sm-4 mb-0">Banner Yolu:</label>
                                            <div class="col-xl-8 col-sm-7">
                                                <input class="form-control" id="validationCustom01" type="text" name="slug" @if(isset($banner)) value="{{$banner->slug}}" @endif>
                                            </div>
                                        </div>
                                        <div class="form-group row">
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
