@extends('home.base')
@section('content')
    @push('css')
        <style>

            small {
                font-size: 14px;
                text-transform: initial;
            }
            .single-price {
                text-align: center;
                background: #262626;
                transition: .7s;
                margin-top: 20px;
            }
            .single-price h3 {
                font-size: 30px;
                color: #000;
                font-weight: 600;
                text-align: center;
                margin: 0;
                margin-top: -80px;
                margin-bottom: 1rem;
                font-family: poppins;
                color: #fff;
            }
            .single-price h4 {
                font-size: 20px;
                font-weight: 500;
                color: #fff;
            }
            .single-price h4 span.sup {
                vertical-align: text-top;
                font-size: 15px;
            }
            .deal-top {
                position: relative;
                background: #104547;
                font-size: 16px;
                text-transform: uppercase;
                padding: 136px 24px 0;
            }
            .deal-top::after {
                content: "";
                position: absolute;
                left: 0;
                bottom: -50px;
                width: 0;
                height: 0;
                border-top: 50px solid #104547;
                border-left: 175px solid transparent;
                border-right: 183px solid transparent;
            }
            .deal-bottom {
                padding: 56px 16px 0;
            }
            .deal-bottom ul {
                margin: 0;
                padding: 0;
            }
            .deal-bottom  ul li {
                font-size: 16px;
                color: #fff;
                font-weight: 300;
                margin-top: 16px;
                border-top: 1px solid #E4E4E4;
                padding-top: 16px;
                list-style: none;
            }
            .btn-area a {
                display: inline-block;
                font-size: 18px;
                color: #fff;
                background: #104547;
                padding: 8px 64px;
                margin-top: 32px;
                border-radius: 4px;
                margin-bottom: 40px;
                text-transform: uppercase;
                font-weight: bold;
                text-decoration: none;
            }


            .single-price:hover {
                background: #104547;
            }
            .single-price:hover .deal-top {
                background: #262626;
            }
            .single-price:hover .deal-top:after {
                border-top: 50px solid #262626;
            }
            .single-price:hover .btn-area a {
                background: #262626;
            }
            /* ignore the code below */


            .link-area
            {
                position:fixed;
                bottom:20px;
                left:20px;
                padding:15px;
                border-radius:40px;
                background:#104547;
            }
            .link-area a
            {
                text-decoration:none;
                color:#fff;
                font-size:25px;
            }
        </style>
    @endpush
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

    <div class="pricing" style="background: #f7f7f7;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4">
                    <div class="heading">
                        <h5>COMPANY PLANS</h5>
                        <h2>Our Investment Plans</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-9">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-month" role="tabpanel" aria-labelledby="nav-month-tab">


                            <div class="row">

                                @foreach($packages as $package)
                                    @inject('option','App\Defaults\Custom')
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="single-box" style="border: 10px solid;">
                                            <div class="part-img">
                                                <img src="{{asset('home/images/pricing-img-1.jpg')}}" alt="image">
                                                <div class="price">
                                                    <h3><span></span>{{$package->roi}}%<span></span></h3>
                                                </div>
                                            </div>
                                            <div class="part-txt">
                                                <h3>{{$package->name}} </h3>
                                                <ul>
                                                    <li><span><i class="flaticon-right-arrow-in-a-circle"></i></span>  FOR {{$package->Duration}}</li>
                                                    <li><span><i class="flaticon-right-arrow-in-a-circle"></i></span>Min : {{number_format($package->minAmount,2)}}</li>
                                                    <li><span><i class="flaticon-right-arrow-in-a-circle"></i></span>Max : @if($package->isUnlimited !=1)
                                                            ${{number_format($package->maxAmount,2)}}
                                                        @else
                                                            Unlimited
                                                        @endif</li>
                                                    <li><span><i class="flaticon-right-arrow-in-a-circle"></i></span>REFERRALS - {{$package->referral}}%</li>
                                                    <li><span><i class="flaticon-right-arrow-in-a-circle"></i></span>PRINCIPAL RETURN-YES</li>

                                                </ul>
                                            </div>
                                            <div class="part-btn">


                                                <a href="{{route('register')}}" class="def-btn">Invest Now</a>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach





                            </div>


                            <br><br><br>









                            <!--

                                     <div class="row justify-content-center">
                 <div class="col-xl-4 col-lg-4">
                 <div class="heading">

                 <h2>Profit Calculator</h2>
                 </div>
                 </div>
                 </div>

                 -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
