@extends('layout-komponen.master')

@section('title','Profile') <!-- name title -->

@section('css-internal')
<!-- Add tag css in here -->
<style>
 
.header1{
  min-height: 40vh;
  background: no-repeat center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: rightl;
  background-image: url('/img/PROFILE.png')

}
#txt2{
    color: white;
    position: absolute;
    bottom: 0;
    text-align: justify;
    margin: 0;
    font-size: 35px;
    min-height: 460px;
    text-indent: 0.5in;
    font-family: 'Poppins';
}
#txt1{
    color: white;
    position: absolute;
    bottom: 0;
    text-align: justify;
    margin: 0;
    font-size: 35px;
    font-weight: bold;
    min-height: 410px;
    text-indent: 0.5in;
    font-family: 'Poppins';
}

.header{
  min-height: 19vh;
  background: no-repeat center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: rightl;
  background-color: #160840;
}
.rounded-circle{
  border: 5px solid #FFF;
  margin-top:-37px;
}

.l1{
  width: 135px;
  height: 135px;
  background: #FA8072;
  border-radius: 100%;
  border: 5px solid #FFF;
  margin-top:-37px;
}

.l2{
  width: 135px;
  height: 135px;
  background: #87CEFA;
  border-radius: 100%;
  border: 5px solid #FFF;
  margin-top:-37px;
}

.l3{
  width: 135px;
  height: 135px;
  background: #9ACD32;
  border-radius: 100%;
  border: 5px solid #FFF;
  margin-top:-37px;
}

.l4{
  width: 135px;
  height: 135px;
  background: grey;
  border-radius: 100%;
  border: 5px solid #FFF;
  margin-top:-37px;
}

.l5{
  width: 135px;
  height: 135px;
  background: #FFD700;
  border-radius: 100%;
  border: 5px solid #FFF;
  margin-top:-37px;
}

.h1 {
  color: #ffffff;
  font-size:23px;
    text-indent: 0.7in;
    min-height: 20px;
    padding-top: 12px;
    font-family: 'Poppins';
}

.h2 {
  color: #ffffff;
  font-size:13px;
  font-style: italic;
  text-indent: 0.7in;
  min-height: 10px;
  font-family: 'Poppins';
}

.deskripsi {
  color: black;
  font-size:15px;
  padding-left: 49px;
  font-family: 'Poppins';
}

.h11 {
  color: #ffffff;
  font-size:25px;
  width: 70px;
  height: 0px;
  padding-top: 47px;
  padding-right: 5px;
  padding-bottom: 30px;
  padding-left: 0px;
}

.h3 {
  color: #000000;
  font-size:15px;
  font-family: Poppins;
}
.h4 {
  color: #808080;
  font-size:15px;
  position: absolute;
  width: 400px;
  height: 200px;
  padding-top: 0px;
  padding-right: 30px;
  padding-bottom: 10px;
  padding-left: 60px;
  font-family: Poppins;
}

.h5 {
  color: #808080;
  font-size:15px;
  position: absolute;
  width: 600px;
  height: 200px;
  padding-top: 0px;
  padding-right: 60px;
  padding-bottom: 0px;
  padding-left: 240px;
  font-family: Poppins;
}

.ratakiri { 
  text-align: left; 
}
.ratakanan { 
  text-align: right; 
}
.ratatengah { 
  text-align: center; 
}
.ratakirikanan { 
  text-align: justify;
}

.center {
    margin: auto;
    width: 100%;
    padding-left: 49px;
    padding-right: 49px;
    padding-bottom: 10px;
    background-color:#D3D3D3;
    }

.bold { 
  font-weight: bold; 
  font-size:20px;
  font-family: 'Poppins';
}
  .img-artis-content{
    margin-top:-50px
}

.border {
  border-width: 10px;
  border-style: solid;
  border-top-color: red;
  border-bottom-color: blue;
  border-left-color: green;
  border-right-color: yellow;
}

.card-body{
  min-height:5rem;
  text-align: right;
  width: 30%;
  }

.vl {
  border-left: 6px solid white;
  min-height: 6vh;
  position: absolute;
  left: 50%;
  margin-left: -3px;
  top: 5;
}

