@extends('layouts.app')

@section('content')
  @php
    $args = array('posts_per_page'=>'3');
    $loop = new WP_Query($args);
  @endphp
  <div class="card-deck-wrapper">
    <div class="card-deck">
    @foreach ($loop->posts as $post)
      @php
      setup_postdata($post)
      @endphp
      @include('partials.blog-tile', ['post' => $post])
    @endforeach
    </div>
    <div class="homepage-button-wrapper">
      <a class="btn btn-lg btn-primary" href="{{ get_permalink( get_option( 'page_for_posts' ) ) }}">See More Posts</a>
    </div>
  </div>
  
  @while(have_posts()) @php the_post() @endphp
    {{--  @include('partials.page-header') --}}
    {{-- @include('partials.content-page') --}}
    @include('partials.content')
  @endwhile

  {{ App\page_navi() }}
  {!! get_the_posts_navigation() !!}
@endsection
