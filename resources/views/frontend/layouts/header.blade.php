<section class="part_header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 main_logo">
                <a href="{{url('/')}}">
                    <img src="{{asset('images/logo.png')}}" class="logo_image" alt="">
                </a>
            </div>
            <div class="col-xs-12 col-md-6 feature_type">
                <div class="story-menu-item cat">
                    <i class="far fa-file"></i><span>Danh sách</span><i class="fas fa-angle-down"></i>
                    <ul class="sub-menu sub-menu-cat">
                        @foreach($categoryList as $category)
                            <li class="col-xs-4"><a href="{{route('categories.show', ['key'=>$category->url_key])}}" title="{{$category->name}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="story-menu-item list">
                    <i class="fas fa-atlas"></i>
                    <span>Thể loại</span>
                    <i class="fas fa-angle-down"></i>
                    <ul class="sub-menu sub-menu-list">
                        @foreach($tagList as $tag)
                            <li class="col-xs-4"><a href="{{route('tag.show', ['key'=>$tag->url_key])}}" title="{{$tag->name}}">{{$tag->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 search">
                <form action="/" id="pcsearchForm" method="get">
                    <input type="text" placeholder="Nhập tên Truyện hoặc Tác giả..."
                           class="ip-search ui-autocomplete-input" name="search" autocomplete="off">
                    <button type="submit" class="search_button"><i class="fas fa-search"></i></button>
                </form>
            </div>

            <div class="col-xs-12 feature_mobile">
                <div class="feature_mobile_content">
                    <div class="story-menu-item cat">
                        <i class="far fa-file"></i><span>Danh sách</span>
                        <ul class="sub-menu sub-menu-cat">
                            @foreach($categoryList as $category)
                                <li><a href="{{route('categories.show', ['key'=>$category->url_key])}}" title="{{$category->name}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="story-menu-item list">
                        <i class="fas fa-atlas"></i>
                        <span>Thể loại</span>
                        <ul class="sub-menu sub-menu-list">
                            @foreach($tagList as $tag)
                                <li><a href="{{route('tag.show', ['key'=>$tag->url_key])}}" title="{{$tag->name}}">{{$tag->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>