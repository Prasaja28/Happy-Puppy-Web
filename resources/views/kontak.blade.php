@extends('layout-komponen.master')

@section('title', 'Kontak')
<!-- name title -->

@section('css-internal')
    {!! ReCaptcha::htmlScriptTagJsApi() !!}
    <!-- Add tag css in here -->
    <style>
        .header {
            min-height: 50vh;
            background: no-repeat center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position: rightl;
            background-image: url('/img/kontak.png')
        }

        .header #kont {
            color: white;
            position: absolute;
            bottom: 0;
            text-align: justify;
            margin: 0;
            font-size: 40px;
            min-height: 491px;
            font-family: 'Poppins';
        }

        .back-grad {
            height: 250px;
            width: auto;
            background: linear-gradient(to bottom, #FFFFFF 0%, #FFFFFF 50%, #85A4E1 50%, #85A4E1 100%);
        }

        .center {
            margin: auto;
            width: 55%;
            padding: 40px;
            color: white;
            background-color: #221E40;
        }

        #p1 {
            margin-top: 50px;
            font-size: 15px;
            font-family: 'Poppins';
            font-weight: bold;
        }

        #p2 {
            font-size: 15px;
            font-family: 'Poppins';
            text-align: justify;
        }

        .back {
            height: 540px;
            width: auto;
            background-color: #85A4E1;
        }

        .tab {
            float: left;
            background-color: #85A4E1;
            width: 30%;
            height: 300px;
        }

        .tab button {
            display: block;
            background-color: inherit;
            color: white;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
            border-top-right-radius: 100px;
            border-top-left-radius: 20px;
            border-bottom-right-radius: 100px;
            border-bottom-left-radius: 20px;
            font-family: 'Poppins';
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            /* background: -webkit-linear-gradient(-60deg,  transparent 205px, #85A4E1 205px),
            -webkit-linear-gradient(60deg,  transparent 205px, #85A4E1 205px); */
            background-color: #85A4E1;
            background-image: url('/img/Rectangle.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            /* background: -webkit-linear-gradient(-60deg,  transparent 205px, #85A4E1 205px),
            -webkit-linear-gradient(60deg,  transparent 205px, #85A4E1 205px); */
            background-color: #85A4E1;
            background-image: url('/img/Rectangle.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;
            width: 70%;
            border-left: none;
            height: 300px;
        }

        .form-control {
            border: none;
            border-bottom: 1px solid #000;
            background: none;
            padding: 5px;
            width: 50%;
            transition: .2s;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        #form1 {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .back2 {
            width: auto;
            background-color: #FFFFFF;
            margin-bottom: 65px;
        }

        #back2con {
            margin-top: 30px;
        }

        .card-header,
        .btn {
            color: #221E40;
            background-color: #FFFFFF;
            font-family: 'Poppins';
            font-weight: bold;
            border-bottom: none;
        }

        .card-body {
            background-color: white;
            border-bottom: none;
            border-radius: 1em;
            margin-left: 20px;
        }

        .active,
        .accordion {
            background-color: #221E40;
            color: white;
        }

        #text-acc {
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            font-weight: bold;
            font-family: 'Poppins';
        }

        #faq {
            padding: 0 18px;
        }

        #kami {
            font-weight: bold;
            color: white;
            position: absolute;
            bottom: 0;
            text-align: justify;
            margin: 0;
            font-size: 40px;
            min-height: 439px;
            font-family: 'Poppins';
        }

        @media(max-width: 576px) {
            .header {
                min-height: 20vh;
                background: no-repeat center scroll;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-position: rightl;
                background-image: url('/img/kontak.png')
            }

            .header #kont {
                color: white;
                position: absolute;
                bottom: 0;
                text-align: justify;
                margin: 0;
                font-size: 20px;
                min-height: 491px;
                font-family: 'Poppins';
            }

            .back-grad {
                height: 81px;
                width: auto;
                background: linear-gradient(to bottom, #FFFFFF 0%, #FFFFFF 50%, #85A4E1 50%, #85A4E1 100%);
            }

            .center {
                margin: auto;
                width: 290px;
                height: 94px;
                padding: 40px;
                color: white;
                background-color: #221E40;
            }

            #p1 {
                margin-top: 50px;
                font-size: 7px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                text-align: left;
                margin-top: -16px;
                margin-left: -2px;
            }

            #p11 {
                font-size: 6px;
                margin-top: -45px;
            }

            .back {
                height: 750px;
                width: auto;
                background-color: #85A4E1;
            }

            .tab {
                float: left;
                background-color: #85A4E1;
                width: 30%;
                height: 300px;
                margin-top: 28px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                /* background: -webkit-linear-gradient(-60deg,  transparent 205px, #85A4E1 205px),
            -webkit-linear-gradient(60deg,  transparent 205px, #85A4E1 205px); */
                background-color: #85A4E1;
                background-image: url('/img/Rectangle.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
            }

            /* Create an active/current "tab button" class */
            .tab button.active {
                /* background: -webkit-linear-gradient(-60deg,  transparent 205px, #85A4E1 205px),
            -webkit-linear-gradient(60deg,  transparent 205px, #85A4E1 205px); */
                background-color: #85A4E1;
                background-image: url('/img/Rectangle.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
            }

            #form1 {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
                margin-top: -6px;
                font-size: 12px;
                margin-left: auto;
                margin-right: auto;
            }

            #p2 {
                font-size: 5px;
                font-family: Arial, Helvetica, sans-serif;
                text-align: justify;
            }

            .card-header,
            .btn {
                color: #221E40;
                background-color: #FFFFFF;
                font-family: 'Poppins';
                font-weight: bold;
                border-bottom: none;
                font-size: 8px;
            }

            #faq {
                padding: 0 18px;
                font-size: 20px;
                margin-left: 13px;
            }

            .card-body {
                background-color: #ECEFF1;
                border-bottom: none;
                border-radius: 1em;
                font-size: 10px;
                margin-left: 20px;
            }

            #faq1 {
                font-size: 22px;
                font-family: 'Poppins';
            }

            #kami {
                font-weight: bold;
                margin-top: -15px;
                color: white;
                position: absolute;
                bottom: 0;
                text-align: justify;
                margin: 0;
                font-size: 20px;
                min-height: 460px;
                font-family: 'Poppins';
            }

            .active,
            .accordion {
                background-color: #221E40;
                color: white;
            }

            .accordionWrapper {
                float: left;
                width: 80%;
                box-sizing: border-box;
                margin: 10%;
            }

            .accordionItem {
                float: left;
                display: block;
                width: 100%;
                box-sizing: border-box;
                font-family: 'Poppins';
            }

            .accordionItemHeading {
                cursor: pointer;
                margin: 0px 0px 10px 0px;
                padding: 10px;
                background: #344D6F;
                color: #fff;
                width: 100%;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
                box-sizing: border-box;
                font-size: 14px;
                font-family: 'Poppins';
                font-weight: bold;
            }

            .close .accordionItemContent {
                height: 0px;
                transition: height 1s ease-out;
                -webkit-transform: scaleY(0);
                -o-transform: scaleY(0);
                -ms-transform: scaleY(0);
                transform: scaleY(0);
                float: left;
                display: block;


            }

            .open .accordionItemContent {
                padding: -5px;
                margin: 15px 0px 10px 0px;
                width: 100%;
                display: block;
                -webkit-transform: scaleY(1);
                -o-transform: scaleY(1);
                -ms-transform: scaleY(1);
                transform: scaleY(1);
                -webkit-transform-origin: top;
                -o-transform-origin: top;
                -ms-transform-origin: top;
                transform-origin: top;

                -webkit-transition: -webkit-transform 0.4s ease-out;
                -o-transition: -o-transform 0.4s ease;
                -ms-transition: -ms-transform 0.4s ease;
                transition: transform 0.4s ease;
                box-sizing: border-box;
            }

            .open .accordionItemHeading {
                margin: 0px;
                -webkit-border-top-left-radius: 3px;
                -webkit-border-top-right-radius: 3px;
                -moz-border-radius-topleft: 3px;
                -moz-border-radius-topright: 3px;
                border-top-left-radius: 3px;
                border-top-right-radius: 3px;
                -webkit-border-bottom-right-radius: 0px;
                -webkit-border-bottom-left-radius: 0px;
                -moz-border-radius-bottomright: 0px;
                -moz-border-radius-bottomleft: 0px;
                border-bottom-right-radius: 0px;
                border-bottom-left-radius: 0px;
                background-color: #344D6F;
                color: #fff;
            }
        }

    </style>
