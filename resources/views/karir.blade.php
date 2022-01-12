@extends('layout-komponen.master')

@section('title','Karir') <!-- name title -->

@section('css-internal')
<!-- Add tag css in here -->
<style>
 
.header1{
  min-height: 29vh;
  background: no-repeat center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: rightl;
  background-image: url('/img/PROFILE.jpg')
}
#txt2{
    color: white;
    position: absolute;
    bottom: 0;
    text-align: justify;
    margin: 0;
    font-size: 35px;
    min-height: 550px;
}
#txt1{
    color: white;
    position: absolute;
    bottom: 0;
    text-align: justify;
    margin: 0;
    font-size: 35px;
    font-weight: bold;
    min-height: 500px;
}

.header{
  min-height: 18vh;
  background: no-repeat center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: rightl;
  background-color: #1f1f1f;
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
  background: #ADFF2F;
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
  font-size:25px;
}

h5 {
  color: #ffffff;
  font-size:25px;
}

.h2 {
  color: #ffffff;
  font-size:15px;
  font-style: italic
}

.h3 {
  color: #000000;
  font-size:15px;
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
    width: 100%;
    padding: 50px;
    color: black;
    background-color:#221E40;
}
.bold { font-weight: bold; 
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
  <!-- <div id="txt2" class="container" style="text-align: justify; text-indent: 1in;">
        <p >PROFIL</p>
    </div> -->
    <div id="txt1" class="container" style="text-align: justify; text-indent: 1in;">
        <p>KARIR</p>
    </div>
</div>

<br><br>
<div class="container"style="text-align: center; "> 
  HAPPY PUPPY memberikan kesempatan bagi semua pegawai untuk mengembangkan karir <br>
  mulai dari level dasar sampai mencapai level tertinggi melalui jenjang karir yang telah disusun degan baik
</div>
    <div class="center">
        <h5><b>LOWONGAN TERSEDIA</b></h5>
    </div>
@endsection


@section('js-internal')
<!-- add tag js in here -->
@endsection
