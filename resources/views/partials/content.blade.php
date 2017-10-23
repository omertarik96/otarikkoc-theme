{{--<article @php(post_class())>--}}
  {{--<header>--}}
    {{--<h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>--}}
    {{--@include('partials/entry-meta')--}}
  {{--</header>--}}
  {{--<div class="entry-summary">--}}
    {{--@php(the_excerpt())--}}
  {{--</div>--}}
{{--</article>--}}

<article @php(post_class())>
    <div class="blog-post">
      <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
          <img class="img-fluid img-raised blog-post-img"
               src="{{ get_the_post_thumbnail_url()  }}"/>
        </div>
        <div class="col-sm-8 col-md-8 col-md-8 ">
          <ul class="blog-post-meta">
            <li class="update-date"><i class="fa fa-clock-o"></i><span> 24 July 2017 </span>
            </li>
          </ul>
          <h2 class="blog-post-list-title"> <a href="{{ get_permalink() }}">{{ get_the_title() }}</a> </h2>
            <div class="entry-summary">
                @php(the_excerpt())
            </div>
        </div>
      </div>
    </div>
</article>