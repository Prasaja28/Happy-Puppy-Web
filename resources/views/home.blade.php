@extends('layout-komponen.master')
@section('title', 'Home')
<!-- name title -->
@section('css-internal')

    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('konten')

    {{-- HERO IMAGE WITH COMPRESSING CODE :) --}}
    <div class="jumbotron text-white">
        <div class="hero-title-container">
            <h1>MIDNIGHT
                <div>DISCOUNT 50%</div>
            </h1>
            <p>ON SATURDAY NIGHT</p>
        </div>
    </div>

    {{-- SOCIAL MEDIA --}}
    <div name="social-media">
        <ul class="navbar-right">
            @if ($settings[0] != null)
                <li>
                    <a target="_blank" class="social-item" href="{{ $settings[0]->value }}">
                        <img name="facebook" src="{{ asset('assets/img/icons/facebook.png') }}">
                    </a>
                </li>
            @else
                <a target="_blank" class="social-item" href="">
                    <img name="facebook" src="{{ asset('assets/img/icons/facebook.png') }}">
                </a>
            @endif
            @if ($settings[1] != null)
                <li>
                    <a target="_blank" class="social-item" href="{{ $settings[1]->value }}">
                        <img name="instagram" src="{{ asset('assets/img/icons/instagram.png') }}">
                    </a>
                </li>
            @else
                <li>
                    <a target="_blank" class="social-item" href="">
                        <img src="{{ asset('assets/img/icons/instagram.png') }}">
                    </a>
                </li>
            @endif
            @if ($settings[2] != null)
                <li>
                    <a target="_blank" class="social-item" href="{{ $settings[2]->value }}">
                        <img name="apple" src="{{ asset('assets/img/icons/apple.png') }}">
                    </a>
                </li>
            @else
                <li>
                    <a target="_blank" class="social-item" href="">
                        <img src="{{ asset('assets/img/icons/apple.png') }}">
                    </a>
                </li>
            @endif
            @if ($settings[3] != null)
                <li>
                    <a target="_blank" class="social-item" href="{{ $settings[3]->value }}">
                        <img src="{{ asset('assets/img/icons/whatsapp.png') }}">
                    </a>
                </li>
            @else
                <li>
                    <a target="_blank" class="social-item" href="">
                        <img src="{{ asset('assets/img/icons/whatsapp.png') }}">
                    </a>
                </li>
            @endif
            @if ($settings[4] != null)
                <li>
                    <a target="_blank" class="social-item" href="{{ $settings[4]->value }}">
                        <img src="{{ asset('assets/img/icons/google-play.png') }}">
                    </a>
                </li>
            @else
                <li>
                    <a target="_blank" class="social-item" href="">
                        <img src="{{ asset('assets/img/icons/google-play.png') }}">
                    </a>
                </li>
            @endif
        </ul>
    </div>
    <!-- END -->

    <!-- OUTLET SEARCH  -->
    <section name="outlet-search" class="mt-0">
        <div class="container-fluid text-white search-kota">
            <h4 class="pt-5 text-center">Cari Outlet Terdekat</h4>

            <center>
                <form class="form" method="get" action="{{ route('search') }}">
                    <div class="form-group w-50 mb-3">
                        <label for="search" class="d-block mr-2"></label>
                        <input type="text" name="keyword" class="form-control w-75 d-inline" id="search"
                            placeholder="Cari Outlet">
                        <button type="submit" class="btn btn-primary mb-1">Cari</button>
                    </div>
                </form>
                <!-- Start kode untuk form pencarian -->
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
            </center>

            <p class="text-center pt-4">Masukkan nama kota untuk mencari outlet di sekitar anda serta promo dan event yang
                sedang berlaku</p>

            <div name="city" class="row pt-3 justify-content-center">
                <a href="{{ route('search', ['keyword' => 'Jakarta']) }}" class="btn btn-primary btn-search"
                    style="text-transform:uppercase">Jakarta</a>
                <a href="{{ route('search', ['search' => 'Surabaya']) }}" class="btn btn-primary btn-search"
                    style="text-transform:uppercase">Surabaya</a>
                <a href="{{ route('search', ['search' => 'Makasar']) }}" class="btn btn-primary btn-search"
                    style="text-transform:uppercase">Makasar</a>
                <a href="{{ route('search', ['search' => 'Samarinda']) }}" class="btn btn-primary btn-search"
                    style="text-transform:uppercase">Samarinda</a>
            </div>

            <h4 name="top-artist" class="font-weight-bold text-center py-5">TOP ARTIST</h4>
        </div>
    </section>
    <!-- END -->

    <!-- ARTIST -->
    <div name="artist" class="container top-artis">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="d-flex flex-wrap align-items-center justify-content-center">
                    @if ($topartist->count() != 0)
                        @foreach ($topartist as $data)
                            @if ($data->status == 1)
                                <img class="img-thumbnail mr-4 mr-md-5" src="{{ $data->thumbnail }}">
                                <!-- <img class="img-thumbnail mr-4 mr-md-5" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg">
                                                                                                    <img class="img-thumbnail mr-4 mr-md-5" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg">
                                                                                                    <img class="img-thumbnail mr-md-5" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg">
                                                                                                    <img class="img-thumbnail mr-4 mr-md-5 mt-3 mt-md-0" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg">
                                                                                                    <img class="img-thumbnail mt-3 mt-md-0" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"> -->
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
                        <h6 class="font-weight-bold top-title">LAGU TERLARIS</h6>
                        <div class="card border-0">
                            @if ($songlist_terlaris->count() != null)
                                <img src="{{ $songlist_terlaris[0]->thumbnail }}" class="card-img-top">
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
                        <h6 class="font-weight-bold top-title">LAGU TERBARU</h6>
                        <div class="card border-0">
                            @if ($songlist_terbaru->count() != null)
                                <img src="{{ $songlist_terbaru[0]->thumbnail }}" class="card-img-top">
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
                <h6 class="font-weight-bold top-title">LATEST NEWS</h6>
                @if ($news_terbaru->count() > 5)
                    <a name="view-all" class="view-all" href="news">VIEW ALL</a>
                @else
                    <a name="view-all" class="view-all" href="news"></a>
                @endif

            </div>

            <div class="row">
                @if ($news_terbaru->count() > 0)
                    <div class="col-6">
                        <div class="card border-0 rounded-0">
                            <img src="{{ $news_terbaru[0]->thumbnail }}">
                            <!-- <img src="{{ asset('img/egypt.png') }}"> -->
                            <div class="card-body pb-0">
                                <div class="card-title">
                                    <!-- <h4 class="font-weight-none pt-1 pt-md-3">Midnight In Egypt</h4>
                                                                                                                 <div class="date d-flex justify-content-between align-items-center">
                                                                                                                   <p class="text-date pt-2 pt-md-4 pb-0">September 02, 2019</p>
                                                                                                                   <a href="#"><img src="{{ asset('img/book.png') }}"></a> -->
                                    <h4 class="font-weight-none pt-1 pt-md-3">{{ $news_terbaru[0]->news_title_id }}</h4>
                                    <div class="date d-flex justify-content-between align-items-center">
                                        <p class="text-date pt-2 pt-md-4 pb-0">
                                            <?= date('M d, Y', strtotime($news_terbaru[0]->news_date)) ?></p>
                                        <a href="{{ route('detailNews', ['id' => $news_terbaru[0]->id]) }}"><img
                                                src="{{ asset('img/book.png') }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($news_terbaru->count() > 1)
                    <div class="col-6">
                        <div class="card border-0 rounded-0">
                            <img src="{{ $news_terbaru[1]->thumbnail }}">
                            <!-- <img src="{{ asset('img/egypt.png') }}"> -->
                            <div class="card-body pb-0">
                                <div class="card-title">
                                    <!-- <h4 class="font-weight-none pt-1 pt-md-3">Midnight In Egypt</h4>
                                                                                                                                                                      <div class="date d-flex justify-content-between align-items-center">
                                                                                                                                                                        <p class="text-date pt-2 pt-md-4 pb-0">September 02, 2019</p>
                                                                                                                                                                        <a href="#"><img src="{{ asset('img/book.png') }}"></a> -->
                                    <h4 class="font-weight-none pt-1 pt-md-3">{{ $news_terbaru[1]->news_title_id }}</h4>
                                    <div class="date d-flex justify-content-between align-items-center">
                                        <p class="text-date pt-2 pt-md-4 pb-0">
                                            <?= date('M d, Y', strtotime($news_terbaru[1]->news_date)) ?></p>
                                        <a href="{{ route('detailNews', ['id' => $news_terbaru[1]->id]) }}"><img
                                                src="{{ asset('img/book.png') }}"></a>
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
                        <div name="item" class="col-11 col-md-8 px-0 mb-5">
                            <!-- <img class="float-left mr-3 mr-md-4" src="{{ asset('img/hijau-next-news.png') }}"> -->
                            <img class="float-left mr-3 mr-md-4" src="{{ $newst->thumbnail }}">

                            <div name="description" class="pr-1 pr-md-3">
                                <p class="label font-weight-bold mb-2 mb-md-4 mt-3 mt-md-4">NEWS</p>
                                <h4 class="font-weight-none pt-0 pt-md-3">{{ $newst->news_title_id }}</h4>
                                <div class="date d-flex justify-content-between align-items-center">
                                    <p class="text-date pt-2 pt-md-4 pb-0">
                                        <?= date('M d, Y', strtotime($newst->news_date)) ?></p>
                                    <!-- <p class="label font-weight-bold mb-2 mb-md-4 mt-3 mt-md-4">NEWS</p>
                                                                                                               <h4 class="font-weight-none pt-0 pt-md-3">Usaha Keras Musisi Introvert Zion.T</h4>
                                                                                                               <div class="date d-flex justify-content-between align-items-center">
                                                                                                                 <p class="text-date font-weight-bold pt-3 pt-md-5 pb-0 pb-md-3">September 02, 2019</p> -->
                                    <a href="{{ route('detailNews', ['id' => $newst->id]) }}"
                                        class="pr-2 pr-md-0"><img src="{{ asset('img/book.png') }}"></a>
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
    </script>

@endsection
