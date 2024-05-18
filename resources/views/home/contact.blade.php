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




@endsection
