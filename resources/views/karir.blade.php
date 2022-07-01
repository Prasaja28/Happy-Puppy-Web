@extends('layout-komponen.master')

@section('title', 'Karir')
<!-- name title -->

@section('css-internal')
    <!-- Add tag css in here -->
    <link rel="stylesheet" href="{{ asset('assets/css/karir.css') }}">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

@endsection
@section('navbar-profile', 'active')
@section('konten')
    <div class="header1 d-flex" style="background-image: url('{{ $settings['banner_karir'] }}')">
        <div class="container d-flex header text-white py-5 align-items-end">
            <h2 class="font-weight-bold">{{ __('karir.title1') }}</h2>
        </div>
    </div>
    <br><br>

    <div class="container karir-dsc">
        <p class="lh-lg px-5">
            {{ __('karir.desc1') }}
        </p>
    </div>

    <div class="lowongan p-5 mt-5">
        <div class="container">
            <h6 class="font-weight-bold lowtext">{{ __('karir.title2') }}</h6>
            <div class="grid-container">
                <div class="grid-item waiter"><b id="item">Waiter</b></div>
                <div class="grid-item"><b id="item">Cashier</b></div>
                <div class="grid-item"><b id="item">Chef</b></div>
                <div class="grid-item"><b id="item">Accounting</b></div>
                <div class="grid-item" style="line-height: 90%;"><b id="item">Information<br>Technology</b></div>
                <div class="grid-item"><b id="item">Supervisor</b></div>
            </div>
        </div>
    </div>

    <div class="content" style="margin-left: 1rem;">
    </div>

    <br>
    <div class="container" id="filter">
        <div class="table px-2 px-lg-5" style="margin-top: -4.6rem;">
            <table class="table table-striped mt-3" style="background-color: transparent; ">
                <thead>
                    <tr class="tr-inputs">
                        <form action="{{ route('jobs.filter') }}" method="POST">
                            @csrf
                            <th style="border-top: 0px; padding-left: 0px;">
                                <input type="text" class="form-control"
                                    style="font-size: 15px; height: 3rem; box-shadow: 2px 2px #EFEDED;" name="nama_job"
                                    placeholder="{{ __('karir.search1') }}">
                            </th>
                            <th style="border-top: 0px;">
                                <input type="text" class="form-control"
                                    style="font-size: 15px; height: 3rem; box-shadow: 2px 2px #EFEDED;" name="lokasi"
                                    placeholder="{{ __('karir.search2') }}">
                            </th>
                            <th style="border-top: 0px;">
                                <button type="submit" class="btn"
                                    style="font-size: 13px; height: 3rem;"><b>FILTER</b></button>
                            </th>
                        </form>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobs as $j)
                        <tr>
                            <td>
                                <p style="font-size: 15px;">{{ $j->name_job }}</p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{ $j->location }}</p>
                            </td>
                            <td>
                                <a href="{{ route('karirForm', ['jobvacancy_id' => $j->id]) }}" class="btn btn-primary"
                                    id="apply">{{ __('karir.button') }}</a>
                            </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br>
    {{-- <div id="apply" class="form-group" style="padding-left: 60px;">
        <a href="{{ url('/formkarir') }}" class="btn btn-primary btn-search"
            style="text-transform:uppercase; margin-left:125px; height: 2.3rem;"><b>APPLY NOW</b></a>
    </div> --}}
    <br>
@endsection


@section('js-internal')
    <!-- add tag js in here -->
    <script>
        //  if mobile device set lowtext to padding right 5rem
        if ($(window).width() < 600) {
            $('.lowtext').css("padding-right", "5rem");
        }
    </script>
@endsection
