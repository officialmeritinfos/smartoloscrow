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

    <!-- Start Services Details Area -->
    <div class="services-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="services-details-desc">
                        <h3>{{$service->title}}</h3>
                        <p>{{$service->short}}</p>
                        <img src="{{asset('home/serv/'.$service->photo)}}" alt="image">
                        <p>
                            {!! str_replace('MYSITE',$siteName,$service->content) !!}
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
