@extends('admin.layouts.admin')
@section('title')
    <title>Add Book</title>
@endsection
@section('css')
    <link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet"/>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="right_col" role="main" style="min-height: 1661px;">
    @include('admin.layouts.content-header', ['name'=>'Book', 'action' => 'Add'])
    <!-- Main content -->
        <div class="content">
            @if(session('message'))
                <div class="alert alert-danger">{{session('message')}}</div>
            @endif

            <form method="POST" action="{{ route('admin.books.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-sm-6 p-2">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Truyện</label>
                                <input type="text" class="form-control @error('book_name') is-invalid @enderror"
                                       value="{{old('book_name')}}" name="book_name" id="" placeholder="Tên Truyện" required>
                                @error('book_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Url Key (don't have space, special charactor, capitalize letter.)</label>
                                <input type="text" pattern="[a-z0-9_\-^]+" class="form-control @error('url_key') is-invalid @enderror"
                                       value="{{old('url_key')}}" required name="url_key" id="" placeholder="url key">
                                @error('url_key')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Category</label>
                                <select class="form-control select2_init @error('category_id') is-invalid @enderror"
                                        id="exampleFormControlSelect1" name="category_id" required>
                                    {!! $htmlSelect !!}
                                </select>
                                @error('category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tags</label>
                                <select class="form-control tags_select" required name="tags[]" multiple="multiple">
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image</label>
                                <input type="file" class="form-control-file" name="image_path" id="book_image">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Author</label>
                                <select class="form-control author" name="author_id" required>
                                    <option value="">Please select author...</option>
                                    @foreach($authors as $author)
                                        <option value="{{$author->id}}">{{$author->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Miêu Tả</label>
                                <textarea rows="8" name="description" class="form-control tinymce_editor_int ">{{old('description')}}</textarea>

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
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection