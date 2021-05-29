
<section class="new_story">
    <div class="container">
        <div class="row row-title">
            <div class="col-md-12 col-lg-3 type_story">

                <div class="book-category">
                    <div class="title_hot">
                        <span>Thể loại truyện</span>
                    </div>
                    <div class="list_type">
                        <ul>
                            @foreach($categoryList as $category)
                                <li class="col-xs-6"><a href="{{route('categories.show', ['key'=>$category->url_key])}}" title="{{$category->name}}">{{$category->name}}</a></li>
                            @endforeach
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