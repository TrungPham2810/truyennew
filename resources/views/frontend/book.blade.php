@extends('frontend.layouts.main')
@section('title')
    <title>{{$book->name}}</title>
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
                            <span class="label_book">{{$book->name}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section-show-book">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-9">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                          <div>
                              <img class="image-book" src="{{asset($book->image_path)}}" alt="{{$book->name}}">
                          </div>
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <div class="info-book">
                                <div class="title">
                                    <h2 class="rv-home-a-title">
                                      <a href="{{$book->getFullUrl()}}" title="{{$book->name}}">{{$book->name}}</a>
                                    </h2>
                                </div>
                                <div class="content">
                                    <div class="info">
                                        <div class="author">
                                            Tác Giả: {{$book->author->name}}
                                        </div>
                                        <div class="type">
                                            Thể Loại:
                                            <a itemprop="genre" class="rv-sr-a" href="{{route('categories.show', ['key'=>$book->bookParent->url_key])}}" title="{{$book->bookParent->name}}">
                                                {{$book->bookParent->name}}
                                            </a>
                                        </div>
                                        <div class="resource">
                                            <p>Nguồn: <span class="rv-sr-s-a">Internet</span></p>
                                        </div>
                                        <div class="status">
                                            <p>Trạng thái: <span>Đang ra</span></p>
                                        </div>
                                        <div class="description_book">
                                            {!! $book->description !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="list-chapter">
                        <div class="row">
                            @foreach($chapters as $chapter)
                                <div class="col-md-12 col-lg-6">
                                    <a href="{{$chapter->getFullUrl()}}" class="chapter" title="{{$chapter->name}}" style="color: #007f61">{{$chapter->name}}</a>
                                </div>
                            @endforeach
                        </div>
                        <div class="toolbar-page">
                            {{ $chapters->links() }}
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
