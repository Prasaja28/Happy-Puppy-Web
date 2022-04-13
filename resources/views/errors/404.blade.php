@extends('layout-komponen.masterErrors')
@section('title', '404')
@section('konten')

    <div class="container" style="padding-top:7rem; ">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h1 style="font-size: 162px;">404</h1>
                <h2>Halaman tidak ditemukan</h2>
                <p>Mohon maaf, halaman yang anda cari tidak ditemukan. Harap kembali ke halaman Home.</p>
                <a href="/" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
{{-- <footer>
    @include('layout-komponen.footer')
</footer> --}}

</html>
