@extends('layout-komponen.master')
@section('title', 'Home')
<!-- name title -->
@section('css-internal')

    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

    <style>
        .card a.clickArea {
            color: #85baff;
            text-align: right;
            display: block;
            z-index: 1;
        }

        .card a.clickArea::after {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            content: ' ';
        }

        .item a.itemClick {
            color: #85baff;
            text-align: right;
            display: block;
            z-index: 1;
        }

        #latest img {
            object-fit: cover;
            object-position: center;
            width: 100%;
            max-height: 250px;
            margin-bottom: 1rem;
        }

        .item a.itemClick::after {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            content: ' ';
        }

        .top-artis .d-flex p{        
            font-size: 15px;
            font-weight: bold;
            line-height: 46px;
            text-align: center;
        }

        @media (max-width:600px) {

            /* pembenahan buat card news */
            section[name="next-news"] div[name="item"] img {
                width: 50%;
                height: 100%;
                object-fit: cover;
            }

            section[name="next-news"] div[name="item"] h4 {
                font-size: 12px;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
            }

            section[name="next-news"] div[name="item"] {
                box-shadow: 4px 6px 10px rgb(0 0 0 / 8%);
                height: 125px;
            }

            #latest h4 {
                font-size: 12px;
                overflow: hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
            }

            .top-artis .d-flex p {
                font-size: 10px;
                font-weight: bold;
                line-height: 25px;
                text-align: center;
            }

        }
    </style>
@endsection

