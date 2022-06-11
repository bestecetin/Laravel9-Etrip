@php
    use App\Models\Setting;
    $setting=Setting::first();
@endphp
<header>
    <div id="top_line">
        <div class="container">
            <div class="row">
                @php
                    $mainCategories=\App\Http\Controllers\HomeController::maincategorylist()
                @endphp
                <div class="col-6"><i class="icon-phone"></i><strong>{{$setting->phone}}</strong></div>
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
                    <h1><a href="{{route('home')}}" title="City tours travel template">City Tours travel template</a></h1>
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
                                <li @if(count($rs->children)) class="third-level" @endif ><a href="{{route('categoryproducts',['id' => $rs->id , 'slug' => $rs->title])}}">{{$rs->title}}</a>

                                    @if(count($rs->children))
                                        @include('home.categorytree',['children'=>$rs->children])
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        <li class="submenu">
                           <a href="{{route('categoryproducts',['id' => 13, 'slug' => 'Museum'])}}">Museum</a>

                        <li class="submenu">
                            <a href="{{route('categoryproducts',['id' => 16, 'slug' => 'Architectural Structures'])}}">Architectural Structures</a>
                        </li>
                        <li class="submenu">
                            <a href="{{route('categoryproducts',['id' => 14, 'slug' => 'Holy Places and Religious Sites'])}}">Holy Places and Religious Sites</a>
                        </li>
                        <li class="submenu">
                            <a href="{{route('contact')}}" class="show-submenu">Contact</a>
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

