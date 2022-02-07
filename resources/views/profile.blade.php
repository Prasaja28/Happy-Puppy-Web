@extends('layout-komponen.master')
@section('title','Profile')
@section('css-internal')
  <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
  <!-- css garis penghubung -->
  <style>
    .vl {
    border-left: 6px solid white;
    min-height: 7vh;
    position: absolute;
    left: 50%;
    margin-left: -3px;
    top: 127;
    }
    .row1{
 /* display: inline-r;*/
  width: 100%;
  color: #fff;
  text-align: center;
}
    @media (max-width:600px) {
    .vl {
    border-left: 6px solid white;
    min-height: 60vh;
    position: absolute;
    left: 50%;
    margin-left: -3px;
    top: 252;
    }
    .history-desc {
        font-size: 11px;
        overflow-wrap: anywhere;
    }
  }
  </style>
@section('navbar-profile','active')
@section('konten')


<div class="header container-fluid">
  <div class="container">
    <h2>PROFIL</h2>
    <h1>PERUSAHAAN</h1>
  </div>
</div>

<div class="header-below">
  <div class="container py-4 py-md-5 px-md-3">
    <h3 class="my-auto">PT.IMPERIUM HAPPY PUPPY</h3>
    <p class="pt-2 font-italic">Let the world sing in harmony</p>
  </div>
</div>

<section class="description">
  <div class="container">
    <p class="text-muted py-5">
      Kami percaya akan masa depan usaha Karaoke Keluarga. Bernyanyi adalah anugrah hiburan alami yang pertama dari Tuhan untuk manusia, sejak diciptakan sampai sepanjang sejarah peradabannya. Keceriaan, keterbukaan, keramah-tamahan dan kebersihan adalah landasan sifat dan sikap hidup kami. Kami dipacu oleh manfaat persaingan sehat untuk membentuk hubungan timbal balik yang berguna bagi peningkatan kepentingan-kepentingan konsumen, karyawan, dan perusahaan. Kami cita-citakan dunia yang bernyanyi dengan keselarasan 
    </p>
  </div>
</section>

<section class="history px-3 px-md-0">
  <div class="container">
    <h3 class="font-weight-bold text-uppercase mb-3">Sejarah Perusahaan</h2>
      @php
      $history = [
        [
          'tahun'=>'2009',
          'desc'=>'lorem ipsum',
        ],  
        [
          
          'tahun'=>'2010',
          'desc'=>'lorem ipsum',
        ],  
        [
          'tahun'=>'2011',
          'desc'=>'lorem ipsum',
        ],  
        [
          'tahun'=>'2012',
          'desc'=>'lorem ipsum', 
          
        ]  
      ];
      @endphp
      @foreach($history as $key=>$row)
     <!--  <div id='content'> -->
      <div class="brand {{($key%2==0)? 'brand-history-right' : 'brand-history-left'}}">
        <div class="row {{($key%2==0)? 'justify-content-center' : 'justify-content-center'}}">
          <div class="col-4 col-md-4 d-flex justify-content-center">
<!-- <div class="content"> -->
            <!-- <div name="years" class="row  align-self-center d-flex justify-content-center rounded-circle"> -->
              <div name="years" class="y-2009 align-self-center d-flex justify-content-center rounded-circle">
              <h4 class="align-self-center font-weight-bold">{{ $row['tahun'] }}</h4>
            </div>
              <div class="vl"></div>
<!--</div> -->
          </div>
          <div class="row {{($key%2==0)? 'justify-content-end' : 'justify-content-start'}}">
          <div class="col-4 col-md-4">
            <p class="text-muted text-justify-content-start history-desc">
              {{ $row['desc'] }}
            </p>
          </div>
        </div>
        </div>
      </div>
<!--     </div> -->
      @endforeach
      <script>
        var count = 0;
$('#content .row1').each(
  function () {  
    if(count%2 == 0){
        $(this).css('background', '#F00');       
    }else{
        $(this).css('background', '#3875D9');              
    }
    count++;
});
      </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      
  </div>
</section>
@endsection
