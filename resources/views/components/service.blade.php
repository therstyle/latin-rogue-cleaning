<article class="service">
  @if($service_headline || $service_image)
    <header>
      @if($service_image)
        {!! $service_image !!}
      @endif

      @if($service_headline)
        <h3>{!! $service_headline !!}</h3>
      @endif
    </header>

    @if($service_text)
      {!! $service_text !!}
    @endif
  @endif
</article>
