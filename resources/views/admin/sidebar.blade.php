<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{asset('assets')}}/admin/production/index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('assets')}}/admin/production/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>Beste Cetin</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{asset('assets')}}/admin/production/index.html">Dashboard</a></li>
                            <li><a href="{{asset('assets')}}/admin/production/index2.html">Dashboard2</a></li>
                            <li><a href="{{asset('assets')}}/admin/production/index3.html">Dashboard3</a></li>
                        </ul>
                    </li>
                    <li><a href="/admin/category"><i class="fa fa-th"></i>Categories </a></li>
                    <li><a href="/admin/place"><i class="fa fa-th"></i>Places </a></li>
                    <li><a href="/admin/comment"><i class="fa fa-comment"></i>Comments </a></li>
                    <li><a href="{{route('admin.faq.index')}}"><i class="fa fa-question"></i>FAQ </a></li>
                    <li><a href="{{route('admin.message.index')}}"><i class="fa fa-envelope"></i>Messages</a></li>
                    <li><a href="/admin/social"><i class="fa fa-laptop"></i>Social </a></li>
                    <li><a href="/admin/user"><i class="fa fa-user"></i>Users</a></li>
                </ul>
            </div>



            <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                    <li><a href="/admin/setting"><i class="fa fa-cog"></i> Settings </a></li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{asset('assets')}}/admin/production/login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
