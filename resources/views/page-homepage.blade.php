@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    <div class="main-section bg-grey">
        {{--   Exams Section   --}}
        <div class="container homepage-exam-section">
            <div class=""><h2 class="h2-no-margin-t"><i class="fa fa-pencil"></i> SINAVLAR </h2> </div>
            <div class="row">
                @if(have_rows('exams'))
                    @while(have_rows('exams')) @php(the_row())
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <a href="@php(the_sub_field('exam_link'))">
                                <div class="card features-card">
                                    <img class="homepage-exams-img img-responsive card-img" src="@php(the_sub_field('exam_image'))" alt="@php(the_sub_field('exam_title'))"/>
                                    <button class="homepage-exams-btn btn btn-info btn-block ">@php(_e('Şimdi Başla!', 'sage'))</button>
                                </div>
                            </a>
                        </div>
                    @endwhile

                @endif
            </div>
        </div>

         {{--Popular Blog Post Section       --}}
        <div class="bg-white" style="padding-top: 20px; padding-bottom: 20px;">
            <div class="container popular-post-container"><h2 class="h2-no-margin-b"><i class="fa fa-rocket"></i> POPÜLER YAZILAR</h2></div>
            <div class="masonry-layout container">
                {{-- Wp Query for getting posts instead of pages      --}}
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
            </div>

@endsection