@extends('layout-komponen.master')

@section('title','Home') <!-- name title -->

@section('navbar-lokasi','active')
@section('css-internal')
<!-- Add tag css in here -->

  <!-- Select2 -->
  
  <!-- search 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
-->

<style>
.header{
  min-height: 50vh;
  background: no-repeat center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: rightl;
  background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg')
}
.search-kota{
    background-color:#221E40;
}
.top-artis{
  background-color:#FFF;
  min-height: 200px;
}
.rounded-circle{
  border: 5px solid #FFF;
  margin-top:-37px;
}
.btn-search{
  border-radius:30px;
  width:100px;
  font-size:8px;
  margin-left:25px;
  margin-right:25px;
}
.top-artis-img{
  margin:32px;
}
.song-container{
  background-color:#FFF;
  min-height:600px;
}
.song-list{
  background-color:#F4F6F7;
  padding-left:80px;
  padding-right:80px;
}
.card-song{
  margin-top:-80px;
}
.img-artis-content{
    margin-top:-70px
}
.card{
  width:16rem;
}
.card-img-top{
  height:250px;
}
.card-title{
font-size:16px;
font-weight:bold;
}
.card-text{
font-size:12px;
}
#myBtn{display: none;}

.news-container{
  min-height:300px;
  background-color:#221E40;
  margin-top: -75px
}
.news-konten{
  margin-top:-200px;
}
.card-news{
  width: 16rem;
  margin: 0 auto; /* Added */
  float: none; /* Added */
  margin-bottom: 10px;
}
.card-img-news{
  height:130px;
}
.news-time{
  margin-bottom:-10px;
  font-size:12px;
}
.title-news{
  font-size:16px;
}
.card-news-popular{
  width: 32rem;
  height: 130px;
  margin: 0 auto; /* Added */
  float: none; /* Added */
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
@media (max-width: 900px) {
  .card-song{
  margin-top:10px;
  }
}
@media (max-width: 576px) {
  .btn-search{
  border-radius:8px;
  width:65px;
  font-size:8px;
  margin: 5px;
  }
  .top-artis-img{
    margin:16px;
  }
  .img-artis-content{
    margin-top:-50px
  }
  .song-list{
  background-color:#F5F5F5;
  padding-left:30px;
  padding-right:30px;
  }
  .card{
  width:8rem;
  }
  .card-body{
  min-height:5rem;
  }
  .card-img-top{
  height:125px;
  }
  .card-song{
  margin-top:10px;
  }
  .card-title{
  font-size:12px;
  font-weight:bold;
  }
  .card-text{
  font-size:8px;
  }
  #more {display: none;}
  #more2 {display: none;}
  #myBtn{
    display: block;
    border-radius:20px;
    font-size:8px;
    margin-top:10px;
    background-color:#221E40;
  }
  .news-container{
  min-height:300px;
  background-color:#221E40;
  margin-top: -100px;
  }
  .card-news{
  width: 8rem;
  margin: 0 auto; /* Added */
  margin-bottom: 10px;
  }
  .card-img-news{
    height:80px;
  }
  .news-time{
    margin-bottom:-10px;
  }
  .card-news-popular{
    width: 18rem;
    height: 5rem;
    margin: 0 auto; /* Added */
    margin-bottom: 10px;
    margin-top:10px;
  }
  .title-news{
  font-size:12px;
  }
  .news-time{
    font-size:8px;
    margin-top: 24px;
  }
  .news-popular-title{
    color:#106ec3;
    font-size:8px;
    margin-top:-15px;
    margin-bottom:5px;
  }
}
</style>
<link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('konten')
<!-- background Home -->
<div class="header">
</div>
<!-- end background Home -->
<!-- search location  -->
<div class="container-fluid text-white search-kota">
    <center>
        <h4 class="p-4 font-weight-bold">CARI OUTLET TERDEKAT</h4>
    </center>
        <div class="row py-4" >
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                      <select class="form-control select2bs4" id="search" style="width: 100%;">
                      <option selected="selected"></option>
                      <option value="1">Alabama</option>
                        <option value="2">Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                      </select>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="container-fluid text-center">
          <div class="row pt-3">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                  <a href="" class="btn btn-primary btn-search" style="text-transform:uppercase">Jakarta</a>
                  <a href="" class="btn btn-primary btn-search" style="text-transform:uppercase">Surabaya</a>
                  <a href="" class="btn btn-primary btn-search" style="text-transform:uppercase">Makasar</a>
                  <a href="" class="btn btn-primary btn-search" style="text-transform:uppercase">Samarinda</a>
            </div>
            <div class="col-lg-2"></div>
          </div>
        </div>
          <!-- /.row -->
          <!-- top artis title -->
        <div class="container text-center py-5">
          <h4 class="font-weight-bold">TOP ARTIST</h4>
        </div>
        <!-- end top artis title -->
