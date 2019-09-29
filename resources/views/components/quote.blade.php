@if($quote)
  <div>
    {!! $quote['text'] !!}

    @if($quote['name'])
      <p class="quote-name">
        {{ $quote['name'] }}
      </p>
    @endif
  </div>
@endif
