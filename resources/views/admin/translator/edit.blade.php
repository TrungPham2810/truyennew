@extends('admin.layouts.admin')
@section('title')
    <title>Edit Translator</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="right_col" role="main" style="min-height: 1661px;">
    @include('admin.layouts.content-header', ['name'=>'Translator', 'action' => 'Edit'])
    <!-- Main content -->
        <div class="content">
            @if(session('message'))
                <div class="alert alert-danger">{{session('message')}}</div>
            @endif
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 p-2">
                        <form method="POST" action="{{ route('admin.translator.update', ['id'=>$translator->id]) }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInput">Tên Dịch Giả</label>
                                <input type="text" class="form-control @error('translator_name') is-invalid @enderror" value="{{$translator->name}}" required name="translator_name" id="exampleInput" placeholder="Tên dịch giả">
                                @error('translator_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Miêu Tả</label>
                                <textarea class="form-control" name="description" id="description" rows="5">{{$translator->description}}</textarea>
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