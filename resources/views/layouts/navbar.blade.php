@if(Route::currentRouteName() === 'welcome' || Route::currentRouteName() === 'thanks')
<nav class="navbar fixed-bottom navbar-expand-md bg-white mb-5">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon btn btn-dark"></span>
      </button> 
      <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item mx-3">
            <a class="nav-link text-dark" href="{{ route('welcome') }}">BERANDA</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link text-dark" href="{{ route('book.create') }}">CREATE</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link text-dark" href="{{ route('book.index') }}">VIEW</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
@endif

{{-- @if(Route::currentRouteName() === 'welcome' || Route::currentRouteName() === 'thanks')
<div class="d-flex justify-content-center">
<nav class="navbar fixed-bottom navbar-expand-md navbar-dark bg-white mb-4">
    <div class="container mx-auto">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="background-color: black;"></span>
      </button>  
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link text-dark" href="{{ route('welcome') }}">BERANDA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="{{ route('book.create') }}">CREATE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="{{ route('book.index') }}">VIEW</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
@endif --}}
