@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <article class="page-content">
      @include('partials.page-header')
      @include('partials.content-page')
    </article>
  @endwhile
@endsection