@endsection

@section('konten')
    <!-- add konten in here -->
    <div class="header p-5">
        <p id="kont">KONTAK</p>
        <p id="kami">KAMI</p>
    </div>
    <div class="back-grad">
        <div class="center">
            <div class="row" style="font-family: 'Poppins';">
                <br>
                <div class="col-4 d-flex" id="p1">Manajemen & Waralaba:<br>PT. Imperium Happy Puppy</div><br>
                <div class="col-8 pt-4 pt-lg-0 content" data-aos="fade-left" id="p11">JL. H.R. Mohammad No. 73B Lt.
                    II<br>Surabaya 60226 - Indonesia<br>Tel. (031)734-3388<br>Fax. (031)734-2911<br><br>Informasi Umum :
                    info@happypuppy.id</div><br>
            </div>
        </div>
    </div>
    <div class="back">
        <div class="container" id="tab-request-dekstop">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="tab">
                <!-- <div class="tablinks" style="background-image: url('/img/Rectangle.png')" onclick="openCity(event, 'kontak')" id="defaultOpen">Kontak</div> -->
                <button class="tablinks" onclick="openCity(event, 'kontak')" id="defaultOpen">Kontak</button><br>
                <button class="tablinks" onclick="openCity(event, 'Request')">Request Lagu</button><br>
                <button class="tablinks" onclick="openCity(event, 'keluhan')">Keluhan</button>
            </div>

            <div id="kontak" class="tabcontent">
                <div class="container" id="form1" style="font-family: 'Poppins';">
                    <form action="{{ url('/kontak/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                                    name="name" placeholder="Nama" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('member_id') is-invalid @enderror" type="text"
                                    id="member_id" name="member_id" placeholder="Member ID" value="{{ old('member_id') }}"
                                    required>
                                @error('member_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('email') is-invalid @enderror" type="text" id="email"
                                    name="email" placeholder="Email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('phone') is-invalid @enderror" type="text" id="phone"
                                    name="phone" placeholder="Telp." value="{{ old('phone') }}" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <input class="form-control @error('complaint') is-invalid @enderror" type="text"
                                    id="complaint" name="complaint" placeholder="Pesan" value="{{ old('complaint') }}"
                                    required>
                                @error('complaint')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group row">
                                    <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                                </div>

                                <br><br><br><br><br>
                                <input style="background-color:#0275d8" type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id="Request" class="tabcontent">
                <div class="container" id="form1" style="font-family: 'Poppins';">
                    <form action="{{ url('/request/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                                    name="name" placeholder="Nama" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('member_id') is-invalid @enderror" type="text"
                                    id="member_id" name="member_id" placeholder="Member ID"
                                    value="{{ old('member_id') }}" required>
                                @error('member_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('email') is-invalid @enderror" type="text" id="email"
                                    name="email" placeholder="Email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('phone') is-invalid @enderror" type="text" id="phone"
                                    name="phone" placeholder="Telp." value="{{ old('phone') }}" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <input class="form-control @error('request') is-invalid @enderror" type="text" id="request"
                                    name="request" placeholder="Request Lagu" value="{{ old('request') }}" required>
                                @error('request')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group row">
                                    <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                                </div>

                                <br><br><br><br><br>
                                <input style="background-color:#0275d8" type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id="keluhan" class="tabcontent">
                <div class="container" id="form1" style="font-family: 'Poppins';">
                    <form action="{{ url('/keluhan/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                                    name="name" placeholder="Nama" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('member_id') is-invalid @enderror" type="text"
                                    id="member_id" name="member_id" placeholder="Member ID"
                                    value="{{ old('member_id') }}" required>
                                @error('member_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('email') is-invalid @enderror" type="text" id="email"
                                    name="email" placeholder="Email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('phone') is-invalid @enderror" type="text" id="phone"
                                    name="phone" placeholder="Telp." value="{{ old('phone') }}" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <input class="form-control @error('outlet') is-invalid @enderror" type="text" id="outlet"
                                    name="outlet" placeholder="Outlet" value="{{ old('outlet') }}" required></input>
                                @error('outlet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('keluhan') is-invalid @enderror" type="text" id="keluhan"
                                    name="keluhan" placeholder="Keluhan" value="{{ old('keluhan') }}" required></input>
                                @error('keluhan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group row">
                                    <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                                </div>

                                <br><br>
                                <input style="background-color:#0275d8" type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container" id="tab-request-mobile">
            <div class="accordionWrapper">
                <div class="accordionItem open">
                    <h2 class="accordionItemHeading">Kontak</h2>
                    <div id="kontak" class="accordionItemContent">
                        <div class="container" id="form1" style="font-family: 'Poppins';">
                            <form action="/action_page.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" id="Nama" name="Nama" placeholder="Nama">

                                        <input class="form-control" type="text" id="MID" name="lastname"
                                            placeholder="Member ID">

                                        <input class="form-control" type="text" id="email" name="email"
                                            placeholder="Email">

                                        <input class="form-control" type="text" id="telp" name="telp"
                                            placeholder="Telp."></input>
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control" type="text" id="pesan" name="pesan"
                                            placeholder="Pesan"></input>

                                        <br><br><br><br><br>
                                        <input style="background-color:#0275d8" type="submit" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="accordionItem close">
                    <h2 class="accordionItemHeading">Request Lagu</h2>
                    <div id="Request" class="accordionItemContent">
                        <div class="container" id="form1" style="font-family: 'Poppins';">
                            <form action="/action_page.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" id="Nama" name="Nama" placeholder="Nama">

                                        <input class="form-control" type="text" id="MID" name="lastname"
                                            placeholder="Member ID">

                                        <input class="form-control" type="text" id="email" name="email"
                                            placeholder="Email">

                                        <input class="form-control" type="text" id="telp" name="telp"
                                            placeholder="Telp."></input>
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control" type="text" id="req" name="req"
                                            placeholder="Request Lagu"></input>

                                        <br><br><br><br><br>
                                        <input style="background-color:#0275d8" type="submit" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="accordionItem close">
                    <h2 class="accordionItemHeading">Keluhan</h2>
                    <div id="keluhan" class="accordionItemContent">
                        <div class="container" id="form1" style="font-family: 'Poppins';">
                            <form action="/action_page.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" id="Nama" name="Nama" placeholder="Nama">

                                        <input class="form-control" type="text" id="MID" name="lastname"
                                            placeholder="Member ID">

                                        <input class="form-control" type="text" id="email" name="email"
                                            placeholder="Email">

                                        <input class="form-control" type="text" id="telp" name="telp"
                                            placeholder="Telp."></input>
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control" type="text" id="outlet" name="outlet"
                                            placeholder="Outlet"></input>

                                        <input class="form-control" type="text" id="keluhan" name="keluhan"
                                            placeholder="Keluhan"></input>

                                        <br><br>
                                        <input style="background-color:#0275d8" type="submit" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="back2">
        <div class="container" id="back2con">
            <br><br>
            <div class="row" id="faq">
                <h3 style="font-family: 'Poppins';font-weight: bold;">FAQ</h3>
                <h3 id="faq1">(Frequently Ask Question)</h3>
            </div><br><br>

            <div id="accordion">
                <div class="card border-0">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Apakah karaoke keluarga itu?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Apakah Happy Puppy keluarga itu?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Apakah Happy Puppy menyediakan pendamping wanita?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn collapsed" data-toggle="collapse" data-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                Apakah pengunjung Happy Puppy harus sekeluarga?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn collapsed" data-toggle="collapse" data-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                Apakah pengunjung terjamin privasinya?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-internal')
    <!-- add tag js in here -->
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("accordion");
        var btns = header.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>

    <script>
        var accItem = document.getElementsByClassName('accordionItem');
        var accHD = document.getElementsByClassName('accordionItemHeading');
        for (i = 0; i < accHD.length; i++) {
            accHD[i].addEventListener('click', toggleItem, false);
        }

        function toggleItem() {
            var itemClass = this.parentNode.className;
            for (i = 0; i < accItem.length; i++) {
                accItem[i].className = 'accordionItem close';
            }
            if (itemClass == 'accordionItem close') {
                this.parentNode.className = 'accordionItem open';
            }
        }
    </script>

    <script>
        var width = screen.width;
        if (width < 600) {
            document.getElementById('tab-request-mobile').style.display = 'block';
            document.getElementById('tab-request-dekstop').style.display = 'none';
        } else {
            document.getElementById('tab-request-dekstop').style.display = 'block';
            document.getElementById('tab-request-mobile').style.display = 'none';
        }
    </script>
@endsection
