@extends('layout-komponen.master')

@section('title', 'Form Karir')
<!-- name title -->

@section('css-internal')
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

        #txt1 {
            color: white;
            position: absolute;
            bottom: 0;
            text-align: justify;
            margin: 105px 10px;
            font-size: 40px;
            min-height: 480px;
        }

        hr {
            width: 99%;
        }

        .back-grad {
            height: 550px;
            width: auto;
            background: linear-gradient(to bottom, #FFFFFF 0%, #FFFFFF 50%, #85A4E1 50%, #85A4E1 100%);
        }

        #p1 {
            font-size: 30px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }

        #p2 {
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .back {
            height: 1450px;
            width: auto;
            background-color: #85A4E1;
        }

        .container {
            font-family: 'Poppins';
        }

        #card1 {
            margin-top: 6px;
        }

        #myBtn {
            display: none;
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

        .form-control {
            border: none;
            border-bottom: 1px solid #000;
            background: none;
            padding: 5px;
            width: 50%;
            transition: .2s;
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

        #subTittle {
            color: white;
        }

        #lampiran {
            display: none;
        }

        @media (max-width: 600px) {
            #txt1 {
                color: white;
                position: absolute;
                bottom: 0;
                text-align: justify;
                margin: 0;
                font-size: 35px;
                min-height: 480px;
                margin-left: -50px;
            }

            .back-grad {
                height: 245px;
                width: auto;
                background: linear-gradient(to bottom, #FFFFFF 0%, #FFFFFF 50%, #85A4E1 50%, #85A4E1 100%);
            }

            #p1 {
                font-size: 25px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
            }

            #p2 {
                font-size: 13px;
                font-family: Arial, Helvetica, sans-serif;
            }

            .back {
                height: 1200px;
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

            #Btnsubmit {
                display: none;
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
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
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
    <form id="regForm" action="" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
            <a id="prevBtn" onclick="nextPrev(-1)" style="color: #519FF8">Kembali</a>
        </div>
        <div class="back-grad">
            <div class="container bom">
                <h5 style="margin-top: 10px;"><b>DATA PRIBADI</b></h5><br>
                <div class="card" id="card1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <br><br>

                                <div class="form-group">
                                    <input type="text" class="form-control" disabled="disabled" style="width: 80%"
                                        id="formGroupExampleInput" placeholder="Waiter">
                                </div><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" disabled="disabled" style="width: 80%"
                                        id="formGroupExampleInput" placeholder="Jakarta">
                                </div><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="formGroupExampleInput"
                                        placeholder="Nama">
                                </div><br>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger"
                                        data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">Pendidikan Formal</option>
                                        <option>SMA</option>
                                        <option>D3</option>
                                        <option>S1/D4</option>
                                        <option>S2</option>
                                        <option>S3</option>
                                    </select>
                                </div><br>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger"
                                        data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">Tempat Lahir</option>
                                        <option>DKI Jakarta</option>
                                        <option>Jawa Barat</option>
                                        </option>
                                        <option>Jawa Timur</option>
                                        <option>Jawa Tengah</option>
                                        <option>Bali</option>
                                    </select>
                                </div><br>
                                <div class="form-group">
                                    <label><b>Tanggal Lahir</b></label><br><br>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest"
                                        style="width: 50%;">
                                        <input type="date" class="form-control datetimepicker-input"
                                            data-target="#reservationdate" />
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 25%" id="formGroupExampleInput"
                                        placeholder="Tinggi">
                                </div><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 25%" id="formGroupExampleInput"
                                        placeholder="Berat">
                                </div><br>
                            </div>

                            <div class="col-md-6">
                                <br><br>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger"
                                        data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">Jenis Kelamin</option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div><br>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger"
                                        data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">Status Marital</option>
                                        <option>Single</option>
                                        <option>Menikah</option>
                                    </select>
                                </div><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 50%" id="formGroupExampleInput"
                                        placeholder="Telp">
                                </div><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 50%" id="formGroupExampleInput"
                                        placeholder="No. HP">
                                </div><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="formGroupExampleInput"
                                        placeholder="Email">
                                </div><br>
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" style="width: 80%"
                                        placeholder="Alamat"></textarea>
                                </div><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="formGroupExampleInput"
                                        placeholder="No. KTP">
                                </div><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <br>
            <div class="container bom">
                <h5 style="margin-top: 10px;" id="subTittle"><b>PENGALAMAN KERJA</b></h5><br>
                <div class="card" id="card2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <br><br>
                                <h6><b>Pengalaman Kerja 1</b></h6>
                                <br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="formGroupExampleInput"
                                        placeholder="Nama Perusahaan">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 50%" id="formGroupExampleInput"
                                        placeholder="Lama Bekerja">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <br>
                                <br><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 70%" id="formGroupExampleInput"
                                        placeholder="Jabatan">
                                </div>
                            </div>
                            <br><br>
                        </div>

                        <br>
                        <hr style="border-top: 1.5px dashed #519FF8; color:transparent;" />
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <h6><b>Pengalaman Kerja 2</b></h6>
                                <br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="formGroupExampleInput"
                                        placeholder="Nama Perusahaan">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 50%" id="formGroupExampleInput"
                                        placeholder="Lama Bekerja">
                                </div>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <br><br><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 70%" id="formGroupExampleInput"
                                        placeholder="Jabatan">
                                </div>
                            </div>
                            <br>
                        </div>

                        <hr style="border-top: 1.5px dashed #519FF8; color:transparent;" />

                        <div class="row">
                            <div class="col-md-6">
                                <a href="#">+Tambahkan Pengalaman Kerja</a>
                                <br><br>
                                <br><br><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="formGroupExampleInput"
                                        placeholder="Gaji yang Diharapkan">
                                </div>
                                <br><br><br>
                            </div>
                            <br>
                        </div>

                    </div>
                </div>
            </div>
            <br><br>

            <div class="container bom" id="bakat">
                <h5 style="margin-top: 10px;" id="subTittle"><b>BAKAT</b></h5><br>
                <div class="card" id="card3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <br><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="formGroupExampleInput"
                                        placeholder="Bahasa">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="formGroupExampleInput"
                                        placeholder="Alat Musik">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <br><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="formGroupExampleInput"
                                        placeholder="Komputer">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="formGroupExampleInput"
                                        placeholder="Keahlian Lainnya">
                                </div>
                            </div>

                        </div>
                    </div> <br><br>
                    <div class="container" id="lampiran">
                        <h5 style="margin-top: 10px;"><b>LAMPIRAN</b></h5><br><br>

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6><b>Upload CV</b></h6><br>
                                    <form action="/action_page.php">
                                        <input type="file" id="filecv" name="filecv">
                                        <!-- <input type="submit"> -->
                                    </form>
                                    <br>
                                    <p>Max. 1MB(.JPG or .PNG)</p>
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
                                        <input type="text" class="form-control" style="width: 100%"
                                            id="formGroupExampleInput" placeholder="Copy Link"><br>
                                        <p>*jika ada</p>
                                    </div>
                                </div>
                            </div>
                            <br><button type="submit" id="Btnsubmit" class="btn"><b>SUBMIT</b></button><br><br>

                        </div>

                        <br><br>
                    </div>
                </div>
            </div>
        </div>

        <div class="back"></div>

        <div class="foots"></div>
        <br><br><br><br><br>

        <div class="footser bom1">
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
                            <br>
                            <p>Max. 1MB(.JPG or .PNG)</p>
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
                                <input type="text" class="form-control" style="width: 100%" id="formGroupExampleInput"
                                    placeholder="Copy Link"><br>
                                <p>*jika ada</p>
                            </div>
                        </div>
                    </div>
                    <br><button type="submit" id="Btnsubmit" class="btn"><b>SUBMIT</b></button><br><br>

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
