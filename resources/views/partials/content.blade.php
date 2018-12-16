<!-- Article List View -->
<article @php post_class() @endphp>
  @php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'full' ) @endphp
  @if ($url)
    <img class="card-img-top" src="{{ $url }}" />
  @endif
  <header class="card-header"> 
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
  </header>
  <div class="card-body entry-summary">
    @php the_excerpt() @endphp
  </div>
  <div class="card-footer">
    <div class="text-muted">
      @include('partials/entry-meta')
    </div>
  </div>
</article>
