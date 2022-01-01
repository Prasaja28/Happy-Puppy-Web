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
  background-position: rightl;
  background-image: url('/img/karaoke.jpg')
}
/* 
.btn{
    color: white;
    background-color: #221E40; */
}
</style>
<link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('konten')
<div class="header">
    <div id="txt1" class="container">
        <p>Lowongan</p>
    </div>
</div>

    <section class="content">
    <div class="container-fluid"><br>
        <div>
            <h2>Form Karir</h2><br>
        </div>

        <div class="card card-default">

        <div class="card-header">
            <h4>Data Pribadi</h4>
        </div>       
          
        <div class="card-body">
            
        <div class="row">
              
            <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" disabled="disabled" style="width: 100%" id="formGroupExampleInput" placeholder="Waiter">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" disabled="disabled" style="width: 100%" id="formGroupExampleInput" placeholder="Jakarta">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" style="width: 50%" id="formGroupExampleInput" placeholder="Name">
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
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
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
    

    <div class="card-header">
        <h4>Pengalaman Kerja</h4>
    </div>       
          
    <div class="card-body">
            <h6>Pengalaman Kerja 1</h6>

    <div class="row">         
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Nama Perusahaan">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" style="width: 50%" id="formGroupExampleInput" placeholder="Lama Bekerja">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Jabatan">
                </div>
            </div>
    </div>

    <h6>Pengalaman Kerja 2</h6>
    <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Nama Perusahaan">
                  </div>
                <div class="form-group">
                    <input type="text" class="form-control" style="width: 50%" id="formGroupExampleInput" placeholder="Lama Bekerja">
                </div>
                <br><br>
                <div class="form-group">
                    <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Gaji yang Diharapkan">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Jabatan">
                </div>
                <!-- <br><br><br><br>
                <div class="form-group">
                    <text>Dalam IDR</text>
                </div> -->
            </div>
    </div>
    </div>



    <div class="card-header">
            <h4>Data Bakat</h4>
        </div>       
          
        <div class="card-body">
            
        <div class="row">
              
            <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Bahasa">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Alat Musik">
                  </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Komputer">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Keahlian Lainnya">
                </div>
            </div>
    </div>
    </div>

    <div class="card-header">
            <h4>Lampiran</h4>
    </div>       
    <br>       
        <class="card-body">
          
        <div class="row">    
                <div class="col-lg-6">
                <h6>Upload CV</h6>          
                  <div class="btn-group w-50">
                      <span class="btn btn-primary col start">
                        <i class="fas fa-plus"></i>
                        <span>Choose File</span>
                      </span>
                    </div>
                    <p>Max. 1MB(.JPG or .PNG)</p>
                </div>
                <br>
                <div class="col-lg-6">
                <h6>Ijazah</h6>          
                    <div class="btn-group w-50">
                      <span class="btn btn-primary col start">
                        <i class="fas fa-plus"></i>
                        <span>Choose File</span>
                      </span>
                    </div>
                    <p>Max. 1MB(.JPG or .PNG)</p>
                </div>
                <br>
        </div>

    <h6>LinkedIn*</h6>
    <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput" placeholder="Copy Link">
                    <p>*jika ada</p> 
                </div>              
            </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <br><br>

    </div>
    
    </div>
    
    </div>

    </div>
        
    </div>

    </section>
</div>
@endsection

@section('js-internal')
<!-- add tag js in here -->

@endsection

