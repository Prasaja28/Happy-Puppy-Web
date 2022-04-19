{{-- FRESH FOOTER WITH RESPONSIVENESS --}}

@section('css-internal')
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

    <footer>
        <div class="container p-5">
            <div class="row">
                <div name="detail-info" class="col-6">
                    <div class="row justify-content-start">
                        <img src="{{ asset('/img/HappupLogo.png') }}" class="mr-2 mr-md-4">
                        <img src="{{ asset('/img/logofot1.png') }}" class="mr-2 mr-md-4">
                        <img src="{{ asset('/img/logofot3.png') }}" class="mr-2 mr-md-4">
                        <img src="{{ asset('/img/logofot2.png') }}" class="mr-2 mr-md-4 mt-4 mt-md-0">
                        <img src="{{ asset('/img/logofot4.png') }}" class="mt-4 mt-md-0">
                    </div>
                </div>
                @if (count($settings) > 0)
                    <div name="row-social-media" class="col-6">
                        <div class="row justify-content-end">
                            @if (!empty($settings['url_facebook']))
                                <a target="_blank" class="social-item" href="{{ $settings['url_facebook'] }}">
                                    <img name="facebook" class="mr-4 mr-md-3"
                                        src="{{ asset('img/icons/facebook.png') }}">
                                </a>
                            @endif
                            @if (!empty($settings['url_twitter']))
                                <a target="_blank" class="social-item" href="{{ $settings['url_twitter'] }}">
                                    <img class="mr-4 mr-md-3" src="{{ asset('img/icons/twitter.png') }}">
                                </a>
                            @endif
                            @if (!empty($settings['url_instagram']))
                                <a target="_blank" class="social-item" href="{{ $settings['url_instagram'] }}">
                                    <img name="instagram" class="mr-md-3"
                                        src="{{ asset('img/icons/instagram.png') }}">
                                </a>
                            @endif
                            <div name="border-right"></div>
                            @if (!empty($settings['url_apple']))
                                <a target="_blank" class="social-item" href="{{ $settings['url_apple'] }}">
                                    <img name="apple" class="mt-4 mt-md-0 mr-4 mr-md-3 pl-5 pl-md-0 ml-md-3"
                                        src="{{ asset('img/icons/apple.png') }}">
                                </a>
                            @endif
                            @if (!empty($settings['url_google_play']))
                                <a target="_blank" class="social-item" href="{{ $settings['url_google_play'] }}">
                                    <img class="mt-4 mt-md-0" src="{{ asset('img/icons/google-play.png') }}">
                                </a>
                            @endif
                        </div>
                    </div>
                @endif
            </div>

            <div class="row mt-5">
                <div class="col-6">
                    <div name="industry-info">
                        <div class="row justify-content-start">
                            <div class="col-12 col-md-6">
                                <p class="font-weight-bold">PT IMPERIUM HAPPY PUPPY</p>
                            </div>

                            <div class="col-12 col-md-6">
                                <p class="font-weight-bold">Telp.(031) 734-3388, Fax.(031) 734-2911</p>
                            </div>
                        </div>

                        <div class="row justify-content-start">
                            <div class="col-12 col-md-6">
                                <p class="font-weight-bold">JL. HR Muhammad 73B Surabaya 60226</p>
                            </div>

                            <div class="col-12 col-md-6">
                                <p class="font-weight-bold">E-mail: info@happy-puppy.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div name="more-detail">
                        <div class="row justify-content-end">
                            <a href="#" class="btn btn-member rounded-0 text-white font-weight-bold">Become a member</a>
                        </div>

                        <div name="change-language" class="row justify-content-end my-5 my-md-3">
                            <a href="#">INA |</a>
                            <a href="#" class="pl-1">ENG</a>
                        </div>
                    </div>
                </div>
            </div>

            <div name="term-and-condition" class="row justify-content-md-end">
                <p>Syarat & Ketentuan | @ 2011 PT Imperium Happy Puppy. All Right Reserved.</p>
            </div>
        </div>
    </footer>
