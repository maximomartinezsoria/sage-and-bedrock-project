@extends('layouts.app')

@section('content')
    @while(have_posts()) @php the_post() @endphp
        <section class="container">
            @include('partials.page-header')
            <div class="prices">
                <div class="price p-1 border">

                    @php $service = get_field('services_1'); @endphp

                    <h3>@php echo $service['service_title1']; @endphp</h3>
                    <p class="price-number">$ @php echo $service['service_price1']; @endphp</p>
                    <ul class="list-unstyled text-center">
                        @foreach ($service['features'] as $feature)
                            <li>@php echo $feature; @endphp</li>
                        @endforeach
                    </ul>
                    <a href="@php echo $service['button_link']; @endphp" class="button button-ghost my-4 d-block w-50 mx-auto">@php echo $service['button']; @endphp</a>
                </div>
                <div class="price p-1 border-fat">

                    @php $service = get_field('services_2'); @endphp

                    <h3>@php echo $service['service_title2']; @endphp</h3>
                    <p class="price-number">$ @php echo $service['service_price2']; @endphp</p>
                    <ul class="list-unstyled text-center">
                        @foreach ($service['features'] as $feature)
                            <li>@php echo $feature; @endphp</li>
                        @endforeach
                    </ul>
                    <a href="@php echo $service['button_link']; @endphp" class="button button-ghost my-4 d-block w-50 mx-auto">@php echo $service['button']; @endphp</a>                </div>
                <div class="price p-1 border">

                    @php $service = get_field('services_3'); @endphp

                    <h3>@php echo $service['service_title3']; @endphp</h3>
                    <p class="price-number">$ @php echo $service['service_price3']; @endphp</p>
                    <ul class="list-unstyled text-center">
                        @foreach ($service['features'] as $feature)
                            <li>@php echo $feature; @endphp</li>
                        @endforeach
                    </ul>
                    <a href="@php echo $service['button_link']; @endphp" class="button button-ghost my-4 d-block w-50 mx-auto">@php echo $service['button']; @endphp</a>
                </div>
            </div>
        </section>
    @endwhile
@endsection
