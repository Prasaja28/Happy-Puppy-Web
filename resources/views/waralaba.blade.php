@extends('layout-komponen.master')

@section('title', 'Waralaba')
<!-- name title -->

@section('css-internal')

<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/waralaba.css') }}">


@endsection

@section('konten')
    <!-- add konten in here -->
    <div class="header p-5" style="background-image: url('{{ $settings['banner_waralaba'] }}')">
        <div id="txt1" class="container">
            <p>{{ __('waralaba.title1') }}</p>
        </div>
    </div>
    <div class="back-grad">
        <div class="center">
            <br>
            <p id="p1" onclick="openCity(event, 'kontak')">{{ __('waralaba.title2') }}</p><br>
            <p id="p2">{{ __('waralaba.desc1') }}</p><br>
        </div>
    </div>
    <div class="back">
        <div class="container">
            <div id="accordion">
                <div class="card border-0">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btnss collapsed tablinks" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                {{ __('waralaba.qna1') }}
                            </button>
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
                            <button class="btnss collapsed tablinks" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                {{ __('waralaba.qna2') }}
                            </button>
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
                            <button class="btnss collapsed tablinks" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                {{ __('waralaba.qna3') }}
                            </button>
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
                            <button class="btnss collapsed tablinks" data-toggle="collapse" data-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                {{ __('waralaba.qna4') }}
                            </button>
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
                            <button class="btnss collapsed tablinks" data-toggle="collapse" data-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                {{ __('waralaba.qna5') }}
                            </button>
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
                            <button class="btnss collapsed tablinks" data-toggle="collapse" data-target="#collapseSix"
                                aria-expanded="false" aria-controls="collapseSix">
                                {{ __('waralaba.qna6') }}
                            </button>
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
            <p>{{ __('waralaba.desc2') }}</p><br><br>
            <form onclick="window.location.href='/form-waralaba'">
                <button type="button" class="btn">{{ __('waralaba.button') }}</button>
            </form>
        </div>
    </div>
@endsection

@section('js-internal')
    <!-- add tag js in here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    {{-- <script>
        function openCity(evt, cityName) {
            var i, collapse, btnss;
            collapse = document.getElementsByClassName("collapse");
            for (i = 0; i < collapse.length; i++) {
                collapse[i].style.display = "none";
            }
            btnss = document.getElementsByClassName("btnss");
            for (i = 0; i < btnss.length; i++) {
                btnss[i].className = btnss[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script> --}}

    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("accordion");
        var btns = header.getElementsByClassName("btnss");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
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

@endsection
