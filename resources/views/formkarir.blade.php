@extends('layout-komponen.master')

@section('title', 'Form Karir')
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

        #txt1 {
            color: white;
            position: absolute;
            bottom: 0;
            text-align: justify;
            margin: 7rem 1rem;
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
            overflow: hidden;
            width: auto;
            background-color: #85A4E1;
        }

        .container {
            font-family: 'Poppins';
        }

        #card1 {
            margin-top: 6px;
        }

        /* #myBtn {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        display: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    } */

        .foots {
            height: 50px;
            width: auto;
            background-color: #ffff;
        }

        .footser {
            height: auto;
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
                margin-left: auto;
                margin-right: auto;
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

    <form id="regForm" action="{{ route('career.store') }}" method="post" enctype="multipart/form-data">
        {{-- <form action="/action_page.php"> --}}
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
                <h5 style="margin-top: 10px;"><b>DATA PRIBADI</b></h5><br>
                <div class="card" id="card1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <br><br>
                                <input type="hidden" class="form-control" name="careerform_id" value="">
                                <div class="form-group">
                                    <label for=""></label>
                                    <input type="text" class="form-control" disabled="disabled" style="width: 80%" id=""
                                        name="" placeholder="{{ $jobs[0]->name_job }}">
                                </div><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" disabled="disabled" style="width: 80%" id=""
                                        name="" placeholder="{{ $jobs[0]->location }}">
                                </div><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="name" name="name"
                                        placeholder="Nama">
                                    <input type="hidden" class="form-control" style="width: 80%" id="jobvacancy_id"
                                        name="jobvacancy_id" value="{{ $jobs[0]->id }}">
                                </div><br>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" name="formal_education"
                                        id="formal_education" data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">Pendidikan Formal</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D3">D3</option>
                                        <option value="S1/D4">S1/D4</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div><br>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" name="place_birth" id="place_birth"
                                        data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">Tempat Lahir</option>
                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        <option value="Jawa Timur">Jawa Timur</option>
                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                        <option value="Bali">Bali</option>
                                    </select>
                                </div><br>
                                <div class="form-group">
                                    <label><b>Tanggal Lahir</b></label><br><br>
                                    <div class="input-group date" style="width: 50%;">
                                        <input type="date" id="date_birth" name="date_birth"
                                            class="form-control datetimepicker-input" />
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <input type="number" class="form-control" style="width: 25%" id="height" name="height"
                                        placeholder="Tinggi">
                                </div><br>
                                <div class="form-group">
                                    <input type="number" class="form-control" style="width: 25%" id="weight" name="weight"
                                        placeholder="Berat">
                                </div><br>
                            </div>

                            <div class="col-md-6">
                                <br><br>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" id="gender" name="gender"
                                        data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">Jenis Kelamin</option>
                                        <option value="0">Laki-Laki</option>
                                        <option value="1">Perempuan</option>
                                    </select>
                                </div><br>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" id="status_marital"
                                        name="status_marital" data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">Status Marital</option>
                                        <option value="0">Single</option>
                                        <option value="1">Menikah</option>
                                    </select>
                                </div><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 50%" id="phone" name="phone"
                                        placeholder="Telp">
                                </div><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 50%" id="mobile_phone"
                                        name="mobile_phone" placeholder="No. HP">
                                </div><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="email" name="email"
                                        placeholder="Email">
                                </div><br>
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" style="width: 80%" id="address" name="address"
                                        placeholder="Alamat"></textarea>
                                </div><br>
                                <div class="form-group">
                                    <input type="number" class="form-control" style="width: 80%" id="no_ktp" name="no_ktp"
                                        placeholder="No. KTP">
                                </div><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            @php $i=1 @endphp
            <br>
            <div class="container bom">
                <h5 style="margin-top: 10px;" id="subTittle"><b>PENGALAMAN KERJA</b></h5><br>
                <div class="card" id="card2">
                    <div class="container">
                        <div class="row fieldGroup">
                            <div class="col-md-6">
                                <br><br>
                                <h6><b>Pengalaman Kerja {{ $i }}</b></h6>
                                <br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" name="nama_perusahaan"
                                        placeholder="Nama Perusahaan">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" style="width: 50%" name="lama_kerja"
                                        placeholder="Lama Bekerja">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <br>
                                <br><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 70%" name="jabatan"
                                        placeholder="Jabatan">
                                </div>
                            </div>
                            <br><br>
                        </div>

                        <br>
                        <hr style="border-top: 1.5px dashed #519FF8; color:transparent;" />
                        <br>
                        <div class="fieldGroupCopy">
                            <div class="row">
                                <div class="col-md-6">
                                    <br>
                                    <h6><b>Pengalaman Kerja {{ $i + 1 }}</b></h6>
                                    <br>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id_je">
                                        <input type="text" class="form-control" style="width: 80%" name="company_name[]"
                                            placeholder="Nama Perusahaan">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" style="width: 50%" name="length_work[]"
                                            placeholder="Lama Bekerja">
                                    </div>
                                    <br>
                                </div>
                                <div class="col-md-6">
                                    <br><br><br>
                                    <div class="form-group" id="pengalaman">
                                        <input type="text" class="form-control" style="width: 70%" id="inPeng"
                                            name="position[]" placeholder="Jabatan">
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>

                        <hr style="border-top: 1.5px dashed #519FF8; color:transparent;" />

                        <div class="row">
                            <div class="col-md-6">
                                <a href="javascript:void(0)" class="addRow">+Tambahkan Pengalaman Kerja</a>
                                <br><br>
                                <br><br><br>
                                <div class="form-group">
                                    <input type="number" class="form-control" style="width: 80%" id="expected_salary"
                                        name="expected_salary" placeholder="Gaji yang Diharapkan">
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
                                    <input type="text" class="form-control" style="width: 80%" id="language"
                                        name="language" placeholder="Bahasa">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="instrument_music"
                                        name="instrument_music" placeholder="Alat Musik">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <br><br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="computer"
                                        name="computer" placeholder="Komputer">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="other_expertise"
                                        name="other_expertise" placeholder="Keahlian Lainnya">
                                </div>
                            </div>

                        </div>
                    </div> <br><br>


                    <div class="container" id="lampiran">
                        <h5 style="margin-top: 10px;"><b>LAMPIRAN</b></h5><br><br>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6><b>Upload CV</b></h6><br>
                                    <input type="file" id="cv" name="cv_mob">
                                    {{-- <input type="file" id="ijazah" name="ijazah"> --}}
                                    <!-- <input type="submit"> -->
                                    <br>
                                    <p>Max. 1MB(.JPG or .PNG)</p>
                                </div>
                                <br>
                                <div class="col-md-6">
                                    <h6><b>Ijazah</b></h6><br>
                                    <input type="file" id="ijazah" name="ijazah_mob">
                                    <br>
                                    <p>Max. 1MB(.JPG or .PNG)</p>
                                </div><br>
                            </div>

                            <br><br>
                            <h6><b>LinkedIn*</b></h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" style="width: 100%" id="linkedin_mob"
                                            name="linkedin_mob" placeholder="Copy Link"><br>
                                        <p>*jika ada</p>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <div> {!! htmlFormSnippet() !!} </div>
                            </div> --}}
                            <br><br><br>

                        </div>

                        <br><br>
                    </div>
                </div>
            </div>
        </div>

        <div class="back"></div>

        <div class="foots"></div>
        <br><br><br>

        <div class="footser">
            <div class="container">
                <h5 style="margin-top: 10px;"><b>LAMPIRAN</b></h5><br><br>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h6><b>Upload CV</b></h6><br>
                            {{-- <form action="/action_page.php"> --}}
                            <input type="file" id="cv" name="cv">
                            <!-- <input type="submit"> -->
                            {{-- </form> --}}
                            <br>
                            <p>Max. 1MB(.JPG or .PNG)</p>
                        </div>
                        <br>
                        <div class="col-lg-6">
                            <h6><b>Ijazah</b></h6><br>
                            {{-- <form action="/action_page.php"> --}}
                            <input type="file" id="ijazah" name="ijazah">
                            {{-- </form> --}}
                            <br>
                            <p>Max. 1MB(.JPG or .PNG)</p>
                        </div><br>
                    </div>

                    <br><br>
                    <h6><b>LinkedIn*</b></h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" style="width: 100%" id="linkedin" name="linkedin"
                                    placeholder="Copy Link Desk"><br>
                                <p>*jika ada</p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="web_captcha">
                        <div> {!! htmlFormSnippet() !!} </div>
                    </div>
                    {{-- <br><br><br> --}}

                </div>

                {{-- <br><br> --}}
            </div>
        </div>
    </form>
    <div class="container d-flex text-white py-5 align-items-end" id="buttoon">
        <button type="submit" id="myBtn" onclick="nextPrev(1)" class="btn btn-primary">SUBMIT</button>
    </div>
    <br>

    </form>
