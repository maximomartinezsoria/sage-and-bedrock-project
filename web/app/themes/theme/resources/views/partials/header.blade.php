<header class="banner">
  <div class="container h-100">
    <div class="row justify-content-between m-0 h-100">
      <div class="site-info d-flex h-100">
        <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
        <p class="m-0 description">@php echo get_bloginfo('description') @endphp</p>
      </div>
      <nav class="nav-primary h-100">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav d-flex justify-content-end h-100 align-items-center']) !!}
        @endif
      </nav>
    </div>
  </div>
</header>
