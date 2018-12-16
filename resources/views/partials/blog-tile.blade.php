<div class="card">
  @php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ) @endphp
  @if ($url)
  <img class="card-img-top" src="{{ $url }}" />
  @endif
  <div class="card-body">
    <h5 class="card-title"><a href="{{get_the_permalink($post->ID)}}">{{get_the_title($post->ID)}}</a></h5>
    @if ($url)
      <p>{!! excerpt(15) !!} <a href="{{get_the_permalink($post->ID)}}">Continued</a></p>
    @else
      @php the_excerpt() @endphp
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    @endif
  </div>
  <div class="card-footer">
    <div class="text-muted">
      @include('partials/entry-meta')
    </div>
  </div>
</div>