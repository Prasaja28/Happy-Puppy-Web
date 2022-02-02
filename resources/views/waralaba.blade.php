@extends('layout-komponen.master')

@section('title','Waralaba') <!-- name title -->

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
  background-image: url('/img/waralaba.png')
}
#txt1{
    color: white;
    position: absolute;
    bottom: 0;
    text-align: justify;
    margin: 0;
    font-size: 40px;
    font-weight: bold;
    min-height: 380px;
    font-family: 'Poppins';
}
.back-grad {
    height: 300px;
    width: auto;
    background: linear-gradient(to bottom, #FFFFFF 0%, #FFFFFF 50%, #85A4E1 50%, #85A4E1 100%);
}
.center {
    margin: auto;
    margin-top: 50px;
    width: 85%;
    padding: 10px;
    color: white;
    background-color:#221E40;
}
#p1{
    font-size: 30px;
    font-weight: bold;
    font-family: 'Poppins';
}
#p2{
    font-size: 15px;
    font-family: 'Poppins';
}
.back {
    height: 1100px;
    width: auto;
    background-color: #85A4E1;
    font-family: 'Poppins';
}

.card-header, .btn {
    color: #221E40;
    background-color: #85A4E1;
    font-family: 'Poppins';
    font-weight: bold;
}

.card-body {
    background-color: #ECEFF1;
}

/* .accordion {
  background-color: #85A4E1;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  font-family: 'Poppins';
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
} */
#text-acc{
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    color: white;
    font-weight: bold;
    font-family: 'Poppins';
}
#txt-foot{
    font-size: 18px;
    color: white;
    font-family: 'Poppins';
}
.btn{
    color: white;
    background-color: #221E40;
}
@media (max-width: 576px) {
    
    #txt1{
        color: white;
        position: absolute;
        bottom: 0;
        text-align: justify;
        margin: 0;
        font-size: 40px;
        font-weight: bold;
        min-height: 380px;
    }
    .back-grad {
        height: 300px;
        width: auto;
        background: linear-gradient(to bottom, #FFFFFF 0%, #FFFFFF 50%, #85A4E1 50%, #85A4E1 100%);
    }
    .center {
        margin: auto;
        margin-top: 50px;
        width: 85%;
        padding: 10px;
        color: white;
        background-color:#221E40;
    }
    #p1{
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
    }
    #p2{
        font-size: 10px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .back {
        height: 1100px;
        width: auto;
        background-color: #85A4E1;
    }
    .accordion {
    background-color: #85A4E1;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 10px;
    transition: 0.4s;
    }

    .active, .accordion:hover {
    background-color: #ccc; 
    }

    .panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
    }
    #text-acc{
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
        color: white;
        font-weight: bold;
    }
    #txt-foot{
        font-size: 14px;
        font-family: Arial, Helvetica, sans-serif;
        color: white;
    }
    .btn{
        color: white;
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
        <p>WARALABA</p>
    </div>
</div>
<div class="back-grad">
    <div class="center">
        <br><p id="p1">Kenapa Memilih Usaha Karaoke (Bernyanyi)?</p><br>
        <p id="p2">Karena bernyanyi tidak mengenal musim sehingga kita tidak perlu kuatir suatu waktu manusia bosan bernyanyi. Bernyanyi adalah hiburan pertama yang dianugerahkan oleh Tuhan YME untuk manusia dan akan terus diminati manusia sepanjang peradabannya.</p><br>
    </div>
</div>
<div class="back">
    <div class="container">
        <!-- <button class="accordion" id="text-acc">Home Theatre buka untuk karaoke?</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    
        <button class="accordion" id="text-acc">Karaoke keluarga, bisnis hiburan tanpa masalah</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    
        <button class="accordion" id="text-acc">kenapa memilih waralaba Happy Puppy?</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <button class="accordion" id="text-acc">Hal yang perlu diperhatikan dalam waralaba ini</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <button class="accordion" id="text-acc">Berapa investasi yang dibutuhkan untuk waralaba ini?</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <button class="accordion" id="text-acc">Daftar kota tertutup untuk waralaba</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div><br><br><br><br> -->
        <div id="accordion">
            <div class="card border-0">
                <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Home Theatre buka untuk karaoke?
                    </button>
                </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Karaoke keluarga, bisnis hiburan tanpa masalah
                    </button>
                </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Kenapa memilih waralaba Happy Puppy?
                    </button>
                </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                    <button class="btn collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Hal yang perlu diperhatikan dalam waralaba ini
                    </button>
                </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                    <button class="btn collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Berapa investasi yang dibutuhkan untuk waralaba ini?
                    </button>
                </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
                </div>
            </div>
            <div class="card border-0">
                <div class="card-header" id="headingSix">
                <h5 class="mb-0">
                    <button class="btn collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Daftar kota tertutup untuk waralaba
                    </button>
                </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
                </div>
            </div>
        </div><br><br><br><br>
    </div>
    <div class="container" id="txt-foot">
        <p>Jika anda berminat serius, memenuhi syarat, serta mempunyai kemampuan finansial untuk membiayai investasi, silahkan mengisi formulir peminat waralaba yang tersedia secara lengkap. Kami hanya menerima dan memproses formulir yang diisi secara lengkap, untuk mengisi formulir pendaftaran waralaba.</p><br><br>
        <form onclick="window.location.href='/form-waralaba'">
            <button type="button" class="btn">Klik Disini</button>
        </form>
    </div>
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