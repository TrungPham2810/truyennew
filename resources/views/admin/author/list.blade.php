@extends('admin.layouts.admin')
@section('title')
    <title>List Author</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="right_col" role="main" style="min-height: 1661px;">
    @include('admin.layouts.content-header', ['name'=>'Author', 'action' => 'List'])
        <!-- Main content -->
        <div class="content">
            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 p-2">
                        <a href="{{route('admin.author.create')}}" class="btn btn-primary float-right">Add Author</a>
                    </div>
                    <div class="col-sm-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Url Key</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $author)
                                <tr>
                                    <td>{{$author->id}}</td>
                                    <td>{{$author->name}}</td>
                                    <td>{{$author->url_key}}</td>
                                    <td>{{$author->description}}</td>

                                    <td>
                                        <a class="btn btn-info" href="{{route('admin.author.edit', ['id'=>$author->id])}}">Edit</a>
                                        <button class="btn btn-danger delete_author" data-url="{{route('admin.author.delete', ['id'=>$author->id])}}">Delete</button>
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