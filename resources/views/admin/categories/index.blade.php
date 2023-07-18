@extends("layouts.admin")

@section("css")
@endsection

@section("js")
@endsection

@section("header")
    Kategori Yönetimi
@endsection

@section("breadcrumb")
    <li class="breadcrumb-item active"><a>Kategori Listesi</a></li>
@endsection

@section("title")
    Kategori Yönetimi
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

                        <a type="button" class="btn btn-primary add-row mt-md-0 mt-2" href="{{route('categories.create')}}">Kategori Ekle</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-design">
                            <table class="table all-package table-category " id="editableTable">
                                <thead>
                                <tr>
                                    <th>Kategori Adı</th>
                                    <th>Üst Kategori</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>

                                <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td data-field="name">{{$category->name}}</td>
                                            <td data-field="name">{{isset($category->parent_id) ? $category->parent->name : '-'}}</td>
                                            <td>
                                                <form id="form-for-edit-route-{{ $category->id }}" action="{{route('categories.edit',[$category->id])}}" method="GET">
                                                    @csrf
                                                    <a style="cursor: pointer" onclick="document.getElementById('form-for-edit-route-{{ $category->id }}').submit();">
                                                        <i class="fa fa-edit" title="Düzenle"></i>
                                                    </a>
                                                </form>
                                                <form style="cursor: pointer" id="form-for-delete-route-{{ $category->id }}" action="{{route('categories.destroy',[$category->id])}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a onclick="if(confirm('Bu kategoriyi silmek istediğinize emin misiniz?')) { document.getElementById('form-for-delete-route-{{ $category->id }}').submit(); }">
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
