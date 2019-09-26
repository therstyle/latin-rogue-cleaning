@if($quote)
  <div>
    {!! $quote !!}

    @if($quote_name)
      <p class="quote-name">
        {{ $quote_name }}
      </p>
    @endif
  </div>
@endif
