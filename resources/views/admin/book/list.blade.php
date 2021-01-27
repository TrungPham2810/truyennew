@extends('admin.layouts.admin')
@section('title')
    <title>Danh Sach Truyen</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="right_col" role="main" style="min-height: 1661px;">
    @include('admin.layouts.content-header', ['name'=>'Book', 'action' => 'List'])
        <!-- Main content -->
        <div class="content">
            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 p-2">
                        <a href="{{route('admin.books.create')}}" class="btn btn-primary float-right">Add Book</a>
                    </div>
                    <div class="col-sm-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Url Key</th>
                                <th>Author</th>
                                <th>State</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $book)
                                <tr>
                                    <td>{{$book->id}}</td>
                                    <td><img class="small_image_book" style="" src="{{asset($book->image_path)}}" alt="{{$book->image_name}}"></td>
                                    <td>{{$book->name}}</td>
                                    <td>
                                        {{optional($book->bookParent)->name}}
                                    </td>
                                    <td>{{$book->url_key}}</td>
                                    <td>{{optional($book->author)->name}}</td>
                                    <td>
                                        {{ $book->state}}
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="{{route('admin.books.edit', ['id'=>$book->id])}}">Edit</a>
                                        <button class="btn btn-danger delete_book" data-url="{{route('admin.books.delete', ['id'=>$book->id])}}">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="col-sm-12">
                        {{ $data->links() }}
                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('js')
    <script src="{{asset('admins/assets/list/list.js')}}"></script>
    <script src="{{asset('vendors/sweetAlert2/sweetalert2@10.js')}}"></script>
@endsection