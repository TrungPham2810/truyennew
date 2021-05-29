<section class="story_finish">
    <div class="container">
        <div class="row row-title">


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
                    @if(isset($categoryLayout2))
                        @foreach($categoryLayout2->books()->limit(8)->get() as $book)
                            <div class="col-sm-6 col-md-4  col-lg-3 book-finished full">
                                <a href="{{$book->getFullUrl()}}" class="image_book_finished">
                                    <img class="image-book ls-is-cached lazyloaded" src="{{asset($book->image_path)}}" alt="{{$book->name}}">
                                </a>
                                <div class="info">
                                    <div class="chap">{{$book->countChapter()}} Chương</div>
                                    <a href="{{$book->getFullUrl()}}" title="{{$book->name}}">
                                        <h3>
                                            <div class="name-book">{{$book->name}}</div>
                                        </h3>
                                    </a>
                                    <div class="rate">7.9/10</div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>
</section>