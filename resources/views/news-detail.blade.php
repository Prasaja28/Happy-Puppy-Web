@extends('layout-komponen.masterNews')

@section('title', 'News Detail')
<!-- name title -->

@section('css-internal')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/detail-news.css') }}">
@endsection
@section('navbar-news', 'active')
@section('konten')
    <!-- <div class="color-background">

                                                                                        </div> -->
    <div class="header" style="z-index:1;">
    </div>
    <div class="container">
        <div class="image-background" style="z-index: 3;">
            <img src="/uploads/{{ $news_detail[0]->thumbnail }}" alt="">
        </div>
    </div>
    <!-- add konten in here -->
    <div class="container news-content">
        <div class="row mb-5">
            <div class="col-lg-12 ">
            </div>
            <div class="col-lg-7">
                <ul class="nav mt-2" role="tablist">
                    <li class="nav-item">
                        <a class="title-news1" role="tab" data-toggle="tab">{{ __('news-detail.pop') }}</a>
                    </li>
                </ul>


                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="title-news2">{{ $news_detail[0]->{'news_title_'.app()->getLocale()} }}</div>

                    <div class="news-time1">{{ $news_detail[0]->news_date }}</div>

                    <div class="news">
                    {!! $news_detail[0]->{'news_content_'.app()->getLocale()} !!}
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
                                    <div class="card card-news" id="latest">
                                        <img src="/uploads/{{ $ntd->thumbnail }}" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title title-news">
                                                {{ $ntd->{'news_title_'.app()->getLocale()} }}
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
                                                {{ $ntd->{'news_title_'.app()->getLocale()} }}
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
