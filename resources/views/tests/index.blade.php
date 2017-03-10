@extends ('layout')

@section ('content')

        <ul>
            @foreach ($tests as $test)
                <li>{{ $test->info }}</li>
            @endforeach
        </ul>

  <nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
  </nav>

@endsection