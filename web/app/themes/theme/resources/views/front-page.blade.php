@extends('layouts.app')
@section('content')
    <section class="hero container-fluid">
        <div class="hero-content-wrap mx-auto d-flex flex-column align-items-start justify-content-center h-100">
            <h1 class="hero-title"> @php the_field('hero_title'); @endphp </h1>
            <p class="hero-text">@php the_field('hero_subtitle'); @endphp</p>
            <a href="" class="button button-primary">@php the_field('hero_button'); @endphp</a>
        </div>
    </section>

    <section class="services-home container">
        <div class="services-wrap text-center">
            <div class="service px-4 py-3 border">
                <h3 class="service-title mb-3">@php the_field('service_title_1'); @endphp</h3>
                <p>@php the_field('service_subtitle_1'); @endphp</p>
            </div>

            <div class="service px-4 py-3 border">
                <h3 class="service-title mb-3">@php the_field('service_title_1'); @endphp</h3>
                <p>@php the_field('service_subtitle_2'); @endphp</p>
            </div>

            <div class="service px-4 py-3 border">
                <h3 class="service-title mb-3">@php the_field('service_title_1'); @endphp</h3>
                <p>@php the_field('service_subtitle_3'); @endphp</p>
            </div>
        </div>    
    </section>

    <section class="blog-posts container d-flex flex-column">
        <h2>@php the_field('articles_section_title'); @endphp</h2>
        <div class="posts-wrapper my-5">
            @php global $post; @endphp

            @foreach(FrontPage::posts() as $post)
                
                @php setup_postdata( $post ); @endphp

                <div class="post">
                    <a href="@php the_permalink(); @endphp">
                        <div class="post-image">@php the_post_thumbnail(); @endphp</div>
                    </a>

                    <a href="@php the_permalink(); @endphp">                    
                        <h3 class="post-title mt-3"> @php the_title(); @endphp</h3>
                    </a>
                </div>

            @endforeach

        </div>
        <a href="http://testing.test/blog" class="button button-ghost align-self-center">View more</a>
    </section> 
@endsection