<header class="banner">
  <!--<div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>-->
  <a class="logo-container" href="{{ home_url('/') }}">
    @include('partials/logo')
    @include('partials/logo-kw')
  </a>
  <div class="tagline">{{ get_bloginfo('description', 'display') }}</div>
  <nav class="navbar navbar-expand-md navbar-dark">

    <div class="container">

      <a class="navbar-brand" href="{{ home_url('/') }}">@include('partials/logo')</a>

      <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="burger-icon"></span>	
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav ml-auto']) !!}
        @endif
      </div>

    </div>

  </nav>
</header>
