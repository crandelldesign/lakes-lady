<!-- Featured List View -->
<article class="<?php $postClasses = get_post_class(); foreach ($postClasses as $class) { echo $class . " "; } ?> featured-post">
  <div class="featured-img">
    @php $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'full' ) @endphp
    @if ($url)
      <img src="{{ $url }}" />
    @endif
  </div>
  <div class="article-content">
    <header class="article-header"> 
      <div class="article-date">@php printf( '<time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> ', get_the_time('Y-m-j', get_the_ID()), get_the_time(get_option('date_format'), get_the_ID())) @endphp</div>
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    </header>
    <div class="article-body entry-summary">
      @php the_excerpt() @endphp
      <div class="btn-container"><a class="btn btn-primary" href="{{ get_permalink() }}">Read More</a></div>
    </div>
    <div class="article-footer">
      <div>
        @php $categories = get_the_category(get_the_ID()) @endphp
        @if(!empty($categories))
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path d="M18 24l-6-5.269-6 5.269v-24h12v24z"/></svg>
          <a href="{{ esc_url( get_category_link( $categories[0]->term_id ) ) }}">{{$categories[0]->name}}</a>
        @endif
      </div>
    </div>
  </div>
</article>