</div>
<!-- end seach location -->
<!-- top artis -->
<div class="container-fluid top-artis">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <div class="row img-artis-content" >
          <div class="col-lg-12 col-md-12 col-sm-12">
            <img class="img-fluid rounded-circle top-artis-img" alt="75x75" width="75" height="75" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" data-holder-rendered="true">
            <img class="img-fluid rounded-circle top-artis-img" alt="75x75" width="75" height="75" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" data-holder-rendered="true">
            <img class="img-fluid rounded-circle top-artis-img" alt="75x75" width="75" height="75" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" data-holder-rendered="true">
            <img class="img-fluid rounded-circle top-artis-img" alt="75x75" width="75" height="75" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" data-holder-rendered="true">
            <img class="img-fluid rounded-circle top-artis-img" alt="75x75" width="75" height="75" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" data-holder-rendered="true">
          </div>
        </div>
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
  <!-- end of Top artis -->
</div>
<!-- song list -->
<div class="container-fluid song-container">
  <div class="container">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8 song-list">
        <div class="row card-song">
          <div class="col-6">
            <div class="row px-3">
              <div class="col-lg-12 col-sm-12">
                 <h6 style="text-transform: uppercase;padding-bottom:10px;color:#221E40">lagu terlaris</h6>
                 <div class="card">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Judul Band</h5>
                      <p class="card-text">Judul Lagu</p>
                    </div>
                 </div>
                 <div class="card my-4">
                   <div class="card-body">
                     <div class="row">
                       <div class="col-12 my-2">
                         <h5 class="card-title">Judul Band</h5>
                         <p class="card-text">Judul Lagu</p>
                       </div>
                       <div class="col-12 my-2">
                         <h5 class="card-title">Judul Band</h5>
                         <p class="card-text">Judul Lagu</p>
                       </div>
                       <div class="col-12 my-2">
                         <h5 class="card-title">Judul Band</h5>
                         <p class="card-text">Judul Lagu</p>
                       </div>
                       <span id="dots"></span>
                       <span id="more">
                       <div class="col-12 my-2">
                         <h5 class="card-title">Judul Band</h5>
                         <p class="card-text">Judul Lagu</p>
                       </div>
                       <div class="col-12 my-2">
                         <h5 class="card-title">Judul Band</h5>
                         <p class="card-text">Judul Lagu</p>
                       </div>
                       </span>
                     </div>
                     <center>
                       <button href="{{url('/')}}" onclick="buttonLess()" id="myBtn" class="btn btn-primary">view all <i class="fas fa-arrow-alt-circle-right"></i></button>
                     </center>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-6">
             <div class="row px-3">
               <div class="col-lg-12 col-sm-12">
                 <h6 style="text-transform: uppercase; padding-bottom:10px;color:#221E40">lagu terbaru</h6>
                 <div class="card">
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Judul Band</h5>
                      <p class="card-text">Judul Lagu</p>
                    </div>
                 </div>
                  <div class="card my-4">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 my-2">
                          <h5 class="card-title">Judul Band</h5>
                          <p class="card-text">Judul Lagu</p>
                        </div>
                        <div class="col-12 my-2">
                          <h5 class="card-title">Judul Band</h5>
                          <p class="card-text">Judul Lagu</p>
                        </div>
                        <div class="col-12 my-2">
                          <h5 class="card-title">Judul Band</h5>
                          <p class="card-text">Judul Lagu</p>
                        </div>
                        <span id="dots2"></span>
                        <span id="more2">
                        <div class="col-12 my-2">
                          <h5 class="card-title">Judul Band</h5>
                          <p class="card-text">Judul Lagu</p>
                        </div>
                        <div class="col-12 my-2">
                          <h5 class="card-title">Judul Band</h5>
                          <p class="card-text">Judul Lagu</p>
                        </div>
                        </span>
                      </div>
                      <center>
                        <button href="{{url('/')}}" onclick="buttonLess2()" id="myBtn" class="btn btn-primary">view all <i class="fas fa-arrow-alt-circle-right"></i></button>
                      </center>
                    </div>
                  </div>
                 </div>
               </div>
             </div>
             
          </div>
        </div>
      </div>
      </div>
      <div class="col-lg-2"></div>
    </div>
