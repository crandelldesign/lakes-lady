@extends('layouts.app')

@section('content')
  
  @while(have_posts()) @php the_post() @endphp
    {{--  @include('partials.page-header') --}}
    {{-- @include('partials.content-page') --}}
    @include('partials.content')
  @endwhile

  {{ App\page_navi() }}
  {!! get_the_posts_navigation() !!}
@endsection
