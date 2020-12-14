<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">ブログ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarnavaltmarkup" aria-controls="navbarnavaltmarkup" aria-expanded="false" aria-label="toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarnavaltmarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{ route('blogs') }}">ブログ一覧 <span class="sr-only"></span></a>
            <a class="nav-item nav-link" href="{{ route('create') }}">ブログ投稿</a>
        </div>
    </div>
</nav>