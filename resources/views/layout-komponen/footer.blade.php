{{-- FRESH FOOTER WITH RESPONSIVENESS --}}

@section('css-internal')
<link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

<footer>
    <div class="container p-5">
        <div class="row">
            <div name="detail-info" class="col-6">
                <img src="{{ asset('/img/HappupLogo.png') }}" class="d-flex align-middle">
                <img src="{{ asset('/img/logofot1.png') }}" class="d-flex align-middle">
                <img src="{{ asset('/img/logofot3.png') }}" class="d-flex align-middle">
                <img src="{{ asset('/img/logofot2.png') }}" class="d-flex align-middle">
                <img src="{{ asset('/img/logofot4.png') }}" class="d-flex align-middle">
            </div>
            @if (count($settings) > 0)
            <div name="row-social-media" class="col-6">
                <div class="media-wrapper justify-content-end">
                    @if (!empty($settings['url_facebook']))
                    <a target="_blank" class="social-items" href="{{ $settings['url_facebook'] }}">
                        <img name="facebook" src="{{ asset('img/icons/facebook.png') }}">
                    </a>
                    @endif
                    @if (!empty($settings['url_twitter']))
                    <a target="_blank" class="social-items" href="{{ $settings['url_twitter'] }}">
                        <img src="{{ asset('img/icons/twitter.png') }}">
                    </a>
                    @endif
                    @if (!empty($settings['url_instagram']))
                    <a target="_blank" class="social-items" href="{{ $settings['url_instagram'] }}">
                        <img name="instagram" src="{{ asset('img/icons/instagram.png') }}">
                    </a>
                    @endif
                    @if (!empty($settings['url_tiktok']))
                    <a target="_blank" class="social-items" href="{{ $settings['url_tiktok'] }}">
                        <img name="tiktok" src="{{ asset('img/icons/tiktok.png') }}">
                    </a>
                    @endif
                    @if (!empty($settings['url_youtube']))
                    <a target="_blank" class="social-items" href="{{ $settings['url_youtube'] }}">
                        <img name="youtube" src="{{ asset('img/icons/youtube.png') }}">
                    </a>
                    @endif
                    <div class="divider">
                        <p>|</p>
                    </div>
                    @if (!empty($settings['url_apple']))
                    <a target="_blank" class="social-items" href="{{ $settings['url_apple'] }}">
                        <img name="apple" src="{{ asset('img/icons/apple.png') }}">
                    </a>
                    @endif
                    @if (!empty($settings['url_google_play']))
                    <a target="_blank" class="social-items" href="{{ $settings['url_google_play'] }}">
                        <img src="{{ asset('img/icons/google-play.png') }}">
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
                            <p class="font-weight-bold">{{ __('footer.call') }}</p>
                        </div>
                    </div>

                    <div class="row justify-content-start">
                        <div class="col-12 col-md-6">
                            <p class="font-weight-bold">{{ __('footer.address') }}</p>
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
                        <a href="http://club.happypuppy.id/" class="btn btn-member rounded-0 text-white font-weight-bold">{{ __('footer.button') }}</a>
                    </div>

                    <div name="change-language" class="row justify-content-end my-5 my-md-3">
                        <a href="lang/id">INA |</a>
                        <a href="lang/en" class="pl-1">ENG</a>
                    </div>
                </div>
            </div>
        </div>

        <div name="term-and-condition" class="row justify-content-md-end">
            <p>{{ __('footer.warning') }}</p>
        </div>
    </div>
</footer>