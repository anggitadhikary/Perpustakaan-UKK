 <!--================ Start Header Menu Area =================-->
 <header class="header_area">
     <div class="main_menu">
         <nav class="navbar navbar-expand-lg navbar-light">
             <div class="container">
                 {{-- <a class="navbar-brand logo_h" href="{{ url('/') }}"><img src="img/logo.png" alt=""></a> --}}
                 <h2>Litlend</h2>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                     <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                         <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                         <li class="nav-item submenu dropdown">
                             <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                 aria-haspopup="true" aria-expanded="false">Book</a>
                             <ul class="dropdown-menu">
                                 <li class="nav-item"><a class="nav-link {{ Request::is('List-Buku') ? 'active' : '' }}"
                                         href="{{ url('List-Buku') }}">Book List</a>
                                 </li>
                                 @auth


                                     <li class="nav-item"><a class="nav-link {{ Request::is('koleksi') ? 'active' : '' }}" href="{{ url('koleksi') }}">Collection</a>
                                     </li>
                                 @endauth

                             </ul>
                         </li>
                         @auth
                             <li class="nav-item submenu dropdown">
                                 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                     aria-haspopup="true" aria-expanded="false">More</a>
                                 <ul class="dropdown-menu">
                                     @if (auth()->user())
                                         @if (auth()->user()->role == 'admin')
                                             <li class="nav-item">
                                                 <a href="{{ url('/dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">Dashboard</a>
                                             </li>
                                             <li class="nav-item"> <a href="{{ url('profile') }}"
                                                     class="nav-link {{ Request::is('profile') ? 'active' : '' }}">Profile</a>
                                             </li>
                                         @endif

                                         <li class="nav-item">
                                             <form method="POST" action="{{ route('logout') }}">
                                                 @csrf

                                                 {{-- <a href="{{ route('logout') }}" class="nav-link">Logout</a> --}}
                                                 <x-responsive-nav-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                              this.closest('form').submit();"
                                                     class="nav-link">
                                                     {{ __('Log Out') }}
                                                 </x-responsive-nav-link>
                                             </form>
                                         </li>
                                     @endif


                                 </ul>
                             </li>
                         @endauth
                     </ul>


                     <ul class="nav-shop">

                         @guest

                             <li class="nav-item"><a class="button button-header" href="{{ url('login') }}">Login</a></li>

                             <li class="nav-item"><a class="button button-header" href="{{ url('register') }}">Register</a>
                             </li>
                         @endguest
                     </ul>
                 </div>
             </div>
         </nav>
     </div>
 </header>
 <!--================ End Header Menu Area =================-->
