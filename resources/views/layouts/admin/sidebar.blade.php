<!-- Page Sidebar Start-->
<div class="page-sidebar">
    <div class="sidebar custom-scrollbar" style="height: 100vh">
        <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                                                                               aria-hidden="true"></i></a>
        <ul class="sidebar-menu">
            <li>
                <a class="sidebar-header" href="index.html">
                    <i data-feather="home"></i>
                    <span>Ana sayfa</span>
                </a>
            </li>

            <li>
                <a class="sidebar-header">
                    <i data-feather="box"></i>
                    <span>Ürünler</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('products.index')}}">
                            <i class="fa fa-circle"></i>
                            <span>Ürün Yönetimi</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('categories.index')}}">
                            <i class="fa fa-circle"></i>
                            <span>Kategori Yönetimi</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('brands.index')}}">
                            <i class="fa fa-circle"></i>
                            <span>Marka Yönetimi</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="archive"></i>
                    <span>Siparişler</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="order-list.html">
                            <i class="fa fa-circle"></i>
                            <span>Order List</span>
                        </a>
                    </li>

                    <li>
                        <a href="order-tracking.html">
                            <i class="fa fa-circle"></i>
                            <span>Order Tracking</span>
                        </a>
                    </li>

                    <li>
                        <a href="order-detail.html">
                            <i class="fa fa-circle"></i>
                            <span>Order Details</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header">
                    <i data-feather="clipboard"></i>
                    <span>Tasarım</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('banners.index')}}">
                            <i class="fa fa-circle"></i>Bannerlar
                        </a>
                    </li>
                </ul>
            </li>w

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="tag"></i>
                    <span>Coupons</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="coupon-list.html">
                            <i class="fa fa-circle"></i>List Coupons
                        </a>
                    </li>
                    <li>
                        <a href="coupon-create.html">
                            <i class="fa fa-circle"></i>Create Coupons
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="clipboard"></i>
                    <span>Pages</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="pages-list.html">
                            <i class="fa fa-circle"></i>List Page
                        </a>
                    </li>
                    <li>
                        <a href="page-create.html">
                            <i class="fa fa-circle"></i>Create Page
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href="media.html">
                    <i data-feather="camera"></i>
                    <span>Media</span>
                </a>
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="align-left"></i>
                    <span>Menus</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="menu-list.html">
                            <i class="fa fa-circle"></i>Menu Lists
                        </a>
                    </li>
                    <li>
                        <a href="create-menu.html">
                            <i class="fa fa-circle"></i>Create Menu
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="user-plus"></i>
                    <span>Users</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="user-list.html">
                            <i class="fa fa-circle"></i>User List
                        </a>
                    </li>
                    <li>
                        <a href="create-user.html">
                            <i class="fa fa-circle"></i>Create User
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="users"></i>
                    <span>Vendors</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="list-vendor.html">
                            <i class="fa fa-circle"></i>Vendor List
                        </a>
                    </li>
                    <li>
                        <a href="create-vendors.html">
                            <i class="fa fa-circle"></i>Create Vendor
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="chrome"></i>
                    <span>Localization</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="translations.html"><i class="fa fa-circle"></i>Translations
                        </a>
                    </li>
                    <li>
                        <a href="currency-rates.html"><i class="fa fa-circle"></i>Currency Rates
                        </a>
                    </li>
                    <li>
                        <a href="taxes.html"><i class="fa fa-circle"></i>Taxes
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href="support-ticket.html"><i
                        data-feather="phone"></i><span>Support Ticket</span>
                </a>
            </li>

            <li>
                <a class="sidebar-header" href="reports.html"><i
                        data-feather="bar-chart"></i><span>Reports</span>
                </a>
            </li>

            <li>
                <a class="sidebar-header" href="javascript:void(0)"><i
                        data-feather="settings"></i><span>Settings</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="profile.html"><i class="fa fa-circle"></i>Profile
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a class="sidebar-header" href="invoice.html"><i
                        data-feather="archive"></i><span>Invoice</span></a>
            </li>

            <li>
                <a class="sidebar-header" href="forgot-password.html">
                    <i data-feather="key"></i>
                    <span>Forgot Password</span>
                </a>
            </li>

            <li>
                <a class="sidebar-header" href="login.html">
                    <i data-feather="log-in"></i>
                    <span>Login</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Page Sidebar Ends-->