</div>
<!-- end song list -->
<!-- news -->
<div class="container-fluid news-container">
</div>
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
        <div class="container mx-2 news-konten">
            <h4 class="text-white font-weight-bold d-inline-block mr-2">Lates News</h4> <a href="{{url('/news')}}">view all</a>
            <div class="row">
              <div class="col-6 my-2">
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
              <div class="col-6 my-2">
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
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card card-news-popular">
                <div class="row no-gutters">
                  <div class="col-6">
                    <img src="https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg" class="card-img-top card-img-news" alt="...">
                  </div>
                  <div class="col-6">
                    <div class="card-body text-bottom">
                      <p class="news-popular-title">News</p>
                      <h5 class="card-title">Card title</h5>
                      <p class="news-time"><?=now()?>
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
                    <img src="https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg" class="card-img-top card-img-news" alt="...">
                  </div>
                  <div class="col-6">
                    <div class="card-body text-bottom">
                      <p class="news-popular-title">News</p>
                      <h5 class="card-title">Card title</h5>
                      <p class="news-time"><?=now()?>
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
                    <img src="https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg" class="card-img-top card-img-news" alt="...">
                  </div>
                  <div class="col-6">
                    <div class="card-body text-bottom">
                      <p class="news-popular-title">News</p>
                      <h5 class="card-title">Card title</h5>
                      <p class="news-time"><?=now()?>
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
                    <img src="https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg" class="card-img-top card-img-news" alt="...">
                  </div>
                  <div class="col-6">
                    <div class="card-body text-bottom">
                      <p class="news-popular-title">News</p>
                      <h5 class="card-title">Card title</h5>
                      <p class="news-time"><?=now()?>
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
      <div class="col-lg-2"></div>
    </div>
</div>
<!-- end news -->
@endsection

@section('js-internal')
<!-- add tag js in here -->
<script>
  function buttonLess(){
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
  function buttonLess2(){
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
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2({
       
    });
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      //set placeholder
    placeholder: '<center>Masukkan Nama Kota</center>'+'<p style="text-align:right;margin-top:-36px"><i class="fas fa-search"></i></p>',
    allowClear: true,
    templateResult: formatState,
    escapeMarkup: function(m) { 
       return m; 
    },
      theme: 'bootstrap4',
      width: 'resolve'
    });
    //border-radius custom
    $('.select2-selection').css('border-radius','10px');
   
    //redirect after selecting
    $('.select2bs4').on('change', function() {
      var data = $(".select2bs4 option:selected").val();
      window.location.href = '/lokasi/'+data;
    })

function formatState (state) {
  if (!state.id) { return state.text; }
  var $state = $(
    '<i class="fas fa-search">'+ ' '+state.text+'</i>');
 return $state;
};
  })
</script>

@endsection

