@extends('frontend.layouts.main')
@section('title')
    <title>{{$tag->name}}</title>
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
                            <span class="label_book">{{$tag->name}}</span>
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
                                        @foreach($categoryList as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
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
                            <a href="#" class="title_hot"><span>{{$tag->name}}</span><i class="fas fa-angle-right"></i></a>
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
                                <p>{{$tag->description}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="table-list pc">
                        <table>
                            <tbody>
                            @foreach($books as $book)
                                <tr>
                                    <td class="image ">
                                        <a href="{{$book->getFullUrl()}}" title="{{$book->name}}">
                                            <img class="image-book" src="{{asset($book->image_path)}}" alt="{{$book->name}}">
                                        </a>
                                    </td>
                                    <td class="info">
                                        <div class="chap_mobile">
                                            @if($chapter = $book->lastestChapter())
                                                <a href="{{$chapter->getFullUrl()}}" title="{{$chapter->name}}">
                                                    Chương {{str_replace("chuong-","",$chapter->url_key)}}
                                                </a>
                                            @endif
                                        </div>
                                        <h3 class="rv-home-a-title">
                                            <a href="{{$book->getFullUrl()}}" title="{{$book->name}}">{{$book->name}}</a>
                                        </h3>
                                        <div class="meta">
                                            <div class="rate">6.8/10</div>
                                            <div class="view">11125</div>
                                        </div>
                                        <p class="book-status">Trạng thái: Đang ra</p>
                                        <p class="author">Tác giả:
                                            <a itemprop="author" class="rv-sr-a" href="{{$book->getFullUrl()}}" title="{{$book->author->name}}">
                                                {{$book->author->name}}
                                            </a>
                                        </p>
                                        <p class="tab-type">Thể loại:
                                            <a itemprop="genre" class="rv-sr-a" href="{{route('categories.show', ['key'=>$book->bookParent->url_key])}}" title="{{$book->bookParent->name}}">
                                                {{$book->bookParent->name}}
                                            </a>
                                        </p>
                                    </td>
                                    <td class="chap">
                                        @if($chapter = $book->lastestChapter())
                                            <a href="{{$chapter->getFullUrl()}}" title="{{$chapter->name}}">
                                                Chương {{str_replace("chuong-","",$chapter->url_key)}}
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="toolbar-page">
                            {{ $books->links() }}
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">

                    <div class="book-category">
                        <div class="title_hot">
                            <span>Thể loại truyện</span>
                        </div>
                        <div class="list_type">
                            <ul>
                                @foreach($categoryList as $category)
                                    <li><a href="{{route('categories.show', ['key'=>$category->url_key])}}" title="{{$category->name}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                            <ul>
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
@endsection

@section('js')
    <script src="{{asset('frontend/js/custom.js')}}"></script>
    <script src="{{asset('frontend/js/list.js')}}"></script>
@endsection
