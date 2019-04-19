<span class="author">
  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24">
    <path d="M20.822 18.096c-3.439-.794-6.64-1.49-5.09-4.418 4.72-8.912 1.251-13.678-3.732-13.678-5.082 0-8.464 4.949-3.732 13.678 1.597 2.945-1.725 3.641-5.09 4.418-3.073.71-3.188 2.236-3.178 4.904l.004 1h23.99l.004-.969c.012-2.688-.092-4.222-3.176-4.935z"/>
  </svg>&nbsp;
  <a href="{{ get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) }}">@php the_author(); @endphp</a>
</span>

<span class="post-date">
  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24">
    <path d="M20 20h-4v-4h4v4zm-6-10h-4v4h4v-4zm6 0h-4v4h4v-4zm-12 6h-4v4h4v-4zm6 0h-4v4h4v-4zm-6-6h-4v4h4v-4zm16-8v22h-24v-22h3v1c0 1.103.897 2 2 2s2-.897 2-2v-1h10v1c0 1.103.897 2 2 2s2-.897 2-2v-1h3zm-2 6h-20v14h20v-14zm-2-7c0-.552-.447-1-1-1s-1 .448-1 1v2c0 .552.447 1 1 1s1-.448 1-1v-2zm-14 2c0 .552-.447 1-1 1s-1-.448-1-1v-2c0-.552.447-1 1-1s1 .448 1 1v2z"/>
  </svg>&nbsp;
  @php printf( '<time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> ', get_the_time('Y-m-j', get_the_ID()), get_the_time(get_option('date_format'), get_the_ID())) @endphp
</span>

<span class="categories">
  @php $categories = get_the_category(get_the_ID()) @endphp
  @if(!empty($categories))
    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path d="M18 24l-6-5.269-6 5.269v-24h12v24z"/></svg>
    <a href="{{ esc_url( get_category_link( $categories[0]->term_id ) ) }}">{{$categories[0]->name}}</a>
  @endif
</span>
