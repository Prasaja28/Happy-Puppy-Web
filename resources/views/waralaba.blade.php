@extends('layout-komponen.master')

@section('title','Waralaba') <!-- name title -->

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
  background-image: url('/img/karaoke.jpg')
}
.search-kota{
    background-color:#221E40;
}
.top-artis{
  background-color:#FFF;
}
.rounded-circle{
  border: 5px solid #FFF;
  margin-top:-37px;
}
#txt1{
    color: white;
    position: absolute;
    bottom: 0;
    text-align: justify;
    margin: 0;
    font-size: 40px;
    font-weight: bold;
    min-height: 380px;
}
.back-grad {
    height: 300px;
    width: auto;
    background: linear-gradient(to bottom, #FFFFFF 0%, #FFFFFF 50%, #85A4E1 50%, #85A4E1 100%);
}
.center {
    margin: auto;
    margin-top: 50px;
    width: 85%;
    padding: 10px;
    color: white;
    background-color:#221E40;
}
#p1{
    font-size: 30px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
}
#p2{
    font-size: 15px;
    font-family: Arial, Helvetica, sans-serif;
}
.back {
    height: 1100px;
    width: auto;
    background-color: #85A4E1;
}
.accordion {
  background-color: #85A4E1;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
#text-acc{
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    color: white;
    font-weight: bold;
}
#txt-foot{
    font-size: 18px;
    font-family: Arial, Helvetica, sans-serif;
    color: white;
}
.btn{
    color: white;
    background-color: #221E40;
}
</style>
<link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('konten')
<!-- add konten in here -->
<div class="header">
    <div id="txt1" class="container">
        <p>WARALABA</p>
    </div>
</div>
<div class="back-grad">
    <div class="center">
        <br><p id="p1">Kenapa Memilih Usaha Karaoke (Bernyanyi)?</p><br>
        <p id="p2">Karena bernyanyi tidak mengenal musim sehingga kita tidak perlu kuatir suatu waktu manusia bosan bernyanyi. Bernyanyi adalah hiburan pertama yang dianugerahkan oleh Tuhan YME untuk manusia dan akan terus diminati manusia sepanjang peradabannya.</p><br>
    </div>
</div>
<div class="back">
    <div class="container">
        <button class="accordion" id="text-acc">Home Theatre buka untuk karaoke?</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    
        <button class="accordion" id="text-acc">Karaoke keluarga, bisnis hiburan tanpa masalah</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    
        <button class="accordion" id="text-acc">kenapa memilih waralaba Happy Puppy?</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <button class="accordion" id="text-acc">Hal yang perlu diperhatikan dalam waralaba ini</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <button class="accordion" id="text-acc">Berapa investasi yang dibutuhkan untuk waralaba ini?</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <button class="accordion" id="text-acc">Daftar kota tertutup untuk waralaba</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div><br><br><br><br>
    </div>
    <div class="container" id="txt-foot">
        <p>Jika anda berminat serius, memenuhi syarat, serta mempunyai kemampuan finansial untuk membiayai investasi, silahkan mengisi formulir peminat waralaba yang tersedia secara lengkap. Kami hanya menerima dan memproses formulir yang diisi secara lengkap, untuk mengisi formulir pendaftaran waralaba.</p><br><br>
        <button type="button" class="btn">Klik Disini</button>
    </div>
</div>
@endsection

@section('js-internal')
<!-- add tag js in here -->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
@endsection