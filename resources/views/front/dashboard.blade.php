@extends("layouts.front")

@section("css")
@endsection

@section("js")
@endsection

@section("title")
    Profil
@endsection

@section("content")
    <section class="dashboard-section section-b-space user-dashboard-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="dashboard-sidebar">
                        <div class="profile-top">
                            <div class="profile-detail">
                                <h5>{{$user->fullname()}}</h5>
                                <h6>{{$user->email}}</h6>
                            </div>
                        </div>
                        <div class="faq-tab">
                            <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                <li class="nav-item"><a data-bs-toggle="tab" data-bs-target="#info"
                                                        class="nav-link active">Hesap Bilgileri</a></li>
                                <li class="nav-item"><a data-bs-toggle="tab" data-bs-target="#address"
                                                        class="nav-link">Adres Defteri</a></li>
                                <li class="nav-item"><a data-bs-toggle="tab" data-bs-target="#orders"
                                                        class="nav-link">Siparişlerim</a></li>
                                <li class="nav-item"><a data-bs-toggle="tab" data-bs-target="#wishlist"
                                                        class="nav-link">İstek Listem</a></li>
                                <li class="nav-item"><a data-bs-toggle="tab" data-bs-target="#payment"
                                                        class="nav-link">Kayıtlı Kartlarım</a></li>
                                <li class="nav-item"><a href="" class="nav-link">Çıkış Yap</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="faq-content tab-content" id="top-tabContent">
                        <div class="tab-pane fade show active" id="info">
                            <div class="counter-section">
                                <div class="welcome-msg">
                                    <h4>Merhaba, {{$user->first_name}} !</h4>
                                    <p>From your My Account Dashboard you have the ability to view a snapshot of your
                                        recent
                                        account activity and update your account information. Select a link below to
                                        view or
                                        edit information.</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="{{asset('assets/front/images/icon/dashboard/sale.png')}}" class="img-fluid">
                                            <div>
                                                <h3>25</h3>
                                                <h5>Toplam Siparişler</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="{{asset('assets/front/images/icon/dashboard/homework.png')}}" class="img-fluid">
                                            <div>
                                                <h3>5</h3>
                                                <h5>Bekleyen Siparişler</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="{{asset('assets/front/images/icon/dashboard/order.png')}}" class="img-fluid">
                                            <div>
                                                <h3>50</h3>
                                                <h5>İstek Listesi</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-account box-info">
                                    <div class="box-head">
                                        <h4>Hesap Bilgileri</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card mt-0" style="min-height: 20vh">
                                                <div class="card-body">
                                                    <div class="dashboard-box">
                                                        <div class="dashboard-title">
                                                            <h4>Profil</h4>
                                                            <a class="edit-link" href="#">düzenle</a>
                                                        </div>
                                                        <div class="dashboard-detail">
                                                            <ul>
                                                                <li>
                                                                    <div class="details">
                                                                        <div class="left">
                                                                            <h6>Ad</h6>
                                                                        </div>
                                                                        <div class="right">
                                                                            <h6>Yasir</h6>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="details">
                                                                        <div class="left">
                                                                            <h6>Soy Ad</h6>
                                                                        </div>
                                                                        <div class="right">
                                                                            <h6>Kılınç</h6>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="details">
                                                                        <div class="left">
                                                                            <h6>Telefon Numarası</h6>
                                                                        </div>
                                                                        <div class="right">
                                                                            <h6>+90 555 000 51 19</h6>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="details">
                                                                        <div class="left">
                                                                            <h6>Mail Adresi</h6>
                                                                        </div>
                                                                        <div class="right">
                                                                            <h6>yasirkilinc00@gmail.com</h6>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="details">
                                                                        <div class="left">
                                                                            <h6>Total Employees</h6>
                                                                        </div>
                                                                        <div class="right">
                                                                            <h6>101 - 200 People</h6>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="details">
                                                                        <div class="left">
                                                                            <h6>city/state</h6>
                                                                        </div>
                                                                        <div class="right">
                                                                            <h6>Downers Grove, IL</h6>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="details">
                                                                        <div class="left">
                                                                            <h6>zip</h6>
                                                                        </div>
                                                                        <div class="right">
                                                                            <h6>60515</h6>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="address">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mt-0">
                                        <div class="card-body">
                                            <div class="top-sec">
                                                <h3>Address Book</h3>
                                                <a href="#" class="btn btn-sm btn-solid">+ add new</a>
                                            </div>
                                            <div class="address-book-section">
                                                <div class="row g-4">
                                                    <div class="select-box active col-xl-4 col-md-6">
                                                        <div class="address-box">
                                                            <div class="top">
                                                                <h6>mark jecno <span>home</span></h6>
                                                            </div>
                                                            <div class="middle">
                                                                <div class="address">
                                                                    <p>549 Sulphur Springs Road</p>
                                                                    <p>Downers Grove, IL</p>
                                                                    <p>60515</p>
                                                                </div>
                                                                <div class="number">
                                                                    <p>mobile: <span>+91 123 - 456 - 7890</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="bottom">
                                                                <a href="javascript:void(0)"
                                                                   data-bs-target="#edit-address"
                                                                   data-bs-toggle="modal" class="bottom_btn">edit</a>
                                                                <a href="#" class="bottom_btn">remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="select-box col-xl-4 col-md-6">
                                                        <div class="address-box">
                                                            <div class="top">
                                                                <h6>mark jecno <span>office</span></h6>
                                                            </div>
                                                            <div class="middle">
                                                                <div class="address">
                                                                    <p>549 Sulphur Springs Road</p>
                                                                    <p>Downers Grove, IL</p>
                                                                    <p>60515</p>
                                                                </div>
                                                                <div class="number">
                                                                    <p>mobile: <span>+91 123 - 456 - 7890</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="bottom">
                                                                <a href="javascript:void(0)"
                                                                   data-bs-target="#edit-address"
                                                                   data-bs-toggle="modal" class="bottom_btn">edit</a>
                                                                <a href="#" class="bottom_btn">remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card dashboard-table mt-0">
                                        <div class="card-body table-responsive-sm">
                                            <div class="top-sec">
                                                <h3>My Orders</h3>
                                            </div>
                                            <div class="table-responsive-xl">
                                                <table class="table cart-table order-table">
                                                    <thead>
                                                    <tr class="table-head">
                                                        <th scope="col">image</th>
                                                        <th scope="col">Order Id</th>
                                                        <th scope="col">Product Details</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">View</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/1.jpg"
                                                                     class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span class="mt-0">#125021</span>
                                                        </td>
                                                        <td>
                                                            <span class="fs-6">Purple polo tshirt</span>
                                                        </td>
                                                        <td>
                                                                <span
                                                                    class="badge rounded-pill bg-success custom-badge">Shipped</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">$49.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <i class="fa fa-eye text-theme"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/2.jpg"
                                                                     class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span class="mt-0">#125367</span>
                                                        </td>
                                                        <td>
                                                            <span class="fs-6">Sleevless white top</span>
                                                        </td>
                                                        <td>
                                                                <span
                                                                    class="badge rounded-pill bg-danger custom-badge">Pending</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">$49.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <i class="fa fa-eye text-theme"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/27.jpg"
                                                                     class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <p>#125948</p>
                                                        </td>
                                                        <td>
                                                            <p class="fs-6">multi color polo tshirt</p>
                                                        </td>
                                                        <td>
                                                                <span
                                                                    class="badge rounded-pill bg-success custom-badge">Shipped</span>
                                                        </td>
                                                        <td>
                                                            <p class="theme-color fs-6">$49.54</p>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <i class="fa fa-eye text-theme"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/28.jpg"
                                                                     class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <p>#127569</p>
                                                        </td>
                                                        <td>
                                                            <p class="fs-6">Candy red solid tshirt</p>
                                                        </td>
                                                        <td>
                                                                <span
                                                                    class="badge rounded-pill bg-success custom-badge">Shipped</span>
                                                        </td>
                                                        <td>
                                                            <p class="theme-color fs-6">$49.54</p>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <i class="fa fa-eye text-theme"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/33.jpg"
                                                                     class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <p>#125753</p>
                                                        </td>
                                                        <td>
                                                            <p class="fs-6">multicolored polo tshirt</p>
                                                        </td>
                                                        <td>
                                                                <span
                                                                    class="badge rounded-pill bg-secondary custom-badge">Canceled</span>
                                                        </td>
                                                        <td>
                                                            <p class="theme-color fs-6">$49.54</p>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <i class="fa fa-eye text-theme"></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/34.jpg"
                                                                     class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span>#125021</span>
                                                        </td>
                                                        <td>
                                                            <span class="fs-6">Men's Sweatshirt</span>
                                                        </td>
                                                        <td>
                                                                <span
                                                                    class="badge rounded-pill bg-secondary custom-badge">Canceled</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">$49.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <i class="fa fa-eye text-theme"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wishlist">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card dashboard-table mt-0">
                                        <div class="card-body table-responsive-sm">
                                            <div class="top-sec">
                                                <h3>My Wishlist</h3>
                                            </div>
                                            <div class="table-responsive-xl">
                                                <table class="table cart-table wishlist-table">
                                                    <thead>
                                                    <tr class="table-head">
                                                        <th scope="col">image</th>
                                                        <th scope="col">Order Id</th>
                                                        <th scope="col">Product Details</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/1.jpg"
                                                                     class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span class="mt-0">#125021</span>
                                                        </td>
                                                        <td>
                                                            <span>Purple polo tshirt</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">$49.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)"
                                                               class="btn btn-xs btn-solid">
                                                                Move to Cart
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/2.jpg"
                                                                     class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span class="mt-0">#125367</span>
                                                        </td>
                                                        <td>
                                                            <span>Sleevless white top</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">$49.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)"
                                                               class="btn btn-xs btn-solid">
                                                                Move to Cart
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/27.jpg"
                                                                     class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span>#125948</span>
                                                        </td>
                                                        <td>
                                                            <span>multi color polo tshirt</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">$49.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)"
                                                               class="btn btn-xs btn-solid">
                                                                Move to Cart
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/28.jpg"
                                                                     class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span>#127569</span>
                                                        </td>
                                                        <td>
                                                            <span>Candy red solid tshirt</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">$49.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)"
                                                               class="btn btn-xs btn-solid">
                                                                Move to Cart
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/33.jpg"
                                                                     class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span>#125753</span>
                                                        </td>
                                                        <td>
                                                            <span>multicolored polo tshirt</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">$49.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)"
                                                               class="btn btn-xs btn-solid">
                                                                Move to Cart
                                                            </a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/pro3/34.jpg"
                                                                     class="blur-up lazyloaded" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <span>#125021</span>
                                                        </td>
                                                        <td>
                                                            <span>Men's Sweatshirt</span>
                                                        </td>
                                                        <td>
                                                            <span class="theme-color fs-6">$49.54</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0)"
                                                               class="btn btn-xs btn-solid">
                                                                Move to Cart
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="payment">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card mt-0">
                                        <div class="card-body">
                                            <div class="top-sec">
                                                <h3>Saved Cards</h3>
                                                <a href="#" class="btn btn-sm btn-solid">+ add new</a>
                                            </div>
                                            <div class="address-book-section">
                                                <div class="row g-4">
                                                    <div class="select-box active col-xl-4 col-md-6">
                                                        <div class="address-box">
                                                            <div class="bank-logo">
                                                                <img src="../assets/images/bank-logo.png"
                                                                     class="bank-logo">
                                                                <img src="../assets/images/visa.png"
                                                                     class="network-logo">
                                                            </div>
                                                            <div class="card-number">
                                                                <h6>Card Number</h6>
                                                                <h5>6262 6126 2112 1515</h5>
                                                            </div>
                                                            <div class="name-validity">
                                                                <div class="left">
                                                                    <h6>name on card</h6>
                                                                    <h5>Mark Jecno</h5>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>validity</h6>
                                                                    <h5>XX/XX</h5>
                                                                </div>
                                                            </div>
                                                            <div class="bottom">
                                                                <a href="javascript:void(0)"
                                                                   data-bs-target="#edit-address"
                                                                   data-bs-toggle="modal" class="bottom_btn">edit</a>
                                                                <a href="#" class="bottom_btn">remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="select-box col-xl-4 col-md-6">
                                                        <div class="address-box">
                                                            <div class="bank-logo">
                                                                <img src="../assets/images/bank-logo1.png"
                                                                     class="bank-logo">
                                                                <img src="../assets/images/visa.png"
                                                                     class="network-logo">
                                                            </div>
                                                            <div class="card-number">
                                                                <h6>Card Number</h6>
                                                                <h5>6262 6126 2112 1515</h5>
                                                            </div>
                                                            <div class="name-validity">
                                                                <div class="left">
                                                                    <h6>name on card</h6>
                                                                    <h5>Mark Jecno</h5>
                                                                </div>
                                                                <div class="right">
                                                                    <h6>validity</h6>
                                                                    <h5>XX/XX</h5>
                                                                </div>
                                                            </div>
                                                            <div class="bottom">
                                                                <a href="javascript:void(0)"
                                                                   data-bs-target="#edit-address"
                                                                   data-bs-toggle="modal" class="bottom_btn">edit</a>
                                                                <a href="#" class="bottom_btn">remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  dashboard section end -->

@endsection
