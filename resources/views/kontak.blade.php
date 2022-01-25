@extends('layout-komponen.master')

@section('title','Kontak') <!-- name title -->

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
        background-image: url('/img/kontak.png')
    }
    #txt1{
        color: white;
        position: absolute;
        bottom: 0;
        text-align: justify;
        margin: 0;
        font-size: 40px;
        min-height: 450px;
        font-family: 'Poppins';
    }
    .back-grad {
        height: 250px;
        width: auto;
        background: linear-gradient(to bottom, #FFFFFF 0%, #FFFFFF 50%, #85A4E1 50%, #85A4E1 100%);
    }
    .center {
        margin: auto;
        width: 55%;
        padding: 40px;
        color: white;
        background-color:#221E40;
    }
    #p1{
        margin-top: 50px;
        font-size: 15px;
        font-family: 'Poppins';
        font-weight: bold;
        text-align: justify;
    }
    #p2{
        font-size: 15px;
        font-family: 'Poppins';
        text-align: justify;
    }
    .back {
        height: 730px;
        width: auto;
        background-color: #85A4E1;
    }
    .tab {
        float: left;
        background-color: #85A4E1;
        width: 30%;
        height: 300px;
    }
    .tab button {
        display: block;
        background-color: inherit;
        color: white;
        padding: 22px 16px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
        font-size: 17px;
        border-top-right-radius: 100px;
        border-top-left-radius: 20px;
        border-bottom-right-radius: 100px;
        border-bottom-left-radius: 20px;
        font-family: 'Poppins';
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #656282;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
        background-color: #221E40;
    }

    /* Style the tab content */
    .tabcontent {
        float: left;
        padding: 0px 12px;
        width: 70%;
        border-left: none;
        height: 300px;
    }

    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    #form1 {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
    .back2 {
        height: 900px;
        width: auto;
        background-color: #FFFFFF;
    }
    #back2con{
        margin-top: 30px;
    }
    .accordion {
        background-color: #FFFFFF;
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
        background-color: #221E40; 
    }

    .panel {
        padding: 0 18px;
        display: none;
        background-color: #6699CC;
        overflow: hidden;
    }
    #text-acc{
        font-size: 18px;
        font-family: Arial, Helvetica, sans-serif;
        color: black;
        font-weight: bold;
        font-family: 'Poppins';
    }
    #faq {
        padding: 0 18px;
    }
@media(max-width: 800px) {
    .center {
        margin: auto;
        width: 75%;
        padding: 40px;
        color: white;
        background-color:#221E40;
    }
    #p1{
        margin-top: 50px;
        font-size: 10px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        text-align: justify;
    }
    #p11{
        font-size: 10px;
    }
    #p2{
        font-size: 5px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: justify;
    }
    #faq {
        padding: 0 18px;
        font-size: 15px;
    }
}
</style>
@endsection

@section('konten')
<!-- add konten in here -->
<div class="header p-5">
    <div id="txt1" class="container" style="font-family: 'Poppins';">
        <p>KONTAK</p>
        <p style="font-weight: bold;">KAMI</p>
    </div>
</div>
<div class="back-grad">
    <div class="center">
        <div class="row" style="font-family: 'Poppins';">
            <br><div class="col-4 d-flex" id="p1">Manajemen & Waralaba:<br>PT. Imperium Happy Puppy</div><br>
            <div class="col-8 pt-4 pt-lg-0 content" data-aos="fade-left" id="p11">JL. H.R. Mohammad No. 73B Lt. II<br>Surabaya 60226 - Indonesia<br>Tel. (031)734-3388<br>Fax. (031)734-2911<br><br>Informasi Umum : info@happypuppy.id</div><br>
        </div>
    </div>
</div>
<div class="back">
    <div class="container">
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'kontak')" id="defaultOpen">Kontak</button><br>
            <button class="tablinks" onclick="openCity(event, 'Request')">Request Lagu</button><br>
            <button class="tablinks" onclick="openCity(event, 'keluhan')">Keluhan</button>
        </div>
    
        <div id="kontak" class="tabcontent">
            <div class="container" id="form1" style="font-family: 'Poppins';">
                <form action="/action_page.php">
                    <label for="Nama">Nama</label>
                        <input type="text" id="Nama" name="Nama" placeholder="Nama">

                    <label for="MID">Member ID</label>
                        <input type="text" id="MID" name="lastname" placeholder="Member ID">

                    <label for="email">E-mail</label>
                        <input type="text" id="email" name="email" placeholder="Email">

                    <label for="telp">Telp.</label>
                        <input type="text" id="telp" name="telp" placeholder="Telp."></input>

                    <label for="telp">Pesan</label>
                        <input type="text" id="pesan" name="pesan" placeholder="Pesan"></input>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    
        <div id="Request" class="tabcontent">
            <div class="container" id="form1" style="font-family: 'Poppins';">
                <form action="/action_page.php">
                    <label for="Nama">Nama</label>
                        <input type="text" id="Nama" name="Nama" placeholder="Nama">
                    <label for="MID">Member ID</label>
                        <input type="text" id="MID" name="lastname" placeholder="Member ID">
                    <label for="email">E-mail</label>
                        <input type="text" id="email" name="email" placeholder="Email">
                    <label for="telp">Telp.</label>
                        <input type="text" id="telp" name="telp" placeholder="Telp."></input>
                    <label for="telp">Request Lagu</label>
                        <input type="text" id="req" name="req" placeholder="Request Lagu"></input>

                    <input type="submit" value="Submit">
                </form>
            </div> 
        </div>
    
        <div id="keluhan" class="tabcontent">
            <div class="container" id="form1" style="font-family: 'Poppins';">
                <form action="/action_page.php">
                    <label for="Nama">Nama</label>
                        <input type="text" id="Nama" name="Nama" placeholder="Nama">
                    <label for="MID">Member ID</label>
                        <input type="text" id="MID" name="lastname" placeholder="Member ID">
                    <label for="email">E-mail</label>
                        <input type="text" id="email" name="email" placeholder="Email">
                    <label for="telp">Telp.</label>
                        <input type="text" id="telp" name="telp" placeholder="Telp."></input>
                    <label for="telp">Outlet</label>
                        <input type="text" id="outlet" name="outlet" placeholder="Outlet"></input>
                    <label for="telp">Keluhan</label>
                        <input type="text" id="keluhan" name="keluhan" placeholder="Keluhan"></input>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
<div class="back2">
    <div class="container" id="back2con">
        <br><br>
        <div class="row" id="faq">
            <h3 style="font-family: 'Poppins';font-weight: bold;">FAQ</h3>
            <h3 style="font-family: 'Poppins';">(frequently Ask Question)</h3>
        </div><br><br>
        <button class="accordion" id="text-acc">Home Theatre buka untuk karaoke?</button>
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
        </div><br><br><br><br>
    </div>
</div>
@endsection

@section('js-internal')
<!-- add tag js in here -->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

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

