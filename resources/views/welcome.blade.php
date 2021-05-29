@extends('frontend.layouts.main')
@section('title')
    <title>Truyen New</title>
@endsection
@section('css')
    <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">
@endsection

@section('content')
    @include('frontend.layouts.hotstory')
    @include('frontend.layouts.newstory')
    @include('frontend.layouts.storyfinish')
@endsection

@section('js')
    <script src="{{asset('frontend/js/custom.js')}}"></script>
@endsection
