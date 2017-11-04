{{--@if(is_active_sidebar('sidebar-main'))--}}
    {{--@php(dynamic_sidebar('sidebar-main))--}}
{{--@endif--}}

@php
    $post_category_ids = get_the_category();
    $query = new WP_Query( array (
        'post_type'     => 'post',
        'order'         => 'DESC',
        'order_by'      => 'comment_count',
        'showposts' => '3',
        'tax_query'=> array(
                               array(
                                'taxonomy' => 'category',
                                'terms'    =>  $post_category_ids[0],
                                'field'    => 'term_id',
                               ),
                    ),
    ))

@endphp

<div class="main-sidebar">
    @if(in_category('yks') )
    {{--Edebiyat Semineri Reklam--}}
    <div class="sidebar-ad">
        <a href="http://edebiyatseminerleri.com" rel="nofollow">
            <img src="https://otarikkoc.com/wp-content/uploads/2017/11/300x250.jpg" />
        </a>
    </div>
    @endif

    {{--Popular Posts By Comment Using the Category of the Post--}}
    <div class="sidebar-popular-posts-container ">
        <div class="sidebar-popular-posts ">

            @if ($query->have_posts())
                @while ($query -> have_posts()) @php($query->the_post())

                <a href="{{ get_post_permalink() }}">
                    <div class="container-blog">
                        <h6 style="color: #FF3636;">
                            <i class="fa fa-fire"></i> Popüler
                        </h6>
                        <h6> {{ get_the_title() }}</h6>
                    </div>
                </a>

                @endwhile
            @endif

        </div>
    </div>
</div>
