@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  @endwhile

  <div class="top">
    <section class="wrapper">
      <div class="absolute">
      <img src="@asset('images/latinrogue.svg')" class="latinrogue" alt="{{ bloginfo('name') }}">
      </div>

      <div class="top-content">
        {!! $top_headline !!}
        {!! $top_text !!}
      </div>
    </section>
  </div>

  <div class="bottom-grass">
    <a class="scroll-anchor" id="about"></a>
    <div class="about">
      <section class="wrapper">
        <div class="about-left">
          {!! $about_image !!}
        </div>

        <div class="about-right">
          <article>
            @if ($about_headline)
              <header>
                {!! $about_headline !!}
              </header>
            @endif

            {!! $about_text !!}
          </article>
        </div>
      </section>
    </div>

    <a class="scroll-anchor" id="services"></a>
    <div class="services">
      <section class="wrapper">
        <article>
          @if ($services_headline)
            <header>
              {!! $services_headline !!}
            </header>
          @endif

          {!! $services_text !!}
        </article>

        @if(have_rows('services'))
          <div class="all-services">
            @while(have_rows('services')) @php the_row() @endphp
              @component('components.service', [
                'service_headline' => FrontPage::service_headline(),
                'service_image' => FrontPage::service_image(),
                'service_text' => FrontPage::service_text()
              ])
              @endcomponent
            @endwhile
          </div>
        @endif

        <a class="scroll-anchor" id="contact"></a>
        <div class="services-bottom">
          @if($phone)
            <a class="call" href="tel:{!! $phone !!}">
              <h2>
                <small>{!! $call_text !!}</small>
                {!! $phone !!}
              </h2>
            </a>
          @endif

          @if(have_rows('quotes'))
              <div class="quotes">
                @while(have_rows('quotes')) @php the_row() @endphp
                  @component('components.quote', [
                    'quote' => FrontPage::quote(),
                    'quote_name' => FrontPage::quote_name()
                  ])
                  @endcomponent
                @endwhile
              </div>
          @endif
        </div>
      </section>
    </div>
  </div>

  <a class="scroll-anchor" id="quote"></a>
  <div class="bottom">
    <div class="dirt">
      <section class="wrapper">
        <article class="quote-left">
          @if($contact_headline)
            <header>
              {{ $contact_headline }}
            </header>
          @endif

          @if($contact_text)
            {{ $contact_text }}
          @endif
        </article>

        <div class="quote-right">
          @if($contact_form)
            {!! $contact_form !!}
          @endif
        </div>
      </section>
    </div>
  </div>
@endsection
