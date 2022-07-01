@extends('layout-komponen.master')

@section('title', 'Kontak')
<!-- name title -->

@section('css-internal')
    {!! ReCaptcha::htmlScriptTagJsApi() !!}
    <link rel="stylesheet" href="{{ asset('assets/css/kontak.css') }}">
@endsection

@section('konten')
    <!-- add konten in here -->
    <div class="header p-5" style="background-image: url('{{ $settings['banner_kontak'] }}')">
        <p id="kont">{{ __('kontak.title1') }}</p>
        <p id="kami">{{ __('kontak.title2') }}</p>
    </div>
    <div class="back-grad">
        <div class="center">
            <div class="row" style="font-family: 'Poppins';">
                <br>
                <div class="col-4 d-flex" id="p1">{{ __('kontak.title3') }}</div><br>
                <div class="col-8 pt-4 pt-lg-0 content" data-aos="fade-left" id="p11">JL. H.R. Mohammad No. 73B Lt.
                    II<br>Surabaya 60226 - Indonesia<br>Tel. (031)734-3388<br>Fax.
                    (031)734-2911<br><br>{{ __('kontak.title4') }}</div><br>
            </div>
        </div>
    </div>
    <div class="back">
        <div class="container" id="tab-request-dekstop">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session()->has('message'))
                <div class="alert alert-{{ session('alert') }} alert-has-icon  alert-dismissible fade show mx-1 justify-content-center"
                    role="alert">
                    {{-- <div class="alert-icon"><i class="far fa-lightbulb"></i></div> --}}
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                            <span class="alert-title">{{ session('title') }}</span>
                        </button>
                        <span class="alert-text">{{ session('message') }}</span>
                    </div>
                </div>
            @endif
            <div class="tab">
                <!-- <div class="tablinks" style="background-image: url('/img/Rectangle.png')" onclick="openCity(event, 'kontak')" id="defaultOpen">Kontak</div> -->
                <button class="tablinks" onclick="openCity(event, 'kontak')"
                    id="defaultOpen">{{ __('kontak.accordion1') }}</button><br>
                <button class="tablinks" onclick="openCity(event, 'Request')">{{ __('kontak.accordion2') }}</button><br>
                <button class="tablinks" onclick="openCity(event, 'keluhan')">{{ __('kontak.accordion3') }}</button>
            </div>

            <div id="kontak" class="tabcontent">
                <div class="container" id="form1" style="font-family: 'Poppins';">
                    <form action="{{ url('/kontak/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    id="name" name="name" placeholder="{{ __('kontak.box1') }}"
                                    value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('member_id') is-invalid @enderror" type="text"
                                    id="member_id" name="member_id" placeholder="Member ID"
                                    value="{{ old('member_id') }}" required>
                                @error('member_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('email') is-invalid @enderror" type="text"
                                    id="email" name="email" placeholder="Email" value="{{ old('email') }}"
                                    required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                    id="phone" name="phone" placeholder="{{ __('kontak.box2') }}"
                                    value="{{ old('phone') }}" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <textarea class="form-area" type="text" rows="6" id="complaint" name="complaint"
                                    placeholder="{{ __('kontak.box3') }}" value="{{ old('complaint') }}" required></textarea>
                                @error('complaint')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group row">
                                    <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                                </div>


                                <input style="background-color:#0275d8" type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id="Request" class="tabcontent">
                <div class="container" id="form1" style="font-family: 'Poppins';">
                    <form action="{{ url('/request/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    id="name" name="name" placeholder="{{ __('kontak.box1') }}"
                                    value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('member_id') is-invalid @enderror" type="text"
                                    id="member_id" name="member_id" placeholder="Member ID"
                                    value="{{ old('member_id') }}" required>
                                @error('member_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('email') is-invalid @enderror" type="text"
                                    id="email" name="email" placeholder="Email" value="{{ old('email') }}"
                                    required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                    id="phone" name="phone" placeholder="{{ __('kontak.box2') }}"
                                    value="{{ old('phone') }}" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <textarea class="form-area" type="text" id="request" rows="6" name="request"
                                    placeholder="{{ __('kontak.box4') }}" value="{{ old('request') }}" required></textarea>
                                @error('request')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group row">
                                    <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                                </div>


                                <input style="background-color:#0275d8" type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id="keluhan" class="tabcontent">
                <div class="container" id="form1" style="font-family: 'Poppins';">
                    <form action="{{ url('/keluhan/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control @error('name') is-invalid @enderror" type="text"
                                    id="name" name="name" placeholder="{{ __('kontak.box1') }}"
                                    value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('member_id') is-invalid @enderror" type="text"
                                    id="member_id" name="member_id" placeholder="Member ID"
                                    value="{{ old('member_id') }}" required>
                                @error('member_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('email') is-invalid @enderror" type="text"
                                    id="email" name="email" placeholder="Email" value="{{ old('email') }}"
                                    required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                    id="phone" name="phone" placeholder="{{ __('kontak.box2') }}"
                                    value="{{ old('phone') }}" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <!-- <input class="form-control @error('outlet') is-invalid @enderror" type="text" id="outlet" name="outlet" placeholder="Outlet" value="{{ old('outlet') }}" required> -->
                                <select name="outlet" class="form-control @error('outlet') is-invalid @enderror"
                                    value="{{ old('outlet') }}" required>
                                    <option selected="Selected" value="" disabled>{{ __('kontak.box6') }}
                                    </option>
                                    <?php foreach ($outlet as $value) { ?>
                                    <?php echo '<option value="' . $value->name . '">' . $value->name . '</option>'; ?>
                                    <?php } ?>
                                </select>
                                @error('outlet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <textarea class="form-area" rows="4" type="text" id="keluhan" name="keluhan"
                                    placeholder="{{ __('kontak.box5') }}" value="{{ old('keluhan') }}" required></textarea>
                                @error('keluhan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group row">
                                    <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                                </div>

                                <input style="background-color:#0275d8" type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container" id="tab-request-mobile">
            <div class="accordionWrapper">
                <div class="accordionItem open">
                    <h2 class="accordionItemHeading">{{ __('kontak.accordion1') }}</h2>
                    <div id="kontak" class="accordionItemContent">
                        <div class="container" id="form1" style="font-family: 'Poppins';">
                            <form action="{{ url('/kontak/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row" style="overflow: hidden;">
                                    <div class="col-md-6">
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                            id="name" name="name" placeholder="{{ __('kontak.box1') }}"
                                            value="{{ old('name') }}" required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input class="form-control @error('member_id') is-invalid @enderror"
                                            type="text" id="member_id" name="member_id" placeholder="Member ID"
                                            value="{{ old('member_id') }}" required>
                                        @error('member_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input class="form-control @error('email') is-invalid @enderror" type="text"
                                            id="email" name="email" placeholder="Email"
                                            value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                            id="phone" name="phone" placeholder="{{ __('kontak.box2') }}"
                                            value="{{ old('phone') }}" required>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <textarea class="form-area" type="text" rows="6" id="complaint" name="complaint"
                                            placeholder="{{ __('kontak.box3') }}" value="{{ old('complaint') }}" required></textarea>
                                        @error('complaint')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div class="form-group row" id="web_captcha">
                                            <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                                        </div>


                                        <input style="background-color:#0275d8" type="submit" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="accordionItem close">
                    <h2 class="accordionItemHeading">{{ __('kontak.accordion2') }}</h2>
                    <div id="Request" class="accordionItemContent">
                        <div class="container" id="form1" style="font-family: 'Poppins';">
                            <form action="{{ url('/request/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row" style="overflow: hidden;">
                                    <div class="col-md-6">
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                            id="name" name="name" placeholder="{{ __('kontak.box1') }}"
                                            value="{{ old('name') }}" required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input class="form-control @error('member_id') is-invalid @enderror"
                                            type="text" id="member_id" name="member_id" placeholder="Member ID"
                                            value="{{ old('member_id') }}" required>
                                        @error('member_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input class="form-control @error('email') is-invalid @enderror" type="text"
                                            id="email" name="email" placeholder="Email"
                                            value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                            id="phone" name="phone" placeholder="{{ __('kontak.box2') }}"
                                            value="{{ old('phone') }}" required>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <textarea class="form-area" type="text" rows="6" id="request" name="request"
                                            placeholder="{{ __('kontak.box4') }}" value="{{ old('request') }}" required></textarea>
                                        @error('request')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div class="form-group row" id="web_captcha">
                                            <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                                        </div>

                                        <br>
                                        <input style="background-color:#0275d8" type="submit" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="accordionItem close">
                    <h2 class="accordionItemHeading">{{ __('kontak.accordion3') }}</h2>
                    <div id="keluhan" class="accordionItemContent">
                        <div class="container" id="form1" style="font-family: 'Poppins';">
                            <form action="{{ url('/keluhan/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row" style="overflow: hidden;">
                                    <div class="col-md-6">
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                            id="name" name="name" placeholder="{{ __('kontak.box1') }}"
                                            value="{{ old('name') }}" required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input class="form-control @error('member_id') is-invalid @enderror"
                                            type="text" id="member_id" name="member_id" placeholder="Member ID"
                                            value="{{ old('member_id') }}" required>
                                        @error('member_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input class="form-control @error('email') is-invalid @enderror" type="text"
                                            id="email" name="email" placeholder="Email"
                                            value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <input class="form-control @error('phone') is-invalid @enderror" type="text"
                                            id="phone" name="phone" placeholder="{{ __('kontak.box2') }}"
                                            value="{{ old('phone') }}" required>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <input class="form-control @error('outlet') is-invalid @enderror" type="text"
                                            id="outlet" name="outlet" placeholder="Outlet"
                                            value="{{ old('outlet') }}" required></input>
                                        @error('outlet')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <textarea class="form-area" type="text" rows="6" id="keluhan" name="keluhan"
                                            placeholder="{{ __('kontak.box5') }}" value="{{ old('keluhan') }}" required></textarea>
                                        @error('keluhan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div class="form-group row" id="web_captcha">
                                            <div class="col-md-6"> {!! htmlFormSnippet() !!} </div>
                                        </div>

                                        <input style="background-color:#0275d8" type="submit" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="back2">
        <div class="container" id="back2con">
            <br><br>
            <div class="row" id="faq">
                <h3 style="font-family: 'Poppins';font-weight: bold;">FAQ</h3>
                <h3 id="faq1">(Frequently Ask Question)</h3>
            </div><br><br>

            <div id="accordion">
                <div class="card border-0">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                {{ __('kontak.faq1') }}
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
                            <button class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                {{ __('kontak.faq2') }}
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
                            <button class="btn collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                {{ __('kontak.faq3') }}
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
                            <button class="btn collapsed" data-toggle="collapse" data-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                {{ __('kontak.faq4') }}
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
                            <button class="btn collapsed" data-toggle="collapse" data-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                {{ __('kontak.faq5') }}
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
            </div>
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
        // Add active class to the current button (highlight it)
        var header = document.getElementById("accordion");
        var btns = header.getElementsByClassName("btn");
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

    <script>
        var width = screen.width;
        if (width < 600) {
            document.getElementById('tab-request-mobile').style.display = 'block';
            document.getElementById('tab-request-dekstop').style.display = 'none';
        } else {
            document.getElementById('tab-request-dekstop').style.display = 'block';
            document.getElementById('tab-request-mobile').style.display = 'none';
        }
    </script>
    <script>
        if ($(window).width() < 600) {
            //put web_captcha to last_form_section
            $('#web_captcha').appendTo('#last_form_section');

        }
    </script>
@endsection
