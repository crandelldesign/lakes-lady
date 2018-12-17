@extends('layouts.app')

@section('content')

  @php
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  @endphp

  @if ($paged == 1)
    <?php
      //print_r($first_post)
    ?>
    @foreach ($first_post as $key => $data)
      @php the_post($data->id) @endphp
      @include('partials.featured-content')
    @endforeach
  @endif

  <div class="wrap container-fluid" role="document">
    <div class="content">
      <main class="main">

        @while(have_posts()) @php the_post() @endphp
          @include('partials.content')
        @endwhile

        {{ App\page_navi() }}

      </main>
      @if (App\display_sidebar())
        <aside class="sidebar">
          @include('partials.sidebar')
        </aside>
      @endif
    </div>
  </div>


  

@endsection
