<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        <section class="hero container-fluid mt-5">
          <div class="hero-content-wrap mx-auto d-flex flex-column align-items-start justify-content-center h-100">
              <h3 class="hero-title text-left">@php echo get_theme_mod('title_set') @endphp</h3>
              <p class="hero-text">@php echo get_theme_mod('subtitle_set') @endphp</p>
              <a href="@php echo get_theme_mod('url_set') @endphp" class="button button-primary">@php echo get_theme_mod('button_set') @endphp</a>
          </div>
        </section>
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
