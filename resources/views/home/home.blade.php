@extends('home.base')
@section('content')



    <div class="banner">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="banner-txt">
                        <h1>WELCOME TO {{$siteName}}.</h1>
                        <h4>EARNINGS WITHOUT RISKS</h4>
                        <h1>Join the team of experienced <span>traders now!</span></h1>
                        <p>We utilize market data to derive huge
                            revenue in the cryptocurrency ecosystem. We offer the most secured crypto
                            trading and investment solution on the globe</p>
                        <div class="btn-box">

                            <a href="{{route('register')}}" class="left-btn">Register</a>
                            <a href="{{route('login')}}" class="right-btn">Login</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-9">
                    <div class="image-box">





                    </div>


                    <div class="fun-fact-inner">
                        <div class="single-box">

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-9">
                <div class="part-txt">
                    <div class="heading">
                        <h5>About Us</h5>
                        <h2>We Believe That Quality Of Services Matters</h2>
                    </div>
                    <p>{{$siteName}} company is global structure allows us to offer a wide range of products and consulting services, expanding our ability to provide best in class solutions to our customers. The interests of our customers always come first.
                        Mining is a getting of a digital currency by deciphering a specific digital code. Decoding of blocks is done by computing power. Profitability of mining directly depends on the capabilities of the equipment used. Therefore, in our work we use the newest high-class equipment and the most powerful servers (farms) for the production of bitcoins.</p>

                    <a href="{{url('about')}}" class="def-btn">Read More</a>

                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="heading heading-2">
                        <h5>What We Offer</h5>
                        <h2>We Provide Quality Service</h2>
                    </div>
                </div>
            </div>
            <div class="bg">
                <div class="row no-gutters align-items-center">
                    <div class="col-xl-4 col-lg-4">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-one-tab" data-toggle="pill" href="#v-pills-one" role="tab" aria-controls="v-pills-one" aria-selected="true"><span><i class="flaticon-financial-profit"></i></span>Certified</a>
                            <a class="nav-link" id="v-pills-two-tab" data-toggle="pill" href="#v-pills-two" role="tab" aria-controls="v-pills-two" aria-selected="false"><span><i class="flaticon-strategy"></i></span>Secure Transaction</a>
                            <a class="nav-link" id="v-pills-three-tab" data-toggle="pill" href="#v-pills-three" role="tab" aria-controls="v-pills-three" aria-selected="false"><span><i class="flaticon-diagram"></i></span>Availability</a>
                            <a class="nav-link" id="v-pills-four-tab" data-toggle="pill" href="#v-pills-four" role="tab" aria-controls="v-pills-four" aria-selected="false"><span><i class="flaticon-loan"></i></span>Instant Withdrawal</a>
                            <a class="nav-link" id="v-pills-five-tab" data-toggle="pill" href="#v-pills-five" role="tab" aria-controls="v-pills-five" aria-selected="false"><span><i class="flaticon-security"></i></span>24/7 Hours Support</a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-one" role="tabpanel" aria-labelledby="v-pills-one-tab">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="part-img">
                                            <img src="{{asset('home/images/service-img-1.jpg')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="part-txt">
                                            <h3>Certified</h3>
                                            <p>{{$siteName}} is registered and licensed by the UK government and  Legal Entity Identifier (LEI) UK securities & investment commission as a credible assets management platform. </p>

                                            <p>Nature of business (SIC)</p>
                                            <p>62090 - Other information technology service activities</p>
                                            <p>64301 - Activities of investment trusts</p>
                                            <p>64304 - Activities of open-ended investment companies</p>
                                            <p>66110 - Administration of financial markets</p>

                                            @if(!empty($web->companyCert) || !empty($web->certificateLink))
                                                <center><p>VERIFY</p></center>
                                            @endif
                                            @if( !empty($web->certificateLink))

                                                <a href="{{$web->certificateLink}}" class="def-btn def-btn-2" target="_blank">COMPANY REG(1)</a>
                                            @endif
                                            @if(!empty($web->companyCert) )
                                                <a href="{{$web->companyCert}}" class="def-btn def-btn-2" target="_blank">CERTIFICATE(ENG)</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-two" role="tabpanel" aria-labelledby="v-pills-two-tab">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="part-img">
                                            <img src="{{asset('home/images/service-img-2.jpg')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="part-txt">
                                            <h3>Secure Transaction</h3>
                                            <p>Our site is hosted on a highly secured platform with SSL encryption (postive SSL) for secured transaction.</p>
                                            <a href="#" class="def-btn def-btn-2">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-three" role="tabpanel" aria-labelledby="v-pills-three-tab">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="part-img">
                                            <img src="{{asset('home/images/service-img-3.jpg')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="part-txt">
                                            <h3>Availability</h3>
                                            <p>Our site is hosted on stable, powerful and uninterrupted server. It is always available to our investors to make their investment.</p>
                                            <a href="#" class="def-btn def-btn-2">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-four" role="tabpanel" aria-labelledby="v-pills-four-tab">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="part-img">
                                            <img src="{{asset('home/images/service-img-4.jpg')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="part-txt">
                                            <h3>Instant Withdrawal</h3>
                                            <p>Our withdrawals are all processed instantly after they are requested. </p>
                                            <a href="#" class="def-btn def-btn-2">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-five" role="tabpanel" aria-labelledby="v-pills-five-tab">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="part-img">
                                            <img src="{{asset('home/images/service-img-5.jpg')}}" alt="image">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="part-txt">
                                            <h3>24/7 Hours Support</h3>
                                            <p>We provide 24/7 customer support through e-mail. Our support representatives are always available to answer any questions.</p>
                                            <a href="#" class="def-btn def-btn-2">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    </div>

    <div class="process">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4">
                    <div class="heading">
                        <h5>HOW WE WORK</h5>
                        <h2>Our Work Process</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{asset('home/images/process-icon-1.png')}}" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h3>Create an Account</h3>
                            <p>To open an account, simply click on the register button on the main page. The next page is the registration form that you need to fill out.</p>
                        </div>
                        <span>01</span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{asset('home/images/process-icon-2.png')}}" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h3>Make a Deposit</h3>
                            <p>To start growing your Capital, you need to make a deposit. You can do this from the deposit section of your account.</p>
                        </div>
                        <span>02</span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <img src="{{asset('home/images/process-icon-3.png')}}" alt="icon">
                        </div>
                        <div class="part-txt">
                            <h3>Withdraw Earns</h3>
                            <p>It only takes a few seconds to initiate your withdrawals and have your earnings paid to you. All of our withdrawals are instant.</p>
                        </div>
                        <span>03</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>

        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [
                {
                    "proName": "FX_IDC:EURUSD",
                    "title": "EUR/USD"
                },
                {
                    "proName": "BITSTAMP:BTCUSD",
                    "title": "BTC/USD"
                },
                {
                    "proName": "BITSTAMP:ETHUSD",
                    "title": "ETH/USD"
                },
                {
                    "description": "DOGE/USD",
                    "proName": "BINANCE:DOGEUSDT"
                },
                {
                    "description": "LTC/USD",
                    "proName": "BINANCE:LTCUSDT"
                },
                {
                    "description": "BNB/USD",
                    "proName": "BINANCE:BNBUSDT"
                }
            ],
                "showSymbolLogo": true,
                "colorTheme": "dark",
                "isTransparent": false,
                "displayMode": "adaptive",
                "locale": "en"
            }
        </script>
    </div>
    <!-- TradingView Widget END -->

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
                                                    <h3><span></span>15%<span></span></h3>
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



    <style>
        .all-calcu{
            width: 100%;
            float: left;
            overflow: hidden;
            margin-top: 10px;
        }

        .box-1{
            float: left;
            width: 188px;
            margin-left:47px;
        }

        .box-1:first-child{
            margin-left:0px;
        }

        .box-1 select {
            width: 105%;
            font-family: inherit;
            padding: 9px 10px;
            border-radius: 5px;
            background: #273272;
            border: none;
            color: #fffbfb;
        }


        .box-1 input {
            font-family: inherit;
            padding: 9px 10px;
            color: #fdf9f9;
            text-align: center;
            border-radius: 5px;
            font-weight: bold;
            border: none;
            background: #273272;
        }

        .box-1 label{
            letter-spacing: 1px;
            font-size: 15px;
            text-align: center;
            padding-left: 34px;
            text-transform: uppercase;
        }

    </style>



    <div class="cta">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="part-txt">
                        <h2>Referral Commission {{$package->referral}}%</h2>
                        <p>Become a {{$siteName}} affiliate and enjoy high commissions for lifetime ... You'll earn {{$package->referral}}% commission every time if your downline made a deposit. There is no limitation for the commission.</p>



                        <a href="{{route('register')}}" class="def-btn def-btn-2">Invest Now</a>

                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5">
                    <div class="part-img">
                        <img src="{{asset('home/images/cta-img.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="testimonial">
        <div class="container">
            <div class="bg">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="part-txt">
                            <div class="heading heading-2 text-left">
                                <h5>Our Clients</h5>
                                <h2>What Our Customers Are Saying</h2>
                            </div>
                            <div class="controls">
                                <button class="carousel-prev"><i class="flaticon-left-arrow"></i></button>
                                <button class="carousel-next"><i class="flaticon-right-arrow"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-7 col-sm-10 col">
                        <div class="comment-area">
                            <div class="comment-slider">
                                <div class="single-comment">
                                    <p>We have been with {{$siteName}} Investment now for a year and the service I receive feels very personal. The peace of mind I have from knowing my finances is being so well managed is priceless.
                                    </p>
                                    <div class="client">
                                        <h3>Steffen Krueger</h3>

                                    </div>
                                </div>
                                <div class="single-comment">
                                    <p>It's really wonderful. I would also like to say thank you to all your staff. {{$siteName}} did exactly what you said it does.</p>
                                    <div class="client">
                                        <h3>Karel Paré</h3>

                                    </div>
                                </div>
                                <div class="single-comment">
                                    <p>Through in-depth discussion a friend of mine encourages me to regularly focus on our goals in life and then to financially plan with us to reach our financial plans and makes very good sense. I was introduced to Silver Trade Fx Limited and I made my investment with 2000 USD which I got back my profit Thank you to {{$siteName}}</p>
                                    <div class="client">
                                        <h3>Liv T. Bang</h3>

                                    </div>
                                </div>
                                <div class="single-comment">
                                    <p>{{$siteName}} is my most correct choice, I can get continuous income, I will continue to invest in {{$siteName}}, it will help me gain wealth freedom....</p>
                                    <div class="client">
                                        <h3>Bobbie M. Busch</h3>

                                    </div>
                                </div>
                                <div class="single-comment">
                                    <p>{{$siteName}} team is very professional, I have started to recommend to family, friends, and build my own team, to get passive income</p>
                                    <div class="client">
                                        <h3>Ned S. Fulks</h3>

                                    </div>
                                </div>
                            </div>
                            <div class="client-slider">

                                <!--
                        <div class="single-box">
                        <div class="img">
                        <img src="{{asset('home/images/client-1.jpg')}}" alt="image">
                        </div>
                        </div>
                        <div class="single-box">
                        <div class="img">
                        <img src="{{asset('home/images/client-2.jpg')}}" alt="image">
                        </div>
                        </div>
                        <div class="single-box">
                        <div class="img">
                        <img src="{{asset('home/images/client-3.jpg')}}" alt="image">
                        </div>
                        </div>
                        <div class="single-box">
                        <div class="img">
                        <img src="{{asset('home/images/client-4.jpg')}}" alt="image">
                        </div>
                        </div>
                        <div class="single-box">
                        <div class="img">
                        <img src="{{asset('home/images/client-5.jpg')}}" alt="image">
                        </div>
                        </div>
                        -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="process" style="margin-top: -120px !important;background: #222;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4">
                    <div class="heading">

                        <h2 style="color:#fff;">Live Market Chart</h2>
                    </div>
                </div>
            </div>
            <div class="row">



                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>

                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                        {
                            "width": 1200,
                            "height": 490,
                            "defaultColumn": "overview",
                            "screener_type": "crypto_mkt",
                            "displayCurrency": "USD",
                            "colorTheme": "light",
                            "locale": "en"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->



            </div>
        </div>
    </div>









    <!--

    <div class="blog">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-5 col-lg-6">
    <div class="heading">
    <h5>Our Statistics</h5>
    <h2>Live Statistics</h2>
    </div>
    </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-9">


    <div class="row">
    <div class="col-xl-6 col-lg-6">
    <div class="single-boxx">
            <div class="latest-row latest-row1">

                <ul>
                    <li class="title"><h3>Latest deposit</h3></li>






                                                </ul>

            </div>
    </div>
    </div>
    <div class="col-xl-6 col-lg-6">
    <div class="single-boxx">
            <div class="latest-row latest-row3">

                <ul>
                    <li class="title"><h3>Latest withdrawals</h3></li>





                                                </ul>

            </div>
    </div>
    </div>

    </div>

    </div>
    </div>
    </div>
    </div>
    -->




    <div class="partner">
        <div class="container">
            <div class="bg">
                <div class="brand-slider owl-carousel">
                    <div class="single-img">
                        <img src="{{asset('home/images/c1.png')}}" alt="logo">
                    </div>
                    <div class="single-img">
                        <img src="{{asset('home/images/c2.png')}}" alt="logo">
                    </div>
                    <div class="single-img">
                        <img src="{{asset('home/images/c3.png')}}" alt="logo">
                    </div>
                    <div class="single-img">
                        <img src="{{asset('home/images/c4.png')}}" alt="logo">
                    </div>
                    <div class="single-img">
                        <img src="{{asset('home/images/c5.png')}}" alt="logo">
                    </div>
                    <div class="single-img">
                        <img src="{{asset('home/images/c6.png')}}" alt="logo">
                    </div>
                    <div class="single-img">
                        <img src="{{asset('home/images/c3.png')}}" alt="logo">
                    </div>
                    <div class="single-img">
                        <img src="{{asset('home/images/c4.png')}}" alt="logo">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
