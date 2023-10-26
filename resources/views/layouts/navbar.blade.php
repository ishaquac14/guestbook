@if(Route::currentRouteName() === 'welcome')
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
            <a class="nav-link text-dark" href="{{ route('book.index') }}">TAMU</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link text-dark" href="{{ route('delivery.index') }}">DELIVERY</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
@elseif(Route::currentRouteName() === 'thanks')
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
            <a class="nav-link text-dark" href="{{ route('book.index') }}">TAMU</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link text-dark" href="{{ route('delivery.index') }}">DELIVERY</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
@endif
