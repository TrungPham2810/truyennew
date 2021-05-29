<section class="hot_story">
    <div class="container">
        <div class="row row-title">
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
                    @if(isset($categoryLayout1))
                        @foreach($categoryLayout1->books()->limit(12)->get() as $book)
                            <div class="col-md-2 col-xs-4 item_hot_story">
                                @if($book->isFullBook())
                                    <div class="label_story">Full</div>
                                @endif
                                <a href="{{$book->getFullUrl()}}" class="image_story">
                                    <img class="" src="{{asset($book->image_path)}}" alt="{{$book->name}}">
                                </a>
                                <a href="{{$book->getFullUrl()}}">
                                    <div class="name-book">{{$book->name}}</div>
                                </a>
                                <div class="rate">7.9/10</div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>

</section>