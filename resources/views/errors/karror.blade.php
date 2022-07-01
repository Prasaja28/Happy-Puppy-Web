@extends('layout-komponen.master')

@section('title', 'Karir')
<!-- name title -->

@section('css-internal')
    <!-- Add tag css in here -->
    <link rel="stylesheet" href="{{ asset('assets/css/karir-f.css') }}">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

@endsection
@section('navbar-profile', 'active')
@section('konten')
    <div class="header1 d-flex" style="background-image: url('{{ $settings['banner_karir'] }}')">
        <div class="container d-flex header text-white py-5 align-items-end">
            <h2 class="font-weight-bold">KARIR</h2>
        </div>
    </div>
    <br><br>

    <div class="container karir-dsc">
        <p class="lh-lg px-5">
            HAPPY PUPPY memberikan kesempatan bagi semua pegawai untuk mengembangkan karir mulai dari level dasar sampai
            mencapai level tertinggi melalui jenjang karir yang telah disusun dengan baik
        </p>
    </div>

    <div class="lowongan mt-5">
        <div class="container">
            <h6 class="font-weight-bold lowtext">LOWONGAN TERSEDIA</h6>
            <div class="grid-container">
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
                                    placeholder="Pilih Pekerjaan">
                            </th>
                            <th style="border-top: 0px;">
                                <input type="text" class="form-control"
                                    style="font-size: 15px; height: 3rem; box-shadow: 2px 2px #EFEDED;" name="lokasi"
                                    placeholder="Pilih Lokasi">
                            </th>
                            <th style="border-top: 0px;">
                                <button type="submit" class="btn"
                                    style="font-size: 13px; height: 3rem;"><b>Filter</b></button>
                            </th>
                        </form>
                    </tr>
                </thead>
                <p class="text-warning" style="margin-top: -86px">Search Result for '{{ $nama_job }}' at
                    '{{ $lokasi }}'</p>
            </table>
            <center>
                <h4>Data Tidak itemukan</h4>
            </center>
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
@endsection
