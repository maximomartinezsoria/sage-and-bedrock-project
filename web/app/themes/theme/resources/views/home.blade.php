@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <section class="posts-wrapper container">
      @while(have_posts()) @php the_post() @endphp
        @include('partials.content')
      @endwhile
  </section>

  {!! get_the_posts_navigation() !!}

@endsection