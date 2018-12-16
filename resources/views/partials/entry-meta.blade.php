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
