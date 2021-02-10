<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
  <div class="container">
    <a href="{{ route('home') }}" class="navbar-brand">
      <span class="brand-text font-weight-light">Perpus</span>
    </a>
    
    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item {{ (request()->path() === 'home') ? 'active' : '' }}">
          <a href="{{ route('home') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Master Data</a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <li><a href="/data/member" class="dropdown-item">Member</a></li>
            <li><a href="/data/book" class="dropdown-item">Book</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="/report" class="nav-link">Report</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- /.navbar -->