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
            bottom: 175px;
            text-align: justify;
            margin: 0;
            font-size: 35px;
            font-weight: bold;
            min-height: 500px;
            text-indent: 1in;
        }

        .lowongan {
            margin: auto;
            margin-top: 50px;
            width: 100%;
            padding: 60px;
            padding-left: 110px;
            background-color: #221E40;
            font-family: 'Poppins';
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
            width: 130%;
        }

        table {}

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

        @media(max-width:600px) {
            #txt1 {
                font-size: 35px;
                margin-bottom: -190px;
                margin-left: -75px
            }

            .lowongan {
                width: 100%;
                padding-top: 100px;
                padding-bottom: 10px;
                background-image: linear-gradient(#221E40 75%, #ffffff 50%, #ffffff);
                font-family: 'Poppins';
            }

            b#low {
                margin-left: -150px;
            }

            h6 {
                color: #ffffff;
                margin-top: -75px;
                font-size: 18px;
            }

            table {
                display: none;
            }

            #apply {
                display: none;
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
                margin-top: 20px;
                margin-right: 5px;
            }
        }

    </style>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

@endsection
@section('navbar-profile', 'active')
@section('konten')

    <div class="header1">
        <div id="txt1" class="container" style="text-align: justify; text-indent: 1in;">
            <p>KARIR</p>
        </div>
    </div>
    <br><br>

    <div class="container" style="text-align: center; ">
        HAPPY PUPPY memberikan kesempatan bagi semua pegawai untuk mengembangkan karir <br>
        mulai dari level dasar sampai mencapai level tertinggi melalui jenjang karir yang telah disusun dengan baik
    </div>

    <div class="lowongan">
        <h6 style="margin-left: 75px"><b id="low">LOWONGAN TERSEDIA</b></h6>
        <div class="grid-container">
            <div class="grid-item waiter"><b id="item">Waiter</b></div>
            <div class="grid-item"><b id="item">Cashier</b></div>
            <div class="grid-item"><b id="item">Chef</b></div>
            <div class="grid-item"><b id="item">Accounting</b></div>
            <div class="grid-item" style="line-height: 90%;"><b id="item">Information<br>Technology</b></div>
            <div class="grid-item"><b id="item">Supervisor</b></div>
        </div>
    </div>

    <div class="content" style="margin-left: 90px;">
    </div>

    <br>

    <div class="table" style="padding-left: 180px; margin-top: -70px;">
        <table class="table table-striped" style="width: 80%; background-color: transparent; ">
            <thead>
                <tr>
                    <th style="border-top: 0px; padding-left: 0px;">
                        <input type="text" class="form-control"
                            style="width: 105%; font-size: 15px; height: 3rem; box-shadow: 2px 2px #EFEDED;"
                            id="formGroupExampleInput" placeholder="Pilih Pekerjaan">
                    </th>
                    <th style="border-top: 0px;">
                        <input type="text" class="form-control"
                            style="width: 105%; font-size: 15px; height: 3rem; box-shadow: 2px 2px #EFEDED;"
                            id="formGroupExampleInput" placeholder="Pilih Lokasi">
                    </th>
                    <th style="border-top: 0px;">
                        <button type="button" class="btn"
                            style="font-size: 13px; height: 3rem;"><b>FILTER</b></button>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="">Waiter</td>
                    <td>Jakarta, Jl. Utan Kayu</td>
                </tr>
                <tr>
                    <td>Supervisor</td>
                    <td>Bandung, Jl. Srigunting Raya</td>
                </tr>
                <tr>
                    <td>Chef</td>
                    <td>Surabaya, Jl. Kapas Krampung</td>
                </tr>
                <tr>
                    <td>Chef</td>
                    <td>Surabaya, Jl. Kapas Krampung</td>
                </tr>
                <tr>
                    <td>Chef</td>
                    <td>Surabaya, Jl. Kapas Krampung</td>
                </tr>
                <tr>
                    <td>Chef</td>
                    <td>Surabaya, Jl. Kapas Krampung</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div id="apply" class="form-group" style="padding-left: 60px;">
        <a href="{{ url('/formkarir') }}" class="btn btn-primary btn-search"
            style="text-transform:uppercase; margin-left:125px; height: 2.3rem;"><b>APPLY NOW</b></a>
    </div>
    <br>




@endsection


@section('js-internal')
    <!-- add tag js in here -->
@endsection
