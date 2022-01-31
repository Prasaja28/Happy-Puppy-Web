@extends('layout-komponen.master')
@section('title','Home') <!-- name title -->
@section('css-internal')

  <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
  <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('konten')

  {{-- HERO IMAGE WITH COMPRESSING CODE :) --}}
  <div class="jumbotron text-white">
    <div class="hero-title-container">
      <h1>MIDNIGHT 
        <div>DISCOUNT 50%</div>
      </h1>
      <p>ON SATURDAY NIGHT</p>
    </div>
  </div>

{{-- SOCIAL MEDIA --}}
<div name="social-media">
  <ul class="navbar-right">
    <li>
      <a target="_blank" href="https://www.facebook.com/helloworld">
        <img name="facebook" src="{{ asset('assets/img/icons/facebook.png') }}">
      </a>
    </li>

    <li>
      <a target="_blank" href="https://www.facebook.com/helloworld">
        <img src="{{ asset('assets/img/icons/instagram.png') }}">
      </a>
    </li>

    <li>
      <a target="_blank" href="https://www.facebook.com/helloworld">
        <img src="{{ asset('assets/img/icons/apple.png') }}">
        </a>
    </li>

    <li>
      <a target="_blank" href="https://www.facebook.com/helloworld">
        <img src="{{ asset('assets/img/icons/whatsapp.png') }}">
      </a>
    </li>

    <li>
      <a target="_blank" href="https://www.facebook.com/helloworld">
        <img src="{{ asset('assets/img/icons/google-play.png') }}">
      </a>
    </li>
  </ul>
</div>
<!-- END -->

<!-- OUTLET SEARCH  -->
<section name="outlet-search" class="mt-0">
  <div class="container-fluid text-white search-kota">
    <h4 class="pt-5 text-center">Cari Outlet Terdekat</h4>

    <div class="row pt-2 px-3 justify-content-md-center">
      <div class="col-12 col-md-6">
        <select class="form-control select2bs4" id="search">
          <option selected="selected"></option>
          <option value="#">Alabama</option>
          <option value="#">Alaska</option>
          <option>California</option>
          <option>Delaware</option>
          <option>Tennessee</option>
          <option>Texas</option>
          <option>Washington</option>
        </select>
      </div>
    </div>

    <p class="text-center pt-4">Masukkan nama kota untuk mencari outlet di sekitar anda serta promo dan event yang sedang berlaku</p>
        
    <div name="city" class="row pt-3 justify-content-center">
      <a href="#" class="btn btn-primary mr-3">Jakarta</a>
      <a href="#" class="btn btn-primary mr-3">Surabaya</a>
      <a href="#" class="btn btn-primary mr-3">Makasar</a>
      <a href="#" class="btn btn-primary">Samarinda</a>
    </div>

    <h4 name="top-artist" class="font-weight-bold text-center py-5">TOP ARTIST</h4>
  </div>
</section>
<!-- END -->

<!-- ARTIST -->
<div name="artist" class="container top-artis">
  <div class="row justify-content-center">
    <div class="col-12 col-md-8">
      <div class="d-flex flex-wrap align-items-center justify-content-center">
        <img class="img-thumbnail mr-4 mr-md-5" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg">
        <img class="img-thumbnail mr-4 mr-md-5" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg">
        <img class="img-thumbnail mr-md-5" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg">
        <img class="img-thumbnail mr-4 mr-md-5 mt-3 mt-md-0" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg">
        <img class="img-thumbnail mt-3 mt-md-0" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg">
      </div>
    </div>
  </div>
</div>

