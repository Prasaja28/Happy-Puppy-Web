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
        .header p{
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
        }

        .card-news {
            position: absolute;
            width: 32rem;
            height: 25rem;
            margin-bottom: 10px;
            top: -60px;
            z-index: 3;
        }

        .card-news1 {
            position: absolute;
            width: 31rem;
            height: 26.3rem;
            margin-bottom: 3px;
            z-index: 2;
            left: 50px;
            top: 10px;
            background-color: #E9EEF4;
            top: -60px;
        }

        .card-img-news {
            height: 290px;
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
            width: 25rem;
            height: 90px;
            margin: 0 auto;
            /* Added */
            float: none;
            /* Added */
            margin-bottom: 10px;
            margin-top: 10px;
            right: 7px;
            border: none;
            top: -70px;

        }

        .card-img-lates {
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
            padding-left: 120px;
            padding-right: 120px;
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
            .header p{
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
                height: 90px;
            }

            .news-time {
                font-size: 8px;
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
                font-weight: bold
                    /* font-family: 'Poppins'; */
            }

            .card-title-lates {
                min-height: 15px;
                margin-top: -10px;
                font-size: 6px
                    /* font-family: 'Poppins'; */
            }

            .news-time-lates {
                font-size: 4px;
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
                        <img src="/img/egypt.png" class="card-img-top card-img-news" alt="...">
                        <div class="card-body">
                            <h5 class="card-title title-news" style="font-weight: bold;">Midnight In Egypt</h5>
                            <p class="news-time"><?= date('M d, Y') ?>
                                <a href="" class="" style="float:right;color:black"><i
                                        class="fas fa-book-open"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="card card-news1" style="border: none;z-index: 2;">
                        <img src="/img/egypt.png" class="card-img-top card-img-news1" alt="...">
                        <div class="card-body">
                            <p class="news-time"><?= date('M d, Y') ?>
                                <a href="" class="" style="float:right;color:black"><i
                                        class="fas fa-book-open"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6" id="group-news">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-news-lates" style="z-index:2;">
                                <div class="row no-gutters">
                                    <img src="/img/berita1.jpg" class="col-4 card-img-lates" alt="...">
                                    <div class="col-8">
                                        <div class="card-body text-bottom">
                                            <h5 class="card-title-lates card-title"> Stay Safe and Healthy</h5>
                                            <p class="news-time-lates"><?= date('M d, Y') ?>
                                                <a href="" class="" style="float:right;color:black"><i
                                                        class="fas fa-book-open"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-news-lates" style="z-index:2;">
                                <div class="row no-gutters">
                                    <img src="/img/berita2.jpg" class="col-4 card-img-lates" alt="...">
                                    <div class="col-8">
                                        <div class="card-body text-bottom">
                                            <h5 class="card-title-lates card-title"> Yes, We Are Open</h5>
                                            <p class="news-time-lates"><?= date('M d, Y') ?>
                                                <a href="" class="" style="float:right;color:black"><i
                                                        class="fas fa-book-open"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-news-lates" style="z-index:2;">
                                <div class="row no-gutters">
                                    <img src="/img/berita5.jpg" class="col-4 card-img-lates" alt="...">
                                    <div class="col-8">
                                        <div class="card-body text-bottom">
                                            <h5 class="card-title-lates card-title"> Lagu Baru Camelia Cabello Berjudul
                                                "Liar"</h5>
                                            <p class="news-time-lates"><?= date('M d, Y') ?>
                                                <a href="" class="" style="float:right;color:black"><i
                                                        class="fas fa-book-open"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-news-lates" style="z-index:2;">
                                <div class="row no-gutters">
                                    <img src="/img/berita4.jpg" class="col-4 card-img-lates" alt="...">
                                    <div class="col-8">
                                        <div class="card-body text-bottom">
                                            <h5 class="card-title-lates card-title"> Lagu Baru Mahalini Berjudul "Melawan
                                                Restu"</h5>
                                            <p class="news-time-lates"><?= date('M d, Y') ?>
                                                <a href="" class="" style="float:right;color:black"><i
                                                        class="fas fa-book-open"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <div class="col-12">
                    <div class="card card-news-popular" style="z-index:2;" id="popular">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <img src="{{ asset('img/hijau-next-news.png') }}" class="card-img-top card-img-popular"
                                    alt="...">
                            </div>
                            <div class="col-6">
                                <div class="card-body text-bottom" style="z-index:2;">
                                    <p class="news-popular-title">News</p>
                                    <h5 class="card-title card-title-popular">Card title</h5>
                                    <p class="news-time-popular"><?= date('M d, Y') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card card-news-popular" style="z-index:2;">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <img src="{{ asset('img/stefan.png') }}" class="card-img-top card-img-popular" alt="...">
                            </div>
                            <div class="col-6">
                                <div class="card-body text-bottom" style="z-index:2;">
                                    <p class="news-popular-title">News</p>
                                    <h5 class="card-title card-title-popular">Card title</h5>
                                    <p class="news-time-popular"><?= date('M d, Y') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card card-news-popular" style="z-index:2;">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <img src="{{ asset('img/avril.png') }}" class="card-img-top card-img-popular" alt="...">
                            </div>
                            <div class="col-6">
                                <div class="card-body text-bottom" style="z-index:2;">
                                    <p class="news-popular-title">News</p>
                                    <h5 class="card-title card-title-popular">Card title</h5>
                                    <p class="news-time-popular"><?= date('M d, Y') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card card-news-popular" style="z-index:2;">
                        <div class="row no-gutters">
                            <div class="col-6">
                                <img src="https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg"
                                    class="card-img-top card-img-popular" alt="...">
                            </div>
                            <div class="col-6">
                                <div class="card-body text-bottom" style="z-index:2;">
                                    <p class="news-popular-title">News</p>
                                    <h5 class="card-title card-title-popular">Card title</h5>
                                    <p class="news-time-popular"><?= date('M d, Y') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="dots"></div>
                <div id="more">
                    <div class="col-12">
                        <div class="card card-news-popular" style="z-index:2;">
                            <div class="row no-gutters">
                                <div class="col-6">
                                    <img src="https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg"
                                        class="card-img-top card-img-popular" alt="...">
                                </div>
                                <div class="col-6">
                                    <div class="card-body text-bottom" style="z-index:2;">
                                        <p class="news-popular-title">News</p>
                                        <h5 class="card-title card-title-popular">Card title</h5>
                                        <p class="news-time-popular"><?= date('M d, Y') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card-news-popular" style="z-index:2;">
                            <div class="row no-gutters">
                                <div class="col-6">
                                    <img src="https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg"
                                        class="card-img-top card-img-popular" alt="...">
                                </div>
                                <div class="col-6">
                                    <div class="card-body text-bottom" style="z-index:2;">
                                        <p class="news-popular-title">News</p>
                                        <h5 class="card-title card-title-popular">Card title</h5>
                                        <p class="news-time-popular"><?= date('M d, Y') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <button href="{{ url('/') }}" onclick="buttonLess()" id="myBtn" class="btn btn-primary">Load more</button>
                    <button href="{{ url('/') }}" onclick="buttonLess()" id="myBtn2" class="btn btn-primary">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-internal')
    <!-- add tag js in here -->
    <script>
        function buttonLess() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "block";
                moreText.style.display = "none";
                document.getElementById('myBtn').style.display='block';
                document.getElementById('myBtn2').style.display='none';
            } else {
                dots.style.display = "none";
                moreText.style.display = "block";
                document.getElementById('myBtn2').style.display='block';
                document.getElementById('myBtn').style.display='none';
            }
        }
    </script>
@endsection
