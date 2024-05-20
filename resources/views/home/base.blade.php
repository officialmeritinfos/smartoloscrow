

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">

    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="Comprehensive financial advice and investment services that are tailored to meet your individual needs."/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->logo)}}" />
    @stack('css')
    <link rel="stylesheet" href="{{asset('home/flaticon/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('home/css/odometer.min.css')}}">

    <link rel="stylesheet" href="{{asset('home/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('home/css/slick.css')}}">

    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">

    <style>
        .watkey {
            z-index: 9;
            position: fixed;
            bottom: 15px;
            left: 15px;
            padding: 4px;
            border: 1px solid #0d9f16;
            border-radius: 50%;
        }

    </style>

    <style>
        /* Custom CSS for the Float widget */
        .telegram-float-widget {
            position: fixed;
            left: 10px;
            /* Adjust the left positioning as needed */
            bottom: 20px;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }

        .whatsapp-float-widget {
            position: fixed;
            left: 70px;
            /* Adjust the left positioning as needed */
            bottom: 10px;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }
    </style>

    <style>

        .yt-servicelink {
            display:none !important;
        }

    </style>
</head>
<body>
@inject('injected','App\Defaults\Custom')

<div class="preloader">
    <div class="loader"><img src="{{asset('home/images/spinner.gif')}}" alt="image"></div>
</div>


<div class="header">
    <div class="top-header">
        <div class="container">
            <div class="row no-gutters justify-content-between align-items-center">
                <div class="col-xl-4 col-lg-5 col-sm-8">
                    <div class="top-left">
                        <ul>
                            <li><i class="flaticon-message"></i><span>{{$web->email}}</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-4 d-flex justify-content-sm-end justify-content-center">
                    <div class="top-right">
                        <div id="google_translate_element"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="bg">
            <div class="container">
                <div class="bg-2">
                    <div class="bg-3">
                        <div class="row">
                            <div class="d-xl-none d-lg-none col-4">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="flaticon-menu-button-of-three-horizontal-lines"></i>
                                </button>
                            </div>
                            <div class="col-xl-2 col-lg-1 col-4 d-flex align-items-center">
                                <div class="logo">
                                    <a href="#">
                                        <img src="{{asset('home/images/'.$web->logo)}}" alt="LOGO">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-9 next">
                                <nav class="navbar navbar-expand-lg navbar-light">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{url('/')}}">HOME</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{url('about')}}">ABOUT</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{url('faq')}}">FAQ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('register')}}">SIGNUP</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('login')}}">LOGIN</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="{{url('contact')}}">CONTACTS</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<style>

    .yt-servicelink {
        display:none !important;
    }

</style>



@yield('content')



<div class="footer footer-inner">
    <div class="container">
        <div class="main-footer">
            <div class="row justify-content-between">
                <div class="col-xl-2 col-lg-2 col-sm-6">
                    <div class="about-txt">
                        <h3>{{$siteName}}</h3>
                        <p>{{$siteName}} company is global structure allows us to offer a wide range of products and consulting services, expanding our ability to provide best in class solutions to our customers.</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-6">
                    <div class="link">
                        <h3>Useful Links</h3>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('about')}}">About</a></li>
                            <li><a href="{{url('faq')}}">FAQ's</a></li>
                            <li><a href="{{asset('home/phxvest.pdf')}}" target="_blank">Company's Profile</a></li>
                            <li><a href="{{asset('home/phxvest-turk.pdf')}}" target="_blank">Company's Profile In Turkish</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-6">
                    <div class="link">
                        <h3>Our Services</h3>
                        <ul>
                            <li><a href="{{url('terms')}}">Terms</a></li>
                            <li><a href="{{route('register')}}">Sign Up</a></li>
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{url('contact')}}">Support</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="about-txt newsletter">
                        <h3>Contact Info</h3>
                        <ul>
                            <li><span><i class="flaticon-pin"></i></span>{!! $web->address !!}
                            </li>
                            <li><span><i class="flaticon-message"></i></span>{{$web->email}}</li>
                        </ul><br>




                        <br>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <h5 style="margin-bottom: -15px; color: #fff;" >CLICK AND VERIFY</h5><br><br>

    <div class="copyright">



        <div class="link">
            <a href="#"><img src="{{asset('home/380com.png')}}" alt="" width="65%" height="25%" ></a>


            <a href="#"><img src="{{asset('home/lei6yht.png')}}" alt="" width="65%" height="25%" ></a>
            <br><br>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <p>Copyright &copy; 2017 - {{date('Y')}} {{$siteName}} All Rights Reserved</p>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="link">
                        <a href="{{url('about')}}">About</a>
                        <a href="{{url('terms')}}">Terms</a>
                        <a href="{{url('contact')}}">Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- Google language End -->
