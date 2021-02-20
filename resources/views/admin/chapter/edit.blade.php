@extends('admin.layouts.admin')
@section('title')
    <title>Edit Chapter</title>
@endsection
@section('css')
    <link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet"/>
@endsection
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="right_col" role="main" style="min-height: 1661px;">
    @include('admin.layouts.content-header', ['name'=>'Chapter', 'action' => 'Edit'])
    <!-- Main content -->
        <div class="content">
            @if(session('message'))
                <div class="alert alert-danger">{{session('message')}}</div>
            @endif

                <form method="POST" action="{{ route('admin.chapter.update',['id'=>$chapter->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 p-2">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Chapter</label>
                                    <input type="text" class="form-control @error('chapter_name') is-invalid @enderror"
                                           value="{{$chapter->name}}" name="chapter_name" id="" placeholder="Tên Chapter" required>
                                    @error('chapter_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Url Key (don't have space, special charactor, capitalize letter.)</label>
                                    <input type="text" pattern="[a-z0-9_\-^]+" class="form-control @error('url_key') is-invalid @enderror"
                                           value="{{$chapter->url_key}}" required name="url_key" id="" placeholder="url key">
                                    @error('url_key')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                @if(isset($books))
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Truyện</label>
                                        <select class="form-control select2_init @error('book_id') is-invalid @enderror"
                                                id="exampleFormControlSelect1" name="book_id" required>
                                            <option value="">Vui lòng chọn truyện...</option>
                                            @foreach($books as $book)
                                                <option value="{{$book->id}}" {{($book->id == $chapter->book_id)? "selected": ""}}>{{$book->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('book_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endif

                                @if(isset($translators))
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Người Dịch</label>
                                        <select class="form-control translator_select @error('translator_id') is-invalid @enderror" required name="translator_id">
                                            <option value="">Vui lòng chọn dịch giả...</option>
                                            @foreach($translators as $translator)
                                                <option value="{{$translator->id}}" {{($translator->id == $chapter->translator_id)? "selected": ""}}>{{$translator->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('translator_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endif
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nội Dung</label>
                                    <textarea rows="8" name="content_chapter" class="form-control tinymce_editor_int ">{{$chapter->content}}</textarea>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </form>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('js')
    <script src="{{asset('vendors/select2/select2.min.js')}}"></script>
    <script src="{{asset('admins/assets/product/add/add.js')}}"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endsection