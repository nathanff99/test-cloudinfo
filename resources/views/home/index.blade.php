@extends('layouts.app')

@section('content')
    <banner-full-width :banners="{{ $banners }}">
    </banner-full-width>

    <search></search>
@endsection
