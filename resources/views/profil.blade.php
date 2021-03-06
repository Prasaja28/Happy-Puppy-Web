@extends('layout-komponen.master')
@section('title', 'Profile')
@section('css-internal')
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
    <!-- css garis penghubung -->
  
@section('navbar-profile', 'active')
@section('konten')


    <div class="header container-fluid" style="background-image: url('{{ $settings['banner_profile'] }}')">
        <div class="container">
            <h2>{{ __('profil.title1') }}</h2>
            <h1>{{ __('profil.title2') }}</h1>
        </div>
    </div>

    <div class="header-below">
        <div class="container py-4 py-md-5 px-md-3">
            <h3 class="my-auto">PT IMPERIUM HAPPY PUPPY</h3>
            <p class="pt-2 font-italic">{{ __('profil.slogan') }}</p>
        </div>
    </div>

    <section class="description">
        <div class="container">
            <p class="text-muted py-5">
                {{ __('profil.desc') }}
            </p>
        </div>
    </section>

    <section class="history px-3 px-md-0">
        <div class="container">
            <h3 class="font-weight-bold text-uppercase mb-3">{{ __('profil.history') }}</h2>
                @php
                    $bgColor = ['y-2009', 'y-2010', 'y-2015', 'y-2017', 'y-2019'];
                @endphp

                @foreach ($profill as $key => $history)
                    <!-- // $bgColor[$key%3]
                                      // 0-n, 0%3, 1%31, 2%32, 3%3 0, 4%3 1, 5%3 2 -->
                    @if ($key % 2 == 0)
                        <div class="brand brand-history-right">
                            <div class="row justify-content-end">
                                <div class="col-4 col-md-4 d-flex justify-content-center">
                                    <div name="years"
                                        class="{{ $bgColor[$key % 5] }} align-self-center d-flex justify-content-center rounded-circle">
                                        <h4 class="align-self-center font-weight-bold">{{ $history->year }}</h4>
                                    </div>
                                    <!-- @if ($key != count($profill) - 1)
    <div class="vl"></div>
    @endif -->
                                </div>
                                <div class="col-4 col-md-4">
                                    <p class="text-muted text-justify history-desc">
                                        {{ $history->{'content_history_' . app()->getLocale()} }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="brand brand-history-left">
                            <div class="row justify-content-start">
                                <div class="col-4 col-md-4 order-2 d-flex justify-content-center">
                                    <div name="years"
                                        class="{{ $bgColor[$key % 5] }} align-self-center d-flex justify-content-center rounded-circle">
                                        <h4 class="align-self-center font-weight-bold">{{ $history->year }}</h4>
                                    </div>
                                    <!-- @if ($key != count($profill) - 1)
    <div class="vl"></div>
    @endif -->
                                </div>
                                <div class="col-4 col-md-4 order-1">
                                    <p class="text-muted text-justify history-desc">
                                        {{ $history->{'content_history_' . app()->getLocale()} }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

        </div>
    </section>
@endsection
@endsection