@media (max-width: 576px) {
#txt2{
    color: white;
    position: absolute;
    bottom: 0;
    text-align: justify;
    margin: 0;
    font-size: 25px;
    min-height: 550px;
    text-indent: 0.5in;
}
#txt1{
    color: white;
    position: absolute;
    bottom: 0;
    text-align: justify;
    margin: 0;
    font-size: 25px;
    font-weight: bold;
    min-height: 500px;
    text-indent: 0.5in;
}

.header{
  min-height: 18vh;
  background: no-repeat center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: rightl;
  background-color: #0d0d73;
}
.rounded-circle{
  border: 5px solid #FFF;
  margin-top:-37px;
}

.l1{
  width: 90px;
  height: 90px;
  background: #FA8072;
  border-radius: 100%;
  border: 5px solid #FFF;
  margin-top:-37px;
}

.l2{
  width: 90px;
  height: 90px;
  background: #87CEFA;
  border-radius: 100%;
  border: 5px solid #FFF;
  margin-top:-37px;
}

.l3{
  width: 90px;
  height: 90px;
  background: #ADFF2F;
  border-radius: 100%;
  border: 5px solid #FFF;
  margin-top:-37px;
}

.l4{
  width: 90px;
  height: 90px;
  background: grey;
  border-radius: 100%;
  border: 5px solid #FFF;
  margin-top:-37px;
}

.l5{
  width: 90px;
  height: 90px;
  background: #FFD700;
  border-radius: 100%;
  border: 5px solid #FFF;
  margin-top:-37px;
}

.h11 {
  color: #ffffff;
  font-size:15px;
  position: absolute;
  width: 70px;
  height: 0px;
  padding-top: 0px;
  padding-right: 5px;
  padding-bottom: 30px;
  padding-left: 5px;

}

.h1 {
  color: #ffffff;
  font-size:15px;
  text-indent: 0.5in;
}

.h2 {
  color: #ffffff;
  font-size:10px;
  font-style: italic;
  text-indent: 0.5in;
}

.h3 {
  color: #000000;
  font-size:15px;
}

.h4 {
  color: #808080;
  font-size:9px;
  position: absolute;
  width: 120px;
  height: 60px;
  padding-top: 0px;
  padding-right: 5px;
  padding-bottom: 10px;
  padding-left: 5px;
}

.h5 {
  color: #808080;
  font-size:9px;
  position: absolute;
  width: 250px;
  height: 60px;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 130px;
}

.ratakiri { text-align: left; }
.ratakanan { text-align: right; }
.ratatengah { text-align: center; }
.ratakirikanan { 
  text-align: justify;
   }

.center {
    margin: auto;
    margin-top: 50px;
    margin-bottom: 50px;
    width: 100%;
    padding: 15px;
    color: black;
    background-color:#D3D3D3;
    text-indent: 0.1in;
}
.bold { 
  font-weight: bold; 
  font-family: Poppins;
  font-size:20px;}
  .img-artis-content{
    margin-top:-50px

  }

.border {
  border-width: 10px;
  border-style: solid;
  border-top-color: red;
  border-bottom-color: blue;
  border-left-color: green;
  border-right-color: yellow;
  }

.card-body{
  min-height:5rem;
  text-align: right;
  width: 30%;
  }
.vl {
  border-left: 6px solid white;
  min-height: 6vh;
  position: absolute;
  left: 50%;
  margin-left: -3px;
  top: 5;
}
}
</style>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">




@endsection
@section('navbar-profile','active')
@section('konten')
<!-- add konten in here -->
<!-- background Home -->
<div class="header1">
  <div id="txt2" class="container">
        <p >PROFIL</p>

    </div>
    <div id="txt1" class="container" style="text-align: justify;">
        <p>PERUSAHAAN</p>
    </div>
</div>
<div class="header">
  <br>
        <h3 class="h1" style="text-align: justify;">PT.IMPERIUM HAPPY PUPPY</h3>
        <h3 class="h2" style="text-align: justify; ">Let the world sing in harmony</h3>
</div>