<script src="{{asset('home/js/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset('home/js/jquery.flagstrap.min.js')}}"></script>

<script src="{{asset('home/js/jquery.appear.min.js')}}"></script>

<script src="{{asset('home/js/odometer.min.js')}}"></script>

<script src="{{asset('home/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('home/js/slick.min.js')}}"></script>

<script src="{{asset('home/js/video.popup.js')}}"></script>

<script src="{{asset('home/js/popper.min.js')}}"></script>

<script src="{{asset('home/js/bootstrap.min.js')}}"></script>

<script src="{{asset('home/js/main.js')}}"></script>





<style>

    .sc-7dvmpp-1 {
        display: none !important;
    }
</style>



<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = 'e0ff51c089a93445b7b5605bf47a5687e4189ce9';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier{
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
    }
    .notifier a {
        font-weight: 700;
        display: block;
        color:#0080FF;
    }
    .notifier a, .notifier a:active {
        transition: all .2s ease;
        color:#0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script><script type="text/javascript">
    var listCountries = ['Germany', 'Spain', 'Russia', 'Italy',
        'Italy',  'United States', 'Egypt',
        'United Kingdom', "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy","Ukraine"
    ];
    var listPlans = ['$500','$5000','$1,000','$1000','$550','$3000','$690', '$360',
        '$700', '$600',"$500","$700","$1,000","$1289","$5000","$7000","$10000"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->

{{--<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>--}}
{{--<script>--}}
{{--    var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"WhatsApp Us","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"left","whatsAppNumber":"{{$web->phone}}","welcomeMessage":"Hello","zIndex":999999,"btnColorScheme":"light"};--}}
{{--    window.onload = () => {--}}
{{--        _waEmbed(wa_btnSetting);--}}
{{--    };--}}
{{--</script>--}}

<!-- Telegram Float Widget -->
<div class="telegram-float-widget">
    <a href="https://wa.me/{{$web->phone}}" target="_blank">
        <img src="https://cdn2.iconfinder.com/data/icons/social-media-applications/64/social_media_applications_23-whatsapp-256.png" alt="" width="50">
    </a>
</div>


<style>

    /*#google_translate_element {*/
    /*    z-index: 9999999;*/
    /*    position: fixed;*/
    /*    bottom: 25px;*/
    /*    left: 15px;*/
    /*}*/

    /*.goog-te-gadget {*/
    /*    font-family: Roboto, "Open Sans", sans-serif !important;*/
    /*    text-transform: uppercase;*/
    /*}*/
    /*.goog-te-gadget-simple*/
    /*{*/
    /*    padding: 0px !important;*/
    /*    line-height: 1.428571429;*/
    /*    color: white;*/
    /*    vertical-align: middle;*/
    /*    background-color: black;*/
    /*    border: 1px solid #a5a5a599;*/
    /*    border-radius: 4px;*/
    /*    float: right;*/
    /*    margin-top: -4px;*/
    /*    z-index: 999999;*/
    /*}*/
    /*.goog-te-banner-frame.skiptranslate*/
    /*{*/
    /*    display: none !important;*/
    /*    color: white;*/
    /*}*/
    /*.goog-te-gadget-icon*/
    /*{*/
    /*    background: none !important;*/
    /*    display: none;*/
    /*    color: white;*/
    /*}*/
    /*.goog-te-gadget-simple .goog-te-menu-value*/
    /*{*/
    /*    font-size: 12px;*/
    /*    color: white;*/
    /*    font-family: 'Open Sans' , sans-serif;*/
    /*}*/
</style>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- Google language End -->
</body>
</html>
