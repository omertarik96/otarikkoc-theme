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
           @php(ea_share()->front->display())
          <article>
            <h1> {{ get_the_title() }} </h1>
            @include('partials/entry-meta')
              <div  class="ad-in-post">
                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                  <!-- Link Ad Ust Responsive -->
                  <ins class="adsbygoogle"
                       style="display:block"
                       data-ad-client="ca-pub-6390383752842547"
                       data-ad-slot="7121176518"
                       data-ad-format="link"></ins>
                  <script>
                      (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
              </div>
            <img src="{{ get_the_post_thumbnail_url() }}" alt="{{ get_the_post_thumbnail_caption() }}" class="img-responsive img-blog-main"/>
              <div class="ad-in-post">
                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                  <!-- Link Sidebar Responsive -->
                  <ins class="adsbygoogle"
                       style="display:block"
                       data-ad-client="ca-pub-6390383752842547"
                       data-ad-slot="1074642913"
                       data-ad-format="link"></ins>
                  <script>
                      (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
              </div>

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
            <div class="">
                @include('partials/sidebar')
            </div>
        </div>