<br><br>
<div class="col-lg-11 col-md-11 col-sm-11">
<div class="deskripsi"style="text-align: justify; "> 
  Kami percaya akan masa depan usaha Karaoke Keluarga. Bernyanyi adalah anugrah hiburan alami yang pertama dari Tuhan untuk manusia, sejak diciptakan sampai sepanjang sejarah peradabannya. Keceriaan, keterbukaan, keramah-tamahan dan kebersihan adalah landasan sifat dan sikap hidup kami. Kami dipacu oleh manfaat persaingan sehat untuk membentuk hubungan timbal balik yang berguna bagi peningkatan kepentingan-kepentingan konsumen, karyawan, dan perusahaan. Kami cita-citakan dunia yang bernyanyi dengan keselarasan 
</div>
</div>
<br><br>
<div class="col-lg-12 col-md-12 col-sm-12" style="padding-left: 60px; padding-right: 60px;">
    <div class="center">
       <br>
          <div class="container"style="text-align: justify;  "> 
        <br>
    <div class="bold" style="font-family: Poppins;">SEJARAH PERUSAHAAN</div><br>
</div>

<br><br><br>

<div class="col-lg-12 col-md-12 col-sm-12">
<div class="p-4 font-weight-bold">
  <center>
    <div class="l1">
      <div class="h5" data-aos="fade-left" style="text-align: justify;">Kami percaya akan masa depan usaha Karaoke Keluarga. Bernyanyi adalah anugrah hiburan alami yang pertama dari Tuhan untuk manusia, sejak diciptakan sampai sepanjang sejarah peradabannya. Keceriaan, keterbukaan, keramah-tamahan dan kebersihan adalah landasan sifat dan sikap hidup kami. </div>  
     <!--  <br><br> -->
    <h4 class="h11">2009</h4>  
  </div> 
</center> 
        <div class="vl"></div>
  </div></div>
<br>

  <div class="h4"style="text-align: justify;">Kami percaya akan masa depan usaha Karaoke Keluarga. Bernyanyi adalah anugrah hiburan alami yang pertama dari Tuhan untuk manusia, sejak diciptakan sampai sepanjang sejarah peradabannya. Keceriaan, keterbukaan, keramah-tamahan dan kebersihan adalah landasan sifat dan sikap hidup kami. </div>
    <div class="p-4 font-weight-bold">
        <center>
            <div class="l2">
               <!--  <br><br> -->
                  <h4 class="h11">2010</h4>
                </div>
            </center> 
        <div class="vl">
    </div>
</div>
<br>

  <div class="p-4 font-weight-bold">
<center>
  <div class="l3">
    <div class="h5" data-aos="fade-left" style="text-align: justify;">Kami percaya akan masa depan usaha Karaoke Keluarga. Bernyanyi adalah anugrah hiburan alami yang pertama dari Tuhan untuk manusia, sejak diciptakan sampai sepanjang sejarah peradabannya. Keceriaan, keterbukaan, keramah-tamahan dan kebersihan adalah landasan sifat dan sikap hidup kami. </div>  
   <!--  <br><br> -->
    <h4 class="h11">2015</h4>
  </div></center><div class="vl"></div>
</div>
<br>

  <div class="h4" style="text-align: justify;">Kami percaya akan masa depan usaha Karaoke Keluarga. Bernyanyi adalah anugrah hiburan alami yang pertama dari Tuhan untuk manusia, sejak diciptakan sampai sepanjang sejarah peradabannya. Keceriaan, keterbukaan, keramah-tamahan dan kebersihan adalah landasan sifat dan sikap hidup kami. </div>
    <div class="p-4 font-weight-bold">
        <center>
            <div class="l4">
             <!--  <br><br> -->
            <h4 class="h11">2017</h4>
        </div>
    </center>
  <div class="vl"></div>
</div>
<br>

  <div class="p-4 font-weight-bold">
      <center>
          <div class="l5">
            <div class="h5" data-aos="fade-left" style="text-align: justify;">Kami percaya akan masa depan usaha Karaoke Keluarga. Bernyanyi adalah anugrah hiburan alami yang pertama dari Tuhan untuk manusia, sejak diciptakan sampai sepanjang sejarah peradabannya. Keceriaan, keterbukaan, keramah-tamahan dan kebersihan adalah landasan sifat dan sikap hidup kami. </div>  
             <!--  <br><br> -->
          <h4 class="h11">2019</h4>
        </div>
      </center>
    </div>
  <br><br>
</div>
<br><br><br><br>
</div>
@endsection


@section('js-internal')
<!-- add tag js in here -->
@endsection
