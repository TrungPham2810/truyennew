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
    <section class="section-show-book">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-9">

                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#" class="title_hot"><span>Kiếm Hiệp</span><i class="fas fa-angle-right"></i></a>
                        </div>
                        <div class="col-xs-6">
                            <div class="switch-layout">
                                <div class="grid"><a href="#"></a></div>
                                <div class="list active-list"><a href="#"></a></div>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="description-category">
                                <p>Truyện thường xoay quanh cuộc đời của nhân vật chính, quá trình rèn luyện, trưởng thành, tìm kiếm, học tập các bí kíp võ công, cùng những cuộc phiêu lưu, truy đuổi, chém giết... đầy nguy hiểm và cơ hội trong giới võ lâm giang hồ.</p>
                            </div>
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
