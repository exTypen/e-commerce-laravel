@extends('layouts.admin')
@section('title')
    Ürün Listesi
@endsection
@section('header')
    Ürün Listesi
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item">Digital</li>
    <li class="breadcrumb-item active">Product List</li>
@endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <form class="form-inline search-form search-box">
                        <div class="form-group">
                            <input class="form-control-plaintext" type="search" placeholder="Ara..">
                        </div>
                    </form>

                    <a href="{{route('products.create')}}" class="btn btn-primary mt-md-0 mt-2">Ürün Ekle</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive table-desi">
                        <table class="table list-digital all-package table-category "
                               id="editableTable">
                            <thead>
                            <tr>
                                <th>Resim</th>
                                <th>Ürün Adı</th>
                                <th>Stok Kodu</th>
                                <th>Fiyat</th>
                                <th>Stok Adeti</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>


                            @foreach($products as $product)
                                <tr>
                                    <td>
                                        <img src="https://cdn.akakce.com/garmin/garmin-fenix-6-pro-multisport-gps-z.jpg"
                                             data-field="image" alt="">
                                    </td>
                                    <td data-field="name">{{$product->name}}</td>
                                    <td data-field="stockCode">{{$product->stock_code}}</td>
                                    <td data-field="price">₺{{$product->price}}</td>
                                    <td data-field="stock">{{$product->stock}}</td>
                                    <td>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-edit" title="Edit"></i>
                                        </a>

                                        <a href="javascript:void(0)">
                                            <i class="fa fa-trash" title="Delete"></i>
                                        </a>
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