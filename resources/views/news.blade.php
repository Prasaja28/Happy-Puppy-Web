@extends('layout-komponen.master')

@section('title', 'News')
<!-- name title -->

@section('css-internal')
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
            background-image: url('/img/news.png')
        }

        .header p {
            font-weight: bold;
            margin-top: -65px;
        }

        #n1 {
            font-family: 'Poppins';
        }

        #txt2 {
            color: white;
            position: absolute;
            margin: 275px 250px 50px 0px;
            text-align: justify;
            font-size: 50px;
            min-height: 360px;
            font-weight: bold;
            text-indent: 1.2in;
            font-family: 'Poppins';
        }

        .lates-news-list {
            background-color: #221E40;
            min-height: 299px;
            max-width: 1160px;
            width: 100%;
            margin: 20px 0px 0px 70px;
            padding-left: 20px;
            padding-right: 20px;
        }

        .lates-title {
            padding-top: 50px;
            padding-bottom: 50px;
            padding-left: 60px;
            margin-bottom: 40px;
            color: #221E40;
            font-size: 20px;
        }

        .lates-title1 {
            padding-top: 40px;
            padding-bottom: 80px;
            padding-left: 60px;
            margin-bottom: 60px;
            color: white;
            font-size: 30px;
        }

        .news-list {
            margin-top: -285px;
            padding-left: 47px;
            min-height: 400px;
        }

        .card-news {
            position: absolute;
            width: 38.5vw;
            height: 25rem;
            margin-bottom: 10px;
            top: -60px;
            z-index: 3;
        }

        .card-news1 {
            position: absolute;
            width: 37vw;
            height: 26.3rem;
            margin-bottom: 3px;
            z-index: 2;
            left: 4vw;
            top: 10px;
            background-color: #E9EEF4;
            top: -60px;
        }

        .card-img-news {
            object-fit: cover;
            object-position: center;
            width: 100%;
            max-height: 250px;
            margin-bottom: 1rem;
        }

        .card-img-news1 {
            height: 310px;
        }

        .news-time {
            margin-bottom: -10px;
            font-size: 12px;
            font-family: 'Poppins';
            color: #c7d4e3;
            font-weight: bold;
        }

        .title-news {
            font-size: 18px;
            margin-bottom: 30px;
            font-family: 'Poppins';
        }

        .card-news-lates {
            width: 35vw;
            height: 90px;
            margin: 0 auto;
            /* Added */
            float: none;
            /* Added */
            margin-bottom: 10px;
            margin-top: 10px;
            right: -5vw;
            border: none;
            top: -70px;

        }

        .card-img-lates {
            object-fit: cover;
            object-position: center;
            height: 90px;
            background: no-repeat center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position: rightl;
            z-index: 2;
        }

        .news-lates-title {
            color: #106ec3;
            font-size: 12px;
            margin-top: -15px;
            margin-bottom: 40px;
            font-weight: bold font-family: 'Poppins';
            z-index: 2;
        }

        .card-title-lates {
            font-size: 13px;
            margin-bottom: 19px;
            font-family: 'Poppins';
            z-index: 2;
        }

        .news-time-lates {
            font-size: 12px;
            font-family: 'Poppins';
            color: #c7d4e3;
            font-weight: bold;
            margin-bottom: 5px;
            z-index: 2;
        }

        .card-news-popular {
            width: 37rem;
            height: 180px;
            margin-bottom: 20px;
            margin-top: 10px;
            top: -400px;
            bottom: -500px;
            border: none;
        }

        .news-popular-title {
            color: #221E40;
            font-size: 13px;
            margin-top: -12px;
            margin-bottom: 20px;
            font-weight: bold;
            font-family: 'Poppins';
        }

        .popularNews {
            margin-top: 10px;
            margin-left: 0px;
            margin-right: 0px;
            /*top: 400px;*/
            min-height: 600px;
            max-width: 1600px;
            width: 100%;
            background-color: #221E40;
        }

        .card-img-popular {
            object-fit: cover;
            object-position: center;
            height: 180px;
        }

        .popular-card-news {
            margin-top: -150px;
        }

        .card-title-popular {
            font-size: 18px;
            margin-bottom: 20px;
            font-family: 'Poppins';
        }

        .news-time-popular {
            font-size: 12px;
            font-family: 'Poppins';
            color: #c7d4e3;
            font-weight: bold;
            margin-bottom: 5px;
            z-index: 2;
        }

        .card-news-lates-list {
            padding-left: 5vw;
            padding-right: 5vw;
        }

        .card a.main {
            color: #85baff;
            text-align: right;
            display: block;
            z-index: 1;
        }

        .card a.main::after {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            content: ' ';
        }

        .padding-card {
            padding-top: 10px;
        }

        #more {
            display: none;
        }

        #myBtn {
            position: absolute;
            display: block;
            bottom: 350px;
            border-radius: 50px;
            font-size: 15px;
            padding-left: 20px;
            padding-right: 20px;
            z-index: 2;
            padding-top: 5px;
            padding-bottom: 5px;
            font-family: 'Poppins';
            background-color: #221E40;
            /* font-family: 'Poppins'; */
        }

        #myBtn2 {
            position: absolute;
            display: block;
            bottom: 350px;
            border-radius: 50px;
            font-size: 15px;
            padding-left: 20px;
            padding-right: 20px;
            z-index: 2;
            padding-top: 5px;
            padding-bottom: 5px;
            font-family: 'Poppins';
            background-color: #221E40;
            /* font-family: 'Poppins'; */
        }

        @media (max-width:600px) {
            .header {
                min-height: 20vh;
                background: no-repeat center scroll;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-position: rightl;
                background-image: url('/img/news.png')
            }

            .header p {
                font-weight: bold;
                font-size: 20px;
                margin-top: -160px;
            }

            .lates-news-list {
                background-color: #221E40;
                min-height: 125px;
                margin-left: -15px;
                margin-right: -15px;
                width: auto;
            }

            #txt2 {
                position: absolute;
                margin: 200px -250px 0px -150px;
                font-size: 35px;
            }

            .news-list {
                margin-top: -160px;
                margin-left: -6px;
                margin-right: 16px;
                min-height: 300px;
            }

            .card-news {
                width: 7rem;
                height: 170px;
                margin-top: 100px;
                margin-left: -48px
            }

            .card-news1 {
                position: absolute;
                width: 7rem;
                height: 170px;
                margin-top: 106px;
                margin-left: -70px;
                z-index: 2;
                left: 42px;
                top: 10px;
                background-color: #E9EEF4;
                top: -60px;
            }

            .card-img-news {
                object-fit: cover;
                object-position: center;
                width: 100%;
                max-height: 250px;
                margin-bottom: 1rem;
                height: 90px;
            }

            .news-time {
                font-size: 8px;
                margin-top: -23px;
                /* font-family: 'Poppins'; */
            }

            .title-news {
                margin-top: -15px;
                font-size: 10px;
                min-height: 30px;
                /* font-family: 'Poppins'; */
            }

            .card-news-lates {
                width: 10rem;
                height: 50px;
                margin: 0 auto;
                /* Added */
                float: none;
                /* Added */
                margin-bottom: 5px;
                margin-top: 5px;
                margin-left: -37px;
            }

            .padding-card {
                padding-top: 40px;
            }

            .card-img-lates {
                height: 50px;
                background: no-repeat center scroll;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-position: rightl;
            }

            .news-lates-title {
                color: #106ec3;
                font-size: 12px;
                margin-top: -15px;
                margin-bottom: 40px;
                font-weight: bold;
            }

            .card-title-lates {
                min-height: 15px;
                margin-top: -10px;
                font-size: 9px;
            }

            .news-time-lates {
                font-size: 7px;
                margin-top: -8px;
                /* font-family: 'Poppins'; */
            }

            .card-news-popular {
                width: 16rem;
                height: 65px;
                margin: 0 auto;
                /* Added */
                float: none;
                /* Added */
                margin-bottom: 10px;
                margin-top: 10px;
                top: -30px;
            }

            .news-popular-title {
                color: #106ec3;
                font-size: 7px;
                margin-top: -15px;
                margin-bottom: 30px;
                font-weight: bold
                    /* font-family: 'Poppins'; */
            }

            .popularNews {
                margin-top: -55px;
                min-height: 100px;
                width: auto;
                margin-left: -15px;
                margin-right: -15px;
                background-color: #221E40;
            }

            .card-img-popular {
                object-fit: cover;
                object-position: center;
                height: 80px;
            }

            .popular-card-news {
                margin-top: -110px;
            }

            .card-title-popular {
                font-size: 8px;
                margin-top: -20px;
                min-height: 10px
                    /* font-family: 'Poppins'; */
            }

            .card-news-lates-list {
                padding-left: 10px;
                padding-right: 10px;
            }

            .lates-title {
                font-size: 16px;
                padding-top: 15px;
                padding-bottom: 0px;
                padding-left: 0px;
                margin-bottom: 10px;
                /* font-family: 'Poppins'; */
            }

            .lates-title1 {
                padding-top: 15px;
                padding-bottom: 85px;
                padding-left: 10px;
                margin-bottom: 68px;
                color: white;
                font-size: 15px;
            }

            .news-time-popular {
                font-size: 6px;
                /* font-family: 'Poppins'; */
            }

            #myBtn {
                display: block;
                border-radius: 50px;
                font-size: 8px;
                margin-top: 10px;
                margin: 0 auto;
                /* Added */
                background-color: #221E40;
                /* font-family: 'Poppins'; */
                bottom: -3px;
                left: 40%;
            }

            #myBtn2 {
                display: block;
                border-radius: 50px;
                font-size: 8px;
                margin-top: 10px;
                margin: 0 auto;
                /* Added */
                background-color: #221E40;
                /* font-family: 'Poppins'; */
                bottom: -3px;
                left: 40%;
            }

            #more {
                display: none;
                margin: 0 auto;
                /* Added */
                float: none;
                /* Added */
            }

            #group-news {
                margin-top: 90px;
            }


        }

    </style>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
