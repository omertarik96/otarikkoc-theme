@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    <div class="main-section bg-grey">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="card features-card">
                        <img class="img-responsive card-img" src="assets/images/blog-main-1.jpg"/>
                        <div class="card-body" style="min-height: auto">
                            <h6 style="text-align: center"> The Exam for University Entrance </h6>
                            <button class="btn btn-info btn-block">Start Now!</button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="card features-card">
                        <img class="img-responsive card-img" src="assets/images/blog-main-1.jpg"/>
                        <div class="card-body" style="min-height: auto">
                            <h6 style="text-align: center"> The Exam for University Entrance </h6>
                            <button class="btn btn-info btn-block">Start Now!</button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="card features-card">
                        <img class="img-responsive card-img" src="assets/images/blog-main-1.jpg"/>
                        <div class="card-body" style="min-height: auto">
                            <h6 style="text-align: center"> The Exam for University Entrance </h6>
                            <button class="btn btn-info btn-block">Start Now!</button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="card features-card">
                        <img class="img-responsive card-img" src="assets/images/blog-main-1.jpg"/>
                        <div class="card-body" style="min-height: auto">
                            <h6 style="text-align: center"> The Exam for University Entrance </h6>
                            <button class="btn btn-info btn-block">Start Now!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white" style="padding-top: 20px; padding-bottom: 20px;">
            <div class="container"><h2 class="h2-no-margin-b"><i class="now-ui-icons education_atom"></i> POPULAR POSTS</h2>
            </div>
            <div class="masonry-layout container">

                @php

                $query = new WP_Query( array (
                    'post_type'=> 'post',
                ))

                @endphp

             @if ($query->have_posts())
                @while ($query -> have_posts()) @php($query->the_post())
                 @include('partials.content-new-style-'.get_post_type())
                @endwhile
             @endif


                {{--<div class="masonry-layout__panel">--}}
                    {{--<div class="container-blog bg-grey masonry-layout__panel-content">--}}
                        {{--<h6 style="color: orange;">--}}
                            {{--<i class="fa fa-flask"></i> New--}}
                        {{--</h6>--}}
                        {{--<h4> The Ultimate Guide to Study Calculus and Get an A!</h4>--}}
                        {{--<p> Calculus is a class that many students have some difficulties. Use this guide and give yourself--}}
                            {{--a reward. You will be learning how to study Calculus efficiently and how to learn concepts--}}
                            {{--quickly. </p>--}}
                    {{--</div>--}}

                    {{--<div class="container-blog bg-grey masonry-layout__panel-content">--}}
                        {{--<h6 style="color: #FF3636;">--}}
                            {{--<i class="fa fa-fire"></i> Trending--}}
                        {{--</h6>--}}
                        {{--<h4> Some Post Title Goes Here Title 1</h4>--}}
                        {{--<p> Some description about the post</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="masonry-layout__panel">--}}
                    {{--<div class="container-blog bg-grey masonry-layout__panel-content">--}}
                        {{--<h6 style="color: #FF3636;">--}}
                            {{--<i class="fa fa-fire"></i> Trending--}}
                        {{--</h6>--}}
                        {{--<h4> Some Post Title Goes Here Title 1</h4>--}}
                        {{--<p> Some description about the post</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="masonry-layout__panel">--}}
                    {{--<div class="container-blog bg-grey masonry-layout__panel-content">--}}
                        {{--<h6 style="color: #FF3636;">--}}
                            {{--<i class="fa fa-fire"></i> Trending--}}
                        {{--</h6>--}}
                        {{--<h4> Some Post Title Goes Here Title 1</h4>--}}
                        {{--<p> Some description about the post</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>



@endsection