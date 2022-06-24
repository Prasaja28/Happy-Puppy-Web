@extends('layout-komponen.master')

@section('title', 'Form Waralaba')
<!-- name title -->

@section('css-internal')
    {!! ReCaptcha::htmlScriptTagJsApi() !!}
    <!-- Add tag css in here -->
    <style>
        .header {
            position: relative;
            min-height: 30vh;
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
            padding-left: 5%;
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

        .wmob {
            width: 50%;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
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
                font-size: 20px;
                padding-left: 1%;
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

            .wmob {
                width: 80%;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('konten')
    <center>
        @if (session()->has('message'))
            <div class="alert alert-{{ session('alert') }} alert-has-icon  alert-dismissible fade show mx-1 justify-content-center"
                role="alert">
                <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                <div class="alert-body">
                    <button class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                        <span class="alert-title">{{ session('title') }}</span>
                    </button>
                    <span class="alert-text">{{ session('message') }}</span>
                </div>
            </div>
        @endif
    </center>
    <!-- add konten in here -->
    <div class="header p-5" style="background-image: url('{{ $settings['banner_form_waralaba'] }}')">
        <div id="txt1" class="containerr">
            <p>{{ __('waralaba-form.title1') }}</p>
            <p style="font-weight: bold;">{{ __('waralaba-form.title2') }}</p>
        </div>
    </div><br>

    <form id="regForm" action="{{ route('waralaba.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-12">
            <a id="prevBtn" onclick="nextPrev(-1)" style="color: #519FF8">{{ __('waralaba-form.back') }}</a>
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
                <h2 style="margin-top: 10px; font-family: 'Poppins';">{{ __('waralaba-form.title3') }}</h2><br>
                <div class="card" id="card1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="nama"
                                        name="name" value="{{ old('name') }}"
                                        placeholder="{{ __('karir-detail.placeholder_name') }}">
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger wmob" name="gender"
                                    value="{{ old('gender') }}" data-dropdown-css-class="select2-danger">
                                        <option selected="selected">{{ __('karir-detail.placeholder_gender') }}</option>
                                        @if (old('gender') == 0)
                                            <option selected value="0">{{ __('karir-detail.placeholder_male') }}
                                            </option>
                                            <option value="1">{{ __('karir-detail.placeholder_female') }}</option>
                                        @elseif(old('gender') == 1)
                                            <option value="0">{{ __('karir-detail.placeholder_male') }}</option>
                                            <option selected value="1">{{ __('karir-detail.placeholder_female') }}
                                            </option>
                                        @else
                                            <option value="0">{{ __('karir-detail.placeholder_male') }}</option>
                                            <option value="1">{{ __('karir-detail.placeholder_female') }}</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control wmob" name="age"
                                        value="{{ old('age') }}"
                                        placeholder="{{ __('waralaba-form.placeholder_age') }}" min="1">
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger wmob" value="{{ old('last_education') }}" name="last_education"
                                        data-dropdown-css-class="select2-danger">
                                        <option selected="selected">{{ __('waralaba-form.placeholder_education') }}
                                        </option>
                                        @if (old('last_education') == 'SMA')
                                            <option value="SMA" selected>SMA</option>
                                            <option value="D3">D3</option>
                                            <option value="S1/D4">S1/D4</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        @elseif(old('last_education') == 'D3')
                                            <option value="SMA">SMA</option>
                                            <option value="D3" selected>D3</option>
                                            <option value="S1/D4">S1/D4</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        @elseif(old('last_education') == 'S1/D4')
                                            <option value="SMA">SMA</option>
                                            <option value="D3">D3</option>
                                            <option value="S1/D4" selected>S1/D4</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        @elseif(old('last_education') == 'S2')
                                            <option value="SMA">SMA</option>
                                            <option value="D3">D3</option>
                                            <option value="S1/D4">S1/D4</option>
                                            <option value="S2" selected>S2</option>
                                            <option value="S3">S3</option>
                                        @elseif(old('last_education') == 'S3')
                                            <option value="SMA">SMA</option>
                                            <option value="D3">D3</option>
                                            <option value="S1/D4">S1/D4</option>
                                            <option value="S2">S2</option>
                                            <option value="S3" selected>S3</option>
                                        @else
                                            <option value="SMA">SMA</option>
                                            <option value="D3">D3</option>
                                            <option value="S1/D4">S1/D4</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" name="marital"
                                        data-dropdown-css-class="select2-danger" style="width: 50%;" value="{{ old('martial') }}">
                                        <option selected="selected">Status</option>
                                        @if (old('marital') == '0')
                                            <option selected value="0">{{ __('karir-detail.placeholder_married') }}
                                            </option>
                                            <option value="1">Single</option>
                                        @elseif(old('marital') == '1')
                                            <option value="0">{{ __('karir-detail.placeholder_married') }}</option>
                                            <option selected value="1">Single</option>
                                        @else
                                            <option value="0">{{ __('karir-detail.placeholder_married') }}</option>
                                            <option value="1">Single</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%"
                                        name="official_address" value="{{ old('official_address') }}"
                                        placeholder="{{ __('karir-detail.placeholder_Alamat') }}">
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" name="city" id="city" data-dropdown-css-class="select2-danger" value="{{ old('regencies') }}" style="width: 50%;">
                                        <option selected disabled>{{ __('waralaba-form.placeholder_kota') }}</option>
                                        @foreach ($regencies as $r)
                                            @if (old('city') == $r->id)
                                                <option selected value="{{ $r->id }}">{{ $r->name }}</option>
                                            @else
                                                <option value="{{ $r->id }}">{{ $r->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger wmob" name="province" value="{{ old('provincies') }}" id="province" data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected disabled>{{ __('waralaba-form.placeholder_provinsi') }}</option>
                                        @foreach ($provincies as $p)
                                            @if (old('province') == $p->id)
                                                <option selected value="{{ $p->id }}">{{ $p->name }}</option>
                                            @else
                                                <option value="{{ $p->id }}">{{ $p->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <br>
                                <div class="form-group">
                                    <input type="text" class="form-control wmob" name="home_phone"
                                        value="{{ old('home_phone') }}"
                                        placeholder="{{ __('waralaba-form.placeholder_tr') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control wmob" name="official_phone"
                                        value="{{ old('official_phone') }}"
                                        placeholder="{{ __('waralaba-form.placeholder_tk') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control wmob" name="mobile_phone"
                                        value="{{ old('mobile_phone') }}"
                                        placeholder="{{ __('karir-detail.placeholder_mp') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" name="email"
                                        id="email" value="{{ old('email') }}" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="email_confirm"
                                        value="{{ old('email_confirm') }}" name="email_confirm"
                                        placeholder="{{ __('waralaba-form.placeholder_confirm') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <div class="container bom">
                <h2 style="font-family: 'Poppins';" id="subTittle">{{ __('waralaba-form.title4') }}</h2><br>
                <div class="card" id="card2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" name="job"
                                        id="job" value="{{ old('job') }}"
                                        placeholder="{{ __('waralaba-form.placeholder_work') }}">
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger wmob" name="bussiness_field" value="{{ old('bussiness_field') }}" data-dropdown-css-class="select2-danger">
                                        <option selected="selected">{{ __('waralaba-form.placeholder_sector') }}
                                        </option>
                                        @if (old('bussiness_field') == 'Bidang Pertanian')
                                            <option selected value="Bidang Pertanian">Bidang Pertanian</option>
                                            <option value="Bidang Manufaktur">{{ __('waralaba-form.placeholder_manu') }}
                                            </option>
                                            <option value="Bidang Konstruksi">
                                                {{ __('waralaba-form.placeholder_const') }}
                                            </option>
                                            <option value="Bidang Komunikasi">{{ __('waralaba-form.placeholder_comu') }}
                                            </option>
                                        @elseif(old('bussiness_field') == 'Bidang Manufaktur')
                                            <option value="Bidang Pertanian">{{ __('waralaba-form.placeholder_farm') }}
                                            </option>
                                            <option selected value="Bidang Manufaktur">
                                                {{ __('waralaba-form.placeholder_manu') }}
                                            </option>
                                            <option value="Bidang Konstruksi">
                                                {{ __('waralaba-form.placeholder_const') }}
                                            </option>
                                            <option value="Bidang Komunikasi">{{ __('waralaba-form.placeholder_comu') }}
                                            </option>
                                        @elseif(old('bussiness_field') == 'Bidang Konstruksi')
                                            <option value="Bidang Pertanian">{{ __('waralaba-form.placeholder_farm') }}
                                            </option>
                                            <option value="Bidang Manufaktur">{{ __('waralaba-form.placeholder_manu') }}
                                            </option>
                                            <option selected value="Bidang Konstruksi">
                                                {{ __('waralaba-form.placeholder_const') }}
                                            </option>
                                            <option value="Bidang Komunikasi">{{ __('waralaba-form.placeholder_comu') }}
                                            </option>
                                        @elseif(old('bussiness_field') == 'Bidang Komunikasi')
                                            <option value="Bidang Pertanian">{{ __('waralaba-form.placeholder_farm') }}
                                            </option>
                                            <option value="Bidang Manufaktur">{{ __('waralaba-form.placeholder_manu') }}
                                            </option>
                                            <option value="Bidang Konstruksi">
                                                {{ __('waralaba-form.placeholder_const') }}
                                            </option>
                                            <option selected value="Bidang Komunikasi">
                                                {{ __('waralaba-form.placeholder_comu') }}
                                            </option>
                                        @else
                                            <option value="Bidang Pertanian">{{ __('waralaba-form.placeholder_farm') }}
                                            </option>
                                            <option value="Bidang Manufaktur">{{ __('waralaba-form.placeholder_manu') }}
                                            </option>
                                            <option value="Bidang Konstruksi">
                                                {{ __('waralaba-form.placeholder_const') }}
                                            </option>
                                            <option value="Bidang Komunikasi">{{ __('waralaba-form.placeholder_comu') }}
                                            </option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control wmob" id="other" name="other"
                                        value="{{ old('other') }}"
                                        placeholder="{{ __('waralaba-form.placeholder_other') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="company_name"
                                        value="{{ old('company_name') }}" name="company_name"
                                        placeholder="{{ __('karir-detail.placeholder_company') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="postion_company"
                                        value="{{ old('postion_company') }}" name="postion_company"
                                        placeholder="{{ __('karir-detail.placeholder_position') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control wmob" id="other_2" name="other_2"
                                        value="{{ old('other_2') }}"
                                        placeholder="{{ __('waralaba-form.placeholder_other') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <br>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="address_2"
                                        value="{{ old('address_2') }}" name="address_2"
                                        placeholder="{{ __('karir-detail.placeholder_Alamat') }}">
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" name="city_2" id="city_2"
                                        data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">{{ __('waralaba-form.placeholder_kota') }}</option>
                                        @foreach ($regencies as $r)
                                            @if (old('city_2') == $r->name)
                                                <option selected value="{{ $r->name }}">{{ $r->name }}</option>
                                            @else
                                                <option value="{{ $r->id }}">{{ $r->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" name="province_2" id="province_2" value="{{ old('provincies') }}" data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected disabled>{{ __('waralaba-form.placeholder_provinsi') }}</option>
                                        @foreach ($provincies as $p)
                                            @if (old('province_2') == $p->name)
                                                <option selected value="{{ $p->name }}">{{ $p->name }}</option>
                                            @else
                                                <option value="{{ $p->id }}">{{ $p->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <div class="container bom" id="last_waralaba">
                <h2 style="font-family: 'Poppins';" id="subTittle">{{ __('waralaba-form.title5') }}</h2><br>
                <div class="card" id="card3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <br>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" name="status_penguasaan"
                                        id="status_penguasaan" value="{{ old('status_penguasaan') }}" data-dropdown-css-class="select2-danger"
                                        style="width: 80%;">
                                        <option selected="selected">{{ __('waralaba-form.placeholder_spt') }}</option>
                                        @if (old('status_penguasaan') == 'Lahan Pribadi')
                                            <option selected value="Lahan Pribadi">
                                                {{ __('waralaba-form.placeholder_spt') }}
                                            </option>
                                            <option value="Sewa">
                                                {{ __('waralaba-form.placeholder_spt_2') }}
                                            </option>
                                        @elseif (old('status_penguasaan') == 'Sewa')
                                            <option value="Lahan Pribadi">{{ __('waralaba-form.placeholder_spt_1') }}
                                            </option>
                                            <option selected value="Sewa">
                                                {{ __('waralaba-form.placeholder_spt_2') }}
                                            </option>
                                        @else
                                            <option value="Lahan Pribadi">{{ __('waralaba-form.placeholder_spt_1') }}
                                            </option>
                                            <option value="Sewa">
                                                {{ __('waralaba-form.placeholder_spt_2') }}
                                            </option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%" id="address_3"
                                        value="{{ old('address_3') }}" name="address_3"
                                        placeholder="{{ __('karir-detail.placeholder_Alamat') }}">
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" id="city_3" name="city_3" value="{{ old('regencies') }}" data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected="selected">{{ __('waralaba-form.placeholder_kota') }}</option>
                                        @foreach ($regencies as $r)
                                            @if (old('city_3') == $r->name)
                                                <option selected value="{{ $r->name }}">{{ $r->name }}
                                                </option>
                                            @else
                                                <option value="{{ $r->id }}">{{ $r->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control select2 select2-danger" name="province_3" id="province_3" value="{{ old('provincies') }}" data-dropdown-css-class="select2-danger" style="width: 50%;">
                                        <option selected disabled>{{ __('waralaba-form.placeholder_provinsi') }}
                                        </option>
                                        @foreach ($provincies as $p)
                                            @if (old('province_3') == $p->name)
                                                <option selected value="{{ $p->name }}">{{ $p->name }}
                                                </option>
                                            @else
                                                <option value="{{ $p->id }}">{{ $p->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control wmob" id="known_as_area"
                                        value="{{ old('known_as_area') }}" name="known_as_area"
                                        placeholder="{{ __('waralaba-form.placeholder_kaa') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control wmob" id="other_3" name="other_3"
                                        value="{{ old('other_3') }}"
                                        placeholder="{{ __('waralaba-form.placeholder_other') }}">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control wmob" id="building_area"
                                        value="{{ old('building_area') }}" name="building_area"
                                        placeholder="{{ __('waralaba-form.placeholder_luas') }}" min="1">
                                </div>
                                <br><br>
                                <p style="font-weight: bold;">{{ __('waralaba-form.placeholder_left') }}:</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%"
                                        id="left_business_name" value="{{ old('left_business_name') }}"
                                        name="left_business_name"
                                        placeholder="{{ __('waralaba-form.placeholder_sector_n') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%"
                                        id="left_business_field" value="{{ old('left_business_field') }}"
                                        name="left_business_field"
                                        placeholder="{{ __('waralaba-form.placeholder_sector') }}">
                                </div>
                                <br><br>
                                <p style="font-weight: bold;">{{ __('waralaba-form.placeholder_right') }}:</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%"
                                        id="right_business_name" value="{{ old('right_business_name') }}"
                                        name="right_business_name"
                                        placeholder="{{ __('waralaba-form.placeholder_sector_n') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%"
                                        id="right_business_field" value="{{ old('right_business_field') }}"
                                        name="right_business_field"
                                        placeholder="{{ __('waralaba-form.placeholder_sector') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <br>
                                <p style="font-weight: bold;">{{ __('waralaba-form.placeholder_back') }}:</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%"
                                        id="behind_business_name" value="{{ old('behind_business_name') }}"
                                        name="behind_business_name"
                                        placeholder="{{ __('waralaba-form.placeholder_sector_n') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%"
                                        id="behind_business_field" value="{{ old('behind_business_field') }}"
                                        name="behind_business_field"
                                        placeholder="{{ __('waralaba-form.placeholder_sector') }}">
                                </div>
                                <br><br>
                                <p style="font-weight: bold;">{{ __('waralaba-form.placeholder_front') }}:</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%"
                                        id="front_business_name" value="{{ old('front_business_name') }}"
                                        name="front_business_name"
                                        placeholder="{{ __('waralaba-form.placeholder_sector_n') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" style="width: 80%"
                                        id="front_business_field" value="{{ old('front_business_field') }}"
                                        name="front_business_field"
                                        placeholder="{{ __('waralaba-form.placeholder_sector') }}">
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <input type="number" class="form-control wmob" id="front_road_width"
                                        value="{{ old('front_road_width') }}" name="front_road_width"
                                        placeholder="{{ __('waralaba-form.placeholder_rw') }}" min="1">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control wmob" id="front_road_traffic"
                                        value="{{ old('front_road_traffic') }}" name="front_road_traffic"
                                        placeholder="{{ __('waralaba-form.placeholder_traffic') }}">
                                    <input type="hidden" name="status" id="status" value="0">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="background-color: #221E40;width: 100%;padding: 1rem;" id="last_form_section">
                    <p style="color: white;" id="lampiran">{{ __('waralaba-form.confirm1') }}</p>
                    <div class="form-group">
                        <select class="form-control select2 select2-danger mob" data-dropdown-css-class="select2-danger"
                            style="background-color: #221E40;color:white;" name="confirm_completenes_mob"
                            id="confirm_completenes">
                            <option value="" selected disabled>{{ __('waralaba-form.yes/no') }}</option>
                            <option value="0">{{ __('waralaba-form.yes') }}</option>
                            <option value="1">{{ __('waralaba-form.no') }}</option>
                            </option>
                        </select>
                    </div>
                    <br><br>
                    <p style="color: white;">{{ __('waralaba-form.confirm2') }}</p>
                    <div class="form-group">
                        <select class="form-control select2 select2-danger mob" data-dropdown-css-class="select2-danger"
                            style=" background-color: #221E40; color:white;" name="confirm_register_mob"
                            id="confirm_register">
                            <option value="" selected disabled>{{ __('waralaba-form.yes/no') }}</option>
                            <option value="0">{{ __('waralaba-form.yes') }}</option>
                            <option value="1">{{ __('waralaba-form.no') }}</option>
                            </option>
                        </select>
                    </div>
                    {{-- <div class="form-group row" id="mobile_captcha">
                        <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                    </div> --}}
                </div>
                <br><br>
            </div>
        </div>

        <div class="back"></div>
        <div class="foots"></div>
        <div class="foots2">
            <div class="container" id="last_section_web">
                <br><br>
                <p style="color: white; width:65%;" id="lampiran">{{ __('waralaba-form.confirm1') }}.</p>
                <div class="form-group">
                    <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                        style="width: 10%;background-color: #221E40;color:white;" name="confirm_completenes"
                        id="confirm_completenes">
                        <option value="" selected disabled>{{ __('waralaba-form.yes/no') }}</option>
                        <option value="0">{{ __('waralaba-form.yes') }}</option>
                        <option value="1">{{ __('waralaba-form.no') }}</option>
                        </option>
                    </select>
                </div>
                <br><br>
                <p style="color: white; width:65%;">{{ __('waralaba-form.confirm2') }}</p>
                <div class="form-group">
                    <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"
                        style="width: 10%; background-color: #221E40; color:white;" name="confirm_register"
                        id="confirm_register">
                        <option value="" selected disabled>{{ __('waralaba-form.yes/no') }}</option>
                        <option value="0">{{ __('waralaba-form.yes') }}</option>
                        <option value="1">{{ __('waralaba-form.no') }}</option>
                        </option>
                    </select>
                </div>
                <div class="form-group row" id="web_captcha">
                    <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                </div>
                <br><br>
            </div>
        </div>
        <br>
        <div class="container" id="buttoon">
            <a style="font-weight: bold; color:white;" id="myBtn" onclick="nextPrev(1)" class="btn btn-primary">Next
                Step</a>
        </div>
        <br>
    </form>
@endsection

@section('js-internal')
    <!-- add tag js in here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                $('#email_confirm').css('background-color', '#FFC0CB');
            } else {
                $('#email_confirm').css('border-color', '#ced4da');
                $('#email_confirm').css('border-width', '1px');
                $('#email_confirm').css('border-style', 'solid');
                $('#email_confirm').css('border-radius', '5px');
                $('#email_confirm').css('background-color', 'white');
            }
        });
    </script>

    <script>
        if ($(window).width() < 600) {
            //put web_captcha to last_form_section
            $('#web_captcha').appendTo('#last_form_section');

        }
    </script>
    <script>
        $('#province').change(function() {
            var id = $(this).val();
            if (id) {
                $.ajax({
                    type: "GET",
                    url: "/getKota/" + id,
                    dataType: 'JSON',
                    success: function(res) {
                        if (res) {
                            $("#city").empty();
                            $("#city").append('<option>Kota</option>');
                            $.each(res, function(nama, id) {
                                $("#city").append('<option value="' + id + '">' + id +
                                    '</option>');
                            });
                        } else {
                            $("#city").empty();
                        }
                    }
                });
            } else {
                $("#city").empty();
            }
        });
    </script>
    <script>
        $('#province_2').change(function() {
            var id = $(this).val();
            if (id) {
                $.ajax({
                    type: "GET",
                    url: "/getKota/" + id,
                    dataType: 'JSON',
                    success: function(res) {
                        if (res) {
                            $("#city_2").empty();
                            $("#city_2").append('<option>Kota</option>');
                            $.each(res, function(nama, id) {
                                $("#city_2").append('<option value="' + id + '">' + id +
                                    '</option>');
                            });
                        } else {
                            $("#city_2").empty();
                        }
                    }
                });
            } else {
                $("#city_2").empty();
            }
        });
    </script>
    <script>
        $('#province_3').change(function() {
            var id = $(this).val();
            if (id) {
                $.ajax({
                    type: "GET",
                    url: "/getKota/" + id,
                    dataType: 'JSON',
                    success: function(res) {
                        if (res) {
                            $("#city_3").empty();
                            $("#city_3").append('<option>Kota</option>');
                            $.each(res, function(nama, id) {
                                $("#city_3").append('<option value="' + id + '">' + id +
                                    '</option>');
                            });
                        } else {
                            $("#city_3").empty();
                        }
                    }
                });
            } else {
                $("#city_3").empty();
            }
        });
    </script>
@endsection
