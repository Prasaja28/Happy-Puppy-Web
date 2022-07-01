@extends('layout-komponen.master')

@section('title', 'Not Found Error')
<!-- name title -->

@section('css-internal')

<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/lokasi-not.css') }}">


@endsection
@section('navbar-news', 'active')
@section('konten')
    <!-- add konten in here -->
    <!-- background Home -->
    <div class="header" style="background-image: url('{{ $settings['banner_lokasi_not_found'] }}')">
        <div class="color-background ">
            <h1 class="font-weight-bold">Sorry,</h1>
            <h4>Lokasi tidak Ditemukan</h4>
        </div>
    </div>
@endsection

@section('js-internal')
    <!-- add tag js in here -->

@endsection
