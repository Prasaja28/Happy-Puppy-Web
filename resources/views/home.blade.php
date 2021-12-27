@extends('layout-komponen.master')

@section('title','Home') <!-- name title -->

@section('navbar-lokasi','active')
@section('css-internal')
<!-- Add tag css in here -->

  <!-- Select2 -->
  
  <!-- search 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
-->

<style>
 
.header{
  min-height: 50vh;
  background: no-repeat center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: rightl;
  background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg')
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
</style>
<link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('konten')
<!-- background Home -->
<div class="header">
</div>
<!-- end background Home -->
<!-- search location  -->
<div class="container-fluid text-white search-kota">
    <center>
        <h4 class="p-4">Cari Oulet Terdekat</h4>
    </center>
        <div class="row py-4" >
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                      <select class="form-control select2bs4" id="search" style="width: 100%;">
                      <option selected="selected"></option>
                      <option value="1">Alabama</option>
                        <option value="2">Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                      </select>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="container text-center">
          <div class="row pt-3">
            <div class="col-lg-2"></div>
            <?php for($i=0;$i<4;$i++){?>
              <div class="col-lg-2">
                <a href="" class="btn btn-primary" style="border-radius:30px;width:125px;font-size:10px">Surabaya</a>
              </div>
              <?php };?>
            </div>
            <div class="col-lg-2"></div>
          </div>
          <!-- /.row -->
          <!-- top artis title -->
        <div class="container text-center py-5">
          <h4>Top Artis</h4>
        </div>
        <!-- end top artis title -->
</div>
<!-- end seach location -->
<!-- top artis -->
<div class="container-fluid top-artis">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-2">
      <img class="img-fluid rounded-circle" alt="75x75" width="75" height="75" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
          data-holder-rendered="true">
      </div>
      <div class="col-lg-2">
      <img class="img-fluid rounded-circle" alt="75x75" width="75" height="75" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
          data-holder-rendered="true">
      </div>
      <div class="col-lg-2">
      <img class="img-fluid rounded-circle" alt="75x75" width="75" height="75" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
          data-holder-rendered="true">
      </div>
      <div class="col-lg-2">
      <img class="img-fluid rounded-circle" alt="75x75" width="75" height="75" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg"
          data-holder-rendered="true">
      </div>
      <div class="col-lg-2"></div>
    </div>
  </div>
  <!-- end of Top artis -->
  <div class="container">

  </div>
</div>
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
      window.location.href = '/lokasi/'+data;
    })

function formatState (state) {
  if (!state.id) { return state.text; }
  var $state = $(
    '<i class="fas fa-search">'+ ' '+state.text+'</i>');
 return $state;
};
  })
</script>

@endsection

