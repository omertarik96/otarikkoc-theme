@extends('layouts.app')
<div class="container">
    @section('content')
      @while(have_posts()) @php(the_post())
        @include('partials.page-header')
        @include('partials.content-page')
      @endwhile
    @endsection
</div>