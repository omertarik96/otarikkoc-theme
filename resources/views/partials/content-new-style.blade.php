<article @php(post_class())>
    <div class="masonry-layout__panel">
        <a href="{{get_post_permalink()}}">
            <div class="container-blog bg-grey masonry-layout__panel-content">
                {{--Showing different styles regarding to tag--}}
                @if(has_tag('trending'))
                    <div class="meta-category">
                        <h6 style="color: #FF3636;">
                            <i class="fa fa-fire"></i> Trending
                        </h6>
                    </div>
                @endif
                @if(has_tag('new'))
                    <div class="meta-category">
                        <h6 style="color: orange;">
                            <i class="fa fa-flask"></i> New
                        </h6>
                    </div>
                 @endif
                {{--<img src="{{get_the_post_thumbnail_url()}}" /> --}}
                <h4> {{ get_the_title() }}</h4>
            </div>
        </a>
    </div>
</article>