@endsection

@section('js-internal')
    <!-- add tag js in here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> --}}
    <script>
        $(document).ready(function() {
            // membatasi jumlah inputan
            var maxGroup = 5;
            var a = 3;
            //melakukan proses multiple input 
            $(".addRow").click(function() {
                if ($('body').find('.fieldGroup').length < maxGroup) {
                    var fieldHTML = '<div class="row">' +
                        '<div class="col-md-6">' + $(".fieldGroupCopy .col-md-6").html() + '</div>' +
                        '<div class="col-md-6">' + '<br><br><br>' + $(".col-md-6 #pengalaman").html() +
                        '</div>' + '</div>' +
                        "<hr style='border-top: 1.5px dashed #519FF8; color:transparent;'>";
                    $('body').find('.fieldGroupCopy:last').before(fieldHTML);
                    $('body').find('.fieldGroupCopy:last').find('h6 b').text('Pengalaman Kerja ' + (a++));
                    //tambah height back 250 px saat ditambahkan
                    $('.back').css('height', $('.back').height() + 250);
                    //auto increment on h6 pengalaman kerja

                } else {
                    alert('Maximum ' + maxGroup + ' groups are allowed.');
                }
            });
        });
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
            // if ($(window).width() > 600) {
            //     document.getElementById("myBtn").innerHTML = "Submit";
            // }
            if (n == (x.length - 1) || $(window).width() > 600) {
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
            if ($(window).width() > 600) {
                document.getElementById("regForm").submit();
                return false;
            }
            if ($(window).width() < 500) {
                $('.back').css('height', '1200px');
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
        if ($(window).width() < 600) {
            //put web_captcha to last_form_section
            $('#web_captcha').appendTo('#lampiran');
            $('#linkedin').hide();

        }
    </script>
    {{-- <script>
        //if there is null form, show alert
        $(document).ready(function() {
        $('#myBtn').click(function() {
                if ($('#name').val() == '' || $('#formal_education').val() == '' || $('#place_birth').val() == '' ||
                    $('#date_birth').val() == '' || $('#height').val() == '' || $('#weight').val() == '' ||
                    $('#gender').val() == '' || $('#status_marital').val() == '' || $('#status_marital').val() == '' ||
                    $('#mobile_phone').val() == '' || $('#email').val() == '' || $('#address').val() == '' ||
                    $('#no_ktp').val() == '' || $('#language').val() == '' ){
            alert("Please fill all form");
        } else {
            $('#regForm').submit();
        }
        })
        })
    </script> --}}
@endsection
