@extends('layout-komponen.masterErrors')
<!-- name title -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @include('layouts.styleGlobal') --}}
    <title>Page Not Found</title>
</head>

<body>
    <section style="padding-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h1 style="font-size: 162px;">404</h1>
                    <h2>Halaman tidak ditemukan</h2>
                    <p>Mohon maaf, halaman yang anda cari tidak ditemukan. Harap kembali ke halaman Home.</p>
                    <a href="/" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
{{-- @endsection --}}
