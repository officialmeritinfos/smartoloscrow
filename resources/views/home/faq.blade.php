@extends('home.base')
@section('content')
    <div class="breadcrumb blog-breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4">
                    <div class="part-txt">

                        <h1>{{$pageName}}</h1>
                        <ul>
                            <li>Home</li>
                            <li>-</li>
                            <li>{{$pageName}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="faq faq-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4">
                    <div class="heading">
                        <h5>REPEATEDLY ASKED QUESTIONS</h5>
                        <h2>Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="part-txt">
                        <div id="accordion">
                            <div class="row justify-content-center faq-inner-2">
                                <div class="col-xl-6 col-lg-7 col-md-9">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    How can I invest with {{$siteName}} ?
                                                    <span><i class="flaticon-arrow-down-sign-to-navigate"></i></span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>To make a investment you must first become a member of {{$siteName}} . Once
                                                    you are signed up, you can make your first deposit. All deposits must be made
                                                    through the Members Area. You can login using the member username and password
                                                    you receive when signup.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    I wish to invest with {{$siteName}} but I don't have an any ecurrency account. What
                                                    should I do?
                                                    <span><i class="flaticon-arrow-down-sign-to-navigate"></i></span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>LYou can open a free Bitcoin account here: <a href="http://www.bitcoin.com/">www.blockchain.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    How do I open my {{$siteName}}  Account?
                                                    <span><i class="flaticon-arrow-down-sign-to-navigate"></i></span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>It's quite easy and convenient. Follow this <a href="{{route('register')}}">link</a>, fill
                                                    in the registration form and then press "Register".</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h5 class="mb-0">
                                                <button class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Which e-currencies do you accept?
                                                    <span><i class="flaticon-arrow-down-sign-to-navigate"></i></span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>We accept

                                                    Bitcoin and Ethereum.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingFive">
                                            <h5 class="mb-0">
                                                <button class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    Can I make an additional deposit to {{$siteName}}  account once it has
                                                    been opened?
                                                    <span><i class="flaticon-arrow-down-sign-to-navigate"></i></span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Yes, you can but all transactions are handled separately.</p>
                                            </div>
                                        </div>
                                    </div>










                                    <div class="card">
                                        <div class="card-header" id="headingFit">
                                            <h5 class="mb-0">
                                                <button class="collapsed" data-toggle="collapse" data-target="#collapseFit" aria-expanded="false" aria-controls="collapseFit">
                                                    May I open several accounts in your program?
                                                    <span><i class="flaticon-arrow-down-sign-to-navigate"></i></span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFit" class="collapse" aria-labelledby="headingFit" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>No. If we find that one member has more than one account, the entire funds will
                                                    be frozen.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingFiw">
                                            <h5 class="mb-0">
                                                <button class="collapsed" data-toggle="collapse" data-target="#collapseFiw" aria-expanded="false" aria-controls="collapseFiw">
                                                    Who manages the funds?
                                                    <span><i class="flaticon-arrow-down-sign-to-navigate"></i></span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFiw" class="collapse" aria-labelledby="headingFiw" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>These funds are managed by a team of {{$siteName}}  investment experts.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingFiz">
                                            <h5 class="mb-0">
                                                <button class="collapsed" data-toggle="collapse" data-target="#collapseFiz" aria-expanded="false" aria-controls="collapseFiz">
                                                    How can I change my password?
                                                    <span><i class="flaticon-arrow-down-sign-to-navigate"></i></span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFiz" class="collapse" aria-labelledby="headingFiz" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>You can change your password directly from your members area by editing it in
                                                    your personal profile.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header" id="headingFic">
                                            <h5 class="mb-0">
                                                <button class="collapsed" data-toggle="collapse" data-target="#collapseFic" aria-expanded="false" aria-controls="collapseFic">
                                                    After I make a withdrawal request, when will the funds be available on my
                                                    ecurrency account?
                                                    <span><i class="flaticon-arrow-down-sign-to-navigate"></i></span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFic" class="collapse" aria-labelledby="headingFic" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Funds are usually available instantly.</p>
                                            </div>
                                        </div>
                                    </div>















                                </div>
                                <div class="col-xl-6 col-lg-5 col-md-9">
                                    <div class="part-img">
                                        <img src="{{asset('home/images/faq-img-1.png')}}" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
