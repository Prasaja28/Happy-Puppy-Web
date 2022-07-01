@extends('layout-komponen.master')

@section('title', 'News')
<!-- name title -->

@section('css-internal')

<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/news.css') }}">
    <!-- Add tag css in here -->
    <!-- Google Fonts -->
    
@endsection
@section('navbar-news', 'active')

@section('konten')
    <!-- add konten in here -->
    <div class="header p-5" style="background-image: url('{{ $settings['banner_berita'] }}')">
        <div class="container" id="txt2" style="font-family: 'Poppins';">
            <p>{{ __('news.title1') }}</p>
        </div>
    </div>
    <div class="container-fluid">
        @if ($news_terbaru->count() > 0)
            <div class="container">
                <h4 class="lates-title" style="font-weight: bold;">{{ __('news.title2') }}</h4>
            </div>
            <div class="lates-news-list" style="z-index: 1;">
            </div>
            <div class="news-list">
                <div class="row card-news-lates-list">
                    @if ($news_terbaru->count() != null)
                        <div class="col-6 padding-card">
                            <div class="card card-news" style="border: none;z-index: 3;">
                                <!-- <img src="/img/egypt.png" class="card-img-top card-img-news" alt="..."> -->
                                <img src="/uploads/{{ $news_terbaru[0]->thumbnail }}"
                                    class="card-img-top card-img-news main" alt="...">
                                <div class="card-body">
                                    <!-- <h5 class="card-title title-news" style="font-weight: bold;">Midnight In Egypt</h5> -->
                                    <h5 class="card-title title-news" style="font-weight: bold;">
                                        {{ $news_terbaru[0]->{'news_title_' . app()->getLocale()} }}</h5>
                                    <p class="news-time"><?= date('M d, Y', strtotime($news_terbaru[0]->news_date)) ?>
                                        <a href="{{ route('detailNews', ['id' => $news_terbaru[0]->id]) }}" class="main"
                                            style="float:right;color:black"><i class="fas fa-book-open"></i></a>
                                    </p>
                                </div>
                            </div>
                            <div class="card card-news1" style="border: none;z-index: 2;">
                                <!-- <img src="/img/egypt.png" class="card-img-top card-img-news1" alt="..."> -->
                                <img src="/uploads/{{ $news_terbaru[0]->thumbnail }}" class="card-img-top card-img-news1"
                                    alt="...">
                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                    @endif
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
                                                <a href="{{ route('detailNews', ['id' => $newss->id]) }}"
                                                    class="col-4 card-img-lates">
                                                    <img src="/uploads/{{ $newss->thumbnail }}" class="card-img-lates"
                                                        alt="...">
                                                </a>
                                                <div class="col-8">
                                                    <div class="card-body text-bottom">
                                                        <!-- <h5 class="card-title-lates card-title"> Stay Safe and Healthy</h5> -->
                                                        <h5 class="card-title-lates card-title">
                                                            {{ $newss->{'news_title_' . app()->getLocale()} }}
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
        @endif
        @if ($news_terlaris->count() > 0)
            <div class="popularNews" style="z-index:1;">
                <div class="container">
                    <h4 class="lates-title1" style="font-weight: bold;">{{ __('news.title3') }}</h4>
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
                                                <img src="/uploads/{{ $newsst->thumbnail }}"
                                                    class="card-img-top card-img-popular" alt="...">
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <div class="card-body text-bottom" style="z-index:2;">
                                                <!-- <p class="news-popular-title">News</p> -->
                                                <!-- <h5 class="card-title card-title-popular">Card title</h5> -->
                                                <p class="news-popular-title">{{ __('news.title4') }}</p>
                                                <h5 class="card-title card-title-popular">
                                                    {{ $newsst->{'news_title_' . app()->getLocale()} }}</h5>
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
                                                <img src="/uploads/{{ $newsst->thumbnail }}"
                                                    class="card-img-top card-img-popular" alt="...">
                                            </div>
                                            <div class="col-6">
                                                <div class="card-body text-bottom" style="z-index:2;">
                                                    <p class="news-popular-title">News</p>
                                                    <h5 class="card-title card-title-popular">
                                                        {{ $newsst->{'news_title_' . app()->getLocale()} }}
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
                            <button href="{{ url('/') }}" onclick="buttonLess()" id="myBtn"
                                class="btn btn-primary">Load
                                more</button>
                            <button href="{{ url('/') }}" onclick="buttonLess()" id="myBtn2"
                                class="btn btn-primary" style="display:none;">Close</button>
                        </div>
                    @endif
                </div>
            </div>
        @endif
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
