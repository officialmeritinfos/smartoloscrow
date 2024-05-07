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

    <!-- Business One -->
    <section class="business-one style-five" style="background-image:url(home/images/background/pattern-39.png)">
        <div class="auto-container">
            <!-- Business One Lower Section -->
            <div class="business-one_lower-section text-center" style="margin-top: 10rem;">
                <h6>Main Details:</h6>
                <div class="row clearfix">
                    <!-- Branch Column -->
                    <div class="branch-column col-lg-4 col-md-6 col-sm-12 mx-auto">
                        <div class="branch-column_inner">
                            <div class="branch-name"> (Head Office)</div>
                            <ul class="branch-info_list">
                                <li>{!! $web->address !!}
                                </li>
                                <li><a href="tel:"></a> </li>
                                <li><a href="mailto:{{$web->email}}">{{$web->email}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Business One -->

    <!-- Map One -->
    <section class="map-one">
        <div class="map-outer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
        </div>
    </section>
    <!-- End Map One -->


@endsection
