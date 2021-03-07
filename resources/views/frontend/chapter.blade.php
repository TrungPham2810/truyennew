@extends('frontend.layouts.main')
@section('title')
    <title>{{$book->name}}</title>
@endsection
@section('css')
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/list.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/chapter.css')}}" rel="stylesheet">
@endsection

@section('content')

    <section class="section-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="menu breadcrumb">
                        <li><a href="/" title="truyen"><i class="fas fa-home"></i><span>Truyện</span></a></li>
                        <li>
                            <a href="{{$book->getFullUrl()}}"
                               title="{{$book->name}}"><span>{{$book->name}}</span></a>
                        </li>
                        <li class="active">
                            <span class="label_book">{{$chapter->name}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="full-story">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="rv-full-story-title"><h1 class="rv-full-story-title">{{$book->name}}</h1></div>
                    <div class="rv-chapt-title"><h2><a href="" title="">{{$chapter->name}}</a></h2></div>
                    <div class="pagination_chapter">
                        <ul>
                            @if($previous = $chapter->getPreviousChap())
                                <li class="pre">
                                    <a href="{{$previous->getFullUrl()}}"><i class="fas fa-chevron-left"></i></a>
                                </li>
                            @endIf

                            <li class="list"><span class="sst-icon-list" data-current-chapter="{{$chapter->id}}" data-book-id="{{$book->id}}" data-url="{{route('frontend.listchapter')}}"><i class="fas fa-list"></i></span></li>

                            @if($next = $chapter->getNextChap())
                                <li class="next">
                                    <a href="{{$next->getFullUrl()}}"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            @endIf

                        </ul>
                    </div>
                    <div class="content_wrap">
                        {!! $chapter->content !!}
                    </div>

                    <div class="pagination_chapter">
                        <ul>
                            @if($previous = $chapter->getPreviousChap())
                                <li class="pre">
                                    <a href="{{$previous->getFullUrl()}}"><i class="fas fa-chevron-left"></i></a>
                                </li>
                            @endIf

                            <li class="list"><span class="sst-icon-list" data-current-chapter="{{$chapter->id}}" data-book-id="{{$book->id}}" data-url="{{route('frontend.listchapter')}}"><i class="fas fa-list"></i></span></li>

                            @if($next = $chapter->getNextChap())
                                <li class="next">
                                    <a href="{{$next->getFullUrl()}}"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            @endIf
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{asset('frontend/js/custom.js')}}"></script>
    <script src="{{asset('frontend/js/list.js')}}"></script>
    <script src="{{asset('frontend/js/chapter.js')}}"></script>
@endsection
