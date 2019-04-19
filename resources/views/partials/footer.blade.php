<footer class="footer content-info">
  @if (has_nav_menu('primary_navigation'))
  <nav class="footer-nav">
    {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
  </div>
  @endif
  <div class="contact-info">
    <div class="container">
      @include('partials/logo-kw')
      @php dynamic_sidebar('sidebar-footer') @endphp
    </div>
  </div>
</footer>
