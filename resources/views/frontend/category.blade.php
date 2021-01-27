@extends('frontend.layouts.main')
@section('title')
    <title>Truyen Tiên Hiệp</title>
@endsection
@section('css')
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/list.css')}}" rel="stylesheet">
@endsection

@section('content')

    <section class="section-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="menu breadcrumb">
                        <li><a href="/" title="truyen"><i class="fas fa-home"></i><span>Truyện</span></a></li>
                        <li class="active">
                            <span class="label_book">Kiếm Hiệp</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section-search">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-advance">
                        <form action="" method="POST" id="search-form">
                            @csrf
                            <div class="select-filter">
                                <div>
                                    <select name="ct" id="ct">
                                        <option value="">Tất cả</option>
                                        <option value="A1">Tiên Hiệp</option>
                                        <option value="A2" selected="">Kiếm Hiệp</option>
                                        <option value="A3">Ngôn Tình</option>
                                    </select>

                                </div>
                                <div>
                                    <select name="order" id="filter">
                                        <option value="0">Xếp Theo</option>
                                        <option value="0">Truyện Mới Update</option>
                                        <option value="8">Truyện Mới</option>
                                    </select>
                                </div>
                                <div>
                                    <select name="greater" id="so-chuong">
                                        <option value="0">Số Chương &gt; 0</option>
                                        <option value="10">Số Chương &gt; 10</option>
                                        <option value="20">Số Chương &gt; 20</option>
                                        <option value="50">Số Chương &gt; 50</option>
                                        <option value="100">Số Chương &gt; 100</option>
                                        <option value="200">Số Chương &gt; 200</option>
                                        <option value="500">Số Chương &gt; 500</option>
                                        <option value="1000">Số Chương &gt; 1000</option>
                                    </select>
                                </div>
                                <div>
                                    <select name="lesser" id="so-chuong-2">
                                        <option value="1000000000">Số Chương &lt; 1 Tỷ</option>
                                        <option value="10">Số Chương &lt; 10</option>
                                        <option value="20">Số Chương &lt; 20</option>
                                        <option value="50">Số Chương &lt; 50</option>
                                        <option value="100">Số Chương &lt; 100</option>
                                        <option value="200">Số Chương &lt; 200</option>
                                        <option value="500">Số Chương &lt; 500</option>
                                        <option value="1000">Số Chương &lt; 1000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search-check">
                                <div class="check">
                                    <input type="checkbox" name="full" value="full"/>
                                    <span class="rv-sr-a">Truyện full</span>
                                </div>
                                <div class="check">
                                    <input type="checkbox" name="hot" value="hot"/>
                                    <span class="rv-sr-a">Truyện hot</span>
                                </div>
                            </div>

                            <button type="submit" value="Tìm Truyện">Tìm Truyện</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="section-show-book type_list">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-9">

                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#" class="title_hot"><span>Kiếm Hiệp</span><i class="fas fa-angle-right"></i></a>
                        </div>
                        <div class="col-xs-6">
                            <div class="switch-layout">
                                <div class="grid"><i class="fas fa-th"></i></div>
                                <div class="list active"><i class="fas fa-list"></i></div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="description-category">
                                <p>Truyện thường xoay quanh cuộc đời của nhân vật chính, quá trình rèn luyện, trưởng
                                    thành, tìm kiếm, học tập các bí kíp võ công, cùng những cuộc phiêu lưu, truy đuổi,
                                    chém giết... đầy nguy hiểm và cơ hội trong giới võ lâm giang hồ.</p>
                            </div>
                        </div>
                    </div>
                    <div class="table-list pc">
                        <table>
                            <tbody>
                            <tr>
                                <td class="image ">
                                    <a href="/bi-an-doi-long-phuong/" title="Bí Ẩn Đôi Long Phượng">
                                        <img class="image-book" src="{{asset('images/test_image_story.png')}}" alt="Bí Ẩn Đôi Long Phượng">
                                    </a>
                                </td>
                                <td class="info">
                                    <div class="chap_mobile">
                                        <a href="/bi-an-doi-long-phuong/chuong-93/" title="Bí Ẩn Đôi Long Phượng Chương 93">
                                            C93
                                        </a>
                                    </div>
                                    <h3 class="rv-home-a-title">
                                        <a href="/bi-an-doi-long-phuong/" title="Bí Ẩn Đôi Long Phượng">Bí Ẩn Đôi Long Phượng</a>
                                    </h3>
                                    <div class="meta">
                                        <div class="rate">6.8/10</div>
                                        <div class="view">11125</div>
                                    </div>
                                    <p class="book-status">Trạng thái: Đang ra</p>
                                    <p class="author">Tác giả:
                                        <a itemprop="author" class="rv-sr-a" href="/tac-gia/kieu-gia-tieu-kieu/" title=" Kiều Gia Tiểu Kiều">
                                            Kiều Gia Tiểu Kiều
                                        </a>
                                    </p>
                                    <p class="tab-type">Thể loại:
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/ngon-tinh/" title="Ngôn Tình">
                                            Ngôn Tình
                                        </a>,
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/co-dai/" title="Cổ Đại">
                                            Cổ Đại
                                        </a>,
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/quan-truong/" title="Quan Trường">
                                            Quan Trường
                                        </a>,
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/trinh-tham/" title="Trinh Thám">
                                            Trinh Thám
                                        </a>,
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/truyen-sung/" title="Truyện Sủng">
                                            Truyện Sủng
                                        </a>
                                    </p>
                                </td>
                                <td class="chap">
                                    <a href="/bi-an-doi-long-phuong/chuong-93/" title="Bí Ẩn Đôi Long Phượng Chương 93">
                                        Chương 93
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="image ">
                                    <a href="/bi-an-doi-long-phuong/" title="Bí Ẩn Đôi Long Phượng">
                                        <img class="image-book" src="{{asset('images/test_image_story.png')}}" alt="Bí Ẩn Đôi Long Phượng">
                                    </a>
                                </td>
                                <td class="info">
                                    <div class="chap_mobile">
                                        <a href="/bi-an-doi-long-phuong/chuong-93/" title="Bí Ẩn Đôi Long Phượng Chương 93">
                                            C93
                                        </a>
                                    </div>
                                    <h3 class="rv-home-a-title">
                                        <a href="/bi-an-doi-long-phuong/" title="Bí Ẩn Đôi Long Phượng">Bí Ẩn Đôi Long Phượng</a>
                                    </h3>
                                    <div class="meta">
                                        <div class="rate">6.8/10</div>
                                        <div class="view">11125</div>
                                    </div>
                                    <p class="book-status">Trạng thái: Đang ra</p>
                                    <p class="author">Tác giả:
                                        <a itemprop="author" class="rv-sr-a" href="/tac-gia/kieu-gia-tieu-kieu/" title=" Kiều Gia Tiểu Kiều">
                                            Kiều Gia Tiểu Kiều
                                        </a>
                                    </p>
                                    <p class="tab-type">Thể loại:
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/ngon-tinh/" title="Ngôn Tình">
                                            Ngôn Tình
                                        </a>,
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/co-dai/" title="Cổ Đại">
                                            Cổ Đại
                                        </a>,
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/quan-truong/" title="Quan Trường">
                                            Quan Trường
                                        </a>,
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/trinh-tham/" title="Trinh Thám">
                                            Trinh Thám
                                        </a>,
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/truyen-sung/" title="Truyện Sủng">
                                            Truyện Sủng
                                        </a>
                                    </p>
                                </td>
                                <td class="chap">
                                    <a href="/bi-an-doi-long-phuong/chuong-93/" title="Bí Ẩn Đôi Long Phượng Chương 93">
                                        Chương 93
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="image ">
                                    <a href="/bi-an-doi-long-phuong/" title="Bí Ẩn Đôi Long Phượng">
                                        <img class="image-book" src="{{asset('images/test_image_story.png')}}" alt="Bí Ẩn Đôi Long Phượng">
                                    </a>
                                </td>
                                <td class="info">
                                    <div class="chap_mobile">
                                        <a href="/bi-an-doi-long-phuong/chuong-93/" title="Bí Ẩn Đôi Long Phượng Chương 93">
                                            C93
                                        </a>
                                    </div>
                                    <h3 class="rv-home-a-title">
                                        <a href="/bi-an-doi-long-phuong/" title="Bí Ẩn Đôi Long Phượng">Bí Ẩn Đôi Long Phượng</a>
                                    </h3>
                                    <div class="meta">
                                        <div class="rate">6.8/10</div>
                                        <div class="view">11125</div>
                                    </div>
                                    <p class="book-status">Trạng thái: Đang ra</p>
                                    <p class="author">Tác giả:
                                        <a itemprop="author" class="rv-sr-a" href="/tac-gia/kieu-gia-tieu-kieu/" title=" Kiều Gia Tiểu Kiều">
                                            Kiều Gia Tiểu Kiều
                                        </a>
                                    </p>
                                    <p class="tab-type">Thể loại:
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/ngon-tinh/" title="Ngôn Tình">
                                            Ngôn Tình
                                        </a>,
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/co-dai/" title="Cổ Đại">
                                            Cổ Đại
                                        </a>,
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/quan-truong/" title="Quan Trường">
                                            Quan Trường
                                        </a>,
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/trinh-tham/" title="Trinh Thám">
                                            Trinh Thám
                                        </a>,
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/truyen-sung/" title="Truyện Sủng">
                                            Truyện Sủng
                                        </a>
                                    </p>
                                </td>
                                <td class="chap">
                                    <a href="/bi-an-doi-long-phuong/chuong-93/" title="Bí Ẩn Đôi Long Phượng Chương 93">
                                        Chương 93
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="image ">
                                    <a href="/bi-an-doi-long-phuong/" title="Bí Ẩn Đôi Long Phượng">
                                        <img class="image-book" src="{{asset('images/test_image_story.png')}}" alt="Bí Ẩn Đôi Long Phượng">
                                    </a>
                                </td>
                                <td class="info">
                                    <div class="chap_mobile">
                                        <a href="/bi-an-doi-long-phuong/chuong-93/" title="Bí Ẩn Đôi Long Phượng Chương 93">
                                            C93
                                        </a>
                                    </div>
                                    <h3 class="rv-home-a-title">
                                        <a href="/bi-an-doi-long-phuong/" title="Bí Ẩn Đôi Long Phượng">Bí Ẩn Đôi Long Phượng</a>
                                    </h3>
                                    <div class="meta">
                                        <div class="rate">6.8/10</div>
                                        <div class="view">11125</div>
                                    </div>
                                    <p class="book-status">Trạng thái: Đang ra</p>
                                    <p class="author">Tác giả:
                                        <a itemprop="author" class="rv-sr-a" href="/tac-gia/kieu-gia-tieu-kieu/" title=" Kiều Gia Tiểu Kiều">
                                            Kiều Gia Tiểu Kiều
                                        </a>
                                    </p>
                                    <p class="tab-type">Thể loại:
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/ngon-tinh/" title="Ngôn Tình">
                                            Ngôn Tình
                                        </a>,
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/co-dai/" title="Cổ Đại">
                                            Cổ Đại
                                        </a>,
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/quan-truong/" title="Quan Trường">
                                            Quan Trường
                                        </a>,
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/trinh-tham/" title="Trinh Thám">
                                            Trinh Thám
                                        </a>,
                                        <a itemprop="genre" class="rv-sr-a" href="/the-loai/truyen-sung/" title="Truyện Sủng">
                                            Truyện Sủng
                                        </a>
                                    </p>
                                </td>
                                <td class="chap">
                                    <a href="/bi-an-doi-long-phuong/chuong-93/" title="Bí Ẩn Đôi Long Phượng Chương 93">
                                        Chương 93
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">

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
                                <li><a href="/the-loai/truyen-nu-cuong/" title="Truyện Nữ Cường">Truyện Nữ Cường</a>
                                </li>
                                <li><a href="/the-loai/truyen-gia-dau/" title="Truyện Gia Đấu">Truyện Gia Đấu</a></li>
                            </ul>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{asset('frontend/js/custom.js')}}"></script>
    <script src="{{asset('frontend/js/list.js')}}"></script>
@endsection
