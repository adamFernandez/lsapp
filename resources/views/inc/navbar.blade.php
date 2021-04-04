<nav class="navbar navbar-expand navbar-dark bg-dark mb-2" aria-label="navbar">
    <div class="container-fluid">      
      
      <a class="navbar-brand" href="/">{{config('app.name', 'LSAPP')}}</a>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav me-auto mb-md-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="/posts">Blog</a></li>
        </ul>
      </div>
      {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}
    </div>
  </nav>