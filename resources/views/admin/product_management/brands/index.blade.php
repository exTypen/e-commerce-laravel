@extends("layouts.admin")

@section("css")
@endsection

@section("js")
@endsection

@section("header")
    Marka Yönetimi
@endsection

@section("title")
    Marka Yönetimi
@endsection

@section("breadcrumb")
    <li class="breadcrumb-item active"><a>Marka Listesi</a></li>
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

                        <a type="button" class="btn btn-primary add-row mt-md-0 mt-2" href="{{route('brands.create')}}">Marka Ekle</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-design">
                            <table class="table all-package table-category " id="editableTable">
                                <thead>
                                <tr>
                                    <th>Marka Adı</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($brands as $brand)
                                    <tr>
                                        <td data-field="name">{{$brand->name}}</td>
                                        <td>
                                            <form id="form-for-edit-route-{{ $brand->id }}" action="{{route('brands.edit',[$brand->id])}}" method="GET">
                                                @csrf
                                                <a style="cursor: pointer" onclick="document.getElementById('form-for-edit-route-{{ $brand->id }}').submit();">
                                                    <i class="fa fa-edit" title="Düzenle"></i>
                                                </a>
                                            </form>
                                            <form style="cursor: pointer" id="form-for-delete-route-{{ $brand->id }}" action="{{route('brands.destroy',[$brand->id])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a onclick="if(confirm('Bu markayı silmek istediğinize emin misiniz?')) { document.getElementById('form-for-delete-route-{{ $brand->id }}').submit(); }">
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
