<footer class="content-info">
  <div class="container text-center py-3">
    <p class="m-0">Lorem ipsum &copy; 2019 - Legal text</p>
    @if (has_nav_menu('footer_navigation'))
      {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav d-flex justify-content-center h-100']) !!}
    @endif
  </div>
</footer>