@endsection
@section('navbar-news', 'active')

@section('konten')
    <!-- add konten in here -->
    <div class="header p-5">
        <div class="container" id="txt2" style="font-family: 'Poppins';">
            <p>NEWS</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <h4 class="lates-title" style="font-weight: bold;">LATEST NEWS</h4>
        </div>
        <div class="lates-news-list" style="z-index: 1;">
        </div>
        <div class="news-list">
            <div class="row card-news-lates-list">
                <div class="col-6 padding-card">
                    <div class="card card-news" style="border: none;z-index: 3;">
                        @if ($news_terbaru->count() != null)
                            <!-- <img src="/img/egypt.png" class="card-img-top card-img-news" alt="..."> -->
                            <img src="{{ $news_terbaru[0]->thumbnail }}" class="card-img-top card-img-news main"
                                alt="...">
                            <div class="card-body">
                                <!-- <h5 class="card-title title-news" style="font-weight: bold;">Midnight In Egypt</h5> -->
                                <h5 class="card-title title-news" style="font-weight: bold;">
                                    {{ $news_terbaru[0]->news_title_id }}</h5>
                                <p class="news-time"><?= date('M d, Y', strtotime($news_terbaru[0]->news_date)) ?>
                                    <a href="{{ route('detailNews', ['id' => $news_terbaru[0]->id]) }}"
                                        class="main" style="float:right;color:black"><i
                                            class="fas fa-book-open"></i></a>
                                </p>
                            </div>
                        @endif
                    </div>
                    <div class="card card-news1" style="border: none;z-index: 2;">
                        @if ($news_terbaru->count() != null)
                            <!-- <img src="/img/egypt.png" class="card-img-top card-img-news1" alt="..."> -->
                            <img src="{{ $news_terbaru[0]->thumbnail }}" class="card-img-top card-img-news1" alt="...">
                        @endif
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="col-6" id="group-news">
                    <div class="row">
                        @if ($news_terbaru->count() != null)
                            @foreach ($news_terbaru as $key => $newss)
                                @php
                                    if ($key == 0) {
                                        continue;
                                    }
                                @endphp
                                <div class="col-12">
                                    <div class="card card-news-lates" style="z-index:2;">
                                        <div class="row no-gutters">
                                            <!-- <img src="/img/berita1.jpg" class="col-4 card-img-lates" alt="..."> -->
                                            <img src="{{ $newss->thumbnail }}" class="col-4 card-img-lates" alt="...">
                                            </a>
                                            <div class="col-8">
                                                <div class="card-body text-bottom">
                                                    <!-- <h5 class="card-title-lates card-title"> Stay Safe and Healthy</h5> -->
                                                    <h5 class="card-title-lates card-title">
                                                        {{ $newss->news_title_id }}
                                                    </h5>
                                                    <p class="news-time-lates">
                                                        <?= date('M d, Y', strtotime($newss->news_date)) ?>
                                                        <a href="{{ route('detailNews', ['id' => $newss->id]) }}"
                                                            class="main" style="float:right;color:black"><i
                                                                class="fas fa-book-open"></i></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="popularNews" style="z-index:1;">
            <div class="container">
                <h4 class="lates-title1" style="font-weight: bold;">POPULAR</h4>
            </div>
        </div>
        <div class="container popular-card-news" style="z-index:2;">
            <div class="row lates-title" style="z-index:2;">
                @if ($news_terlaris->count() != null)
                    @foreach ($news_terlaris as $key => $newsst)
                        @php
                            if ($key > 3) {
                                continue;
                            }
                        @endphp
                        <div class="col-12">
                            <div class="card card-news-popular" style="z-index:2;" id="popular">
                                <div class="row no-gutters">
                                    <div class="col-6">
                                        <a href="{{ route('detailNews', ['id' => $newsst->id]) }}" class="main">
                                            <img src="{{ $newsst->thumbnail }}" class="card-img-top card-img-popular"
                                                alt="...">
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <div class="card-body text-bottom" style="z-index:2;">
                                            <!-- <p class="news-popular-title">News</p> -->
                                            <!-- <h5 class="card-title card-title-popular">Card title</h5> -->
                                            <p class="news-popular-title">News</p>
                                            <h5 class="card-title card-title-popular">{{ $newsst->news_title_id }}</h5>
                                            <p class="news-time-popular">
                                                <?= date('M d, Y', strtotime($newsst->news_date)) ?>
                                                <a href="{{ route('detailNews', ['id' => $newsst->id]) }}"
                                                    class="main" style="float:right;color:black"><i
                                                        class="fas fa-book-open"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div id="more" style="display:none;">
                    @if ($news_terlaris->count() != null)
                        @foreach ($news_terlaris as $key => $newsst)
                            @php
                                if ($key <= 3) {
                                    continue;
                                }
                            @endphp
                            <div class="col-12">
                                <div class="card card-news-popular" style="z-index:2;">
                                    <div class="row no-gutters">
                                        <div class="col-6">
                                            <!-- <img src="https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg" class="card-img-top card-img-popular" alt="..."> -->
                                            <img src="{{ $newsst->thumbnail }}" class="card-img-top card-img-popular"
                                                alt="...">
                                        </div>
                                        <div class="col-6">
                                            <div class="card-body text-bottom" style="z-index:2;">
                                                <p class="news-popular-title">News</p>
                                                <h5 class="card-title card-title-popular">{{ $newsst->news_title_id }}
                                                </h5>
                                                <!-- <h5 class="card-title card-title-popular">Card title</h5> -->
                                                <p class="news-time-popular">
                                                    <?= date('M d, Y', strtotime($newss->news_date)) ?>
                                                    <a href="{{ route('detailNews', ['id' => $newsst->id]) }}"
                                                        class="main" style="float:right;color:black"><i
                                                            class="fas fa-book-open"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                @if ($news_terlaris->count() > 4)
                    <div class="col-12">
                        <button href="{{ url('/') }}" onclick="buttonLess()" id="myBtn" class="btn btn-primary">Load
                            more</button>
                        <button href="{{ url('/') }}" onclick="buttonLess()" id="myBtn2" class="btn btn-primary"
                            style="display:none;">Close</button>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('js-internal')
    <!-- add tag js in here -->
    <script>
        function buttonLess() {
            var moreDiv = document.getElementById("more");

            if (moreDiv.style.display == "none") {
                moreDiv.style.display = "block";
                document.getElementById('myBtn').style.display = 'none';
                document.getElementById('myBtn2').style.display = 'block';
            } else {
                moreDiv.style.display = "none";
                document.getElementById('myBtn2').style.display = 'none';
                document.getElementById('myBtn').style.display = 'block';
            }
        }
    </script>

@endsection
