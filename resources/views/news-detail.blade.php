@extends('layout-komponen.master')

@section('title', 'News Detail')
<!-- name title -->

@section('css-internal')
    <!-- Add tag css in here -->
    <style>
        .header {
            /*      margin-top: 131px;*/
            min-height: 50vh;
            /*
                                                                                                margin-bottom: 500px;*/
            background: no-repeat center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position: rightl;
            background-color: #221E40;
            z-index: 1;

        }

        .tab-content {
            color: black;
        }

        .card-news {
            width: 14rem;
            margin: 0 auto;
            /* Added */
            margin-bottom: 20px;
            /* box-shadow: 0px 5px #E9EEF4; */

        }

        .card-img-news {
            height: 120px;
            border: none;
        }

        .news-time {
            margin-bottom: -10px;
        }

        .title-news {
            font-size: 16px;
            font-weight: 500;
        }

        .title-news1 {
            /*    top: 20px;*/
            font-size: 13px;
            font-weight: bold;
            border-bottom-width: 4px;
            border-bottom-style: solid;
            border-bottom-color: black;
            margin-top: 60px;
            font-family: 'Poppins';
        }

        .title-news2 {
            /*    top: 20px;*/
            font-size: 40px;
            line-height: 40pt;
            letter-spacing: 3px;
            font-weight: 500;
            margin-top: 35px;
            color: #000080;
            font-family: 'Poppins';
        }

        .news {
            /*    top: 20px;*/
            font-size: 17px;
            color: black;
            font-family: 'Poppins';
            text-align: justify;
        }

        .news-time {
            font-size: 8px;
            margin-top: 24px;
            font-family: 'Poppins';
        }

        .news-time1 {
            font-size: 13px;
            margin-top: 24px;
            margin-bottom: 24px;
            font-family: 'Poppins';
        }

        .news-title {
            font-size: 20px;
            font-family: 'Poppins';
            text-align: center;
            color: #344072;
            font-weight: 600;
            margin-bottom: 20px;
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

        .image-background img {
            margin: auto;
            margin-top: 50px;
            width: 85%;
            padding: 5%;
            color: white;
        }

        .image-background {
            /* background-image: url(/img/camila.png); */
            /* background-size: 1000px 800px; */
            margin-top: -372px;
            top: -100px;
            /* background-image: linear-gradient(to right, #68a6fb , #f77a8b); */
            min-height: 70vh;
            max-width: 170.5vh;
            width: 97%;
            margin-bottom: 450px;
            padding: 10px;
            /* box-shadow: 0px 10px #d1d6db; */
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .image-color {
            /* background-color: #E9EEF4; */
            margin-top: -340px;
            margin-left: 115px;
            /*background-image: linear-gradient(to right, #68a6fb , #f77a8b);*/
            min-height: 70vh;
            top: 50px;
            max-width: 170.5vh;
            width: 100%;
            margin-bottom: 400px;
        }

        .news-content {
            margin-top: -60vh;
            line-height: 28pt;
        }

        @media(max-width:600px) {
            .color-background {
                background-image: linear-gradient(to right, #68a6fb, #f77a8b);
                position: relative;
                min-height: 30vh;
            }

            .news-content {
                margin-top: -85vh;
            }

            .header {
                min-height: 30vh;
                background: no-repeat center scroll;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-position: rightl;
                background-color: #221E40;
            }

            .image-background {
                margin-top: -160px;
            }

            .image-background img {
                margin: auto;
                margin-top: 50px;
                width: 85%;
                padding: 5%;
                color: white;
            }

            .title-news2 {
                /* top: 20px; */
                font-size: 20px;
                line-height: 40pt;
                letter-spacing: 3px;
                font-weight: 500;
                margin-top: 35px;
                color: #000080;
                font-family: 'Poppins';
            }

            .card-news {
                width: 10rem;
                margin: 0 auto;
                /* Added */
                margin-bottom: 10px;
                margin-left: -219px;
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

            .card-img-news {
                height: 90px;
            }

            .news-time {
                margin-bottom: -10px;
            }

            .title-news {
                font-size: 12px;
            }

            .news-time {
                font-size: 8px;
                margin-top: 24px;
            }

            .news-title {
                text-align: left;
                margin-left: -217px;
            }
        }

    </style>
@endsection
@section('navbar-news', 'active')
@section('konten')
    <!-- <div class="color-background">

                                                                                        </div> -->
    <div class="header" style="z-index:1;">
    </div>
    <div class="image-background" style="z-index: 3;">
        <img src="/uploads/{{ $news_detail[0]->thumbnail }}" alt="">
    </div>
    <!-- add konten in here -->
    <div class="container news-content">
        <div class="row mb-5">
            <div class="col-lg-12 ">
            </div>
            <div class="col-lg-7">
                <ul class="nav mt-2" role="tablist">
                    <li class="nav-item">
                        <a class="title-news1" role="tab" data-toggle="tab">POPULAR</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="title-news2">{{ $news_detail[0]->news_title_id }}</div>

                    <div class="news-time1">{{ $news_detail[0]->news_date }}</div>

                    <div class="news">
                    {!! $news_detail[0]->news_content_id !!}
                    </div><br><br>
                    {{-- <div class="news">
                        Kami percaya akan masa depan usaha Karaoke Keluarga. Bernyanyi adalah anugrah hiburan alami yang
                        pertama dari Tuhan untuk manusia, sejak diciptakan sampai sepanjang sejarah peradabannya. Keceriaan,
                        keterbukaan, keramah-tamahan dan kebersihan adalah landasan sifat dan sikap hidup kami. Kami dipacu
                        oleh manfaat persaingan sehat untuk membentuk hubungan timbal balik yang berguna bagi peningkatan
                        kepentingan-kepentingan konsumen, karyawan, dan perusahaan. Kami cita-citakan dunia yang bernyanyi
                        dengan keselarasan.
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-5" style="padding-left: 240px; ">
                <div id="detail-news-dekstop">
                    <div class="news-title pt-5">LATEST NEWS</div>
                    <div class="row">
                        @if ($news_detail_terbaru->count() != null)
                            @foreach ($news_detail_terbaru as $key => $ntd)
                                @php
                                    if ($key < 3) {
                                        continue;
                                    }
                                @endphp
                                <div class="col-12 my-2">
                                    <div class="card card-news">
                                        <img src="/uploads/{{ $ntd->thumbnail }}" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title title-news">
                                                {{ $ntd->news_title_id }}
                                            </h5>
                                            <p class="news-time">
                                                <?= date('M d, Y', strtotime($ntd->news_date)) ?>
                                                <a href="{{ route('detailNews', ['id' => $ntd->id]) }}"
                                                    class="main" style="float:right;color:black"><i
                                                        class="fas fa-book-open"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div id="detail-news-mobile" style="font-family: 'Poppins'">
                    <h6 class="news-title pt-5">Lates News</h6>
                    <div class="row">
                        @if ($news_detail_terbaru->count() != null)
                            @foreach ($news_detail_terbaru as $key => $ntd)
                                @php
                                    if ($key < 3) {
                                        continue;
                                    }
                                @endphp
                                <div class="col-12 my-2">
                                    <div class="card card-news">
                                        <img src="/uploads/{{ $ntd->thumbnail }}" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title title-news">
                                                {{ $ntd->news_title_id }}
                                            </h5>
                                            <p class="news-time">{{ $ntd->news_date }}
                                                <a href="{{ route('detailNews', ['id' => $ntd->id]) }}"
                                                    class="main" style="float:right;color:black"><i
                                                        class="fas fa-book-open"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js-internal')
    <!-- add tag js in here -->
    <script>
        var width = screen.width;
        if (width < 600) {
            document.getElementById('detail-news-mobile').style.display = 'block';
            document.getElementById('detail-news-dekstop').style.display = 'none';
        } else {
            document.getElementById('detail-news-dekstop').style.display = 'block';
            document.getElementById('detail-news-mobile').style.display = 'none';
        }
    </script>
@endsection
