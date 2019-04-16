<article @php post_class() @endphp>
    {{ the_post_thumbnail() }}
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ the_title() }}</a></h2>
</article>
