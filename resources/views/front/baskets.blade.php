@extends("layouts.front")

@section("css")
@endsection

@section("js")
@endsection

@section("title")
    Sepet
@endsection

@section("content")
    <!--section start-->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 table-responsive-xs">
                    <table class="table cart-table">
                        <thead>
                        <tr class="table-head">
                            <th scope="col">Resim</th>
                            <th scope="col">Ürün Adı</th>
                            <th scope="col">Birim Fiyatı</th>
                            <th scope="col">Adet</th>
                            <th scope="col">İşlem</th>
                            <th scope="col">Fiyat</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($baskets as $basket)
                            <tr>
                                <td>
                                    <a href="#"><img src="{{count($basket->product->images) ? asset('images/'.$basket->product->images[0]->image_path) : asset('assets/front/images/default.jpg')}}" alt=""></a>
                                </td>
                                <td>
                                    {{$basket->product->name}}
                                </td>
                                <td>
                                    <h2>₺{{isset($basket->product->discount) ? $basket->product->price - $basket->product->discount : $basket->product->price}}</h2>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" class="form-control input-number"
                                                   value="{{$basket->quantity}}">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <form style="cursor: pointer;" id="form-for-delete-route-{{ $basket->product->id }}" action="{{route('baskets.destroy', [$basket->id ?? 0])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" value="{{$basket->product_id}}" name="product_id">
                                        <input type="hidden" value="{{$basket->quantity}}" name="quantity">
                                        <a onclick="{document.getElementById('form-for-delete-route-{{ $basket->product->id }}').submit();}" class="icon">
                                            <i class="fa-solid fa-xmark"></i>
                                        </a>
                                    </form>
                                </td>
                                <td>
                                    <h2 class="td-color">₺{{isset($basket->product->discount) ? ($basket->product->price - $basket->product->discount) * $basket->quantity : $basket->product->price * $basket->quantity}}</h2>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="table-responsive-md">
                        <table class="table cart-table ">
                            <tfoot>
                            <tr>
                                <td>Toplam :</td>
                                <td>
                                    <h2>₺{{$total_price}}</h2>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row cart-buttons">
                <div class="col-6"><a href="#" class="btn btn-solid">Alışverişe devam et</a></div>
                <div class="col-6"><a href="{{route('orders.create')}}" class="btn btn-solid">Siparişi Tamamla</a></div>
            </div>
        </div>
    </section>
    <!--section end-->
@endsection
