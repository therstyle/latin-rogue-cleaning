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
  </div>
@endsection
