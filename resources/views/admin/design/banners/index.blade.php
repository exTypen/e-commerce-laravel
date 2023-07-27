@extends("layouts.admin")

@section("css")
@endsection

@section("js")
@endsection

@section("breadcrumb")
    <li class="breadcrumb-item active">Bannerlar</li>
@endsection

@section("title")
    Bannerlar
@endsection

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <form class="form-inline search-form search-box">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search..">
                            </div>
                        </form>

                        <a type="button" class="btn btn-primary add-row mt-md-0 mt-2" href="{{route('banners.create')}}">Banner Ekle</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-design">
                            <table class="table all-package table-category " id="editableTable">
                                <thead>
                                <tr>
                                    <th>Banner</th>
                                    <th>Başlık</th>
                                    <th>Banner Yolu</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($banners as $banner)
                                    <tr>
                                        <td><img style="width: 200px" src="{{asset('images/'.$banner->image_path)}}" alt=""></td>
                                        <td>{{$banner->title}}</td>
                                        <td data-field="name">{{$banner->slug}}</td>
                                        <td>
                                            <form id="form-for-edit-route-{{ $banner->id }}" action="{{route('banners.edit',[$banner->id])}}" method="GET">
                                                @csrf
                                                <a style="cursor: pointer" onclick="document.getElementById('form-for-edit-route-{{ $banner->id }}').submit();">
                                                    <i class="fa fa-edit" title="Düzenle"></i>
                                                </a>
                                            </form>
                                            <form style="cursor: pointer" id="form-for-delete-route-{{ $banner->id }}" action="{{route('banners.destroy',[$banner->id])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a onclick="if(confirm('Bu bannerı silmek istediğinize emin misiniz?')) { document.getElementById('form-for-delete-route-{{ $banner->id }}').submit(); }">
                                                    <i class="fa fa-trash" title="Sil"></i>
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
