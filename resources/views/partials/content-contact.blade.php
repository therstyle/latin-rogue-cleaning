<section class="wrapper">
  <article class="quote-left">
    @if($contact_headline)
      <header>
        {!! $contact_headline !!}
      </header>
    @endif

    @if($contact_text)
      {!! $contact_text !!}
    @endif
  </article>

  <div class="quote-right">
    @if($contact_form)
      {!! $contact_form !!}
    @endif
  </div>
</section>
