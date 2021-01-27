@extends('admin.layouts.admin')
@section('title')
    <title>Add Tags</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="right_col" role="main" style="min-height: 1661px;">
        @include('admin.layouts.content-header', ['name'=>'Tags', 'action' => 'Add'])
        <!-- Main content -->
        <div class="content">
            @if(session('message'))
                <div class="alert alert-danger">{{session('message')}}</div>
            @endif
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 p-2">
                        <form method="POST" action="{{ route('admin.tags.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInput">Tag Name</label>
                                <input type="text" class="form-control @error('tag_name') is-invalid @enderror" value="{{old('tag_name')}}" required name="tag_name" id="exampleInput" placeholder="Name Tag">
                                @error('tag_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Url Key (don't have space, special charactor, capitalize letter.)</label>
                                <input type="text" pattern="[a-z0-9_\-^]+" class="form-control @error('url_key') is-invalid @enderror" value="{{old('url_key')}}" required name="url_key" id="exampleInput" placeholder="Url Key">
                                @error('url_key')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection