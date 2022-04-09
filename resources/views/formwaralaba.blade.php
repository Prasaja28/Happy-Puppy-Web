@extends('layout-komponen.master')

@section('title', 'Form Waralaba')
<!-- name title -->

@section('css-internal')
{!! ReCaptcha::htmlScriptTagJsApi() !!}
    <!-- Add tag css in here -->
    <style>
        .header {
            min-height: 50vh;
            background: no-repeat center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position: right;
            background-image: url('/img/formwaralaba.png')
        }

        #last_form_section {
            display: none;
        }

        #txt1 {
            color: white;
            position: absolute;
            bottom: 0;
            text-align: justify;
            margin: 0;
            font-family: 'Poppins';
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

        #p1 {
            font-size: 30px;
            font-family: 'Poppins';
            font-weight: bold;
        }

        #p2 {
            font-size: 15px;
            font-family: 'Poppins';
        }

        .back {
            height: 1300px;
            width: auto;
            background-color: #85A4E1;
        }

        .container {
            font-family: 'Poppins';
        }

        #card1 {
            margin-top: 6px;
        }

        .foots {
            height: 10rem;
            width: auto;
            background-color: #ffff;
        }

        .foots2 {
            height: auto;
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

        .form-control {
            border: none;
            border-bottom: 1px solid #000;
            background: none;
            padding: 5px;
            width: 50%;
            transition: .2s;
        }

        #subTittle {
            color: white;
            margin-top: 10px;
        }

        #bakat {
            margin-top: -85px;
        }

        #footer_mobile {
            display: none;
        }

        .mob {
            width: 10%;
        }

        @media (max-width: 600px) {

            .header {
                min-height: 50vh;
                background: no-repeat center scroll;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-position: right;
                background-image: url('/img/formwaralaba.png')
            }

            .containerr {
                width: 100px;
            }

            .mob {
                width: 35%;
            }

            #txt1 {
                color: white;
                position: absolute;
                bottom: 0;
                text-align: justify;
                margin: auto;
                font-size: 30px;
                min-height: 480px;
            }

            .back-grad {
                height: 500px;
                width: auto;
                background: linear-gradient(to bottom, #FFFFFF 0%, #FFFFFF 50%, #85A4E1 50%, #85A4E1 100%);
            }

            #p1 {
                font-size: 25px;
                font-family: 'Poppins';
                font-weight: bold;
            }

            #p2 {
                font-size: 13px;
                font-family: 'Poppins';
            }

            .back {
                height: 30rem;
                width: auto;
                background-color: #85A4E1;
            }

            #card1 {
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

            #last_form_section {
                display: block;
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
            }

            #buttoon {
                margin-top: 50px;
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

            #last_waralaba {
                margin-top: -50px;
            }
        }

    </style>
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('konten')
    <!-- add konten in here -->
    <div class="header p-5">
        <div id="txt1" class="containerr">
            <p>Form Pendaftaran</p>
            <p style="font-weight: bold;">WARALABA</p>
        </div>
    </div><br>
    
    <form id="regForm" action="{{ route('waralaba.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
            <a id="prevBtn" onclick="nextPrev(-1)" style="color: #519FF8">Kembali</a>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="back-grad">
            <div class="container bom">
                <h2 style="margin-top: 10px; font-family: 'Poppins';">DATA PRIBADI</h2><br>
                <div class="card" id="card1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="nama" name="name"
                                        placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" name="gender"
                                        data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">Jenis Kelamin</option>
                                        <option value="0">Laki-Laki</option>
                                        <option value="1">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" style="width: 50%" name="age"
                                        placeholder="Usia">
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" name="last_education"
                                        data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">Pendidikan Terakhir</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D3">D3</option>
                                        <option value="S1/D4">S1/D4</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" name="marital"
                                        data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">Status</option>
                                        <option value="0">Menikah</option>
                                        <option value="1">Belum Menikah</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" name="official_address"
                                        placeholder="Alamat">
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" name="city"
                                        data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">Kota</option>
                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                        <option value="Tanggerang">Tanggerang</option>
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Bali">Bali</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" name="province"
                                        data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">Provinsi</option>
                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        <option value="Jawa timur">Jawa Timur</option>
                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                        <option value="Bali">Bali</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 50%" name="home_phone"
                                        placeholder="Telp. rumah">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 50%" name="official_phone"
                                        placeholder="Telp. kantor">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 50%" name="mobile_phone"
                                        placeholder="No. Hp">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" name="email" id="email"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="email_confirm"
                                        name="email_confirm" placeholder="Konfirmasi email">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <div class="container bom">
                <h2 style="font-family: 'Poppins';" id="subTittle">PEKERJAAN</h2><br>
                <div class="card" id="card2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" name="job" id="job"
                                        placeholder="Pekerjaan anda">
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" name="bussiness_field"
                                        data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">Bidang Usaha</option>
                                        <option value="Bidang Pertanian">Bidang Pertanian</option>
                                        <option value="Bidang Manufaktur">Bidang Manufaktur</option>
                                        <option value="Bidang Konstruksi">Bidang Konstruksi</option>
                                        <option value="Bidang Komunikasi">Bidang Komunikasi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 50%" id="other" name="other"
                                        placeholder="Lain-lain">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="company_name"
                                        name="company_name" placeholder="Nama Perusahaan">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="postion_company"
                                        name="postion_company" placeholder="Jabatan anda">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 50%" id="other_2" name="other_2"
                                        placeholder="Lain-lain">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="address_2"
                                        name="address_2" placeholder="Alamat">
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" name="city_2" id="city_2"
                                        data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">Kota</option>
                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                        <option value="Tanggerang">Tanggerang</option>
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Bali">Bali</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" name="province_2" id="province_2"
                                        data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">Provinsi</option>
                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        <option value="Jawa Timur">Jawa Timur</option>
                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                        <option value="Bali">Bali</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <div class="container bom" id="last_waralaba">
                <h2 style="font-family: 'Poppins';" id="subTittle">TEMPAT DIMINATI UNTUK
                    WARALABA HAPPY PUPPY</h2><br>
                <div class="card" id="card3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" name="status_penguasaan"
                                        id="status_penguasaan" data-dropdown-css-class="select2-danger" style="width: 80%;">
                                        <option selected="selected">Status Penguasaan Tempat</option>
                                        <option value="Lahan Pribadi">Lahan Pribadi</option>
                                        <option value="Sewa">Sewa</option>
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="address_3"
                                        name="address_3" placeholder="Alamat">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 50%" id="city_3" name="city_3"
                                        placeholder="Kota">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 50%" id="province_3"
                                        name="province_3" placeholder="Provinsi">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 50%" id="known_as_area"
                                        name="known_as_area" placeholder="Dikenal sebagai Daerah">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 50%" id="other_3" name="other_3"
                                        placeholder="Lain-lain">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" style="width: 50%" id="building_area"
                                        name="building_area" placeholder="Luas bangunan                          M">
                                </div>
                                <br><br>
                                <p style="font-weight: bold;">Usaha Tetangga Kiri:</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="left_business_name"
                                        name="left_business_name" placeholder="Nama Usaha">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="left_business_field"
                                        name="left_business_field" placeholder="Bidang Usaha">
                                </div>
                                <br><br>
                                <p style="font-weight: bold;">Usaha Tetangga Kanan:</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="right_business_name"
                                        name="right_business_name" placeholder="Nama Usaha">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="right_business_field"
                                        name="right_business_field" placeholder="Bidang Usaha">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <br>
                                <p style="font-weight: bold;">Usaha Tetangga Belakang:</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="behind_business_name"
                                        name="behind_business_name" placeholder="Nama Usaha">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="behind_business_field"
                                        name="behind_business_field" placeholder="Bidang Usaha">
                                </div>
                                <br><br>
                                <p style="font-weight: bold;">Usaha Tetangga Depan:</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="front_business_name"
                                        name="front_business_name" placeholder="Nama Usaha">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="front_business_field"
                                        name="front_business_field" placeholder="Bidang Usaha">
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <input type="number" class="form-control" style="width: 50%" id="front_road_width"
                                        name="front_road_width" placeholder="Lebar Jalan Depan">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 50%" id="front_road_traffic"
                                        name="front_road_traffic" placeholder="Lalu - Lintas Jalan Depan">
                                    <input type="hidden" name="status" id="status" value="0">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="background-color: #221E40;width: 100%;padding: 1rem;"
                    id="last_form_section">
                    <p style="color: white;" id="lampiran">Jika anda berminat serius, memenuhi syarat,
                        serta
                        mempunyai
                        kemampuan<br> finansial untuk membiayai investasi, silahkan mengisi formulir
                        peminat
                        waralaba<br> yang
                        tersedia secara lengkap. Kami hanya menerima dan memproses formulir yang<br>
                        diisi
                        secara lengkap. untuk
                        mengisi formulir pendaftaran waralaba.</p>
                    <div class="form-group">
                        <select class="form-control select2 select2-danger mob" data-dropdown-css-class="select2-danger"
                            style="background-color: #221E40;color:white;" name="confirm_completenes_mob"
                            id="confirm_completenes">
                            <option value="" selected disabled>Ya/Tidak</option>
                            <option value="0">Ya</option>
                            <option value="1">Tidak</option>
                            </option>
                        </select>
                    </div>
                    <br><br>
                    <p style="color: white;">Sebelum anda mengirim pendaftaran waralaba ini, setujukah
                        anda
                        bahwa :<br><br> Anda
                        dan keluarga langsung atau Pemilik dan Pengurus Perusahaan yang anda<br> wakili,
                        tidak
                        memiliki dan/atau
                        menjadi Pengurus usaha Karaoke Keluarga/Rumah<br> Bernyanyi Keluarga lainnya,
                        baik
                        sekarang ataupun pada
                        saat pendaftaran<br> waralaba ini diterima</p>
                    <div class="form-group">
                        <select class="form-control select2 select2-danger mob" data-dropdown-css-class="select2-danger"
                            style=" background-color: #221E40; color:white;" name="confirm_register_mob"
                            id="confirm_register">
                            <option value="" selected disabled>Ya/Tidak</option>
                            <option value="0">Ya</option>
                            <option value="1">Tidak</option>
                            </option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                    </div>
                </div>
                <br><br>
            </div>
        </div>
        </div>
        <div class="back"></div>
        <div class="foots"></div>
        <div class="foots2">
            <div class="container">
                <br><br>
                <p style="color: white;" id="lampiran">Jika anda berminat serius, memenuhi syarat, serta mempunyai
                    kemampuan<br> finansial untuk membiayai investasi, silahkan mengisi formulir peminat waralaba<br> yang
                    tersedia secara lengkap. Kami hanya menerima dan memproses formulir yang<br> diisi secara lengkap. untuk
                    mengisi formulir pendaftaran waralaba.</p>
                <div class="form-group">
                    <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                        style="width: 10%;background-color: #221E40;color:white;" name="confirm_completenes"
                        id="confirm_completenes">
                        <option value="" selected disabled>Ya/Tidak</option>
                        <option value="0">Ya</option>
                        <option value="1">Tidak</option>
                        </option>
                    </select>
                </div>
                <br><br>
                <p style="color: white;">Sebelum anda mengirim pendaftaran waralaba ini, setujukah anda bahwa :<br><br> Anda
                    dan keluarga langsung atau Pemilik dan Pengurus Perusahaan yang anda<br> wakili, tidak memiliki dan/atau
                    menjadi Pengurus usaha Karaoke Keluarga/Rumah<br> Bernyanyi Keluarga lainnya, baik sekarang ataupun pada
                    saat pendaftaran<br> waralaba ini diterima</p>
                <div class="form-group">
                    <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                        style="width: 10%; background-color: #221E40; color:white;" name="confirm_register"
                        id="confirm_register">
                        <option value="" selected disabled>Ya/Tidak</option>
                        <option value="0">Ya</option>
                        <option value="1">Tidak</option>
                        </option>
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                </div>
                <br><br>
            </div>
        </div>
        <br>
        <div class="col-12" id="buttoon">
            <a style="font-weight: bold; color:white;" id="myBtn" onclick="nextPrev(1)" class="btn btn-primary">Next
                Step</a>
        </div>
        <br>
    </form>
@endsection

@section('js-internal')
    <!-- add tag js in here -->

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
            if ($(window).width() > 600) {
                document.getElementById("myBtn").innerHTML = "Submit";
            }
            //set .back height on last tab to 1200px on window width < 600px
            if ($(window).width() < 600) {
                if (n == (x.length - 1)) {
                    document.getElementsByClassName("back")[0].style.height = "118rem";
                    document.getElementsByClassName("back-grad")[0].style.height = "610px";
                } else {
                    document.getElementsByClassName("back")[0].style.height = "30rem";
                }
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
            if ($(window).width() > 600) {
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
    <script>
        //if email_confirm != email then return warning
        $('#email_confirm').on('keyup', function() {
            var email = $('#email').val();
            var email_confirm = $('#email_confirm').val();
            if (email != email_confirm) {
                $('#email_confirm').css('border-color', 'red');
                $('#email_confirm').css('border-width', '1px');
                $('#email_confirm').css('border-style', 'solid');
                $('#email_confirm').css('border-radius', '5px');
            } else {
                $('#email_confirm').css('border-color', '#ced4da');
                $('#email_confirm').css('border-width', '1px');
                $('#email_confirm').css('border-style', 'solid');
                $('#email_confirm').css('border-radius', '5px');
            }
        });
    </script>
@endsection
