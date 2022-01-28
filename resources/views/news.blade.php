@extends('layout-komponen.master')

@section('title','News') <!-- name title -->

@section('css-internal')
<!-- Add tag css in here -->
<style>
.header{
  min-height: 50vh;
  background: no-repeat center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: rightl;
  background-image: url('/img/news.png')
}
#n1{
  font-family: 'Poppins';
}
#txt2{
    color: white;
    position: absolute;
    bottom: 0;
    text-align: justify;
    margin: 0;
    font-size: 40px;
    min-height: 350px;
    font-weight: bold;
    text-indent: 1.2in;
    font-family: 'Poppins';
}

.lates-news-list{
    background-color:#221E40;
    min-height:230px;
    max-width: 1100px;
    width: 100%;
    margin: 10px 50px 0px 100px;
    padding-left: 20px; 
    padding-right:20px;
}
.lates-title{
    padding-top:50px;
    padding-bottom:50px;
    padding-left:60px;
    margin-bottom: 40px;
    color:#221E40;
    font-size: 20px;
}
.news-list{
    margin-top: -285px;  
    padding-left:47px;
}

.card-news{
  position: absolute;
  width: 28rem;
  margin-bottom: 10px;
  z-index: 3;
}
.card-news1{
  position: absolute;
  width: 27rem;
  height: 23rem;
  margin-bottom: 3px;
  z-index: 2;
    left: 50px;
    top: 9px;
    background-color: #E9EEF4;
}
.card-img-news{
  height:240px;
}
.card-img-news1{
  height:260px;
}
.news-time{
  margin-bottom:-10px;
  font-size:12px;
  font-family: 'Poppins';
}
.title-news{
  font-size:16px;
  margin-bottom: 30px;
  font-family: 'Poppins';
}
.card-news-lates{
  width: 28rem;
  height: 90px;
  margin: 0 auto; /* Added */
  float: none; /* Added */
  margin-bottom: 10px;
  margin-top:10px;
  right: 50px;
  border: none;

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
    font-family: 'Poppins';
}
.card-title-lates{
  min-height:40px;
  margin-top:-10px;
  font-size:16px
  font-family: 'Poppins';
}
.news-time-lates{
  font-size:10px;
  font-family: 'Poppins';
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
    font-family: 'Poppins';
}
.popularNews{
    margin-top:100px;
    margin-left: 0px;
    margin-right: 0px;
    min-height:300px;
    max-width: 1500px;
    width: 100%;
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
#more {display: none;}
  #myBtn{
    display: block;
    border-radius:50px;
    font-size:15px;
    margin-top:40px;
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 5px;
    padding-bottom: 5px;
    font-family: 'Poppins';
    background-color:#221E40;
    /* font-family: 'Poppins'; */
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
    /* font-family: 'Poppins'; */
    }
    .title-news{
    margin-top:-15px;
    font-size:12px;
    min-height:30px;
    /* font-family: 'Poppins'; */
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
        /* font-family: 'Poppins'; */
    }
    .card-title-lates{
      min-height:15px;
      margin-top:-10px;
      font-size:8px
      /* font-family: 'Poppins'; */
    }
    .news-time-lates{
      font-size:4px;
      /* font-family: 'Poppins'; */
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
        /* font-family: 'Poppins'; */
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
        /* font-family: 'Poppins'; */
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
      /* font-family: 'Poppins'; */
    }
    .news-time-popular{
       font-size:6px;
       /* font-family: 'Poppins'; */
    }
    #myBtn{
      display: block;
      border-radius:50px;
      font-size:8px;
      margin-top:10px;
      margin: 0 auto; /* Added */
      background-color:#221E40;
      /* font-family: 'Poppins'; */
  }
  #more {
    display: none;
    margin: 0 auto; /* Added */
    float: none; /* Added */
  }
}
</style>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
@endsection
@section('navbar-news','active')
@section('konten')
<!-- add konten in here -->
<div class="header p-5">
    <div class="container" id="txt2" style="font-family: 'Poppins';">
        <p style="font-weight: bold;">NEWS</p>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <h4 class="lates-title"style="font-weight: bold;">LATEST NEWS</h4>
    </div>
        <div class="lates-news-list">
        </div>
        <div class="news-list">
            <div class="row card-news-lates-list">
                <div class="col-6 padding-card">
                    <div class="card card-news" style="border: none;">
                        <img src="/img/egypt.png" class="card-img-top card-img-news" alt="...">
                        <div class="card-body">
                            <h5 class="card-title title-news" style="font-weight: bold;">Midnight In Egypt</h5>
                            <p class="news-time"><?=date('M, d Y')?>
                                <a href="" class="" style="float:right;color:black"><i class="fas fa-book-open"></i></a>
                            </p>
                        </div>
                    </div>
                <div class="card card-news1" style="border: none;">
                    <img src="/img/egypt.png" class="card-img-top card-img-news1" alt="...">
                        <div class="card-body">
                            <h2 class="card-title title-news" >Midnight In Egypt</h2>
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
                            <img src="/img/berita1.jpg" class="col-4 card-img-lates" alt="...">
                            <div class="col-8">
                                <div class="card-body text-bottom">
                                <h5 class="card-title-lates card-title"> Stay safe and Healthy</h5>
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
                            <img src="/img/berita2.jpg" class="col-4 card-img-lates" alt="...">
                            <div class="col-8">
                                <div class="card-body text-bottom">
                                <h5 class="card-title-lates card-title"> Yes, we are open</h5>
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
                            <img src="/img/berita5.jpg" class="col-4 card-img-lates" alt="...">
                            <div class="col-8">
                                <div class="card-body text-bottom">
                                <h5 class="card-title-lates card-title"> Lagu baru camelia cabello berjudul "Liar"</h5>
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
                            <img src="/img/berita4.jpg" class="col-4 card-img-lates" alt="...">
                            <div class="col-8">
                                <div class="card-body text-bottom">
                                <h5 class="card-title-lates card-title"> Lagu baru camelia cabello berjudul "Melawan restu"</h5>
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
            <div class="container" style="font-family:'Poppins'; font-size: 25px;">
                <p class="lates-title text-uppercase text-white">popular</p>
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

                    <div class="col-12">
                      <button href="{{url('/')}}" onclick="buttonLess()" id="myBtn" class="btn btn-primary">Load more</button>
                    </div>
                    <br><br><br>
            </div>
        </div>
</div>
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
