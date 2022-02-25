@extends('layout-komponen.master')

@section('title','News Detail') <!-- name title -->

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
    background-color: #221E40;
    z-index: 1;
        
}
.tab-content{
    color:black;
}
.card-news{
  width: 14rem;
  margin: 0 auto; /* Added */
  margin-bottom: 20px;
  /* box-shadow: 0px 5px #E9EEF4; */
    
  }
  .card-img-news{
    height:120px;
    border: none;
  }
  .news-time{
    margin-bottom:-10px;
  }
  .title-news{
    font-size: 16px;
    font-weight: 500;
  }
  .title-news1{
/*    top: 20px;*/
    font-size:13px;
    font-weight: bold;
    border-bottom-width: 4px ;
    border-bottom-style: solid;
    border-bottom-color: black; 
    margin-top: 60px;
    font-family: 'Poppins';
  }

    .title-news2{
/*    top: 20px;*/
    font-size:40px;
    line-height: 40pt;
    letter-spacing: 3px;
    font-weight: 500;
    margin-top: 35px;
    color: #000080;
    font-family: 'Poppins';
  }

    .news{
/*    top: 20px;*/
    font-size:17px;
    color: black;
    font-family: 'Poppins';
    text-align: justify;
  }
   .news-time{
    font-size:8px;
    margin-top: 24px;
    font-family: 'Poppins';
  } 

  .news-time1{
    font-size:13px;
    margin-top: 24px;
    margin-bottom: 24px;
    font-family: 'Poppins';
  }

  .news-title{
    font-size: 20px;
    font-family: 'Poppins';
    text-align: center;
    color: #344072;
    font-weight: 600;
    margin-bottom: 20px;
  }
  .image-background{
    background-image: url('/img/camila.png');
    /* background-size: 1000px 800px; */
    margin-top: -850px;
    top: -100px;
    margin-left: 110px;
    /*background-image: linear-gradient(to right, #68a6fb , #f77a8b);*/
    min-height:70vh;
    max-width: 170.5vh;
    width: 97%;
    margin-bottom: 450px;
    padding: 10px;
    /* box-shadow: 0px 10px #D1D6DB; */
  }
  .image-color{
    /* background-color: #E9EEF4; */
    margin-top: -340px;
    margin-left: 115px;
    /*background-image: linear-gradient(to right, #68a6fb , #f77a8b);*/
    min-height:70vh;
    top: 50px;
    max-width: 170.5vh;
        width: 100%;
    margin-bottom: 400px;
  }
  .news-content{
    margin-top: -60vh;
    line-height: 28pt;
  }
  .col-lg-5{
    padding-left: 240px;
  }
@media(max-width: 576px){
    /* .header{
      min-height: 20vh;
      background: no-repeat center scroll;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      background-position: rightl;
      background-color: #221E40;
      z-index: 1;
            
    } */
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
        background-color: #221E40; 
    }
    .card-news{
        width: 10rem;
        margin: 0 auto; /* Added */
        margin-bottom: 10px;
        margin-left: -18px;
        margin-top: 272px;
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
        font-size: 10px;
        margin-top: 24px;
    }
    .news-title{
      text-align:left;
    }
  
  .title-news{
    font-size: 16px;
    font-weight: 500;
  }
  .title-news1{
/*    top: 20px;*/
    font-size: 10px;
    font-weight: bold;
    border-bottom-width: 4px ;
    border-bottom-style: solid;
    border-bottom-color: black; 
    margin-top: 60px;
    font-family: 'Poppins';
  }

    .title-news2{
/*    top: 20px;*/
    font-size: 18px;
    line-height: 20pt;
    letter-spacing: 3px;
    font-weight: 600;
    margin-top: 35px;
    color: #000080;
    font-family: 'Poppins';
  }
  .news{
/*    top: 20px;*/
    font-size:12px;
    color: black;
    font-family: 'Poppins';
    text-align: justify;
  }
  .news-title{
    font-size: 12px;
    font-family: 'Poppins';
    text-align: center;
    color: #344072;
    font-weight: 600;
    margin-bottom: 20px;
    margin-left: -283px;
  }
  .image-background{
    background-image: url('/img/camila.png');
    background-size: 302px 139px;
    background-repeat: no-repeat;
    margin-top: -630px;
    top: -100px;
    margin-left: 50px;
    /*background-image: linear-gradient(to right, #68a6fb , #f77a8b);*/
    min-height:22vh;
    max-width: 170.5vh;
    width: 97%;
    margin-bottom: 450px;
    padding: 10px;
    /* box-shadow: 0px 10px #D1D6DB; */
  }
  .col-lg-5{
    padding-left: 40px;
  }
  .mt-2, .my-2{
    margin-top: -17.5rem!important;
  }

}
</style>
@endsection
@section('navbar-news','active')
@section('konten')
<!-- <div class="color-background">

