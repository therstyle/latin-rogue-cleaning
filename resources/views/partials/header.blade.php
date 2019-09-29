<div class="opl">
  <a href="http://onepagelove.com/latin-rogue-cleaning-services" target="_blank"></a>
</div>

<header class="main">
  <div class="wrapper">
    <a class="logo" href="{{ home_url('/#top') }}">{!! $logo !!}</a>

    <a class="nav-toggle">
      <div class="icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </a>

    @if (has_nav_menu('main'))
      {!! wp_nav_menu(['theme_location' => 'main', 'container' => 'nav']) !!}
    @endif
  </div>
</header>
