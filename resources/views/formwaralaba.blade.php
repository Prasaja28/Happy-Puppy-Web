@extends('layout-komponen.master')

@section('title','Form Waralaba') <!-- name title -->

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
        background-image: url('/img/formwaralaba.png');
    }
    #txt1{
        color: white;
        position: absolute;
        bottom: 0;
        text-align: justify;
        margin: 0;
        font-family: 'Poppins';
        font-size: 40px;
        min-height: 480px;
    }
    .back-grad {
        height: 500px;
        width: auto;
        background: linear-gradient(to bottom, #FFFFFF 0%, #FFFFFF 50%, #85A4E1 50%, #85A4E1 100%);
    }
    .container {
                font-family: 'Poppins';
    }
    .form-control {
        border: none;
        border-bottom: 1px solid #000;
        background: none;
        padding: 5px;
        width: 50%;
        transition: .2s;
    }
    #p1{
        font-size: 30px;
        font-family: 'Poppins';
        font-weight: bold;
    }
    #p2{
        font-size: 15px;
        font-family: 'Poppins';
    }
    .back {
        height: 1300px;
        width: auto;
        background-color: #85A4E1;
    }
    #card1{
        margin-top: 6px;
    }
    .foots {
        height: 150px;
        width: auto;
        background-color: #ffff;
    }
    .foots2 {
        height: 800px;
        width: auto;
        background-color: #221E40;
    }

@media (max-width: 600px) {
    .header{
        min-height: 20vh;
        background: no-repeat center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position: rightl;
        background-image: url('/img/formwaralaba.png');
    }
    #txt1{
        color: white;
        position: absolute;
        bottom: 0;
        text-align: justify;
        margin: 0;
        font-size: 15px;
        min-height: 480px;
        margin-bottom: 86px;
        margin-left: -31px;
    }
    .container {
        font-family: 'Poppins';
    }
    .back-grad {
        height: 500px;
        width: auto;
        background: linear-gradient(to bottom, #FFFFFF 0%, #FFFFFF 50%, #85A4E1 50%, #85A4E1 100%);
    }
    #p1{
        font-size: 25px;
        font-family: 'Poppins';
        font-weight: bold;
    }
    #p2{
        font-size: 13px;
        font-family: 'Poppins';
    }
    .back {
        height: 1200px;
        width: auto;
        background-color: #85A4E1;
    }
    #card1{
        margin-top: 6px;
    }
    #card2 {
        margin-top: 6px;
    }
    #card3 {
        margin-top: 6px;
    }
    .foots {
        height: 300px;
        width: auto;
        display: none;
        background-color: #ffff;
    }
    .foots2 {
        height: 800px;
        width: auto;
        display: none;
                background-color: #221E40;
    }
    .btn {
        color: white;
        background-color: #221E40;
        font-family: 'Poppins';
        font-size: 13px;
        width: 35%;
        border-radius: 15px;
        margin-left: 32%;
        margin-top: 45px;
    }
    .footser {
        display: none;
    }
    #myBtn {
        display: flex;
        justify-content: center;
        font-size: 15px;
        margin-top: -50%;
    }
    .bom {
        display: none;
        font-family: 'Poppins';
    }
    #buttoon {
        margin-top: 100px;
    }
    #subTittle {
        color: #000;
    }
    #lampiran {
        display: inline-block;
    }
    #bakat {
        margin-top: -85px;
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
            <p style="font-weight: bold;">WARALABA</p>
        </div>
    </div><br>
    <form id="regForm" action="" enctype="multipart/form-data">
        @csrf
            <div class="col-12">
                <a id="prevBtn" onclick="nextPrev(-1)" style="color: #519FF8">Kembali</a>
            </div>
    <div class="back-grad">
    <div class="container bom">
        <h2 style="margin-top: 10px;font-family: 'Poppins';">DATA PRIBADI</h2><br>
        <div class="card" id="card1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 80%" id="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 50%;">
                                <option selected="selected">Jenis Kelamin</option>
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="usia" placeholder="Usia">
                        </div>
                        <div class="form-group">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 50%;">
                                <option selected="selected">Pendidikan Terakhir</option>
                                <option>SMA</option>
                                <option>D3</option>
                                <option>S1/D4</option>
                                <option>S2</option>
                                <option>S3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 50%;">
                                <option selected="selected">Status</option>
                                <option>Menikah</option>
                                <option>Belum Menikah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 80%" id="umur" placeholder="Umur">
                        </div>
                        <div class="form-group">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 50%;">
                                <option selected="selected">Kota</option>
                                <option>DKI Jakarta</option>
                                <option>Tanggerang</option></option>
                                <option>Surabaya</option>
                                <option>Bandung</option>
                                <option>Bali</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 50%;">
                                <option selected="selected">Provinsi</option>
                                <option>DKI Jakarta</option>
                                <option>Jawa Barat</option></option>
                                <option>Jawa Timur</option>
                                <option>Jawa Tengah</option>
                                <option>Bali</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="telpr" placeholder="Telp. rumah">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="telpk" placeholder="Telp. kantor">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="nohp" placeholder="No. Hp">
                        </div>   
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 80%" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 80%" id="konemail" placeholder="Konfirmasi email">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="container bom">
        <h2 style="margin-top: 10px; color: white; font-family: 'Poppins';"  id="subTittle" >PEKERJAAN</h2><br>
        <div class="card" id="card2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 80%" id="pekanda" placeholder="Pekerjaan anda">
                        </div>
                        <div class="form-group">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 50%;">
                                <option selected="selected">Bidang Usaha</option>
                                <option>Bidang Pertanian</option>
                                <option>Bidang Manufaktur</option>
                                <option>Bidang Konstruksi</option>
                                <option>Bidang Komunikasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="lain2" placeholder="Lain-lain">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 80%" id="namaper" placeholder="Nama Perusahaan">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 80%" id="jabatan" placeholder="Jabatan anda">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="lain22" placeholder="Lain-lain">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 80%" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 50%;">
                            <option selected="selected">Kota</option>
                            <option>DKI Jakarta</option>
                            <option>Tanggerang</option></option>
                            <option>Surabaya</option>
                            <option>Bandung</option>
                            <option>Bali</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 50%;">
                            <option selected="selected">Provinsi</option>
                            <option>DKI Jakarta</option>
                            <option>Jawa Barat</option></option>
                            <option>Jawa Timur</option>
                            <option>Jawa Tengah</option>
                            <option>Bali</option>
                        </select>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="container bom">
        <h2 style="margin-top: 10px; color: white; font-family: 'Poppins';">TEMPAT DIMINATI UNTUK WARALAH HAPPY PUPPY</h2><br>
        <div class="card" id="card3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <br>
                        <div class="form-group">
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 80%;">
                                <option selected="selected">Status Penguasaan Tempat</option>
                                <option>Lahan Pribadi</option>
                                <option>Sewa</option></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 80%" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="kot" placeholder="Kota">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="prov" placeholder="Provinsi">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="dikenal" placeholder="Dikenal sebagai Daerah">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="lain222" placeholder="Lain-lain">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="luasbang" placeholder="Luas bangunan                          M">
                        </div>
                        <br><br>
                        <p style="font-weight: bold;">Usaha Tetangga Kiri:</p>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 80%" id="namus" placeholder="Nama Usaha">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 80%" id="bius" placeholder="Bidang Usaha">
                        </div>
                        <br><br>
                        <p style="font-weight: bold;">Usaha Tetangga Kanan:</p>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 80%" id="namus2" placeholder="Nama Usaha">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 80%" id="bius2" placeholder="Bidang Usaha">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <br>
                        <p style="font-weight: bold;">Usaha Tetangga Belakang:</p>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 80%" id="namus" placeholder="Nama Usaha">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 80%" id="bius" placeholder="Bidang Usaha">
                        </div>
                        <br><br>
                        <p style="font-weight: bold;">Usaha Tetangga Depan:</p>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 80%" id="namus2" placeholder="Nama Usaha">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 80%" id="bius2" placeholder="Bidang Usaha">
                        </div>
                        <br><br>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="lebarjalan" placeholder="Lebar Jalan Depan">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" style="width: 50%" id="lalulin" placeholder="Lalu - Lintas Jalan Depan">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="back"></div>
