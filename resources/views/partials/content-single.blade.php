{{--<article @php(post_class())>--}}
  {{--<header>--}}
    {{--<h1 class="entry-title">{{ get_the_title() }}</h1>--}}
    {{--@include('partials/entry-meta')--}}
  {{--</header>--}}
  {{--<div class="entry-content">--}}
    {{--@php(the_content())--}}
  {{--</div>--}}
  {{--<footer>--}}
    {{--{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}--}}
  {{--</footer>--}}
  {{--@php(comments_template('/partials/comments.blade.php'))--}}
{{--</article>--}}


<div class="main-section bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-8 col-lg-8 ">

        <div class="container-content bg-white">
          <ul class="social-share-count">
            <li><span>60 SHARES</span></li>
            <li><span> 20 </span> <i class="fa fa-facebook-square fa"></i></li>
            <li><span> 20 </span> <i class="fa fa-twitter-square fa"></i></li>
            <li><span> 20 </span> <i class="fa fa-linkedin-square fa"></i></li>
          </ul>
          <article>
            <h1> {{ get_the_title() }} </h1>
            @include('partials/entry-meta')
            <img src="{{ get_the_post_thumbnail_url() }}" alt="{{ get_the_post_thumbnail_caption() }}" class="img-responsive img-blog-main"/>
            <p>@php(the_content())</p>

            <span>{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}</span>
          </article>
        </div>

        <div class="bg-white comments-container">
          <div class="container">
            @php(comments_template('/partials/comments.blade.php'))
          </div>
        </div>
      </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="container-sidebar">
                @php(get_sidebar('primary'))
            </div>
        </div>