<nav>

        <div class="logo">
            <img src="/img/logoup1.png" alt="">
            <img src="/img/logohmik.png" alt="">

        </div>
        
        <div class="menu">
            <ul>
            <li>
                <a class="beranda {{ ($active === "home") ? 'active' : '' }}"" href="/">Beranda</a>
            </li>
            <li>
              @if (isset($_GET['category']))
                <a class="{{ ($_GET['category'] === "competition") ? 'active' : '' }}"" href="/posts?category=competition">Lomba</a>
              @else
                <a class="" href="/posts?category=competition">Lomba</a>
              @endif
            </li>
            <li>
            @if (isset($_GET['category']))
                <a class="{{ ($_GET['category'] === "knowledge") ? 'active' : '' }}"" href="/posts?category=knowledge">Seminar</a>
              @else
                <a class="" href="/posts?category=knowledge">Seminar</a>
              @endif
            </li>
            <li>
            @if (isset($_GET['category']))
                <a class="{{ ($_GET['category'] === "event") ? 'active' : '' }}"" href="/posts?category=event">Acara</a>
              @else
                <a class="" href="/posts?category=event">Acara</a>
              @endif
            </li>
            <li>
                @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                          <form action="/logout" method="post">
                                @csrf
                              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                          </form>
                      </li>
                    </ul>
                  </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth

            </li>
        </ul>
    </div>
        

    </nav>