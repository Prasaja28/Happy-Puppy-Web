@extends('layout-komponen.master')

@section('title', 'Waralaba')
<!-- name title -->

@section('css-internal')
    <!-- Add tag css in here -->
    <style>
        .header {
            position: relative;
            min-height: 50vh;
            background: no-repeat center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position: rightl;
            background-image: url('/img/waralaba.png')
        }

        #txt1 {
            color: white;
            position: absolute;
            bottom: 0;
            text-align: justify;
            margin: 0;
            font-size: 40px;
            font-weight: bold;
            font-family: 'Poppins';
        }

        .back-grad {
            width: auto;
            background: linear-gradient(to bottom, #FFFFFF 0%, #FFFFFF 50%, #85A4E1 50%, #85A4E1 100%);
        }

        .center {
            margin: auto;
            /* margin-left: 145px; */
            margin-top: 49px;
            width: 80%;
            padding: 5%;
            color: white;
            background-color: #221E40;
        }

        #p1 {
            font-size: 35px;
            font-weight: bold;
            font-family: 'Poppins';
        }

        #p2 {
            font-size: 20px;
            line-height: 2.5rem;
            font-family: 'Poppins';
        }

        .back {
            width: auto;
            background-color: #85A4E1;
            font-family: 'Poppins';
            padding: 5%;
        }

        #accordion .card {
            background-color: #85A4E1;
        }

        .card-header {
            margin-top: 50px;
            background-color: #85A4E1;
            border-bottom: none;
        }

        .card-header .btnss {
            color: white;
            font-size: 20px;
            /* background-color: #85A4E1; */
            font-family: 'Poppins';
            font-weight: bold;
            border-bottom: none;
        }

        .card-body {
            background-color: white;
            border-bottom: none;
            border-radius: 1em;
            margin-left: 20px;
        }

        .collapsed,
        .accordion {
            background-color: #85A4E1;
            color: white;
        }

        .btnss.orange {
            /* background-color: #221E40; */
            background-image: url('/img/Rectangle.png');
        }

        #text-acc {
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            font-weight: bold;
            font-family: 'Poppins';
        }

        #txt-foot {
            font-size: 18px;
            color: white;
            font-family: 'Poppins';
        }

        #txt-foot .btn {
            color: white;
            background-color: #221E40;
        }

        @media (max-width: 600px) {
            .header {
                position: relative;
                min-height: 20vh;
                background: no-repeat center scroll;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-position: rightl;
                background-image: url('/img/waralaba.png')
            }

            #txt1 {
                color: white;
                margin: 0;
                font-size: 20px;
            }

            .back-grad {
                width: auto;
                background: linear-gradient(to bottom, #FFFFFF 0%, #FFFFFF 50%, #85A4E1 50%, #85A4E1 100%);
            }

            .center {
                margin: auto;
                margin-top: 50px;
                width: 85%;
                padding: 5%;
                color: white;
                background-color: #221E40;
            }

            .card-header {
                margin-top: -10px;
                background-color: #85A4E1;
                border-bottom: none;
                margin-left: -24px;
            }

            .card-header .btnss {
                color: white;
                background-color: #85A4E1;
                font-family: 'Poppins';
                font-weight: bold;
                border-bottom: none;
                font-size: 9px;
                margin-top: 10px;
            }

            .card-body {
                background-color: white;
                border-bottom: none;
                border-radius: 1em;
                font-size: 10px;
                margin-left: 8px;
            }

            #p1 {
                font-size: 20px;
                font-family: 'Poppins';
                font-weight: bold;
            }

            #p2 {
                font-size: 10px;
                font-family: 'Poppins';
                line-height: normal;
            }

            .back {
                width: auto;
                background-color: #85A4E1;
                padding: 10%;
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

            .active,
            .accordion:hover {
                background-color: #ccc;
            }

            .panel {
                padding: 0 18px;
                display: none;
                background-color: white;
                overflow: hidden;
            }

            #text-acc {
                font-size: 15px;
                font-family: Arial, Helvetica, sans-serif;
                color: white;
                font-weight: bold;
            }

            #txt-foot {
                font-size: 10px;
                font-family: Arial, Helvetica, sans-serif;
                color: white;
                margin-top: 50px;
            }

            #txt-foot .btn {
                color: white;
                background-color: #221E40;
                font-size: 13px;
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
            <p>WARALABA</p>
        </div>
    </div>
    <div class="back-grad">
        <div class="center">
            <br>
            <p id="p1">Kenapa Memilih Usaha Karaoke (Bernyanyi)?</p><br>
            <p id="p2">Karena bernyanyi tidak mengenal musim sehingga kita tidak perlu kuatir suatu<br> waktu manusia bosan
                bernyanyi. Bernyanyi adalah hiburan pertama yang<br> dianugerahkan oleh Tuhan YME untuk manusia dan akan
                terus diminati manusia<br> sepanjang peradabannya.</p><br>
        </div>
    </div>
    <div class="back">
        <div class="container">
            <div id="accordion">
                <div class="card border-0">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <div class="btnss" id="judul" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Home Theatre buka untuk karaoke?
                                <!-- <img src="img/home-theatre.png" alt=""> -->
                            </div>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <div class="btnss" id="judul2" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Karaoke keluarga, bisnis hiburan tanpa masalah
                            </div>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <div class="btnss collapsed" id="judul3" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Kenapa memilih waralaba Happy Puppy?
                            </div>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <div class="btnss collapsed" id="judul4" data-toggle="collapse" data-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                Hal yang perlu diperhatikan dalam waralaba ini
                            </div>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <div class="btnss collapsed" id="judul5" data-toggle="collapse" data-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                Berapa investasi yang dibutuhkan untuk waralaba ini?
                            </div>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header" id="headingSix">
                        <h5 class="mb-0">
                            <div class="btnss collapsed" id="judul6" data-toggle="collapse" data-target="#collapseSix"
                                aria-expanded="false" aria-controls="collapseSix">
                                Daftar kota tertutup untuk waralaba
                            </div>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                            occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="txt-foot">
            <p>Jika anda berminat serius, memenuhi syarat, serta mempunyai kemampuan finansial untuk membiayai investasi,
                silahkan mengisi formulir peminat waralaba yang tersedia secara lengkap. Kami hanya menerima dan memproses
                formulir yang diisi secara lengkap, untuk mengisi formulir pendaftaran waralaba.</p><br><br>
            <form onclick="window.location.href='/form-waralaba'">
                <button type="button" class="btn">Klik Disini</button>
            </form>
        </div>
    </div>
