@extends('layout-komponen.master')

@section('title','Form Karir') <!-- name title -->

@section('css-internal')
<!-- Add tag css in here -->
<style>
 
.header{
  min-height: 50vh;
  background: no-repeat center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: right;
  background-image: url('/img/formwaralaba.png')
}
#txt1{
    color: white;
    position: absolute;
    bottom: 0;
    text-align: justify;
    margin: 0;
    font-size: 40px;
    min-height: 480px;
}
hr {
    width: 99%;
}
.back-grad {
    height: 500px;
    width: auto;
    background: linear-gradient(to bottom, #FFFFFF 0%, #FFFFFF 50%, #85A4E1 50%, #85A4E1 100%);
}
#p1{
    font-size: 30px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
}
#p2{
    font-size: 15px;
    font-family: Arial, Helvetica, sans-serif;
}
/* hr {
  border:none;
  border-top:1px dashed #fff;
  color:#fff;
  background-color:#fff;
  height:1px;
  width:50%;
} */
.back {
    height: 1050px;
    width: auto;
    background-color: #85A4E1;
}
.container {
  font-family: 'Poppins';
}
#card1{
    margin-top: 6px;
}
.foots {
    height: 50px;
    width: auto;
    background-color: #ffff;
}
.footser {
    height: 600px;
    width: auto;
    background-color: #ffff;
}
.foots2 {
    height: 800px;
    width: auto;
    background-color: #221E40;
}
.btn {
    color: white;
    background-color: #221E40;
    font-family: 'Poppins';
    font-size: 13px;
    width: 10%;
    border-radius: 20px;
}

@media (){
    #txt1{
        color: white;
        position: absolute;
        bottom: 0;
        text-align: justify;
        margin: 0;
        font-size: 35px;
        min-height: 480px;
    }
    .back-grad {
        height: 500px;
        width: auto;
        background: linear-gradient(to bottom, #FFFFFF 0%, #FFFFFF 50%, #85A4E1 50%, #85A4E1 100%);
    }
    #p1{
        font-size: 25px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
    }
    #p2{
        font-size: 13px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .back {
        height: 1200px;
        width: auto;
        background-color: #85A4E1;
    }
    #card1{
        margin-top: 6px;
    }
    .foots {
        height: 300px;
        width: auto;
        background-color: #ffff;
    }
    .foots2 {
        height: 800px;
        width: auto;
        background-color: #221E40;
    }

}
</style>
<link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('konten')
<!-- add konten in here -->
<div class="header p-5">
    <div id="txt1" class="container">
        <p>Form Pendaftaran</p>
        <p style="font-weight: bold;">LOWONGAN</p>
    </div>
</div><br>
<div class="back-grad">
    <div class="container">
        <h5 style="margin-top: 10px;"><b>DATA PRIBADI</b></h5><br>
        <div class="card" id="card1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control" disabled="disabled" style="width: 100%" id="formGroupExampleInput" placeholder="Waiter">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" disabled="disabled" style="width: 100%" id="formGroupExampleInput" placeholder="Jakarta">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="formGroupExampleInput" placeholder="Nama">
                        </div>
                        <div class="form-group">
                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                            <option selected="selected">Pendidikan Formal</option>
                            <option>SMA</option>
                            <option>D3</option>
                            <option>S1/D4</option>
                            <option>S2</option>
                            <option>S3</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 50%;">
                            <option selected="selected">Tempat Lahir</option>
                            <option>DKI Jakarta</option>
                            <option>Jawa Barat</option></option>
                            <option>Jawa Timur</option>
                            <option>Jawa Tengah</option>
                            <option>Bali</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label>Tanggal Lahir</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                
                            </div>
                        </div> 
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="formGroupExampleInput" placeholder="Tinggi">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="formGroupExampleInput" placeholder="Berat">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <br>
                        <div class="form-group">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 50%;">
                                <option selected="selected">Jenis Kelamin</option>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 50%;">
                                <option selected="selected">Status Marital</option>
                                <option>Single</option>
                                <option>Menikah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="formGroupExampleInput" placeholder="Telp">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="formGroupExampleInput" placeholder="No. HP">
                        </div>   
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="No. KTP">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>

    <div class="container">
        <h5 style="margin-top: 10px;color:white;"><b>PENGALAMAN KERJA</b></h5><br>
        <div class="card" id="card2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <br>
                        <h6><b>Pengalaman Kerja 1</b></h6>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Nama Perusahaan">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="formGroupExampleInput" placeholder="Lama Bekerja">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <br>
                        <br><br>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Jabatan">
                        </div>
                    </div>
                    <br><br> 
                </div>

                <hr style="border-top: 1.5px dashed #519FF8; color:transparent;"/>

                <div class="row">
                    <div class="col-md-6">
                        <br>
                        <h6><b>Pengalaman Kerja 2</b></h6>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Nama Perusahaan">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="formGroupExampleInput" placeholder="Lama Bekerja">
                        </div>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <br><br><br>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Jabatan">
                        </div>
                    </div>
                    <br>
                </div>

                <hr style="border-top: 1.5px dashed #519FF8; color:transparent;"/>

                <div class="row">
                    <div class="col-md-6">              
                        <a href="#">+Tambahkan Pengalaman Kerja</a>
                        <br><br>
                        <br><br><br>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Gaji yang Diharapkan">
                        </div>
                        <br><br>
                    </div>
                    <br>
                </div>
                
            </div>
        </div>
    </div>
<br><br>

    <div class="container">
        <h5 style="margin-top: 10px;color:white;"><b>BAKAT</b></h5><br>
        <div class="card" id="card3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <br><br>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Bahasa">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Alat Musik">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <br><br>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Komputer">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Keahlian Lainnya">
                        </div>
                    </div>
                </div>
            </div> <br><br>
        </div>
    </div>
</div>

<div class="back"></div>

<div class="foots"></div>
<br><br><br><br><br>

<div class="footser">
    <div class="container">
        <h5 style="margin-top: 10px;"><b>LAMPIRAN</b></h5><br><br>
        
            <div class="container">
                <div class="row">    
                <div class="col-lg-6">
                <h6><b>Upload CV</b></h6><br>         
                <form action="/action_page.php">
                    <input type="file" id="filecv" name="filecv">
                    <!-- <input type="submit"> -->
                </form>
                    <br><p>Max. 1MB(.JPG or .PNG)</p>
                </div>
                <br>
                <div class="col-lg-6">
                    <h6><b>Ijazah</b></h6><br>   
                        <form action="/action_page.php">
                            <input type="file" id="fileijazah" name="fileijazah">
                        </form><br>
                        <p>Max. 1MB(.JPG or .PNG)</p>
                </div><br>
        </div>

        <br><br>
        <h6><b>LinkedIn*</b></h6>
        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Copy Link"><br>
                        <p>*jika ada</p> 
                    </div>              
                </div>
        </div>

        <br><button type="submit" class="btn"><b>SUBMIT</b></button><br><br>

            </div>
        </div>
    <br><br>
</div>

@endsection

@section('js-internal')
<!-- add tag js in here -->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
@endsection