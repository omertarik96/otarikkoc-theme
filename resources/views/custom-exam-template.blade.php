{{--
  Template Name: Exam Main Page
--}}

@extends('layouts.app')

@section('content')
    @php
    $exam_header = get_field('exam_header_details');
    @endphp
    @if($exam_header)
    <div class="page-header-image skew-y-6 bg-main-color" data-parallax="false">
        <div class="container container-promo inverse-skew-y-6">
            <h1>{{$exam_header['exam_title']}} </h1>
            <p>{{$exam_header['exam_explanation']}}</p>
            <a href="{{$exam_header['button_link']}}">
                <button class="btn ">{{$exam_header['button_text']}}</button>
            </a>
        </div>
    </div>
    @endif

    <div class="bg-grey" style="padding-bottom: 40px;">
        <div class="container">
            <div class="row">
                @if(have_rows('exam_page_details'))
                    @while(have_rows('exam_page_details')) @php(the_row())
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <a href="@php(the_sub_field('exam_card_link'))">
                            <div class="card features-card">
                                <img class="img-responsive card-img" src="@php(the_sub_field('exam_card_image'))" alt="@php(the_sub_field('exam_card_title'))"/>
                                <div class="card-body">
                                    <h2>@php(the_sub_field('exam_card_title'))</h2>
                                    <div class="card-description"><p>@php(the_sub_field('exam_card_description'))</p></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endwhile
                @endif
            </div>
        </div>
    </div>

    {{--Popular Blog Post Section A Query Using the Category     --}}
    <div class="bg-white" style="padding-top: 20px; padding-bottom: 20px;">
        <div class="container popular-post-container"><h2 class="h2-no-margin-b"><i class="fa fa-rocket"></i> POPÜLER YAZILAR</h2></div>
        <div class="masonry-layout container">
            {{-- Wp Query for getting posts instead of pages      --}}
            @php
                $exam_category_id = get_field('exam_category');
                $query = new WP_Query( array (
                        'post_type'=> 'post',
                        'tax_query'=> array(
                                   array(
                                    'taxonomy' => 'category',
                                    'terms'    =>  $exam_category_id,
                                    'field'    => 'term_id',
                                   ),
                        ),

                 ))
            @endphp

            @if ($query->have_posts())
                @while ($query -> have_posts()) @php($query->the_post())
                @include('partials.content-new-style-'.get_post_type())
                @endwhile
            @endif
        </div>

@endsection
