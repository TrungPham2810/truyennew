<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/icon.png')}}" type="image/png" sizes="32x32"/>
    <title>Truyen New</title>
    <!-- Bootstrap -->
{{--<link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">--}}
<!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d63186b94a.js" crossorigin="anonymous"></script>
</head>
<body>
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
                        <li><a href="#" title="Truyện Teen Hay">Truyện Category Truyệnxxxxxxxxxxxxxxxxxxx</a></li>
                        <li><a href="#" title="Truyện Teen Hay">Truyện Category</a></li>
                        <li><a href="#" title="Truyện Teen Hay">Truyện Category</a></li>
                        <li><a href="#" title="Truyện Teen Hay">Truyện Category</a></li>
                        <li><a href="#" title="Truyện Teen Hay">Truyện Category</a></li>
                    </ul>
                </div>
                <div class="story-menu-item list">
                    <i class="fas fa-atlas"></i>
                    <span>Thể loại</span>
                    <i class="fas fa-angle-down"></i>
                    <ul class="sub-menu sub-menu-list">
                        <li><a href="#" title="Truyện Teen Hay">Truyện List Truyệnxxxxxxxxxxxxxxxxx</a></li>
                        <li><a href="#" title="Truyện Teen Hay">Truyện List</a></li>
                        <li><a href="#" title="Truyện Teen Hay">Truyện List</a></li>
                        <li><a href="#" title="Truyện Teen Hay">Truyện List</a></li>
                        <li><a href="#" title="Truyện Teen Hay">Truyện List</a></li>
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
                            <li><a href="#" title="Truyện Teen Hay">Truyện Category</a></li>
                            <li><a href="#" title="Truyện Teen Hay">Truyện Category</a></li>
                            <li><a href="#" title="Truyện Teen Hay">Truyện Category</a></li>
                            <li><a href="#" title="Truyện Teen Hay">Truyện Category</a></li>
                            <li><a href="#" title="Truyện Teen Hay">Truyện Category</a></li>
                        </ul>
                    </div>
                    <div class="story-menu-item list">
                        <i class="fas fa-atlas"></i>
                        <span>Thể loại</span>
                        <ul class="sub-menu sub-menu-list">
                            <li><a href="#" title="Truyện Teen Hay">Truyện List</a></li>
                            <li><a href="#" title="Truyện Teen Hay">Truyện List</a></li>
                            <li><a href="#" title="Truyện Teen Hay">Truyện List</a></li>
                            <li><a href="#" title="Truyện Teen Hay">Truyện List</a></li>
                            <li><a href="#" title="Truyện Teen Hay">Truyện List</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="hot_story">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row part_title">
                    <div class="col-xs-6">
                        <a href="#" class="title_hot"><span>Truyện Hot</span><i class="fas fa-angle-right"></i></a>
                    </div>

                    <div class="col-xs-6">
                        <select class="album" name="ss_category">
                            <option value="">Tất cả</option>
                            <option value="K8">Truyện Teen Hay</option>
                            <option value="K9">Ngôn Tình Ngược Ngôn Tình Ngược</option>
                        </select>
                    </div>
                </div>

            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2 col-md-4 item_hot_story">
                        <div class="label_story">FULL</div>
                        <a href="#" class="image_story">
                            <img src="{{asset('images/test_image_story.png')}}" alt="">
                        </a>
                        <a href="#">
                            <div class="name-book">Dau pha thuong khung</div>
                        </a>
                        <div class="rate">7.9/10</div>
                    </div>

                    <div class="col-md-2 col-md-4 item_hot_story">
                        <div class="label_story">FULL</div>
                        <a href="#" class="image_story">
                            <img src="{{asset('images/test_image_story.png')}}" alt="">
                        </a>
                        <a href="#">
                            <div class="name-book">Dau pha thuong khung</div>
                        </a>
                        <div class="rate">7.9/10</div>
                    </div>
                    <div class="col-md-2 col-md-4 item_hot_story">
                        <div class="label_story">FULL</div>
                        <a href="#" class="image_story">
                            <img src="{{asset('images/test_image_story.png')}}" alt="">
                        </a>
                        <a href="#">
                            <div class="name-book">Dau pha thuong khung</div>
                        </a>
                        <div class="rate">7.9/10</div>
                    </div>
                    <div class="col-md-2 col-md-4 item_hot_story">
                        <div class="label_story">FULL</div>
                        <a href="#" class="image_story">
                            <img src="{{asset('images/test_image_story.png')}}" alt="">
                        </a>
                        <a href="#">
                            <div class="name-book">Dau pha thuong khung</div>
                        </a>
                        <div class="rate">7.9/10</div>
                    </div>
                    <div class="col-md-2 col-md-4 item_hot_story">
                        <div class="label_story">FULL</div>
                        <a href="#" class="image_story">
                            <img src="{{asset('images/test_image_story.png')}}" alt="">
                        </a>
                        <a href="#">
                            <div class="name-book">Dau pha thuong khung</div>
                        </a>
                        <div class="rate">7.9/10</div>
                    </div>
                    <div class="col-md-2 col-md-4 item_hot_story">
                        <div class="label_story">FULL</div>
                        <a href="#" class="image_story">
                            <img src="{{asset('images/test_image_story.png')}}" alt="">
                        </a>
                        <a href="#">
                            <div class="name-book">Dau pha thuong khung</div>
                        </a>
                        <div class="rate">7.9/10</div>
                    </div>
                    <div class="col-md-2 col-md-4 item_hot_story">
                        <div class="label_story">FULL</div>
                        <a href="#" class="image_story">
                            <img src="{{asset('images/test_image_story.png')}}" alt="">
                        </a>
                        <a href="#">
                            <div class="name-book">Dau pha thuong khung</div>
                        </a>
                        <div class="rate">7.9/10</div>
                    </div>
                    <div class="col-md-2 col-md-4 item_hot_story">
                        <div class="label_story">FULL</div>
                        <a href="#" class="image_story">
                            <img src="{{asset('images/test_image_story.png')}}" alt="">
                        </a>
                        <a href="#">
                            <div class="name-book">Dau pha thuong khung</div>
                        </a>
                        <div class="rate">7.9/10</div>
                    </div>
                    <div class="col-md-2 col-md-4 item_hot_story">
                        <div class="label_story">FULL</div>
                        <a href="#" class="image_story">
                            <img src="{{asset('images/test_image_story.png')}}" alt="">
                        </a>
                        <a href="#">
                            <div class="name-book">Dau pha thuong khung</div>
                        </a>
                        <div class="rate">7.9/10</div>
                    </div>
                    <div class="col-md-2 col-md-4 item_hot_story">
                        <div class="label_story">FULL</div>
                        <a href="#" class="image_story">
                            <img src="{{asset('images/test_image_story.png')}}" alt="">
                        </a>
                        <a href="#">
                            <div class="name-book">Dau pha thuong khung</div>
                        </a>
                        <div class="rate">7.9/10</div>
                    </div>
                    <div class="col-md-2 col-md-4 item_hot_story">
                        <div class="label_story">FULL</div>
                        <a href="#" class="image_story">
                            <img src="{{asset('images/test_image_story.png')}}" alt="">
                        </a>
                        <a href="#">
                            <div class="name-book">Dau pha thuong khung</div>
                        </a>
                        <div class="rate">7.9/10</div>
                    </div>
                    <div class="col-md-2 col-md-4 item_hot_story">
                        <div class="label_story">FULL</div>
                        <a href="#" class="image_story">
                            <img src="{{asset('images/test_image_story.png')}}" alt="">
                        </a>
                        <a href="#">
                            <div class="name-book">Dau pha thuong khung</div>
                        </a>
                        <div class="rate">7.9/10</div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>

<section class="new_story">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-3 type_story">

                <div class="book-category">
                    <div class="title_hot">
                        <span>Thể loại truyện</span>
                    </div>
                    <div class="list_type">
                        <ul>
                            <li><a href="/the-loai/tien-hiep/" title="Tiên Hiệp">Tiên Hiệp</a></li>
                            <li><a href="/the-loai/kiem-hiep/" title="Kiếm Hiệp">Kiếm Hiệp</a></li>
                        </ul>
                        <ul>
                            <li><a href="/the-loai/truyen-sung/" title="Truyện Sủng">Truyện Sủng</a></li>
                            <li><a href="/the-loai/cung-dau/" title="Truyện Cung Đấu">Truyện Cung Đấu</a></li>
                            <li><a href="/the-loai/truyen-nu-cuong/" title="Truyện Nữ Cường">Truyện Nữ Cường</a></li>
                            <li><a href="/the-loai/truyen-gia-dau/" title="Truyện Gia Đấu">Truyện Gia Đấu</a></li>
                        </ul>
                    </div>

                </div>

            </div>
            <div class="col-md-12 col-lg-9">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row part_title">
                            <div class="col-xs-6">
                                <div class="title_hot">
                                    <span>Truyện mới cập nhật</span><i class="fas fa-angle-right"></i>
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <select class="album" name="ss_category">
                                    <option value="">Tất cả</option>
                                    <option value="K8">Truyện Teen Hay</option>
                                    <option value="K9">Ngôn Tình Ngược Ngôn Tình Ngược</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <table class="table_book_newest">
                            <tbody>
                            <tr>
                                <td class="name ">
                                    <a class="book-name" href="/nhan-lo-thanh-than/" title="Nhân Lộ Thành Thần">
                                        Nhân Lộ Thành Thần
                                    </a>
                                </td>
                                <td class="cat">
                                    <a class="rv-author-a" href="/the-loai/xuyen-khong/" title="Xuyên Không">
                                        Xuyên Không
                                    </a>,
                                    <a class="rv-author-a" href="/the-loai/ngon-tinh/" title="Ngôn Tình">
                                        Ngôn Tình
                                    </a>
                                </td>
                                <td class="chap">
                                    <a href="nhan-lo-thanh-than/chuong-130/" title="Nhân Lộ Thành Thần - Chương 130">
                                        C-130
                                    </a>
                                </td>
                                <td class="time">2 Phút trước</td>
                            </tr>

                            <tr>
                                <td class="name ">
                                    <a class="book-name" href="/nhan-lo-thanh-than/" title="Nhân Lộ Thành Thần">
                                        Nhân Lộ Thành Thần
                                    </a>
                                </td>
                                <td class="cat">
                                    <a class="rv-author-a" href="/the-loai/xuyen-khong/" title="Xuyên Không">
                                        Xuyên Không
                                    </a>,
                                    <a class="rv-author-a" href="/the-loai/ngon-tinh/" title="Ngôn Tình">
                                        Ngôn Tình
                                    </a>
                                </td>
                                <td class="chap">
                                    <a href="nhan-lo-thanh-than/chuong-130/" title="Nhân Lộ Thành Thần - Chương 130">
                                        C-130
                                    </a>
                                </td>
                                <td class="time">2 Phút trước</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>


            </div>


        </div>
    </div>
</section>

<section class="story_finish">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row part_title">
                    <div class="col-xs-6">
                        <a href="#" class="title_hot"><span>Truyện đã hoàn thành</span><i
                                    class="fas fa-angle-right"></i></a>
                    </div>

                    <div class="col-xs-6">
                        <select class="album" name="ss_category">
                            <option value="">Tất cả</option>
                            <option value="K8">Truyện Teen Hay</option>
                            <option value="K9">Ngôn Tình Ngược Ngôn Tình Ngược</option>
                        </select>
                    </div>
                </div>

            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-6 col-md-4  col-lg-3 book-finished full">
                        <a href="/mua-xuan-den-muon/" class="image_book_finished">
                            <img class="image-book ls-is-cached lazyloaded"
                                 data-src="https://sstruyen.com/assets/img/story//mua-xuan-den-muon.1596994775.jpg"
                                 alt="Mùa Xuân Đến Muộn"
                                 src="https://sstruyen.com/assets/img/story//mua-xuan-den-muon.1596994775.jpg"></a>
                        <div class="info">
                            <div class="chap">62 Chương</div>
                            <a href="/mua-xuan-den-muon/" title="Mùa Xuân Đến Muộn">
                                <h3>
                                    <div class="name-book">Mùa Xuân Đến Muộn</div>
                                </h3>
                            </a>
                            <div class="rate">7.9/10</div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4  col-lg-3 book-finished full">
                        <a href="/mua-xuan-den-muon/" class="image_book_finished">
                            <img class="image-book ls-is-cached lazyloaded"
                                 data-src="https://sstruyen.com/assets/img/story//mua-xuan-den-muon.1596994775.jpg"
                                 alt="Mùa Xuân Đến Muộn"
                                 src="https://sstruyen.com/assets/img/story//mua-xuan-den-muon.1596994775.jpg"></a>
                        <div class="info">
                            <div class="chap">62 Chương</div>
                            <a href="/mua-xuan-den-muon/" title="Mùa Xuân Đến Muộn">
                                <h3>
                                    <div class="name-book">Mùa Xuân Đến Muộn</div>
                                </h3>
                            </a>
                            <div class="rate">7.9/10</div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4  col-lg-3 book-finished full">
                        <a href="/mua-xuan-den-muon/" class="image_book_finished">
                            <img class="image-book ls-is-cached lazyloaded"
                                 data-src="https://sstruyen.com/assets/img/story//mua-xuan-den-muon.1596994775.jpg"
                                 alt="Mùa Xuân Đến Muộn"
                                 src="https://sstruyen.com/assets/img/story//mua-xuan-den-muon.1596994775.jpg"></a>
                        <div class="info">
                            <div class="chap">62 Chương</div>
                            <a href="/mua-xuan-den-muon/" title="Mùa Xuân Đến Muộn">
                                <h3>
                                    <div class="name-book">Mùa Xuân Đến Muộn</div>
                                </h3>
                            </a>
                            <div class="rate">7.9/10</div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4  col-lg-3 book-finished full">
                        <a href="/mua-xuan-den-muon/" class="image_book_finished">
                            <img class="image-book ls-is-cached lazyloaded"
                                 data-src="https://sstruyen.com/assets/img/story//mua-xuan-den-muon.1596994775.jpg"
                                 alt="Mùa Xuân Đến Muộn"
                                 src="https://sstruyen.com/assets/img/story//mua-xuan-den-muon.1596994775.jpg"></a>
                        <div class="info">
                            <div class="chap">62 Chương</div>
                            <a href="/mua-xuan-den-muon/" title="Mùa Xuân Đến Muộn">
                                <h3>
                                    <div class="name-book">Mùa Xuân Đến Muộn</div>
                                </h3>
                            </a>
                            <div class="rate">7.9/10</div>
                        </div>
                    </div>


                    <div class="col-sm-6 col-md-4  col-lg-3 book-finished full">
                        <a href="/mua-xuan-den-muon/" class="image_book_finished">
                            <img class="image-book ls-is-cached lazyloaded"
                                 data-src="https://sstruyen.com/assets/img/story//mua-xuan-den-muon.1596994775.jpg"
                                 alt="Mùa Xuân Đến Muộn"
                                 src="https://sstruyen.com/assets/img/story//mua-xuan-den-muon.1596994775.jpg"></a>
                        <div class="info">
                            <div class="chap">62 Chương</div>
                            <a href="/mua-xuan-den-muon/" title="Mùa Xuân Đến Muộn">
                                <h3>
                                    <div class="name-book">Mùa Xuân Đến Muộn</div>
                                </h3>
                            </a>
                            <div class="rate">7.9/10</div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3 book-finished full">
                        <a href="/mua-xuan-den-muon/" class="image_book_finished">
                            <img class="image-book ls-is-cached lazyloaded"
                                 data-src="https://sstruyen.com/assets/img/story//mua-xuan-den-muon.1596994775.jpg"
                                 alt="Mùa Xuân Đến Muộn"
                                 src="https://sstruyen.com/assets/img/story//mua-xuan-den-muon.1596994775.jpg"></a>
                        <div class="info">
                            <div class="chap">62 Chương</div>
                            <a href="/mua-xuan-den-muon/" title="Mùa Xuân Đến Muộn">
                                <h3>
                                    <div class="name-book">Mùa Xuân Đến Muộn Mùa Xuân Đến Muộn</div>
                                </h3>
                            </a>
                            <div class="rate">7.9/10</div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<section class="part_footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-2">
                <ul class="f_bt">
                    <li>
                        <a href="https://sstruyen.com" title="đọc truyện">
                            <img src="{{asset('images/logo.png')}}" alt="đọc truyện"></a></li>
                    <li class="ve-dau-trang"><a class="fbt" href="#top">Về đầu trang</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-5"><p>truyennew.com - Website đọc truyện nhanh nhất, thân thiện nhất, và luôn
                    cập nhật mới nhất. Đọc truyện online, đọc truyện chữ, truyện full, truyện hay. Hỗ trợ mọi trình
                    duyệt và thiết bị di động.</p>
                <p>Liên hệ: sstruyenvn@gmail.com</p></div>
            <div class="col-xs-12 col-md-5 tags">
                <ul>
                    <li><a href="/danh-sach/truyen-full/" title="Truyện Full">Truyện Full</a></li>
                    <li><a href="/danh-sach/tien-hiep-hay/" title="Tiên Hiệp Hay">Tiên Hiệp Hay</a></li>
                    <li><a href="/danh-sach/ngon-tinh-sac/" title="Ngôn Tình Sắc">Ngôn Tình Sắc</a></li>
                    <li><a href="/danh-sach/truyen-hot/" title="Truyện Hot">Truyện Hot</a></li>
                    <li><a href="/danh-sach/kiem-hiep-hay/" title="Kiếm Hiệp Hay">Kiếm Hiệp Hay</a></li>
                    <li><a href="/danh-sach/truyen-moi-cap-nhat/" title="Truyện mới cập nhật">Truyện mới cập nhật</a>
                    </li>
                    <li><a style="color: red;" class="tags" title="Truyện tranh" href="https://thichtruyentranh.com/"
                           target="_blank">truyện tranh</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Truyen New
        </div>
        <div class="btn btn-info"> test bootstrap</div>
    </div>
</div>
<!-- jQuery -->
<script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>
<!-- Bootstrap -->
{{--<script src="{{asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>--}}

</body>
</html>
