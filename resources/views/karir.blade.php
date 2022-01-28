@extends('layout-komponen.master')

@section('title','Karir') <!-- name title -->

@section('css-internal')
<!-- Add tag css in here -->
<style>
 
.header1{
  min-height: 29vh;
  background: no-repeat center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: right;
  background-image: url('/img/karir.png')
}

#txt2{
    color: white;
    position: absolute;
    bottom: 0;
    text-align: justify;
    margin: 0;
    font-size: 35px;
    min-height: 550px;
    text-indent: 1in;
}

#txt1{
    color: white;
    position: absolute;
    bottom: 0;
    text-align: justify;
    margin: 0;
    font-size: 35px;
    font-weight: bold;
    min-height: 500px;
    text-indent: 1in;
}

.center {
    margin: auto;
    margin-top: 50px;
    margin-bottom: 50px;
    width: 100%;
    padding: 15px;
    color: black;
    background-color:#D3D3D3;
    text-indent: 0.1in;
}

.lowongan {
    margin: auto;
    margin-top: 50px;
    width: 100%;
    padding: 50px;
    color: black;
    background-color:#221E40;
    font-family: 'Poppins';
}

h6 {
  color: #ffffff;
  font-size: 18px;
}

.card-body {
  min-height:5rem;
  text-align: right;
  width: 30%;
  }

.container {
  font-family: 'Poppins';
}

.content {
    margin: -50px 100px 0px 250px;
    width: 80%;
    padding: 30px;
    font-family: 'Poppins';
}

.card {
    margin: -42px 100px 0px 275px;
    padding: 0px;
    font-family: 'Poppins';
}

td {
  font-size: 13px;
}

.btn {
    color: white;
    background-color: #221E40;
    font-family: 'Poppins';
    font-size: 13px;
    width: 40%;
}

.btn-primary {
    color: white;
    background-color: #221E40;
    font-family: 'Poppins';
    font-size: 13px;
    margin: 10px 100px 20px 275px;
    width: 13%;
    min-height: 2.2rem;
    border-radius: 30px;
}


}
</style>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

@endsection
@section('navbar-profile','active')
@section('konten')
<!-- add konten in here -->
<!-- background Home -->
    
    <div class="header1">
        <div id="txt1" class="container" style="text-align: justify; text-indent: 1in;">
            <p>KARIR</p>
        </div>
    </div>
    <br>
    <br>
    
    <div class="container" style="text-align: center; "> 
      HAPPY PUPPY memberikan kesempatan bagi semua pegawai untuk mengembangkan karir <br>
      mulai dari level dasar sampai mencapai level tertinggi melalui jenjang karir yang telah disusun dengan baik
    </div>
    
    <div class="lowongan">
        <h6><b>LOWONGAN TERSEDIA</b></h6>
    </div>    
    
    <div class="content" >        
        <div class="row">     
            <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" class="form-control" style="width: 105%; font-size: 14px;" id="formGroupExampleInput" placeholder="Pilih Pekerjaan">
                  </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" style="width: 100%; font-size: 14px;" id="formGroupExampleInput" placeholder="Pilih Lokasi">  
                </div>
            </div>

            <div class="col-md-4">
                <button type="button" class="btn" style="font-size: 13px">FILTER</button>
            </div>
        </div>
    </div>

          <div class="card" style="width: 50%">
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <td>Waiter</td>
                      <td>Surabaya, Jl. Mayjend Sungkono</td>
                    </tr>
                    <tr>
                      <td>Waiter</td>
                      <td>Jakarta, Jl. Raya Utan Kayu</td>
                    </tr>
                    <tr>
                      <td>Information Technology</td>
                      <td>Bandung, Jl. Raya Utan Kayu</td>
                    </tr>
                    <tr>
                      <td>Supervisor</td>
                      <td>Bali, Jl. Raya Utan Kayu</td>
                    </tr>
                  </tbody>
                </table>
                
                <div class="card-footer">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>

              </div>

              <br>
                <a href="{{ url('/formkarir') }}" class="btn btn-primary btn-search" style="text-transform:uppercase"><b>APPLY NOW</b></a>
              <br>

@endsection


@section('js-internal')
<!-- add tag js in here -->
@endsection
