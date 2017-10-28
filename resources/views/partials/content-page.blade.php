<div class="container">
    <div class="main-section-page">
        <h1> {{ get_the_title() }} </h1>
    @php(the_content())
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </div>
</div>
</div>
