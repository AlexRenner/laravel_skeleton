@extends ('layout')

@section ('content')
<div class="blog-post">
  <h1 class="blog-post-title">
    <?= $name ?>'s Laravel Page. And he's <?= (string)$age ?>. Happy Birthday!
  </h1>

  <ul> 
    <?php foreach ($phpinfo as $info) : ?>
      <li class="blog-post-meta"><?= $info ?></li>
    <?php endforeach ?>
  </ul>

  <ul>
    @foreach ($tests as $test)
      <li class="blog-post-meta">{{ $test->info }}</li>
    @endforeach
  </ul>

  <nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
  </nav>

</div>
@endsection