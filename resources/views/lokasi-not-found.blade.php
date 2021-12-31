@extends('layout-komponen.master')

@section('title','Not Found Error') <!-- name title -->

@section('css-internal')
<!-- Add tag css in here -->
<style>
    .header{
  min-height:650px;
  background: no-repeat center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: rightl;
  background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/i/3bacb19c-7e13-4fb6-8af6-36163689b7c0/ddj44uy-7441cf1e-4c35-4096-8f2f-6a3e4828e1c6.png');
}
.color-background{
    background-image: linear-gradient(to right, #68a6fb , #f77a8b);
    min-height:650px;
    position: relative;
    opacity: 0.6;
}
h1{
    padding-top:250px;
    padding-left:200px;
    font-size:60px
}
h4{
    padding-left:200px;
}
@media (max-width: 576px) {
    h1{
        padding-top:250px;
        padding-left:70px;
        font-size:60px
    }
    h4{
        padding-left:70px;
    }
}
</style>
@endsection
@section('navbar-news','active')
@section('konten')
<!-- add konten in here -->
<!-- background Home -->
<div class="header">
<div class="color-background ">
<h1 class="font-weight-bold">Sorry,</h1>
<h4>Lokasi tidak Ditemukan</h4>
</div>
</div>
@endsection

@section('js-internal')
<!-- add tag js in here -->

@endsection