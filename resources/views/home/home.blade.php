@extends('home.base')
@section('content')
    @push('css')
        <style>
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
            small {
                font-size: 12px;
                text-transform: initial;
            }
        </style>
    @endpush


    <!-- banner slider start -->
    <section class="banner-slider__wrapper banner-slider__wrapper_2 overflow-hidden">
        <div class="slider-controls slider-controls-2">
            <div class="banner-slider-arrows d-flex flex-column"></div>
        </div>

        <div class="banner-slider_2">
            <div class="slider-item" style="background-image: url({{asset('home/serv/stock.jpg')}});">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__content">
                                <h6 class="sub-title color-white mb-15 mb-sm-15 mb-xs-10" data-animation="fadeInUp" data-delay="0.5s">
                                    Invest in the Stock Market
                                </h6>
                                <h1 class="title color-white mb-sm-30 mb-xs-20 mb-40" data-animation="fadeInUp" data-delay="1s">
                                    Grow Your Wealth<br> <span> With the Stock market</span></h1>
                                <p class="sub-title color-white mb-15 mb-sm-15 mb-xs-10 text-dark">
                                    We have a great expertise in the stock market which allows us to easily and safely trade your funds in the
                                    stock market with a guaranteed earning - using our unique trading strategy
                                </p>

                                <div class="theme-btn__wrapper mt-30">
                                    <a href="{{route('register')}}" class="theme-btn btn-sm btn__2" data-animation="fadeInUp"
                                       data-delay="1.3s">Get Started <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-element-left d-none d-lg-block">
                    <img src="{{asset('home/img/home-5/slider-shape_r.svg')}}')}}')}}" alt="">
                </div>
                <div class="shape-element-rignt d-none d-lg-block">
                    <img src="{{asset('home/img/home-5/slider-shape_l.svg')}}')}}')}}" alt="">
                </div>
            </div>

            <div class="slider-item" style="background-image: url({{asset('home/img/banner/banne-slider-1.png')}});">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__content banner__content_2">
                                <h6 class="sub-title color-white mb-15 mb-sm-15 mb-xs-10" data-animation="fadeInUp" data-delay="0.5s">
                                    Solution for Novice
                                </h6>
                                <h1 class="title color-white mb-sm-30 mb-xs-20 mb-40" data-animation="fadeInUp" data-delay="1s">Navigate the financial
                                    <br> <span>Market with Confidence</span></h1>
                                <p class="sub-title color-white mb-15 mb-sm-15 mb-xs-10">
                                    Unlock the power the financial market - forex, stocks, real estate, oil and gas etc, with the help of experts
                                </p>

                                <div class="theme-btn__wrapper mt-30">
                                    <a href="{{route('register')}}" class="theme-btn btn-sm btn__2" data-animation="fadeInUp" data-delay="1.3s">Get Started <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-element-left d-none d-lg-block">
                    <img src="{{asset('home/img/home-5/slider-shape_r.svg')}}')}}')}}" alt="">
                </div>
                <div class="shape-element-rignt d-none d-lg-block">
                    <img src="{{asset('home/img/home-5/slider-shape_l.svg')}}')}}')}}" alt="">
                </div>
            </div>

            <div class="slider-item" style="background-image: url({{asset('home/serv/1.jpg')}});">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__content banner__content_2">
                                <h6 class="sub-title color-white mb-15 mb-sm-15 mb-xs-10" data-animation="fadeInUp" data-delay="0.5s">
                                    Plan for Retirement
                                </h6>
                                <h1 class="title color-white mb-sm-30 mb-xs-20 mb-40" data-animation="fadeInUp" data-delay="1s">Secure your Tomorrow <br> <span>Today</span></h1>
                                <p class="sub-title color-white mb-15 mb-sm-15 mb-xs-10 text-dark">
                                    Not only do we offer you the opportunity to grow your wealth today, we also allow you stock up for your
                                    retirement plans - making retirement an euphoria you dream and live everyday
                                </p>

                                <div class="theme-btn__wrapper mt-30">
                                    <a href="{{route('register')}}" class="theme-btn btn-sm btn__2" data-animation="fadeInUp" data-delay="1.3s">Get Started <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-element-left d-none d-lg-block">
                    <img src="{{asset('home/img/home-5/slider-shape_r.svg')}}')}}')}}" alt="">
                </div>
                <div class="shape-element-rignt d-none d-lg-block">
                    <img src="{{asset('home/img/home-5/slider-shape_l.svg')}}')}}')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- banner slider end -->

    <!-- competitive-edge start -->
    <section class="competitive-edge competitive-edge_2 overflow-hidden">
        <div class="container">
            <div class="fauture__element bg-center bg-cover " style="background-image: url({{asset('home/img/home-5/banner_03.png')}});">
                <div class="row">
                    <div class=" col-lg-4 col-md-12 mt-30">
                        <div class="fauture__widget">
                            <div class="fauture__icons">
                                <div class="icon"><i class="fal fa-analytics"></i></div>
                                <h4>01</h4>
                            </div>
                            <div class="fauture__content">
                                <h4>Build Your Future With Right Way</h4>
                                <p>There are many variations of packages to select from and earn</p>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-4 col-md-12 mt-30">
                        <div class="fauture__widget">
                            <div class="fauture__icons">
                                <div class="icon">
                                    <i class="icon-like-comment"></i>
                                </div>
                                <h4>02</h4>
                            </div>
                            <div class="fauture__content">
                                <h4>We Take Care for the growth of your assets</h4>
                                <p>With our experts, we are always available to take care of your investments</p>
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-4 col-md-12 mt-30">
                        <div class="fauture__widget">
                            <div class="fauture__icons">
                                <div class="icon">
                                    <i class="icon-teamwork-1"></i>
                                </div>
                                <h4>03</h4>
                            </div>
                            <div class="fauture__content">
                                <h4>Financial Projections And Analysis</h4>
                                <p>A well-detailed financial analysis for your investment right in your dashboard.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="staff__widget mt-30">
                            <span> Our nearly 120+ staff are ready to help you? <i class="fas fa-paper-plane"></i> <a href="{{route('register')}}">Get Started</a> </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- competitive-edge end -->

    <!-- about__wrapper start -->
    <section class="about__wrapper section-padding  overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-7 col-sm-6">
                    <div class="about_img">
                        <img src="{{asset('home/img/home-5/work_01.png')}}" class="img-fluid" alt>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-6">
                    <div class="about_widget">
                        <img src="{{asset('home/img/home-5/about_01.png')}}" class="img-fluid" alt>
                        <div class="d-flex align-items-center years-experience years-experience_tow  overflow-hidden mt-20 mt-sm-10 mt-xs-10">
                            <div class="icons color-secondary">
                                <i class="icon-teamwork-1"></i>
                            </div>
                            <div class="number">
                                <span class="counter mb-3">13</span><sup>+</sup>
                                <h5 class="title">Years Experience</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-5 col-md-12 ">
                    <div class="section-title section-title_2">
                        <h5><img src="{{asset('home/img/home-5/bage.svg')}}')}}')}}" alt> About Us</h5>
                        <h2 class="mb-20">We Create a Culture That Inspires Us To Work Smart <span>Together</span></h2>
                        <p>
                            Founded in 2010, we are a global investment agency helping individuals build their financial dreams into reality. From a humble beginning, we have grown to become a notable force in the investment industry with over 40K+ users.
                        </p>
                    </div>
                    <div class="about_content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="icons">
                                        <i class="icon-teamwork-1"></i>
                                    </div>
                                    <h5>AI-Integrated</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="icons">
                                        <i class="icon-teamwork-1"></i>
                                    </div>
                                    <h5>Financial Prudence</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Looking for the best investment agency to help you grow your wealth? </p>
                    <a href="{{url('about')}}" class="theme-btn btn__2">Read More <i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- about__wrapper end -->

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

    <!-- working_wrapper start-->
    <section class="working_wrapper section-padding overflow-hidden">
        <div class="container">
            <div class="row align-items-center mb-30">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title section-title_2 text-center">
                        <h5> <img src="{{asset('home/img/home-5/bage.svg')}}')}}')}}" alt> Work Process</h5>
                        <h2>Our Working Process</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 mt-30 position-relative">
                    <div class="process__widget process__widget_2 text-center">
                        <div class="icon__widget">
                            <div class="icons">
                                <i class="icon-outline"></i>
                            </div>
                        </div>
                        <h4>Registration</h4>
                        <p>Simply Register an account to join us</p>
                    </div>
                    <div class="arrow__element d-none d-md-block">
                        <img src="{{asset('home/img/home-5/arrow_r_01.svg')}}')}}')}}" alt>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-30 position-relative">
                    <div class="process__widget process__widget_2 text-center">
                        <div class="icon__widget">
                            <div class="icons">
                                <i class="icon-outline"></i>
                            </div>
                        </div>
                        <h4>Select Package & Deposit</h4>
                        <p>Select the package that best fits your need and deposit to activate it</p>
                    </div>
                    <div class="arrow__element d-none d-md-block">
                        <img src="{{asset('home/img/home-5/arrow_r_01.svg')}}')}}')}}" alt>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-30 position-relative">
                    <div class="process__widget process__widget_2 text-center">
                        <div class="icon__widget">
                            <div class="icons">
                                <i class="icon-outline"></i>
                            </div>
                        </div>
                        <h4>Strategy & Planning</h4>
                        <p>Upon activation of your package, our staff plan the best investent approach that guarantees the best return</p>
                    </div>
                    <div class="arrow__element d-none d-lg-block">
                        <img src="{{asset('home/img/home-5/arrow_r_01.svg')}}')}}')}}" alt>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-30 position-relative">
                    <div class="process__widget process__widget_2 text-center">
                        <div class="icon__widget">
                            <div class="icons">
                                <i class="icon-outline"></i>
                            </div>
                        </div>
                        <h4>Earn & Withdraw</h4>
                        <p>
                            With successful planning, you earn and can withdraw or reinvest your earnings to stock up for
                            retirememnt
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- working_wrapper end-->
    <!-- fun-fact_wrapper start -->
    <section class="fun-fact_wrapper section-padding bg-center bg-cover overflow-hidden" style="background-image: url({{asset('home/img/home-5/bg_02.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="section-title ">
                        <h2 class="text-white">More than 13 years of experience</h2>
                        <img src="{{asset('home/img/home-5/bage_02.svg')}}')}}')}}" alt="">
                        <h5 class="text-white">30000+ our clients are insured around the World</h5>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="row">
                        <div class="col-md-6 mt-30">
                            <div class="counter-area__item counter-area__item-fore d-flex align-items-center">
                                <div class="icon color-yellow">
                                    <i class="icon-process-1"></i>
                                </div>

                                <div class="text">
                                    <div class="number fw-600 color-yellow"><span class="counter">56200</span>+</div>
                                    <div class="description font-la text-white">Successful Investments</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mt-30">
                            <div class="counter-area__item counter-area__item-fore  d-flex align-items-center">
                                <div class="icon color-yellow">
                                    <i class="icon-support-2"></i>
                                </div>

                                <div class="text">
                                    <div class="number fw-600 color-yellow"><span class="counter">120</span>+</div>
                                    <div class="description font-la text-white">Expert Staff</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mt-30">
                            <div class="counter-area__item counter-area__item-fore  d-flex align-items-center">
                                <div class="icon color-yellow">
                                    <i class="icon-coffee-2"></i>
                                </div>

                                <div class="text">
                                    <div class="number fw-600 color-yellow"><span class="counter">10</span>+</div>
                                    <div class="description font-la text-white">Awards Received</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mt-30">
                            <div class="counter-area__item counter-area__item-fore d-flex align-items-center">
                                <div class="icon color-yellow">
                                    <i class="icon-teamwork-1"></i>
                                </div>

                                <div class="text">
                                    <div class="number fw-600 color-yellow"><span class="counter">323</span>M+</div>
                                    <div class="description font-la text-white">Successful Payouts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fun-fact_wrapper start -->

    <!-- Our Testimonials start -->

    <section class="testimonial_wrapper section-padding overflow-hidden">
        <div class="container">
            <div class="row align-items-center mb-60">
                <div class="col-lg-8 col-md-8">
                    <div class="section-title section-title_2">
                        <h5> <img src="{{asset('home/img/home-5/bage.svg')}}')}}')}}" alt=""> testimonials</h5>
                        <h2>Our Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial_element">

                <div class="slingle_agent">
                    <div class="d-flex">
                        <div class="agent_author">
                            <div class="author">
                                <img src="https://ui-avatars.com/api/?name=Silver+alex" alt="">
                            </div>
                            <div class="quote">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="agent_content">
                            <div class="authoe_name">
                                <h4>Silver Alex</h4>
                                <h5>Investor</h5>
                            </div>
                            <p>
                                Investing with {{$siteName}} has been a game-changer for my financial world.
                                My first investment of $150 grew to yield over $1000 and that increased my faith in them.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="slingle_agent">
                    <div class="d-flex">
                        <div class="agent_author">
                            <div class="author">
                                <img src="https://ui-avatars.com/api/?name=Sarah+T" alt="">
                            </div>
                            <div class="quote">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="agent_content">
                            <div class="authoe_name">
                                <h4>Sarah T.</h4>
                                <h5>Investor</h5>
                            </div>
                            <p>
                                {{$siteName}} is simply the best. I started out trading cryptocurrencies on Binance but
                                after so many losses, I decided to seek for a real Broker to help me;{{$siteName}} has been
                                that real broker for me for the past 1 year
                            </p>
                        </div>
                    </div>
                </div>

                <div class="slingle_agent">
                    <div class="d-flex">
                        <div class="agent_author">
                            <div class="author">
                                <img src="https://ui-avatars.com/api/?name=Elizabeth+L" alt="">
                            </div>
                            <div class="quote">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="agent_content">
                            <div class="authoe_name">
                                <h4>Elizabeth (Layla)</h4>
                                <h5>Investor</h5>
                            </div>
                            <p>
                                Navigating the world of financial freedom has been a hectic journey for me until I met with
                                {{$siteName}}. Since then, I just relax and plan my vacation from my returns on {{$siteName}}.
                            </p>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- Our Testimonials end -->

    <div class="pricing-area" style="margin-bottom: 5rem;margin-top: 5rem;">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Our Packages</span>
                <h2>Specialized Investment Packages</h2>
            </div>
            <div class="row justify-content-center">
                @foreach($packages as $package)
                    @inject('option','App\Defaults\Custom')
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-price">
                            <div class="deal-top">
                                <h3>{{$package->name}}</h3>
                                <h4> {{$package->roi}}%/ <span class="sup">{{$option->getReturnType($package->returnType)}}</span> </h4>
                                <small class="text-white">{{$package->note}}</small>
                            </div>
                            <div class="deal-bottom">
                                <ul class="deal-item">
                                    <li>
                                        Price: ${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                            ${{number_format($package->maxAmount,2)}}
                                        @else
                                            Unlimited
                                        @endif
                                    </li>
                                    <li>Profit return: {{$package->roi}}% {{$option->getReturnType($package->returnType)}}</li>
                                    <li>Contract Duration: {{$package->Duration}}</li>
                                    <li>Referral Bonus: {{$package->referral}}% </li>
                                </ul>
                                <div class="btn-area">
                                    <a href="{{route('register')}}">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- Start Blog Area -->
    <div class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Latest Transactions</span>
                <h2>Most Recent Transactions</h2>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="sec-title_title" style="margin-bottom: 3rem;margin-top: 3rem;">Recent Deposits</div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                        <tr>
                            <th>Name</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($deposits as $deposit)
                            @inject('option','App\Defaults\Custom')
                            <tr>
                                <td>{{$option->getInvestor($deposit->user)}}</td>
                                <td>${{number_format($deposit->amount,2)}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>

                <div class="col-md-6">
                    <div class="sec-title_title" style="margin-bottom: 3rem;margin-top: 3rem;">Latest Withdrawals</div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                        <tr>
                            <th>Name</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($withdrawals as $withdrawal)
                            @inject('option','App\Defaults\Custom')
                            <tr>
                                <td>{{$option->getInvestor($withdrawal->user)}}</td>
                                <td>${{number_format($withdrawal->amount,2)}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        </section>
        <!-- End News One -->

        <!-- Our Blog start -->

        <section class="blog_wrapper section-padding overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 mb-30">
                        <div class="section-title section-title_2 text-center">
                            <h5><img src="{{asset('home/img/home-5/bage_02.svg')}}')}}')}}" alt=""> Blog & News</h5>
                            <h2 class="text-white"> Latest Blog & News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12 mt-30">
                        <div class="single_blog">
                            <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                            <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Our Blog end -->


@endsection
