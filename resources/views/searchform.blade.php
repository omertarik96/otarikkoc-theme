@php( $unique_id = esc_attr( uniqid('search-form')); )

<form role="search" method="get" class="search-form" action="{{ esc_url( home_url('/'))  }}">
    <div class="input-group" >
        <input type="search" id="{{  $unique_id }}" class="form-control" name="s" value="{{ the_search_query() }}" placeholder="{{ _e('Search', 'sage') }}">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-danger"> <i class="fa fa-search"></i> </button>
        </span>
    </div>
</form>