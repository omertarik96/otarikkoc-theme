@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    @if (!have_posts())
        <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
    @endif

    <div class="bg-grey">
        <div class="container main-section">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-4">
                    <div class="container-content bg-white">
                        <div class="blog posts">
                            @while (have_posts()) @php(the_post())
                             @include('partials.content-'.get_post_type())
                            @endwhile
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    @include('partials/sidebar')
                </div>
            </div>
        </div>
    </div>
    {!! get_the_posts_navigation() !!}
@endsection
