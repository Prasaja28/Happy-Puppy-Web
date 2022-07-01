@extends('layout-komponen.master')

@section('title', 'Outlet List')
<!-- name title -->

@section('css-internal')

<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/lokasi-outlet.css') }}">


@endsection
@section('navbar-news', 'active')
@section('konten')
<!-- add konten in here -->
<!-- background Home -->
<div class="header" style="background-image: url('{{ $settings['banner_lokasi'] }}')">
    <div class="container-fluid blur-color text-white p-5">
        <!-- <h2 class="mt-5 font-weight-bold">Surabaya</h2> -->
        <h2 class="mt-5 font-weight-bold">{{ $keyword }}</h2>
        <h4>OUTLET</h4>
    </div>
</div>
<!-- end background home -->
<div class="search-result">
    <div class="container py-5">
        <h5>Search Result for {{ $keyword }}</h5>
    </div>
</div>
<div class="card-outlet">
</div>
<div class="container card-container">
    <!-- Windows Card view -->
    <div id="windows-view-card">
        <div class="row">
            @foreach ($outlet as $o)
            <div class="col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="/uploads/{{ $o->thumbnail }}" alt="image">
                    <div class="card-body">
                        <h5 class="card-title text-center font-weight-bold">{{ $o->outlet_name }}</h5>
                        <p class="card-text text-center">
                            {{ $o->address }}, {{ $o->district_name }}, {{ $o->regency_name }}, {{ $o->province_name }}
                            <br>
                            Tel. <a href="tel:{{ $o->phone }}">{{ $o->phone }}</a>
                            <br>
                            @if (!empty($o->fax))
                            fax. {{ $o->fax }}
                            @endif
                            <br>
                            {{ $o->email }}
                        </p>
                        <center>
                            @if (!empty($o->link_ig))
                            <a href="{{ $o->link_ig }}" class="btn btn-light"><i class="fab fa-instagram fa-lg"></i></a>
                            @endif
                            @if (!empty($o->link_2))
                            <a href="{{ $o->link_2 }}" class="btn btn-light"><i class="fas fa-square fa-lg"></i></i></a>
                            @endif
                        </center>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- end windows card view -->
    <div id="mobile-view-card">
        <div class="row">
            @foreach ($outlet as $o)
            <div class="col-12">
                <div class="card card-news-popular">
                    <div class="row no-gutters">
                        <div class="col-6">
                            <img src="/uploads/{{ $o->thumbnail }}" class="card-img-top card-img-news" alt="image">
                        </div>
                        <div class="col-6">
                            <div class="card-body">
                                <h5 class="card-title text-center font-weight-bold">{{ $o->outlet_name }}</h5>
                                <p class="card-text text-center">
                                    {{ $o->address }},{{$o->district_name}} , {{ $o->regency_name }}, {{ $o->province_name }}
                                    <br>
                                    Tel. {{ $o->phone }}
                                    <br>
                                    {{$o->city_id}}
                                    <br>
                                    @if (!empty($o->fax))
                                    fax. {{ $o->fax }}
                                    @endif
                                    <br>
                                    {{ $o->email }}
                                </p>
                                <center>
                                    @if (!empty($o->link_ig))
                                    <a href="{{ $o->link_ig }}" class="btn btn-light"><i class="fab fa-instagram fa-lg"></i></a>
                                    @endif
                                    @if (!empty($o->link_2))
                                    <a href="{{ $o->link_2 }}" class="btn btn-light"><i class="fas fa-square fa-lg"></i></i></a>
                                    @endif
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="card-outlet-bottom-background">

</div>
<script>
    var width = screen.width;
    if (width < 600) {
        document.getElementById('mobile-view-card').style.display = 'block';
        document.getElementById('windows-view-card').style.display = 'none';
    } else {
        document.getElementById('windows-view-card').style.display = 'block';
        document.getElementById('mobile-view-card').style.display = 'none';
    }
</script>
@endsection

@section('js-internal')
<!-- add tag js in here -->
@endsection
