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
        <?php echo $topText; ?>
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

        {{-- <?php if(have_rows('services')): ?>
          <div class="all-services">
            <?php while(have_rows('services')): the_row(); ?>
              <?php get_template_part('components/layout/service'); ?>
            <?php endwhile; ?>
          </div>
        <?php endif; ?> --}}

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

          {{-- <?php if(have_rows('quotes')):?>
              <div class="quotes">
                <?php while(have_rows('quotes')): the_row(); ?>
                  <?php get_template_part('components/layout/quote'); ?>
                <?php endwhile; ?>
              </div>
          <?php endif; ?> --}}
        </div>
      </section>
    </div>
  </div>
@endsection
