<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-58645616-1"></script>
      <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-58645616-1');
      </script>
  @php(do_action('get_header'))
    @include('partials.header')
    <div class="" role="document">
      <div class="">
        <main class="">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
