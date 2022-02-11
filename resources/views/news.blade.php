@extends('layout-komponen.master')
@section('title','News')
@section('css-internal')
  <link rel="stylesheet" href="{{ asset('assets/css/news.css') }}">
  
@section('navbar-news','active')
@section('konten')

{{-- THE NEWS PAGE WITH FRESH CODE IS HERE!! --}}
<div class="jumbotron rounded-0">
  <div class="container">
    <div class="row">
      <h1 class="font-weight-bold text-white">NEWS</h1>
    </div>
  </div>
</div>

<section class="latest-news">
  <div class="container-fluid">
    <div class="container">
      <div class="s-content">
        <div class="title">
          <div class="row">
            <h4 class="pl-3 pt-4 font-weight-bold">LATEST NEWS</h4>
          </div>
        </div>
    
        <div class="news">
          <div class="row">
            <div class="col-6">
              <div class="card border-0 rounded-0">
                <img src="{{ asset('img/egypt.png') }}">
      
                <div class="card-body pb-0">
                  <div class="card-title">
                    <h4 class="font-weight-none pt-0 pt-md-3">Midnight In Egypt</h4>
                    <p class="text-date pt-2 pt-md-4 pb-0">September 02, 2019</p>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="col-6">
              <div name="item">
                <img class="float-left mr-3 mr-md-4" src="{{ asset('img/490.png') }}">
        
                <div name="description" class="pt-2 pr-1 pr-md-3">
                  <h4 class="font-weight-none pt-0 pt-md-3">Stay Safe and Healthy</h4>
                  <p class="text-date font-weight-bold pt-0 pt-md-2 pb-2">September 02, 2019</p>
                </div>
                <div class="clearfix"></div>
              </div>
        
              <div name="item">
                <img class="float-left mr-3 mr-md-4" src="{{ asset('img/490.png') }}">
        
                <div name="description" class="pt-2 pr-1 pr-md-3">
                  <h4 class="font-weight-none pt-0 pt-md-3">Yes We are Open</h4>
                  <p class="text-date font-weight-bold pt-0 pt-md-2 pb-2">September 02, 2019</p>
                </div>
                <div class="clearfix"></div>
              </div>
        
              <div name="item">
                <img class="float-left mr-3 mr-md-4" src="{{ asset('img/490.png') }}">
        
                <div name="description" class="pt-2 pr-1 pr-md-3">
                  <h4 class="font-weight-none pt-0 pt-md-3">Lagu Mila Cabelo Berjudul "Liar"</h4>
                  <p class="text-date font-weight-bold pt-0 pt-md-2 pb-2">September 02, 2019</p>
                </div>
                <div class="clearfix"></div>
              </div>
    
              <div name="item">
                <img class="float-left mr-3 mr-md-4" src="{{ asset('img/490.png') }}">
        
                <div name="description" class="pt-2 pr-1 pr-md-3">
                  <h4 class="font-weight-none pt-0 pt-md-3">Lagu Mila Cabelo Berjudul "Liar"</h4>
                  <p class="text-date font-weight-bold pt-0 pt-md-2 pb-2">September 02, 2019</p>
                </div>
                <div class="clearfix"></div>
              </div>
    
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





















