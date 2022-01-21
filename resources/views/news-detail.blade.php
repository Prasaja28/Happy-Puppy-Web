@extends('layout-komponen.master')

@section('title','News Detail') <!-- name title -->

@section('css-internal')
<!-- Add tag css in here -->
<style>
    .header{
      margin-top: 131px;
        min-height: 55vh;
        background: no-repeat center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position: rightl;
       
        
}
.tab-content{
    color:black;
}
.card-news{
  width: 14rem;
  margin: 0 auto; /* Added */
  margin-bottom: 10px;
    
  }
  .card-img-news{
    height:120px;
    border: none;
  }
  .news-time{
    margin-bottom:-10px;
  }
  .title-news{
    font-size:12px;
  }
  .news-time{
    font-size:8px;
    margin-top: 24px;
  }
  .news-title{
      text-align:center;
  }
  .color-background{
    background-image: linear-gradient(to right, #68a6fb , #f77a8b);
    position: relative;
    min-height:40vh;
  }
  .news-content{
    margin-top: -60vh;
  }
  @media(max-width:600px){
    .color-background{
      background-image: linear-gradient(to right, #68a6fb , #f77a8b);
      position: relative;
      min-height:30vh;
    }
    .news-content{
      margin-top: -25vh;
    }
    .header{
        min-height: 30vh;
        background: no-repeat center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position: rightl; 
    }
    .card-news{
        width: 10rem;
        margin: 0 auto; /* Added */
        margin-bottom: 10px;
    }
    .card-img-news{
        height:90px;
    }
    .news-time{
        margin-bottom:-10px;
    }
    .title-news{
        font-size:12px;
    }
    .news-time{
        font-size:8px;
        margin-top: 24px;
    }
    .news-title{
      text-align:left;
    }
  }
</style>
@endsection
@section('navbar-news','active')
@section('konten')
<div class="container-fluid color-background">

</div>
<!-- add konten in here -->
<div class="container news-content">
  <div class="row mb-5">
    <div class="col-lg-12 ">
        <div class="header" style="background-image: url('https://img.buzzfeed.com/buzzfeed-static/static/2014-05/campaign_images/webdr08/1/1/25-crowd-pleasing-karaoke-songs-that-are-actually-2-25835-1398920438-12_dblbig.jpg')">
        </div>
    </div>
    <div class="col-lg-7">
            <ul class="nav mt-2" role="tablist">
            <li class="nav-item">
                <a class="nav-link active font-weight-bold text-uppercase" style="border-bottom-style: solid;border-bottom-color: black; margin-top: 40px;font-family: 'Poppins';" role="tab" data-toggle="tab">Populer</a>
            </li>
            </ul>
        
            <!-- Tab panes -->
            <div class="tab-content">
                <h2 class="py-3" style="color:#3792cb; ">Penampakan Ganasnya Banjir Jember, Mobil Terseret Derasnya Arus!</h2>
        
                <h6 class="pb-3"><?=now()?></h6>
        
                <p class="text-justify news-title">
                    Kami percaya akan masa depan usaha Karaoke Keluarga. Bernyanyi adalah anugrah hiburan alami yang pertama dari Tuhan untuk manusia, sejak diciptakan sampai sepanjang sejarah peradabannya. Keceriaan, keterbukaan, keramah-tamahan dan kebersihan adalah landasan sifat dan sikap hidup kami. Kami dipacu oleh manfaat persaingan sehat untuk membentuk hubungan timbal balik yang berguna bagi peningkatan kepentingan-kepentingan konsumen, karyawan, dan perusahaan. Kami cita-citakan dunia yang bernyanyi dengan keselarasan.
                </p>
                <p class="text-justify news-title">
                    Kami percaya akan masa depan usaha Karaoke Keluarga. Bernyanyi adalah anugrah hiburan alami yang pertama dari Tuhan untuk manusia, sejak diciptakan sampai sepanjang sejarah peradabannya. Keceriaan, keterbukaan, keramah-tamahan dan kebersihan adalah landasan sifat dan sikap hidup kami. Kami dipacu oleh manfaat persaingan sehat untuk membentuk hubungan timbal balik yang berguna bagi peningkatan kepentingan-kepentingan konsumen, karyawan, dan perusahaan. Kami cita-citakan dunia yang bernyanyi dengan keselarasan.
                </p>
            </div>
        </div>
        <div class="col-lg-5" style="padding-left: 240px;">
            <div id="detail-news-dekstop">
                <h6 class="news-title pt-5">Lates News</h6>
                <div class="row">
                  <div class="col-12 my-2">
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
                  <div class="col-12 my-2">
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
            </div>
            <div id="detail-news-mobile" style="font-family: 'Poppins'">
                <h6 class="news-title pt-5">Lates News</h6>
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
            </div>
        </div>
    </div>
</div>

@endsection

@section('js-internal')
<!-- add tag js in here -->
<script>
        var width = screen.width;
        if(width < 600){
            document.getElementById('detail-news-mobile').style.display='block';
            document.getElementById('detail-news-dekstop').style.display='none';
        }else{
            document.getElementById('detail-news-dekstop').style.display='block';
            document.getElementById('detail-news-mobile').style.display='none';
        }
</script>
@endsection
