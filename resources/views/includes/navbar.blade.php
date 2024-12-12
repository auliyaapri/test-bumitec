<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.html"><h2>Spareparts <em>Motor</em></h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link {{ request()->is('spareparts') ? 'active' : '' }} " href="{{ route('spareparts') }}">spareparts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('suppliers') ? 'active' : '' }} " href="{{ route('suppliers') }}">suppliers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('category') ? 'active' : '' }} " href="{{ route('category') }}">category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('report') ? 'active' : '' }} " href="{{ route('report') }}">report</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
