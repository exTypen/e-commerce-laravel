@extends("layouts.front")

@section("css")
@endsection

@section("js")
    <script>
        var minusButton = document.querySelector('.quantity-left-minus');
        var plusButton = document.querySelector('.quantity-right-plus');

        // Input alanını seçme
        var quantityInput = document.querySelector('.input-number');

        // Arttırma düğmesine tıklama olayını ekleme
        minusButton.addEventListener('click', function() {
            var currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        });

        // Azaltma düğmesine tıklama olayını ekleme
        plusButton.addEventListener('click', function() {
            var currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
        });
    </script>
@endsection

@section("title")
{{$product->name}}
@endsection

@section("content")
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-slick">
                            @if(count($product->images))
                                @foreach($product->images as $image)
                                    <div><img src="{{asset("images/".$image->image_path)}}" alt=""
                                              class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                                @endforeach
                            @else
                                <div><img src="{{asset("assets/front/images/default.jpg")}}" alt=""
                                          class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-nav">
                                    <div><img src="{{asset("assets/front/images/default.jpg")}}" alt=""
                                              class="img-fluid blur-up lazyload"></div>
                                    <div><img src="{{asset("assets/front/images/default.jpg")}}" alt=""
                                              class="img-fluid blur-up lazyload"></div>
                                    <div><img src="{{asset("assets/front/images/default.jpg")}}" alt=""
                                              class="img-fluid blur-up lazyload"></div>
                                    <div><img src="{{asset("assets/front/images/default.jpg")}}" alt=""
                                              class="img-fluid blur-up lazyload"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <form action="{{route('baskets.store')}}" method="POST">
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            @csrf
                            <div class="product-right">
                                <div style="margin-bottom: 10px"><span style="color: #2874f0; font-weight: bold">Marka: </span>{{$product->brand->name}}</div>
                                <h2>{{$product->name}}</h2>
                                <div style="margin-bottom: 10px; margin-top: -10px"><span style="color: #2874f0; font-weight: bold">Stok Kodu: </span>{{$product->stock_code}}</div>
                                <h3 class="price-detail">₺{{isset($product->discount) ? $product->price - $product->discount : $product->price}}{!! nl2br(isset($product->discount) ? '<del>₺'.$product->price.'</del><span>'.round($product->discount/$product->price*100).'% indirim</span>' : '') !!}</h3>

                                <div id="selectSize" class="addeffect-section product-description border-product">
                                    <h6 class="product-title">Adet</h6>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <span style="cursor:pointer;" class="input-group-prepend">
                                                <button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="fa-solid fa-angle-left"></i></button>
                                            </span>
                                            <input type="text" name="quantity" class="form-control input-number" value=1>
                                            <span style="cursor:pointer;" class="input-group-prepend">
                                                <button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="fa-solid fa-angle-right"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>


                                <div class="product-buttons"><button type="submit" id="cartEffect" class="btn btn-solid hover-solid btn-animation"><i class="fa fa-shopping-cart me-1" aria-hidden="true"></i> sepete ekle</button> <a href="#" class="btn btn-solid"><i
                                            class="fa fa-bookmark fz-16 me-2" aria-hidden="true"></i>istek listesine ekle</a></div>
                                <div class="product-count">
                                    <ul>
                                        <li>
                                            <span class="lang">5000TL üzeri kargo ücretsiz!</span>
                                        </li>
                                    </ul>
                                </div>
                                @if($product->short_description != '')
                                    <div class="border-product">
                                        {{$product->short_description}}
                                    </div>
                                @endif
                                <div class="border-product">
                                    <h6 class="product-title">Paylaş</h6>
                                    <div class="product-icon">
                                        <ul class="product-social">
                                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- product-tab starts -->
    <section class="tab-product m-0 vertical-tab">
        <div class="container">
            <div class="row tab-border">
                <div class="col-xl-2 p-0">
                    <ul class="nav nav-tabs nav-material flex-column nav-border" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                                                href="#top-home" role="tab" aria-selected="true">Description</a></li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab"
                                                href="#top-profile" role="tab" aria-selected="false">Reviews</a></li>
                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab"
                                                href="#top-contact" role="tab" aria-selected="false">Product tags</a></li>
                    </ul>
                </div>
                <div class="col-xl-10">
                    <div class="tab-content nav-material" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                             aria-labelledby="top-home-tab">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                            <p>No reviews yet</p>
                        </div>
                        <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                            <p>black, block1, blue, cotton, purple, skirts, top, under-100, versace, woman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-tab ends -->

@endsection
