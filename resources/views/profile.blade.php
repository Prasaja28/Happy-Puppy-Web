@extends('layout-komponen.master')
@section('title','Profile')
@section('css-internal')
  <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
  <!-- css garis penghubung -->
  <style>
    .vl {
    border-left: 6px solid white;
    min-height: 10vh;
    position: absolute;
    left: 50%;
    margin-left: -3px;
    top: 155;
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
      
      <div class="brand brand-history-right">
        <div class="row justify-content-end">
          <div class="col-4 col-md-4 d-flex justify-content-center">
            <div name="years" class="y-2009 align-self-center d-flex justify-content-center rounded-circle">
              <h4 class="align-self-center font-weight-bold">2009</h4>
            </div>
              <div class="vl"></div>
          </div>
          <div class="col-4 col-md-4">
            <p class="text-muted text-justify">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti necessitatibus accusamus, provident tempora Lorem ipsum dolor sit amet consectetur adipisicing.
            </p>
          </div>
        </div>
      </div>
      
      <div class="brand brand-history-left">
        <div class="row justify-content-start">
          <div class="col-4 col-md-4 order-2 d-flex justify-content-center">
            <div name="years" class="y-2010 align-self-center d-flex justify-content-center rounded-circle">
              <h4 class="align-self-center font-weight-bold">2010</h4>
            </div>
            <div class="vl"></div>
          </div>
          <div class="col-4 col-md-4 order-1">
            <p class="text-muted text-justify">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti necessitatibus accusamus, provident tempora Lorem ipsum dolor sit amet consectetur adipisicing.
            </p>
          </div>
        </div>
      </div>
      
      <div class="brand brand-history-right">
        <div class="row justify-content-end">
          <div class="col-4 col-md-4 d-flex justify-content-center">
            <div name="years" class="y-2015 align-self-center d-flex justify-content-center rounded-circle">
              <h4 class="align-self-center font-weight-bold">2015</h4>
            </div>
            <div class="vl"></div>
          </div>
          <div class="col-4 col-md-4">
            <p class="text-muted text-justify">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti necessitatibus accusamus, provident tempora Lorem ipsum dolor sit amet consectetur adipisicing.
            </p>
          </div>
        </div>
      </div>

      <div class="brand brand-history-left">
        <div class="row justify-content-start">
          <div class="col-4 col-md-4 order-2 d-flex justify-content-center">
            <div name="years" class="y-2017 align-self-center d-flex justify-content-center rounded-circle">
              <h4 class="align-self-center font-weight-bold">2017</h4>
            </div>
            <div class="vl"></div>
          </div>
          <div class="col-4 col-md-4 order-1">
            <p class="text-muted text-justify">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti necessitatibus accusamus, provident tempora Lorem ipsum dolor sit amet consectetur adipisicing.
            </p>
          </div>
        </div>
      </div>
      
      <div class="brand brand-history-right">
        <div class="row justify-content-end">
          <div class="col-4 col-md-4 d-flex justify-content-center">
            <div name="years" class="y-2019 align-self-center d-flex justify-content-center rounded-circle">
              <h4 class="align-self-center font-weight-bold">2019</h4>
            </div>

          </div>
          <div class="col-4 col-md-4">
            <p class="text-muted text-justify">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti necessitatibus accusamus, provident tempora Lorem ipsum dolor sit amet consectetur adipisicing.
            </p>
          </div>
        </div>
      </div>
  </div>
</section>
@endsection
