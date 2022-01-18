@extends('layout-komponen.master')

@section('title','Profile') <!-- name title -->

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

h5 {
  color: #ffffff;
  font-size:25px;
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
    margin: 5px 100px 0px 250px;
    width: 80%;
    padding: 30px;
    font-family: 'Poppins';
}

.card {
    margin: 5px 100px 0px 275px;
    padding: 0px;
    font-family: 'Poppins';
}


.btn {
    color: white;
    background-color: #221E40;
    font-family: 'Poppins';
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
      mulai dari level dasar sampai mencapai level tertinggi melalui jenjang karir yang telah disusun degan baik
    </div>
    
    <div class="lowongan">
        <h5><b>LOWONGAN TERSEDIA</b></h5>
    </div>    
    
    <div class="content" >        
        <div class="row">     
            <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Pilih Pekerjaan">
                  </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Pilih Lokasi">  
                </div>
            </div>

            <div class="col-md-4">
                <button type="button" class="btn">Filter</button>
            </div>
        </div>
    </div>

          <div class="card" style="width: 50%">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Pekerjaan</th>
                      <th>Lokasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Waiter</td>
                      <td>Surabaya, Jl. Mayjend Sungkono</td>
                    </tr>
                    <tr>
                      <td>Waiter</td>
                      <td>Jakarta, Jl. Raya Utan Kayu</td>
                    </tr>
                  </tbody>
                </table>
                
                <div class="card-footer clearfix">
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
              <!-- <div class="col-md-4" style="text-align: center">
                <button type="button" class="btn">Apply</button>
              </div> -->
              <br>

              



@endsection


@section('js-internal')
<!-- add tag js in here -->
@endsection
