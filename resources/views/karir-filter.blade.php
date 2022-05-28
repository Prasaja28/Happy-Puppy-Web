@extends('layout-komponen.master')

@section('title', 'Karir')
<!-- name title -->

@section('css-internal')
    <!-- Add tag css in here -->
    <style>
        .header1 {
            min-height: 29vh;
            background: no-repeat center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position: right;
            background-image: url('/img/karir.png')
        }

        #txt1 {
            color: white;
            position: absolute;
            bottom: 3.5rem;
            text-align: justify;
            margin: 0;
            font-size: 35px;
            font-weight: bold;
            min-height: 500px;
            text-indent: 1in;
        }

        .lowongan {
            width: 100%;
            background-color: #221E40;
            font-family: 'Poppins';
            padding: 2.5rem 3rem 4.5rem
        }

        h6 {
            color: #ffffff;
            font-size: 18px;
        }

        .container {
            font-family: 'Poppins';
        }

        .content {
            margin: -50px 100px 0px 250px;
            width: 80%;
            padding: 30px;
            font-family: 'Poppins';
            border-radius: none;
        }

        td {
            font-size: 15px;
            border-top: 0px;
        }

        .btn {
            color: white;
            background-color: #344072;
            font-family: 'Poppins';
            font-size: 13px;
            width: 100%;
        }

        .karir-dsc {
            text-align: center;
        }

        .karir-dsc p {
            line-height: 3em;
        }

        .table .tr-inputs th {
            position: relative;
            padding: 0;
            padding-bottom: 1.2rem;
            margin: 0;
        }

        .table .tr-inputs div {
            position: absolute;
            display: inline-block;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .table input {
            width: 100%;
            box-sizing: border-box;
        }

        .btn-primary {
            color: white;
            background-color: #221E40;
            font-family: 'Poppins';
            font-size: 13px;
            margin-top: 60px;
            width: 13%;
            border-radius: 30px;
        }

        .grid-container {
            display: none;
        }

        /* @media(max-width:600px) {
                                            #txt1 {
                                                font-size: 35px;
                                                margin-bottom: -12rem;
                                                margin-left: -5rem;
                                            }

                                            .table .tr-inputs th {
                                                position: relative;
                                                padding: 0;
                                                padding-bottom: 1.2rem;
                                                margin: 0 0 0.5rem 0;
                                            }

                                            .lowongan {
                                                display: none;
                                            }

                                            h6 {
                                                color: #ffffff;
                                                margin-top: -75px;
                                                font-size: 18px;
                                            }

                                            .table {
                                                margin-left: -5.5rem;
                                                margin-top: 4rem;
                                            }


                                            .grid-container {
                                                margin-left: -107px;
                                                display: grid;
                                                column-gap: 10px;
                                                row-gap: 15px;
                                                grid-template-columns: 115px 115px 115px;
                                                grid-template-rows: 105px 105px;
                                                padding: 10px;

                                            }

                                            .grid-item {
                                                background-image: url('/img/karir.png');
                                                background-position: center;
                                                background-repeat: no-repeat;
                                                background-size: cover;
                                                border: 1px solid rgba(0, 0, 0, 0.8);
                                                padding: 55px 5px 10px 5px;
                                            }

                                            b#item {
                                                font-size: 13px;
                                                color: #ffffff;
                                                margin-top: 5px;
                                                margin-right: 5px;
                                                border-bottom: 3px solid rgb(206, 135, 44);
                                                padding-bottom: 2px;
                                                position: absolute;
                                                width: 5%;
                                            }
                                        } */

    </style>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

@endsection
@section('navbar-profile', 'active')
@section('konten')
    <div class="header1 d-flex">
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
        <div class="table px-2 px-lg-5" style="margin-top: -95px;">
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
                                    style="font-size: 13px; height: 3rem;"><b>FILTER</b></button>
                            </th>
                        </form>
                    </tr>
                </thead>
                <tbody>
                    <p class="text-warning">Search Result for '{{$nama_job}}' at '{{$lokasi}}'</p>
                    @foreach ($jobs as $j)
                        <tr>
                            <td>
                                <p style="font-size: 15px;">{{ $j->name_job }}</p>
                            </td>
                            <td>
                                <p style="font-size: 15px;">{{ $j->location }}</p>
                            </td>
                            <td>
                                <a href="{{ route('karirForm', ['jobvacancy_id' => $j->id]) }}" type="button"
                                    class="btn btn-primary" id="apply"
                                    style="font-size: 13px; height: 3rem; width:100%; margin-top:0rem; padding-top:0.75rem">APPLY</a>
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
        //if mobile device set lowtext to padding right 5rem
        if ($(window).width() < 600) {
               $('.lowtext').css("padding-right", "5rem");
            }
    </script>
@endsection
