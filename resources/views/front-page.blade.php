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
        {!! $top['headline'] !!}
        {!! $top['text'] !!}
      </div>
    </section>
  </div>

  <div class="bottom-grass">
    <a class="scroll-anchor" id="about"></a>
    <div class="about">
      <section class="wrapper">
        <div class="about-left">
          {!! $about['image'] !!}
        </div>

        <div class="about-right">
          <article>
            @if ($about['headline'])
              <header>
                {!! $about['headline'] !!}
              </header>
            @endif

            {!! $about['text'] !!}
          </article>
        </div>
      </section>
    </div>

    <a class="scroll-anchor" id="services"></a>
    <div class="services">
      <section class="wrapper">
        <article>
          @if ($services['headline'])
            <header>
              {!! $services['headline'] !!}
            </header>
          @endif

          {!! $services['text'] !!}
        </article>

        @if(have_rows('services'))
          <div class="all-services">
            @while(have_rows('services')) @php the_row() @endphp
              @component('components.service', [
                'service' => FrontPage::service()
              ])
              @endcomponent
            @endwhile
          </div>
        @endif

        <a class="scroll-anchor" id="contact"></a>
        <div class="services-bottom">
          @if($phone)
            <a class="call" href="tel:{!! $phone['number'] !!}">
              <h2>
                <small>{!! $phone['text'] !!}</small>
                {!! $phone['number'] !!}
              </h2>
            </a>
          @endif

          @if(have_rows('quotes'))
              <div class="quotes">
                @while(have_rows('quotes')) @php the_row() @endphp
                  @component('components.quote', [
                    'quote' => FrontPage::quote()
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
@endsection

@section('content-contact')
  @include('partials.content-contact')
@endsection
