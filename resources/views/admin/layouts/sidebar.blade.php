<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title">
                <img class="logo main_logo" src="{{asset('images/logo.png')}}" alt="">
                <img class="icon_logo" src="{{asset('images/logo_icon.png')}}" alt="">
            </a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('admins/assets/images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{auth()->user()->name}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fas fa-home"></i> Catalog <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.categories.index')}}">Categories</a></li>
                            <li><a href="{{route('admin.tags.index')}}">Danh sách</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('admin.books.index')}}"><i class="fas fa-table"></i> Danh Sách Truyện </a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-edit"></i> Chap Truyện</a>
                    </li>

                    <li>
                        <a href="{{route('admin.author.index')}}"><i class="fas fa-user-edit"></i>Author</a>
                    </li>

                    <li>
                        <a href="{{route('admin.translator.index')}}"><i class="fas fa-language"></i>Translator</a>
                    </li>
                    <li><a><i class="fas fa-desktop"></i>Human<span class="fas fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="general_elements.html">General Elements</a></li>
                            <li><a href="media_gallery.html">Media Gallery</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="glyphicons.html">Glyphicons</a></li>
                            <li><a href="widgets.html">Widgets</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="inbox.html">Inbox</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fas fa-clone"></i>Layouts <span class="fas fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                            <li><a href="fixed_footer.html">Fixed Footer</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->


    </div>
</div>