@endsection

@section('js-internal')
    <!-- add tag js in here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    {{-- <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("accordion");
        header.classList.remove("className");
        var btns = header.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script> --}}

    <script>
        var accItem = document.getElementsByClassName('accordionItem');
        var accHD = document.getElementsByClassName('accordionItemHeading');
        for (i = 0; i < accHD.length; i++) {
            accHD[i].addEventListener('click', toggleItem, false);
        }

        function toggleItem() {
            var itemClass = this.parentNode.className;
            for (i = 0; i < accItem.length; i++) {
                accItem[i].className = 'accordionItem close';
            }
            if (itemClass == 'accordionItem close') {
                this.parentNode.className = 'accordionItem open';
            }
        }
    </script>

    <script>
        jQuery('#judul').click(function() {
            $(this).toggleClass('orange');
        });
        jQuery('#judul2').click(function() {
            $(this).toggleClass('orange');
        });
        jQuery('#judul3').click(function() {
            $(this).toggleClass('orange');
        });
        jQuery('#judul4').click(function() {
            $(this).toggleClass('orange');
        });
        jQuery('#judul5').click(function() {
            $(this).toggleClass('orange');
        });
        jQuery('#judul6').click(function() {
            $(this).toggleClass('orange');
        });
    </script>

@endsection
