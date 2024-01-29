<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary" data-bs-theme="dark">
    <div class="container ">
        <a class="navbar-brand" href="#">Rhexx</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posts' ? 'active' : '' }}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" href="/categories">Category</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome Back!, {{ auth()->user()->username }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">My Dashborad</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Log Out </a></li>
                        </ul>
                      </li>
                        <form action="/logout" method="post">
                          @csrf
                          <button type="submit" class="nav-item"><i class="bi bi-box-arrow-right"></i> Log Out</button>
                        </form>
                    
                @else                                                                                                    
                    <li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'login' ? 'active' : '' }}" href="/login"><i
                                class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
