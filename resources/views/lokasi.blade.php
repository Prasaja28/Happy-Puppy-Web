@extends('layout-komponen.master')

@section('title','Lokasi') <!-- name title -->

@section('css-internal')
<!-- Add tag css in here -->
<style>
.header{
  min-height: 30vh;
  background: no-repeat center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  z-index: -1;
  background-position: right;
  background-image: url('/img/lokasi.png')
}
.cabang{
    font-size:24px;
    font-family: 'Poppins';
}
.cabang-content{
    font-size:18px;
    font-family: 'Poppins';
}
.map-indonesia{
    min-height: 40vh;
    /* background-image: url('/img/map-indonesia.png') */
}
.search-kota{
    background-color:#221E40;
}
.btn-search{
    border-radius:30px;
    width:100px;
    font-size:8px;
    margin-left:25px;
    margin-right:25px;
    font-family: 'Poppins';
}
.background-bottom{
    background-image: linear-gradient(to right, #68a6fb , #f77a8b);
    z-index: -1;
    min-height:300px;
    margin-top:-100px;
    position: relative;
}
@media (max-width: 576px) {
    .cabang{
        font-size:10px;
    }
    .cabang-content{
        font-size:8px;
    }
  .btn-search{
    border-radius:8px;
    width:60px;
    font-size:7px;
    margin: 4px;
  }
  .map-indonesia{
    min-height: 8vh;
    /* background-image: url('/img/map-indonesia.png') */
  }
  .background-bottom{
    background-image: linear-gradient(to right, #68a6fb , #f77a8b);
    z-index: -1;
    min-height:200px;
    margin-top:-100px;
    position: relative;
}
}
</style>
<link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection
@section('navbar-lokasi','active')
@section('konten')
<!-- add konten in here -->

    <!-- background Home -->
    <div class="header text-white p-5">
        <h4 class="mt-5">Cari</h4>
        <h2 class="font-weight-bold">LOKASI</h2>
    </div>
    <!-- end background home -->
    <!-- map indonesia -->
    <div class="container p-5" style="">
    <h6 class="font-weight-bold  text-center cabang">Cabang Kami Tersebar Sampai 36 Kota Besar di Indonesia</h6>
    <p class="text-center my-2 cabang-content">Input nama kota untuk mencari outlet di sekitarmu <br> serta dapatkan promo dan event yang sedang berlaku</p>
    <div class="map-indonesia text-center">
        <img src="{{ asset('/img/map-indonesia.png') }}" alt="" class="img-fluid">
    </div>
    </div>
    <!-- end map indonesia -->
    <!-- outlet search -->
    <div class="container">
        <div class="container-fluid text-white search-kota">
            <center>
                <h5 class="p-4 font-weight-bold">Cari Oulet Terdekat</h5>
            </center>
            <div class="row py-2" >
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                          <select class="form-control select2bs4" id="search" style="width: 100%;">
                          <option selected="selected"></option>
                          <option value="1">Surabaya</option>
                            <option value="2">Jakarta</option>
                            <option>Makasar</option>
                            <option>Samarinda</option>
                            <option>Yogyakarta</option>
                            <option>Semarang</option>
                            <option>Madura</option>
                          </select>
                </div>
                <div class="col-lg-3"></div>
            </div>
            <div class="container-fluid pb-4 text-center">
              <div class="row py-3">
                <div class="col-12">
                      <a href="{{ url('/lokasi-outlet') }}" class="btn btn-primary btn-search" style="text-transform:uppercase">Jakarta</a>
                      <a href="{{ url('/lokasi-outlet') }}" class="btn btn-primary btn-search" style="text-transform:uppercase">Surabaya</a>
                      <a href="{{ url('/lokasi-outlet') }}" class="btn btn-primary btn-search" style="text-transform:uppercase">Makasar</a>
                      <a href="{{ url('/lokasi-outlet') }}" class="btn btn-primary btn-search" style="text-transform:uppercase">Samarinda</a>
                </div>
              </div>
            </div>
              <!-- /.row -->
        </div>
    </div>
    <!-- end outlet search -->
    <div class="background-bottom">

    </div>
<!-- end seach location -->
@endsection

@section('js-internal')
<!-- add tag js in here -->
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
      // window.location.href = '/lokasi-outlet/'+data;
      window.location.href = '/lokasi-outlet/';
    })

    function formatState (state) {
    if (!state.id) { return state.text; }
    var $state = $(
        '<i class="fas fa-search">'+ ' '+state.text+'</i>');
    return $state;
    };
});
</script>
@endsection