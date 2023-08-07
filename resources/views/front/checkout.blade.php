@extends("layouts.front")

@section("css")
@endsection

@section("js")
@endsection

@section("title")
    Sipariş
@endsection

@section("content")
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Check-out</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Check-out</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- section start -->
    <section class="dashboard-section section-b-space user-dashboard-section">
        <div class="container">
            <div class="checkout-page">
                <div class="checkout-form">
                    <form action="{{route('orders.store')}}" method="POST">
                        @csrf
                        <input type="hidden" name="address_id" value="0">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-title">
                                    <h3>Adres Seçin</h3>
                                </div>
                                <div class="tab-pane">
                                    <div class="row">
                                        @foreach(auth()->user()->addresses as $address)
                                        <div style="margin-bottom: 20px;" class="col-12">
                                            <div style="cursor: pointer;" class="card {{ $address->selected ? 'selected' : '' }}" data-address-id="{{ $address->id }}" onclick="selectAddress({{ $address->id }})">
                                                <div class="card-body">
                                                    <div class="address-book-section">
                                                        <div class="row g-4">
                                                            <div class="select-box active col-xl-12 col-md-12">
                                                                <div class="address-box">
                                                                    <div class="top">
                                                                        <h6>{{$address->name}}<span>{{$address->title}}</span></h6>
                                                                    </div>
                                                                    <div class="middle">
                                                                        <div class="address">
                                                                            <p>{{$address->details}}</p>
                                                                            <p>{{$address->district->name}}/{{$address->city->name}}</p>
                                                                            <p>{{$address->postal_code}}</p>
                                                                        </div>
                                                                        <div class="number">
                                                                            <p>telefon numarası: <span>{{$address->phone_number}}</span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-details">
                                    <div class="order-box">
                                        <div class="title-box">
                                            <div>Ürün <span>Fiyat</span></div>
                                        </div>
                                        <ul class="qty">
                                            @foreach($baskets as $basket)
                                                <li>{{$basket->product->name}} × {{$basket->quantity}} <span>₺{{number_format($basket->product->price * $basket->quantity, 2, ',', '.')}}</span></li>
                                            @endforeach
                                        </ul>
                                        <ul class="sub-total">
                                            <li>Ara Toplam <span class="count">₺{{number_format($subtotal, 2, ',', '.')}}</span></li>
                                            <li>Kargo
                                                <div class="shipping">
                                                    <div class="shopping-option">
                                                        <input type="checkbox" name="free-shipping" id="free-shipping">
                                                        <label for="free-shipping">Free Shipping</label>
                                                    </div>
                                                    <div class="shopping-option">
                                                        <input type="checkbox" name="local-pickup" id="local-pickup">
                                                        <label for="local-pickup">Local Pickup</label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="total">
                                            <li>Total <span class="count">$620.00</span></li>
                                        </ul>
                                    </div>
                                    <div class="payment-box">
                                        <div class="upper-box">
                                            <div class="payment-options">
                                                <ul>
                                                    <li>
                                                        <div class="radio-option">
                                                            <input type="radio"  id="payment-1"
                                                                   checked="checked">
                                                            <label for="payment-1">Check Payments<span
                                                                    class="small-text">Please send a check to Store
                                                                    Name, Store Street, Store Town, Store State /
                                                                    County, Store Postcode.</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="radio-option">
                                                            <input type="radio"  id="payment-2">
                                                            <label for="payment-2">Cash On Delivery<span
                                                                    class="small-text">Please send a check to Store
                                                                    Name, Store Street, Store Town, Store State /
                                                                    County, Store Postcode.</span></label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="radio-option paypal">
                                                            <input type="radio"  id="payment-3">
                                                            <label for="payment-3">PayPal<span class="image"><img
                                                                        src="../assets/images/paypal.png"
                                                                        alt=""></span></label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="text-end"><button type="submit" class="btn-solid btn">Sipariş Ver</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <script>
        function selectAddress(addressId) {


            // Tüm kartlardan seçili sınıfını kaldır
            document.querySelectorAll('.card').forEach(function(card) {
                card.classList.remove('selected');
            });

            // Tüm address-box'lardan gri arka plan rengini kaldır
            document.querySelectorAll('.address-box').forEach(function(box) {
                box.style.backgroundColor = '';
            });

            // Tıklanan kartın seçili sınıfını ekle
            let selectedCard = document.querySelector('.card[data-address-id="' + addressId + '"]');

            if (selectedCard) {
                selectedCard.classList.add('selected');
                let selectedBox = selectedCard.querySelector('.address-box');
                if (selectedBox) {
                    selectedBox.style.transition = 'none';
                    selectedBox.style.backgroundColor = '#f9f9f9'; // Gri arka plan rengi
                }
            }

            document.querySelector('input[name="address_id"]').value = addressId;

        }
    </script>

    <style>
        .card.selected {
            background-color: #f9f9f9; /* Gri arka plan rengi */
        }

    </style>
@endsection
