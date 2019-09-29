<article class="service">
  @if($service['headline'] || $service['image'])
    <header>
      @if($service['image'])
        {!! $service['image'] !!}
      @endif

      @if($service['headline'])
        <h3>{!! $service['headline'] !!}</h3>
      @endif
    </header>

    @if($service['text'])
      {!! $service['text'] !!}
    @endif
  @endif
</article>
