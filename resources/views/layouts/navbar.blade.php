  <nav class="navbar fixed-bottom navbar-expand-md navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">GuestBook</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item active">
            <a class="nav-link" href="{{ route('book.create') }}">Create</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('book.index') }}">View</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>


  