<!-- add konten in here -->
{{-- <div class="header p-5">
    <div class="container" id="txt2" style="font-family: 'Poppins';">
        <p style="font-weight: bold;">NEWS</p>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <h4 class="lates-title"style="font-weight: bold;">LATEST NEWS</h4>
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
                            <p class="news-time"><?=date('M, d Y')?>
                                <a href="" class="" style="float:right;color:black"><i class="fas fa-book-open"></i></a>
                            </p>
                        </div>
                    </div>
                <div class="card card-news1" style="border: none;z-index: 2;">
                    <img src="/img/egypt.png" class="card-img-top card-img-news1" alt="...">
                        <div class="card-body">
                            <p class="news-time"><?=date('M, d Y')?>
                                <a href="" class="" style="float:right;color:black"><i class="fas fa-book-open"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-news-lates" style="z-index:2;">
                            <div class="row no-gutters">
                            <img src="/img/berita1.jpg" class="col-4 card-img-lates" alt="...">
                            <div class="col-8">
                                <div class="card-body text-bottom">
                                <h5 class="card-title-lates card-title"> Stay Safe and Healthy</h5>
                                <p class="news-time-lates"><?=date('M, d Y')?>
                                  <a href="" class="" style="float:right;color:black"><i class="fas fa-book-open"></i></a>   
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
                                <p class="news-time-lates"><?=date('M, d Y')?>
                                    <a href="" class="" style="float:right;color:black"><i class="fas fa-book-open"></i></a>
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
                                <h5 class="card-title-lates card-title"> Lagu Baru Camelia Cabello Berjudul "Liar"</h5>
                                <p class="news-time-lates"><?=date('M, d Y')?>
                                    <a href="" class="" style="float:right;color:black"><i class="fas fa-book-open"></i></a>
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
                                <h5 class="card-title-lates card-title"> Lagu Baru Mahalini Berjudul "Melawan Restu"</h5>
                                <p class="news-time-lates"><?=date('M, d Y')?>
                                    <a href="" class="" style="float:right;color:black"><i class="fas fa-book-open"></i></a>
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
        <h4 class="lates-title1"style="font-weight: bold;">POPULAR</h4>
            </div>
        </div>
        <div class="container popular-card-news" style="z-index:2;">
            <div class="row lates-title">
                  <div class="col-12">
                    <div class="card card-news-popular">
                    <div class="row no-gutters">
                      <div class="col-6">
                        <img src="https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg" class="card-img-top card-img-popular" alt="...">
                      </div>
                      <div class="col-6">
                        <div class="card-body text-bottom">
                          <p class="news-popular-title">News</p>
                          <h5 class="card-title card-title-popular">Card title</h5>
                          <p class="news-time-popular"><?=date('M, d Y')?>
                          </p>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card card-news-popular">
                    <div class="row no-gutters">
                      <div class="col-6">
                        <img src="https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg" class="card-img-top card-img-popular" alt="...">
                      </div>
                      <div class="col-6">
                        <div class="card-body text-bottom">
                          <p class="news-popular-title">News</p>
                          <h5 class="card-title card-title-popular">Card title</h5>
                          <p class="news-time-popular"><?=date('M, d Y')?>
                          </p>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card card-news-popular">
                    <div class="row no-gutters">
                      <div class="col-6">
                        <img src="https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg" class="card-img-top card-img-popular" alt="...">
                      </div>
                      <div class="col-6">
                        <div class="card-body text-bottom">
                          <p class="news-popular-title">News</p>
                          <h5 class="card-title card-title-popular">Card title</h5>
                          <p class="news-time-popular"><?=date('M, d Y')?>
                          </p>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card card-news-popular">
                    <div class="row no-gutters">
                      <div class="col-6">
                        <img src="https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg" class="card-img-top card-img-popular" alt="...">
                      </div>
                      <div class="col-6">
                        <div class="card-body text-bottom">
                          <p class="news-popular-title">News</p>
                          <h5 class="card-title card-title-popular">Card title</h5>
                          <p class="news-time-popular"><?=date('M, d Y')?>
                          </p>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div id="dots"></div>
                    <div id="more">
                    <div class="col-12">
                      <div class="card card-news-popular">
                      <div class="row no-gutters">
                        <div class="col-6">
                          <img src="https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg" class="card-img-top card-img-popular" alt="...">
                        </div>
                        <div class="col-6">
                          <div class="card-body text-bottom">
                            <p class="news-popular-title">News</p>
                            <h5 class="card-title card-title-popular">Card title</h5>
                            <p class="news-time-popular"><?=date('M, d Y')?>
                            </p>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="card card-news-popular">
                      <div class="row no-gutters">
                        <div class="col-6">
                          <img src="https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg" class="card-img-top card-img-popular" alt="...">
                        </div>
                        <div class="col-6">
                          <div class="card-body text-bottom">
                            <p class="news-popular-title">News</p>
                            <h5 class="card-title card-title-popular">Card title</h5>
                            <p class="news-time-popular"><?=date('M, d Y')?>
                            </p>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                    </div>

                    <div class="col-12">
                      <button href="{{url('/')}}" onclick="buttonLess()" id="myBtn" class="btn btn-primary">Load more</button>
                    </div>
            </div>
        </div>
</div> --}}
@endsection

@section('js-internal')
<!-- add tag js in here -->
<script>
  function buttonLess(){
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
      dots.style.display = "block";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      moreText.style.display = "block";
    }
  }
</script>
@endsection
