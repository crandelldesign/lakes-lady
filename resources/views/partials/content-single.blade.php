<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    <div class="article-meta">
      @include('partials/entry-meta')
    </div>
  </header>

  @php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ) @endphp
  @if ($url)
  <img class="article-img-top" src="{{ $url }}" />
  @endif
  
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

    @php the_tags('<p class="tag-container">Tags: ', ', ', '</p>'); @endphp

  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
