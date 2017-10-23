
<div class="template-page sidebar-collapse bg-grey">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-main-color fixed-top " color-on-scroll="5">
  <div class="container">
    <div class="navbar-translate">
      <a class="navbar-brand" href="{{ home_url('/') }}}}" target="_blank">
        OTARIKKOC
      </a>
      <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
              aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navigation"
         data-nav-image="assets/images/blog-main-1.jpg">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#pablo">
            <p>Link</p>
          </a>
        </li>
        <div class="dropdown">

          <a href="#pablo" class="nav-link dropdown-toggle" data-toggle="dropdown"
             id="navbarDropdownMenuLink1">
            Regular
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">One more separated link</a>
          </ul>
        </div>
        <li class="nav-item">
          <a class="nav-link" href="#pablo">
            <p>Link</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom"
             href="https://twitter.com/otarikkoc" target="_blank">
            <i class="fa fa-twitter"></i>
            <p class="d-lg-none d-xl-none">Twitter</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom"
             href="https://www.facebook.com/otarikoc" target="_blank">
            <i class="fa fa-facebook-square"></i>
            <p class="d-lg-none d-xl-none">Facebook</p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom"
             href="https://www.instagram.com/otarikkoc" target="_blank">
            <i class="fa fa-instagram"></i>
            <p class="d-lg-none d-xl-none">Instagram</p>
          </a>
        </li>
        <li class="nav-item">
          <div class="input-group" style="top:5px;">
            <input type="text" class="form-control form-control-transparent" placeholder="Search Here..."
                   style="padding: 6px 0px 6px 18px">
            <span class="input-group-addon" style="background-color: transparent; padding:6px 18px 6px 0; ">
                            <i class="now-ui-icons ui-1_zoom-bold" style="color:white"></i>
                        </span>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->


{{--<header class="banner">--}}
  {{--<div class="container">--}}
    {{--<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>--}}
    {{--<nav class="nav-primary">--}}
      {{--@if (has_nav_menu('primary_navigation'))--}}
        {{--{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}--}}
      {{--@endif--}}
    {{--</nav>--}}
  {{--</div>--}}
{{--</header>--}}