<!-- song list -->
<section name="song">
  <div class="container song-container">
    <div name="sheets">
      <div class="row justify-content-center">
        <div class="col-6 col-md-4">
          <h6 class="font-weight-bold top-title">LAGU TERLARIS</h6>
          <div class="card border-0">
            <img src="{{ asset('img/marionjola.png') }}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">MARION JOLA</h5>
              <p class="text-muted">Menangis Tanpa Air Mata</p>
            </div>
          </div>
        </div>
  
        <div class="col-6 col-md-4">
          <h6 class="font-weight-bold top-title">LAGU TERBARU</h6>
          <div class="card border-0">
            <img src="{{ asset('img/bts.png') }}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">BTS</h5>
              <p class="text-muted">Life Goes On</p>
            </div>
          </div>
        </div>
      </div>
  
      <div name="list-song" class="row justify-content-center mt-3">
        <div class="col-6 col-md-4">
          <div class="card border-0">
            <div class="card-body">
              <h6 class="font-weight-bold">TIARA ANDINI</h6>
              <p class="text-muted">Maafkan Aku #terlanjurmencinta</p>
              <h6 class="font-weight-bold">AURELIA HERMANSYAH</h6>
              <p class="text-muted">Kepastian</p>
              <h6 class="font-weight-bold">ARMADA</h6>
              <p class="text-muted">Awas Jatuh Cinta</p>
              <h6 class="font-weight-bold">Mawar De Jongh</h6>
              <p class="text-muted">Sedang sayang, sayangnya</p>
              <h6 class="font-weight-bold">Cakra Khan, Hael Husaini</h6>
              <p class="text-muted">Terlanjur Cinta</p>
            </div>
  
            <button href="{{url('/')}}" onclick="buttonLess2()" id="myBtn" class="btn btn-modif mb-4 mx-auto">View all 
              <i class="fa fa-solid fa-circle-chevron-right"></i>
            </button>
          </div>
        </div>
  
        <div class="col-6 col-md-4">
          <div class="card border-0">
            <div class="card-body">
              <h6 class="font-weight-bold">AGATHA CHELSEA</h6>
              <p class="text-muted">Lebih Baik Darinnya</p>
              <h6 class="font-weight-bold">TIVAL</h6>
              <p class="text-muted">Mengalah</p>
              <h6 class="font-weight-bold">Arsy Widianto, Brisla Jodie</h6>
              <p class="text-muted">Rindu Dalam Hati</p>
              <h6 class="font-weight-bold">Noah</h6>
              <p class="text-muted">Kau Udara Bagiku</p>
              <h6 class="font-weight-bold">Arsy Widianto, Brisia Jodie</h6>
              <p class="text-muted">Sejauh Dua Benua</p>
            </div>
  
            <button href="{{url('/')}}" onclick="buttonLess2()" id="myBtn" class="btn btn-modif mb-4 mx-auto">View all
              <i class="fab fa-chevron-circle-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- END --}}

{{-- LATEST NEWS --}}
<section name="latest-news">
  <div class="container">
    <div class="row">
      <h6 class="font-weight-bold top-title">LATEST NEWS</h6>
      <a name="view-all" href="news">VIEW ALL</a>
    </div>

    <div class="row">
      <div class="col-6">
        <div class="card border-0 rounded-0">
          <img src="{{ asset('img/egypt.png') }}">

          <div class="card-body pb-0">
            <div class="card-title">
              <h4 class="font-weight-none pt-1 pt-md-3">Midnight In Egypt</h4>
              <p class="text-date pt-2 pt-md-4 pb-0">September 02, 2019</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="card border-0 rounded-0">
          <img src="{{ asset('img/491.png') }}">

          <div class="card-body pb-0">
            <div class="card-title">
              <h4 class="font-weight-none pt-1 pt-md-3">Midnight In Egypt</h4>
              <p class="text-date pt-2 pt-md-4 pb-0">September 02, 2019</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- NEXT NEWS --}}
<section name="next-news">
  <div class="container">
    <div class="row justify-content-center">
      <div name="item" class="col-11 col-md-8 px-0 mb-5">
        <img class="float-left mr-3 mr-md-4" src="{{ asset('img/hijau-next-news.png') }}">

        <div name="description" class="pr-1 pr-md-3">
          <p class="label font-weight-bold mb-2 mb-md-4 mt-3 mt-md-4">NEWS</p>
          <h4 class="font-weight-none pt-0 pt-md-3">Usaha Keras Musisi Introvert Zion.T</h4>
          <p class="text-date font-weight-bold pt-3 pt-md-5 pb-0 pb-md-3">September 02, 2019</p>
        </div>
        <div class="clearfix"></div>
      </div>

      <div name="item" class="col-11 col-md-8 px-0 mb-5">
        <img class="float-left mr-3 mr-md-4" src="{{ asset('img/stefan.png') }}">

        <div name="description" class="pr-1 pr-md-3">
          <p class="label font-weight-bold mb-2 mb-md-4 mt-3 mt-md-4">NEWS</p>
          <h4 class="font-weight-none pt-0 pt-md-3">Usaha Keras Musisi Introvert Zion.T</h4>
          <p class="text-date font-weight-bold pt-3 pt-md-5 pb-0 pb-md-3">September 02, 2019</p>
        </div>
        <div class="clearfix"></div>
      </div>

      <div name="item" class="col-11 col-md-8 px-0 mb-5">
        <img class="float-left mr-3 mr-md-4" src="{{ asset('img/avril.png') }}">

        <div name="description" class="pr-1 pr-md-3">
          <p class="label font-weight-bold mb-2 mb-md-4 mt-3 mt-md-4">NEWS</p>
          <h4 class="font-weight-none pt-0 pt-md-3">Usaha Keras Musisi Introvert Zion.T</h4>
          <p class="text-date font-weight-bold pt-3 pt-md-5 pb-0 pb-md-3">September 02, 2019</p>
        </div>
        <div class="clearfix"></div>
      </div>

    </div>
  </div>
</section>
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
      placeholder: '<center>Masukkan Nama Kota</center>'+'<p style="text-align:right;margin-top:-36px"><i class="fab fa-search"></i></p>',
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
      '<i class="fab fa-search">'+ ' '+state.text+'</i>');
  return $state;
  };
    })
</script>

@endsection