@section('konten')

    {{-- HERO IMAGE WITH COMPRESSING CODE :) --}}
    <div class="jumbotron text-white" style="background-image: url('{{ $settings['banner_home'] }}')">
    </div>

    {{-- SOCIAL MEDIA --}}
    @if (count($settings) > 0)
        <div name="social-media">
            <ul class="navbar-right">
                @if (!empty($settings['url_facebook']))
                    <li>
                        <a target="_blank" class="social-item" href="{{ $settings['url_facebook'] }}">
                            <img name="facebook" src="{{ asset('assets/img/icons/facebook.png') }}">
                        </a>
                    </li>
                @endif
                @if (!empty($settings['url_instagram']))
                    <li>
                        <a target="_blank" class="social-item" href="{{ $settings['url_instagram'] }}">
                            <img name="instagram" src="{{ asset('assets/img/icons/instagram.png') }}">
                        </a>
                    </li>
                @endif
                @if (!empty($settings['url_whatsapp']))
                    <li>
                        <a target="_blank" class="social-item" href="{{ $settings['url_whatsapp'] }}">
                            <img src="{{ asset('assets/img/icons/whatsapp.png') }}">
                        </a>
                    </li>
                @endif
                @if (!empty($settings['url_tiktok']))
                    <li>
                        <a target="_blank" class="social-item" href="{{ $settings['url_tiktok'] }}">
                            <img src="{{ asset('assets/img/icons/tiktok.png') }}">
                        </a>
                    </li>
                @endif
                @if (!empty($settings['url_youtube']))
                    <li>
                        <a target="_blank" class="social-item" href="{{ $settings['url_youtube'] }}">
                            <img src="{{ asset('assets/img/icons/youtube.png') }}">
                        </a>
                    </li>
                @endif
                @if (!empty($settings['url_apple']))
                    <li>
                        <a target="_blank" class="social-item" href="{{ $settings['url_apple'] }}">
                            <img name="apple" src="{{ asset('assets/img/icons/apple.png') }}">
                        </a>
                    </li>
                @endif
                @if (!empty($settings['url_google_play']))
                    <li>
                        <a target="_blank" class="social-item" href="{{ $settings['url_google_play'] }}">
                            <img src="{{ asset('assets/img/icons/google-play.png') }}">
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    @endif
    {{-- //if count > 8 then hide them --}}
    @if (count($settings) > 8)
        @foreach ($settings as $key => $value)
            @if ($key > 8)
                <script>
                    document.getElementsByName('social-media')[0].style.display = 'none';
                </script>
            @endif
        @endforeach
    @endif
    <!-- END -->

    <!-- OUTLET SEARCH  -->
    <section name="outlet-search" class="mt-0">
        <div class="container-fluid text-white search-kota">
            <!-- <h4 class="pt-5 text-center">Cari Outlet Terdekat</h4> -->
            <h4 class="pt-5 text-center">{{ __('home.find1') }}</h4>

            <center>
                <form class="form" method="get" action="{{ route('search') }}">
                    <div class="form-group mb-3">
                        <label for="search" class="d-block mr-2"></label>
                        <input type="text" name="keyword" class="form-control w-75 d-inline" id="search"
                            placeholder="{{ __('home.find4') }}">
                        <!-- <button type="submit" class="btn btn-primary mb-1">Cari</button> -->
                        <button type="submit" class="btn btn-primary mb-1">{{ __('home.find2') }}</button>
                    </div>
                </form>
                <!-- Start kode untuk form pencarian -->
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
            </center>

            <!-- <p class="text-center pt-4">Masukkan nama kota untuk mencari outlet di sekitar anda serta promo dan event yang sedang berlaku</p> -->
            <p class="text-center pt-4">{{ __('home.find3') }}</p>

            <div name="city" class="row pt-3 justify-content-center">
                <a href="{{ route('search', ['keyword' => 'jakarta']) }}" class="btn mx-3 btn-primary btn-search"
                    style="text-transform:uppercase">Jakarta</a>
                <a href="{{ route('search', ['keyword' => 'surabaya']) }}" class="btn mx-3 btn-primary btn-search"
                    style="text-transform:uppercase">Surabaya</a>
                <a href="{{ route('search', ['keyword' => 'makassar']) }}" class="btn mx-3 btn-primary btn-search"
                    style="text-transform:uppercase">Makassar</a>
                <a href="{{ route('search', ['keyword' => 'samarinda']) }}" class="btn mx-3 btn-primary btn-search"
                    style="text-transform:uppercase">Samarinda</a>
            </div>

            <h4 name="top-artist" class="font-weight-bold text-center py-5">{{ __('home.top') }}</h4>
        </div>
    </section>
    <!-- END -->

    <!-- ARTIST -->
    <div name="artist" class="container top-artis">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <div class="d-flex flex-wrap align-items-center justify-content-center">
                    @if ($topartist->count() != 0)
                        @foreach ($topartist as $data)
                            @if ($data->status == 1)
                            <div class="d-flex flex-column">
                                <img class="img-thumbnail mr-4 mr-md-5" src="/uploads/{{ $data->thumbnail }}">
                                <p>{{$data->name}}</p>
                            </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- song list -->
    <section name="song">
        <div class="container song-container">
            <div name="sheets">
                <div class="row justify-content-center">
                    <div class="col-6 col-md-4">
                        <h6 class="font-weight-bold top-title">{{ __('home.song1') }}</h6>
                        <div class="card border-0">
                            @if ($songlist_terlaris->count() != null)
                                <img src="/uploads/{{ $songlist_terlaris[0]->thumbnail }}" class="card-img-top">
                            @endif
                            <div class="card-body">
                                @if ($songlist_terlaris->count() != null)
                                    <h5 class="card-title font-weight-bold">{{ $songlist_terlaris[0]->artist }}</h5>
                                    <p class="text-muted">{{ $songlist_terlaris[0]->title_song }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4">
                        <h6 class="font-weight-bold top-title">{{ __('home.song2') }}</h6>
                        <div class="card border-0">
                            @if ($songlist_terbaru->count() != null)
                                <img src="/uploads/{{ $songlist_terbaru[0]->thumbnail }}" class="card-img-top">
                            @endif
                            <div class="card-body">
                                @if ($songlist_terbaru->count() != null)
                                    <h5 class="card-title font-weight-bold">{{ $songlist_terbaru[0]->artist }}</h5>
                                    <p class="text-muted">{{ $songlist_terbaru[0]->title_song }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div name="list-song" class="row justify-content-center mt-3">
                    <div class="col-6 col-md-4">
                        <div class="card border-0">
                            <div class="card-body">
                                @foreach ($songlist_terlaris as $key => $song)
                                    @php
                                        if ($key == 0) {
                                            continue;
                                        }
                                    @endphp
                                    <h6 class="font-weight-bold">{{ $song->artist }}</h6>
                                    <p class="text-muted">{{ $song->title_song }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4">
                        <div class="card border-0">
                            <div class="card-body">
                                @foreach ($songlist_terbaru as $key => $song)
                                    @php
                                        if ($key == 0) {
                                            continue;
                                        }
                                    @endphp
                                    <h6 class="font-weight-bold">{{ $song->artist }}</h6>
                                    <p class="text-muted">{{ $song->title_song }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END --}}

    {{-- LATEST NEWS --}}
    <section name="latest-news">
        <div class="container">
            <div class="row">
                <h6 class="font-weight-bold top-title">{{ __('home.latest1') }}</h6>
                @if ($news_terbaru->count() > 5)
                    <a name="view-all" class="view-all" href="news">VIEW ALL</a>
                @else
                    <a name="view-all" class="view-all" href="news"></a>
                @endif

            </div>

            <div class="row">
                @if ($news_terbaru->count() > 0)
                    <div class="col-6">
                        <div class="card border-0 rounded-0" id="latest">
                            <img src="/uploads/{{ $news_terbaru[0]->thumbnail }}">
                            <div class="card-body pb-0">
                                <div class="card-title">
                                    <h4 class="font-weight-none pt-1 pt-md-3">
                                        {{ $news_terbaru[0]->{'news_title_' . app()->getLocale()} }}</h4>
                                    <div class="date d-flex justify-content-between align-items-center">
                                        <p class="text-date pt-2 pt-md-4 pb-0">
                                            <?= date('M d, Y', strtotime($news_terbaru[0]->news_date)) ?></p>
                                        <a href="{{ route('detailNews', ['id' => $news_terbaru[0]->id]) }}"
                                            class="clickArea"><img src="{{ asset('img/book.png') }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($news_terbaru->count() > 1)
                    <div class="col-6">
                        <div class="card border-0 rounded-0" id="latest">
                            <img src="/uploads/{{ $news_terbaru[1]->thumbnail }}">
                            <div class="card-body pb-0">
                                <div class="card-title">
                                    <h4 class="font-weight-none pt-1 pt-md-3">{{ $news_terbaru[1]->news_title_id }}</h4>
                                    <div class="date d-flex justify-content-between align-items-center">
                                        <p class="text-date pt-2 pt-md-4 pb-0">
                                            <?= date('M d, Y', strtotime($news_terbaru[1]->news_date)) ?></p>
                                        <a href="{{ route('detailNews', ['id' => $news_terbaru[1]->id]) }}"
                                            class="clickArea"><img src="{{ asset('img/book.png') }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    {{-- NEXT NEWS --}}
    <section name="next-news">
        <div class="container">
            <div class="row justify-content-center">
                @if ($news_terbaru->count() != null)
                    @foreach ($news_terbaru as $key => $newst)
                        @php
                            if ($key == 0) {
                                continue;
                            }
                            if ($key == 1) {
                                continue;
                            }
                        @endphp
                        <div name="item" class="col-11 col-md-8 px-0 mb-5 item">
                            <img class="float-left mr-3 mr-md-4" src="/uploads/{{ $newst->thumbnail }}">

                            <div name="description" class="pr-1 pr-md-3">
                                <p class="label font-weight-bold mb-2 mb-md-4 mt-3 mt-md-4">{{ __('home.latest2') }}</p>
                                <h4 class="font-weight-none pt-0 pt-md-3">{{ $newst->news_title_id }}</h4>
                                <div class="date d-flex justify-content-between align-items-center">
                                    <p class="text-date pt-2 pt-md-4 pb-0">
                                        <?= date('M d, Y', strtotime($newst->news_date)) ?></p>
                                    <a href="{{ route('detailNews', ['id' => $newst->id]) }}"
                                        class="pr-2 pr-md-0 itemClick"><img src="{{ asset('img/book.png') }}"></a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection


@section('js-internal')
    <!-- add tag js in here -->

    <script>
        function buttonLess() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                moreText.style.display = "inline";
            }
        }

        function buttonLess2() {
            var dots = document.getElementById("dots2");
            var moreText = document.getElementById("more2");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                moreText.style.display = "inline";
            }
        }
    </script>
    <!-- Select2  -->
    <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2({

            });
            //Initialize Select2 Elements
            $('.select2bs4').select2({
                //set placeholder
                placeholder: `<p class="text-center" style="color: #A3A3A3; opacity: 0.6;">Masukkan Nama Kota</p> 
                      <p style='text-align:right; margin-top:-51px'>
                        <i class='fas fa-search'></i>
                      </p>
                    `,
                allowClear: true,
                templateResult: formatState,
                escapeMarkup: function(m) {
                    return m;
                },
                theme: 'bootstrap4',
                width: 'resolve'
            });
            //border-radius custom
            $('.select2-selection').css('border-radius', '10px');

            //redirect after selecting
            $('.select2bs4').on('change', function() {
                var data = $(".select2bs4 option:selected").val();
                window.location.href = '/lokasi/' + data;
            })

            function formatState(state) {
                let searchOptions = document.querySelectorAll('#search option');
                if (state.id) {
                    return searchOptions.innerHTML =
                        `<i class="fas fa-search" style="color: #888888; margin-right: 10px;"></i> ${state.text}`;
                }
            };
        })
    </script>
    <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2({

            });
            //Initialize Select2 Elements
            $('.select2bs4').select2({
                //set placeholder
                placeholder: '<center>Masukkan Nama Kota</center>' +
                    '<p style="text-align:right;margin-top:-36px"><i class="fas fa-search"></i></p>',
                allowClear: true,
                templateResult: formatState,
                escapeMarkup: function(m) {
                    return m;
                },
                theme: 'bootstrap4',
                width: 'resolve'
            });
            //border-radius custom
            $('.select2-selection').css('border-radius', '10px');

            //redirect after selecting
            $('.select2bs4').on('change', function() {
                var data = $(".select2bs4 option:selected").val();
                // window.location.href = '/lokasi-outlet/'+data;
                window.location.href = '/lokasi-outlet/';
            })

            // function formatState (state) {
            // return state.text;
            // };
            function formatState(state) {
                console.log(state);

                if (!state.id) {
                    return state.text;
                }
                var $state =
                    '<i class="fas fa-search">  ' + '  </i>     ' + state.text;
                return $state;
            };
        });
    </script>
    <script>
        //if href is empty, then hide the link
        $('.social-item').each(function() {
            if ($(this).attr('href') == '') {
                $(this).hide();
            }
        });

        $('.navbar-right li:first-child').css('margin-top', '20px');
    </script>

@endsection
