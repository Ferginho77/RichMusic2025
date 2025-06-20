<nav class="navbar navbar-expand-lg bg-black subnav px-5 visible">
        <div class="">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white" href="/">
                  Home
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Articles
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">News</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Features
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Opinion</a></li>
                  <li><a class="dropdown-item" href="#">List</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#" onclick="loadContent('/about-content')">About</a>
              </li>
              <li class="nav-item">
                 @if(Auth::check())
                    <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Apakah Yakin Untuk Meninggalkan Aplikasi?')">
                      @csrf
                      <button class="nav-link text-danger" type="submit">Logout</button>
                    </form>
                  @else
                    <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                  @endif
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2 bg-dark text-white border-0"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-light" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </nav>