<ul class="categories">
  <li style="display: inline-block"><span class="badge badge-default">Toefl</span></li>
  <li style="display: inline-block"><span class="badge badge-default">Study Guide</span></li>
  <li style="display: inline-block"><span class="badge badge-default">English Language</span></li>
  <li id="author" style="display: inline-block; float: right;"><i class="fa fa-user"></i>
    <span class="byline author vcard">
      {{ __('Author:', 'sage') }} <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
        {{ get_the_author() }}
      </a>
    </span>
  </li>
  <li id="update-date" style="display: inline-block; float: right; margin-right: 15px;"><i class="fa fa-clock-o"></i> <time datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time></li>
</ul>