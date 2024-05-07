@extends('home.base')
@section('content')
    <!-- End Page-title Area -->
    <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">{{$pageName}}</div>
                        <div class="page-title">
                            <h1>{{$pageName}}</h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$pageName}}</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img src="{{asset('home/img/page-banner/page-banner-start.svg')}}" class="img-fluid start" alt="">
                        <img src="{{asset('home/img/page-banner/page-banner.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- our-company start -->
    <section class="our-company  pt-xs-80 pb-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="our-company__meida">
                        <img src="{{asset('home/img/about/our-company-1.png')}}" alt="" class="img-fluid">

                        <div class="years-experience overflow-hidden mt-20 mt-sm-10 mt-xs-10 text-center">
                            <div class="number mb-5 color-white">
                                <span class="counter">13</span><sup>+</sup>
                            </div>

                            <h5 class="title color-white">Years Experience</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="our-company__meida border-radius">
                        <img src="{{asset('home/img/about/our-company-2.png')}}" alt="" class="img-fluid">

                        <div class="horizental-bar"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="our-company__content mt-md-50 mt-sm-40 mt-xs-35">
                        <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-20 d-block"><img src="{{asset('home/img/team-details/badge-line.svg')}}" class="img-fluid mr-10" alt=""> Know Our Company</span>
                        <h2 class="title color-d_black mb-20 mb-sm-15 mb-xs-10">Our Company Provide High Quality Idea</h2>

                        <div class="descriiption font-la mb-30 mb-md-25 mb-sm-20 mb-xs-15">
                            <p>
                                Founded in 2012, we are a global investment agency helping individuals build their financial dreams into reality. From a humble beginning, we have grown to become a notable force in the investment industry with over 40K+ users.
                            </p>
                            <p class="about-one__text-2">{{$siteName}} stands as one of the largest and most seasoned international private equity firms. Our accomplished team of investment professionals is primarily dedicated to strategic investments.</p>
                            <p class="about-one__text-2">
                                {{$siteName}} is managed by a team of trading experts specializing in generating profits through currency, stocks, options, and commodities trading on the foreign exchange market. We employ a variety of trading techniques to meet client goals.
                            </p>
                            <p class="about-one__text-2">
                                The {{$siteName}} team comprises financial market professionals assembled to provide the best possible trading conditions. Our specialists played a key role in developing technical specifications for a modern platform suitable for both beginners and experienced traders.
                            </p>
                            <p class="about-one__text-2">
                                Throughout our existence, we've aimed to balance lower risk and higher profits for our customers through innovative analysis, information dispersion, and expert assistance. Our team includes experienced professionals with diverse and in-depth knowledge, enhancing the entire investing process.
                            </p>
                        </div>

                        <div class="client-feedback d-flex flex-column flex-sm-row">



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-company end -->

    <!-- employee-friendly start -->
    <section class="employee__wrapper employee__wrapper_2 overflow-hidden">
        <div class="container">
            <div class="row align-items-center mb-30">
                <div class="col-lg-8 col-md-8">
                    <div class="section-title section-title_2">
                        <h5> <img src="{{asset('home/img/home-5/bage.svg')}}')}}')}}" alt> Services</h5>
                        <h2>User-Friendly <span>Service</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="single_card_item text-center">
                            <div class="card_img">
                                <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                            </div>
                            <div class="card_content card_content_2">
                                <div class="content">
                                    <h4>{{$service->title}}</h4>
                                    <p>{{\Illuminate\Support\Str::words($service->short,30)}}</p>
                                </div>
                                <a href="{{route('service.details',['id'=>$service->id])}}" class="btn_2"> Read Details <i class="fal fa-long-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- employee-friendly end -->


@endsection
