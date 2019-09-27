<section class="wrapper">
  <article class="quote-left">
    @if($contact['headline'])
      <header>
        {!! $contact['headline'] !!}
      </header>
    @endif

    @if($contact['text'])
      {!! $contact['text'] !!}
    @endif
  </article>

  <div class="quote-right">
    @if($contact['form'])
      {!! $contact['form'] !!}
    @endif
  </div>
</section>
