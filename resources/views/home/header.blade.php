
<header>
    <div id="top_line">
        <div class="container">
            <div class="row">
                @php
                    $mainCategories=\App\Http\Controllers\HomeController::maincategorylist()
                @endphp
                <div class="col-6"><i class="icon-phone"></i><strong>0045 043204434</strong></div>
                <div class="col-6">
                    <ul id="top_links">
                        @auth
                            <li><i class="icon-user"></i><a href="{{route('userpanel.index')}}"><strong>{{Auth::user()->name}}</strong></a></li>
                            <li><i class="icon-logout"></i><a href="/logoutuser">Logout</a></li>
                        @endauth
                            @guest
                                <li><i class="icon-login"></i><a href="/loginuser" >Sign in</a></li>
                                <li><i class="icon-login"></i><a href="/registeruser" >Join</a></li>
                            @endguest

                    </ul>
                </div>
            </div><!-- End row -->
        </div><!-- End container-->
    </div><!-- End top line-->

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div id="logo_home">
                    <h1><a href="index-2.html" title="City tours travel template">City Tours travel template</a></h1>
                </div>
            </div>
            <nav class="col-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="{{asset('assets')}}/img/logo_sticky.png" width="160" height="34" alt="City tours">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul>
                        <li class="submenu">
                            <a href="/" class="show-submenu">Home</a>
                        </li>
                        <li class="submenu">

                            <a href="javascript:void(0);" class="show-submenu">Categories <i class="icon-down-open-mini"></i></a>
                            <ul>
                                @foreach($mainCategories as $rs )
                                <li @if(count($rs->children)) class="third-level" @endif ><a href="all_tours_list.html">{{$rs->title}}</a>

                                    @if(count($rs->children))
                                        @include('home.categorytree',['children'=>$rs->children])
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Hotels <i class="icon-down-open-mini"></i></a><ul>
                                <li><a href="all_hotels_list.html">All hotels list</a></li>
                                <li><a href="all_hotels_grid.html">All hotels grid</a></li>
                                <li><a href="all_hotels_grid_masonry.html">All hotels Sort Masonry</a></li>
                                <li><a href="all_hotels_map_listing.html">All hotels map listing</a></li>
                                <li><a href="single_hotel.html">Single hotel page</a></li>
                                <li><a href="single_hotel_working_booking.html">Single hotel working booking</a></li>
                                <li><a href="single_hotel_contact.html">Single hotel contact working</a></li>
                                <li><a href="cart_hotel.html">Cart hotel</a></li>
                                <li><a href="payment_hotel.html">Booking hotel</a></li>
                                <li><a href="confirmation_hotel.html">Confirmation hotel</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Transfers <i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="all_transfer_list.html">All transfers list</a></li>
                                <li><a href="all_transfer_grid.html">All transfers grid</a></li>
                                <li><a href="all_transfer_grid_masonry.html">All transfers Sort Masonry</a></li>
                                <li><a href="single_transfer.html">Single transfer page</a></li>
                                <li><a href="cart_transfer.html">Cart transfers</a></li>
                                <li><a href="payment_transfer.html">Booking transfers</a></li>
                                <li><a href="confirmation_transfer.html">Confirmation transfers</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Restaurants <i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="all_restaurants_list.html">All restaurants list</a></li>
                                <li><a href="all_restaurants_grid.html">All restaurants grid</a></li>
                                <li><a href="all_restaurants_grid_masonry.html">All restaurants Sort Masonry</a></li>
                                <li><a href="all_restaurants_map_listing.html">All restaurants map listing</a></li>
                                <li><a href="single_restaurant.html">Single restaurant page</a></li>
                                <li><a href="payment_restaurant.html">Booking restaurant</a></li>
                                <li><a href="confirmation_restaurant.html">Confirmation restaurant</a></li>
                            </ul>
                        </li>
                        <li class="megamenu submenu">
                            <a href="javascript:void(0);" class="show-submenu-mega">Bonus<i class="icon-down-open-mini"></i></a>
                            <div class="menu-wrapper">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h3>Header styles</h3>
                                        <ul>
                                            <li><a href="index-2.html">Default transparent</a></li>
                                            <li><a href="header_2.html">Plain color</a></li>
                                            <li><a href="header_3.html">Plain color on scroll</a></li>
                                            <li><a href="header_4.html">With socials on top</a></li>
                                            <li><a href="header_5.html">With language selection</a></li>
                                            <li><a href="header_6.html">With lang and conversion</a></li>
                                            <li><a href="header_7.html">With full horizontal menu</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <h3>Footer styles</h3>
                                        <ul>
                                            <li><a href="{{asset('assets')}}/index-2.html">Footer default</a></li>
                                            <li><a href="footer_2.html">Footer style 2</a></li>
                                            <li><a href="footer_3.html">Footer style 3</a></li>
                                            <li><a href="footer_4.html">Footer style 4</a></li>
                                            <li><a href="footer_5.html">Footer style 5</a></li>
                                            <li><a href="footer_6.html">Footer style 6</a></li>
                                            <li><a href="footer_7.html">Footer style 7</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <h3>Shop section</h3>
                                        <ul>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-single.html">Shop single</a></li>
                                            <li><a href="shopping-cart.html">Shop cart</a></li>
                                            <li><a href="checkout.html">Shop Checkout</a></li>
                                        </ul>
                                    </div>
                                </div><!-- End row -->
                            </div><!-- End menu-wrapper -->
                        </li>
                        <li class="megamenu submenu">
                            <a href="javascript:void(0);" class="show-submenu-mega">Pages<i class="icon-down-open-mini"></i></a>
                            <div class="menu-wrapper">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h3>Pages</h3>
                                        <ul>
                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="general_page.html">General page</a></li>
                                            <li><a href="tourist_guide.html">Tourist guide</a></li>
                                            <li><a href="wishlist.html">Wishlist page</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="faq_2.html">Faq smooth scroll</a></li>
                                            <li><a href="pricing_tables.html">Pricing tables</a></li>
                                            <li><a href="gallery_3_columns.html">Gallery 3 columns</a></li>
                                            <li><a href="gallery_4_columns.html">Gallery 4 columns</a></li>
                                            <li><a href="grid_gallery_1.html">Grid gallery</a></li>
                                            <li><a href="grid_gallery_2.html">Grid gallery with filters</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <h3>Pages</h3>
                                        <ul>
                                            <li><a href="contact_us_1.html">Contact us 1</a></li>
                                            <li><a href="contact_us_2.html">Contact us 2</a></li>
                                            <li><a href="blog_right_sidebar.html">Blog</a></li>
                                            <li><a href="blog.html">Blog left sidebar</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="invoice.html" target="_blank">Invoice</a></li>
                                            <li><a href="404.html">404 Error page</a></li>
                                            <li><a href="site_launch/index.html">Site launch / Coming soon</a></li>
                                            <li><a href="timeline.html">Tour timeline</a></li>
                                            <li><a href="page_with_map.html"><i class="icon-map"></i>  Full screen map</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <h3>Elements</h3>
                                        <ul>
                                            <li><a href="footer_2.html"><i class="icon-columns"></i> Footer with working newsletter</a></li>
                                            <li><a href="footer_5.html"><i class="icon-columns"></i> Footer with Twitter feed</a></li>
                                            <li><a href="icon_pack_1.html"><i class="icon-inbox-alt"></i> Icon pack 1 (1900)</a></li>
                                            <li><a href="icon_pack_2.html"><i class="icon-inbox-alt"></i> Icon pack 2 (100)</a></li>
                                            <li><a href="icon_pack_3.html"><i class="icon-inbox-alt"></i> Icon pack 3 (30)</a></li>
                                            <li><a href="icon_pack_4.html"><i class="icon-inbox-alt"></i> Icon pack 4 (200)</a></li>
                                            <li><a href="icon_pack_5.html"><i class="icon-inbox-alt"></i> Icon pack 5 (360)</a></li>
                                            <li><a href="shortcodes.html"><i class="icon-tools"></i> Shortcodes</a></li>
                                            <li><a href="newsletter_template/newsletter.html" target="blank"><i class=" icon-mail"></i> Responsive email template</a></li>
                                            <li><a href="admin.html"><i class="icon-cog-1"></i>  Admin area</a></li>
                                            <li><a href="html_rtl/index.html"><i class="icon-align-right"></i>  RTL Version</a></li>
                                        </ul>
                                    </div>
                                </div><!-- End row -->
                            </div><!-- End menu-wrapper -->
                        </li>
                    </ul>
                </div><!-- End main-menu -->
                <ul id="top_tools">
                    <li>
                        <a href="javascript:void(0);" class="search-overlay-menu-btn"><i class="icon_search"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div><!-- container -->
</header><!-- End Header -->

