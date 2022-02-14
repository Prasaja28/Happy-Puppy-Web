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
    @media (max-width:600px) {
    .vl {
      border-left: 6px solid white;
      min-height: 5vh;
      position: absolute;
      left: 50%;
      margin-left: -3px;
      top: 110;
    }
    .history div[name="years"] h4 {
      font-size: 11px;
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
          $historyDB = [
            [
              "tahun" => 2009,
              "desc" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti necessitatibus ac"    
            ],
            [
              "tahun" => 2010,
              "desc" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti necessitatibus ac"    
            ],
            [
              "tahun" => 2011,
              "desc" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti necessitatibus ac"    
            ],
            [
              "tahun" => 2012,
              "desc" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti necessitatibus ac"    
            ],
            [
              "tahun" => 2013,
              "desc" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti necessitatibus ac"    
            ],
            [
              "tahun" => 2014,
              "desc" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti necessitatibus ac"    
            ]
          ];

          $bgColor = ['y-2009', 'y-2010', 'y-2015', 'y-2017', 'y-2019'];
      @endphp

      @foreach($historyDB as $key=>$history)
      <!-- // $bgColor[$key%3]
      // 0-n, 0%3, 1%31, 2%32, 3%3 0, 4%3 1, 5%3 2 -->
      @if($key%2 == 0)
      <div class="brand brand-history-right">
        <div class="row justify-content-end">
          <div class="col-4 col-md-4 d-flex justify-content-center">
            <div name="years" class="{{$bgColor[$key%5]}} align-self-center d-flex justify-content-center rounded-circle">
              <h4 class="align-self-center font-weight-bold">{{ $history["tahun"] }}</h4>
            </div>
            @if($key!=count($historyDB)-1)
              <div class="vl"></div>
            @endif
          </div>
          <div class="col-4 col-md-4">
            <p class="text-muted text-justify history-desc">
              {{ $history["desc"] }}
            </p>
          </div>
        </div>
      </div>
      @else
      <div class="brand brand-history-left">
        <div class="row justify-content-start">
          <div class="col-4 col-md-4 order-2 d-flex justify-content-center">
            <div name="years" class="{{$bgColor[$key%5]}} align-self-center d-flex justify-content-center rounded-circle">
              <h4 class="align-self-center font-weight-bold">{{ $history["tahun"] }}</h4>
            </div>
            @if($key!=count($historyDB)-1)
              <div class="vl"></div>
            @endif
          </div>
          <div class="col-4 col-md-4 order-1">
            <p class="text-muted text-justify history-desc">
              {{ $history["desc"] }}
            </p>
          </div>
        </div>
      </div>
      @endif
      @endforeach
     
  </div>
</section>
@endsection
