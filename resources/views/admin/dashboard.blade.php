@extends('/admin/layout-komponen/master')

@section('title','Dashboard')

@section('css')
<!-- css internal place -->

@endsection
@section('dashboard','active')
@section('konten')
<!-- Content Body place -->
<h3>Haloo, {{ Session::get('username') }}</h3>
<?php
    date_default_timezone_set('Asia/Jakarta');

    $Hour = date('G');

    if ( $Hour >= 5 && $Hour <= 11 ) {
    ?><?php ?><span style="color: black;font-size: 20px;"><?php echo "Selamat Pagi"; ?><?php ?></span><?php
    } else if ( $Hour >= 12 && $Hour <= 14 ) {
    ?><?php ?><span style="color: black;font-size: 20px;"><?php echo "Selamat Siang"; ?><?php ?></span><?php
    } else if ( $Hour >= 15 || $Hour <= 17 ) {
    ?><?php ?><span style="color: black;font-size: 20px;"><?php  echo "Selamat Sore"; ?><?php ?></span><?php
    } else if ( $Hour >= 18 || $Hour <= 4 ) {
    ?><?php ?><span style="color: black;font-size: 20px;"><?php  echo "Selamat Malam"; ?><?php ?></span><?php
    }
?>
@endsection

@section('script')
<!-- script internal place -->

@endsection