</div> -->
        <div class="header" style="z-index:1;" >          
        </div> 
        <div class="image-color" style="z-index: 2;"></div>
          <div class="image-background" style="z-index: 3;"> 
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
            <div class="tab-content" >
                <div class="title-news2">Lagu Baru Camelia Cabello Berjudul "Liar"</div>
        
                <div class="news-time1"><?=date('M, d Y')?></div>
        
                <div class="news">
                    Camila Cabello baru saja merilis lagu barunya yang berjudul "Liar", Kami percaya akan masa depan usaha Karaoke Keluarga. Bernyanyi adalah anugrah hiburan alami yang pertama dari Tuhan untuk manusia, sejak diciptakan sampai sepanjang sejarah peradabannya. Keceriaan, keterbukaan, keramah-tamahan dan kebersihan adalah landasan sifat dan sikap hidup kami. Kami dipacu oleh manfaat persaingan sehat untuk membentuk hubungan timbal balik yang berguna bagi peningkatan kepentingan-kepentingan konsumen, karyawan, dan perusahaan. Kami cita-citakan dunia yang bernyanyi dengan keselarasan.
                </div><br><br>
                <div class="news">
                    Kami percaya akan masa depan usaha Karaoke Keluarga. Bernyanyi adalah anugrah hiburan alami yang pertama dari Tuhan untuk manusia, sejak diciptakan sampai sepanjang sejarah peradabannya. Keceriaan, keterbukaan, keramah-tamahan dan kebersihan adalah landasan sifat dan sikap hidup kami. Kami dipacu oleh manfaat persaingan sehat untuk membentuk hubungan timbal balik yang berguna bagi peningkatan kepentingan-kepentingan konsumen, karyawan, dan perusahaan. Kami cita-citakan dunia yang bernyanyi dengan keselarasan.
                </div>
            </div>
        </div>
        <div class="col-lg-5" >
            <div id="detail-news-dekstop">
                <div class="news-title pt-5">LATEST NEWS</div>
                <div class="row">
                  <div class="col-12 my-2">
                    <div class="card card-news">
                      <img src="/img/berita2.jpg" alt="...">
                      <div class="card-body">
                        <h5 class="card-title title-news">Yes, We Are Open</h5>
                        <p class="news-time"><?=date('M, d Y')?>
                          <a href="" class="" style="float:right;color:black"><i class="fas fa-book-open"></i></a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 my-2">
                    <div class="card card-news">
                      <img src="/img/berita1.jpg" alt="...">
                      <div class="card-body">
                        <h5 class="card-title title-news">Stay Safe and Healthy</h5>
                        <p class="news-time"><?=date('M, d Y')?>
                          <a href="" class="" style="float:right;color:black"><i class="fas fa-book-open"></i></a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div id="detail-news-mobile" style="font-family: 'Poppins'">
                <h6 class="news-title pt-5">LATEST NEWS</h6>
                <div class="row">
                  <div class="col-6 my-2">
                    <div class="card card-news">
                      <img src="/img/berita2.jpg" class="card-img-top card-img-news" alt="...">
                      <div class="card-body">
                        <h5 class="card-title title-news">Card title</h5>
                        <p class="news-time"><?=date('M, d Y')?>
                          <a href="" class="" style="float:right;color:black"><i class="fas fa-book-open"></i></a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 my-2">
                    <div class="card card-news">
                      <img src="/img/berita1.jpg" class="card-img-top card-img-news" alt="...">
                      <div class="card-body">
                        <h5 class="card-title title-news">Card title</h5>
                        <p class="news-time"><?=date('M, d Y')?>
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