<div class="foots"></div>
<div class="foots2">
    <div class="container">
        <br><br>    
        <p style="color: white;">Jika anda berminat serius, memenuhi syarat, serta mempunyai kemampuan<br> finansial untuk membiayai investasi, silahkan mengisi formulir peminat waralaba<br> yang tersedia secara lengkap. Kami hanya menerima dan memproses formulir yang<br> diisi secara lengkap. untuk mengisi formulir pendaftaran waralaba.</p>
        <div class="form-group">
            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 10%;background-color: #221E40;color:white;">
                <option selected="selected">Ya/Tidak</option>
                <option>Ya</option>
                <option>Tidak</option></option>
            </select>
        </div>
        <br><br>    
        <p style="color:white;">Sebelum anda mengirim pendaftaran waralaba ini, setujukah anda bahwa :<br><br> Anda dan keluarga langsung atau Pemilik dan Pengurus Perusahaan yang anda<br> wakili, tidak memiliki dan/atau menjadi Pengurus usaha Karaoke Keluarga/Rumah<br> Bernyanyi Keluarga lainnya, baik sekarang ataupun pada saat pendaftaran<br> waralaba ini diterima</p>
        <div class="form-group">
            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 10%;background-color: #221E40;color:white;">
                <option selected="selected">Ya/Tidak</option>
                <option>Ya</option>
                <option>Tidak</option></option>
            </select>
        </div>
        <br><br>
    </div>
</div>
    <div class="col-12" id="buttoon">
            <button type="submit" id="myBtn" onclick="nextPrev(1)" class="btn btn-primary">Next Step</button>
        </div>
        <br>
    </form>
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
<script>
        var currentTab = 0;
        showTab(currentTab);

        function showTab(n) {
            var x = document.getElementsByClassName("bom");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("myBtn").innerHTML = "Submit";
            } else {
                document.getElementById("myBtn").innerHTML = "Next Step";
            }
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("bom");
            if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                document.getElementById("regForm").submit();
                return false;
            }
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("bom");
            y = x[currentTab].getElementsByTagName("input");

            return valid;
        }
</script>
@endsection