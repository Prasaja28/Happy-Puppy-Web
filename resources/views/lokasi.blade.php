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
      font-weight: 300;
      border-radius: 50px;
      margin-top: -30px;
      margin-bottom: 50px;
      font-family: 'Poppins';
  }
  .background-bottom{
      background-image: linear-gradient(to right, #68a6fb , #f77a8b);
      z-index: -1;
      min-height:300px;
      margin-top:-100px;
      position: relative;
  }
  #butt{
    margin-top: 45px;
  }
  @media (max-width: 576px) {
      .cabang{
          font-size:15px;
      }
      .cabang-content{
          font-size:12px;
      }
    .btn-search{
      font-weight: 300;
      border-radius: 50px;
      margin-top: -30px;
      margin-bottom: 50px;
      font-size: 12px;
      font-family: 'Poppins';
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
        <h4 class="mt-5">{{ __('lokasi.title1') }}</h4>
        <h2 class="font-weight-bold">{{ __('lokasi.title2') }}</h2>
    </div>
    <!-- end background home -->
    <!-- map indonesia -->
    <div class="container p-5" style="">
    <h6 class="font-weight-bold  text-center cabang">{{ __('lokasi.desk1') }}</h6>
    <p class="text-center my-2 cabang-content">{{ __('lokasi.desk2') }}</p>
    <div class="map-indonesia text-center">
        <img src="{{ asset('/img/map-indonesia.png') }}" alt="" class="img-fluid">
    </div>
    </div>
    <!-- end map indonesia -->
    <!-- outlet search -->
    <div class="container">
        <div class="container-fluid text-white search-kota">
            <center>
              <h5 class="p-4 font-weight-bold">{{ __('lokasi.find1') }}</h5>
              <form class="form" method="get" action="{{ route('search') }}">
                <div class="form-group mb-3">
                    <label for="search" class="d-block mr-2"></label>
                    <input type="text" name="keyword" class="form-control w-75 d-inline" id="search" placeholder="{{ __('lokasi.find3') }}">
                    <button type="submit" class="btn btn-primary mb-1">{{ __('lokasi.find2') }}</button>
                </div>
            </form>
            <!-- Start kode untuk form pencarian -->
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            </center>

            <div class="container-fluid pb-4 text-center">
              <div class="row py-3" id="butt">
                <div class="col-12">
                      <a href="{{ route('search', ['keyword'=> 'jakarta'] ) }}" class="btn btn-primary btn-search" style="text-transform:uppercase">Jakarta</a>
                      <a href="{{ route('search', ['keyword'=> 'surabaya'] ) }}" class="btn btn-primary btn-search" style="text-transform:uppercase">Surabaya</a>
                      <a href="{{ route('search', ['keyword'=> 'makassar'] ) }}" class="btn btn-primary btn-search" style="text-transform:uppercase">Makassar</a>
                      <a href="{{ route('search', ['keyword'=> 'samarinda'] ) }}" class="btn btn-primary btn-search" style="text-transform:uppercase">Samarinda</a>
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

    // function formatState (state) {
    // return state.text;
    // };
    function formatState (state) {
      console.log(state);

      if (!state.id) {
        return state.text;
      }
      var $state = 
      '<i class="fas fa-search">  '+'  </i>     '+ state.text;
      return $state;
    };
});
</script>
@endsection