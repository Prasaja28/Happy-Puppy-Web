@extends('layout-komponen.master')

@section('title', 'Outlet List')
<!-- name title -->

@section('css-internal')
    <!-- Add tag css in here -->
    <style>
        .header {
            min-height: 30vh;
            background: no-repeat center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            z-index: -1;
            font-family: 'Poppins';
            background-position: rightl;
            /* background-image: url('https://3.bp.blogspot.com/-h3x7o8PdjHI/V9Z7h_d61HI/AAAAAAAAJCM/962SQDbRGQoQMqYn3vacC3gUjDYVgZ24gCLcB/w1200-h630-p-k-no-nu/Kredit-Handphone-Di-Surabaya-Tanpa-Kartu-Kartu-Kredit.jpg') */
            background-image: url('/img/mapsindo.png')
        }

        .search-result {
            min-height: 100px;
            font-family: 'Poppins';
        }

        .card-outlet {
            background-color: #221E40;
            min-height: 250px;
        }

        .card-container {
            margin-top: -330px
        }

        .card {
            width: 16rem;
            background: #fff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
            cursor: pointer;
            margin-top: 50px;
            font-family: 'Poppins';
        }

        .card-img-top {
            height: 200px;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }

        .card-text {
            font-size: 12px;
        }

        .card-outlet-bottom-background {
            min-height: 100px;
        }

        .blur-color {
            background: rgba(0, 0, 0, 0.5);
        }

        @media(max-width: 600px) {
            .card-img-news {
                height: 160px;
            }

            .card-news-popular {
                width: 18rem;
                height: 10rem;
                margin: 0 auto;
                /* Added */
                margin-top: 40px;
            }

            .card-title {
                font-size: 10px;
                font-weight: bold;
            }

            .card-text {
                font-size: 8px;
            }

            .card-outlet {
                background-color: #221E40;
                min-height: 500px;
            }

            .card-container {
                margin-top: -570px
            }

            .card-outlet-bottom-background {
                min-height: 50px;
            }
        }

    </style>
@endsection
@section('navbar-news', 'active')
@section('konten')
    <!-- add konten in here -->
    <!-- background Home -->
    <div class="header ">
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
                                    {{ $o->address }}
                                    <br>
                                    Tel. {{ $o->phone }}
                                    <br>
                                    Fax. {{ $o->fax }}
                                </p>
                                <center>
                                    @if (!empty($o->link_ig))
                                        <a href="{{ $o->link_ig }}" class="btn btn-light"><i
                                                class="fab fa-instagram fa-lg"></i></a>
                                    @endif
                                    @if (!empty($o->link_2))
                                        <a href="{{ $o->link_2 }}" class="btn btn-light"><i
                                                class="fas fa-square fa-lg"></i></i></a>
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
                                    <img src="/uploads/{{ $o->thumbnail }}" class="card-img-top card-img-news"
                                        alt="image">
                                </div>
                                <div class="col-6">
                                    <div class="card-body">
                                        <h5 class="card-title text-center font-weight-bold">{{ $o->outlet_name }}</h5>
                                        <p class="card-text text-center">
                                            {{ $o->address }}
                                            <br>
                                            Tel. {{ $o->phone }}
                                            <br>
                                            Fax. {{ $o->fax }}
                                        </p>
                                        <center>
                                            @if (!empty($o->link_ig))
                                                <a href="{{ $o->link_ig }}" class="btn btn-light"><i
                                                        class="fab fa-instagram fa-lg"></i></a>
                                            @endif
                                            @if (!empty($o->link_2))
                                                <a href="{{ $o->link_2 }}" class="btn btn-light"><i
                                                        class="fas fa-square fa-lg"></i></i></a>
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
