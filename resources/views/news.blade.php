@extends('layout-komponen.master')

@section('title','News') <!-- name title -->

@section('css-internal')
<!-- Add tag css in here -->
<style>
.header{
  min-height: 30vh;
  background: no-repeat center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: rightl;
  background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg')
}
.lates-news-list{
    background-color:#221E40;
    min-height:250px;
}
.lates-title{
    padding-top:30px;
    padding-bottom:50px;
    padding-left:60px;
}
.news-list{
    margin-top: -285px;  
}
.card-news{
  width: 28rem;
  margin-bottom: 10px;
}
.card-img-news{
  height:240px;
}
.news-time{
  margin-bottom:-10px;
  font-size:12px;
}
.title-news{
  font-size:16px;
}
.card-news-lates{
  width: 28rem;
  height: 90px;
  margin: 0 auto; /* Added */
  float: none; /* Added */
  margin-bottom: 10px;
  margin-top:10px;
}
.card-img-lates{
  height:90px;
  background: no-repeat center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: rightl;
}
.news-lates-title{
    color:#106ec3;
    font-size:12px;
    margin-top:-15px;
    margin-bottom:40px;
    font-weight:bold
}
.card-title-lates{
min-height:40px;
margin-top:-10px;
font-size:16px
}
.news-time-lates{
  font-size:10px;
}
.card-news-popular{
  width: 32rem;
  height: 130px;
  margin-bottom: 10px;
  margin-top:10px;
}

.news-popular-title{
    color:#106ec3;
    font-size:12px;
    margin-top:-15px;
    margin-bottom:40px;
    font-weight:bold
}
.popularNews{
    margin-top:100px;
    min-height:200px;
    background-color:#221E40;
}
.card-img-popular{
  height:130px;
}
.popular-card-news{
    margin-top:-150px;
}
.card-title-popular{
    font-size:16px;
    margin-top:-20px;
    min-height:40px
}
.card-news-lates-list{
    padding-left:120px;
    padding-right:120px;
}
.padding-card{
    padding-top:10px;
}
@media (max-width:600px) {
    .lates-news-list{
    background-color:#221E40;
    min-height:125px;
    margin-top:25px;
    }
    .news-list{
        margin-top: -160px;  
    }
    .card-news{
    width: 10rem;
    height: 170px;
    margin-bottom: 10px;
    }
    .card-img-news{
    height:90px;
    }
    .news-time{
    font-size:8px;
    }
    .title-news{
    margin-top:-15px;
    font-size:12px;
    min-height:30px;
    }
    .card-news-lates{
    width: 10rem;
    height: 50px;
    margin: 0 auto; /* Added */
    float: none; /* Added */
    margin-bottom: 5px;
    margin-top:5px;
    }
    .padding-card{
        padding-top:40px;
    }
    .card-img-lates{
    height:50px;
    background: no-repeat center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-position: rightl;
    }
    .news-lates-title{
        color:#106ec3;
        font-size:12px;
        margin-top:-15px;
        margin-bottom:40px;
        font-weight:bold
    }
    .card-title-lates{
    min-height:15px;
    margin-top:-10px;
    font-size:8px
    }
    .news-time-lates{
    font-size:4px;
    }
    .card-news-popular{
    width: 16rem;
    height: 65px;
    margin: 0 auto; /* Added */
    float: none; /* Added */
    margin-bottom: 10px;
    margin-top:10px;
    }
    .news-popular-title{
        color:#106ec3;
        font-size:7px;
        margin-top:-15px;
        margin-bottom:30px;
        font-weight:bold
    }
    .popularNews{
        margin-top:25px;
        min-height:200px;
        background-color:#221E40;
    }
    .card-img-popular{
        height:65px;
    }
    .popular-card-news{
        margin-top:-175px;
    }
    .card-title-popular{
        font-size:8px;
        margin-top:-20px;
        min-height:10px
    }
    .card-news-lates-list{
    padding-left:10px;
    padding-right:10px;
    }
    .lates-title{
    font-size:16px;
    padding-top:15px;
    padding-bottom:0px;
    padding-left:0px;
    }
    .news-time-popular{
       font-size:6px;
    }
}
</style>
@endsection
@section('navbar-news','active')
@section('konten')
<!-- add konten in here -->
<div class="header ">
    <div class="container blur-color text-white">
        <h2 class="pl-5 font-weight-bold" style="padding-top:125px;">News</h2>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <h4 class="lates-title">Lates News</h4>
    </div>
        <div class="lates-news-list">
        </div>
        <div class="news-list">
            <div class="row card-news-lates-list">
                <div class="col-6 padding-card">
                    <div class="card card-news">
                        <img src="https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg" class="card-img-top card-img-news" alt="...">
                        <div class="card-body">
                            <h5 class="card-title title-news">Card title</h5>
                            <p class="news-time"><?=now()?>
                                <a href="" class="" style="float:right;color:black"><i class="fas fa-book-open"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-news-lates">
                            <div class="row no-gutters">
                            <div class="col-4 card-img-lates" style="background-image: url('https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg')">
                            </div>
                            <div class="col-8">
                                <div class="card-body text-bottom">
                                <h5 class="card-title-lates card-title"> expertienst</h5>
                                <p class="news-time-lates"><?=now()?>
                                    <a href="" class="" style="float:right;color:black"><i class="fas fa-book-open"></i></a>
                                </p>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-news-lates">
                            <div class="row no-gutters">
                            <div class="col-4 card-img-lates" style="background-image: url('https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg')">
                            </div>
                            <div class="col-8">
                                <div class="card-body text-bottom">
                                <h5 class="card-title-lates card-title"> expertienst</h5>
                                <p class="news-time-lates"><?=now()?>
                                    <a href="" class="" style="float:right;color:black"><i class="fas fa-book-open"></i></a>
                                </p>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-news-lates">
                            <div class="row no-gutters">
                            <div class="col-4 card-img-lates" style="background-image: url('https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg')">
                            </div>
                            <div class="col-8">
                                <div class="card-body text-bottom">
                                <h5 class="card-title-lates card-title"> expertienst</h5>
                                <p class="news-time-lates"><?=now()?>
                                    <a href="" class="" style="float:right;color:black"><i class="fas fa-book-open"></i></a>
                                </p>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-news-lates">
                            <div class="row no-gutters">
                            <div class="col-4 card-img-lates" style="background-image: url('https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg')">
                            </div>
                            <div class="col-8">
                                <div class="card-body text-bottom">
                                <h5 class="card-title-lates card-title"> expertienst</h5>
                                <p class="news-time-lates"><?=now()?>
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
        <div class="popularNews">
            <div class="container">
                <h4 class="lates-title text-uppercase text-white">popular</h4>
            </div>
        </div>
        <div class="container popular-card-news">
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
                          <p class="news-time-popular"><?=now()?>
                            <a href="" class="" style="float:right;color:black"><i class="fas fa-book-open"></i></a>
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
                          <p class="news-time-popular"><?=now()?>
                            <a href="" class="" style="float:right;color:black"><i class="fas fa-book-open"></i></a>
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
                          <p class="news-time-popular"><?=now()?>
                            <a href="" class="" style="float:right;color:black"><i class="fas fa-book-open"></i></a>
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
                          <p class="news-time-popular"><?=now()?>
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
@endsection

@section('js-internal')
<!-- add tag js in here -->

@endsection