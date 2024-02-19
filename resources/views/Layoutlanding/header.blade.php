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
                         <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                         <li class="nav-item submenu dropdown">
                             <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                 aria-haspopup="true" aria-expanded="false">Buku</a>
                             <ul class="dropdown-menu">
                                 <li class="nav-item"><a class="nav-link" href="{{ url('kategori') }}">List Buku</a>
                                 </li>
                                 <li class="nav-item"><a class="nav-link" href="{{ url('struk') }}">Struk</a>
                                 </li>
                             </ul>
                         </li>

                         <li class="nav-item submenu dropdown">
                             <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                 aria-haspopup="true" aria-expanded="false">Pages</a>
                             <ul class="dropdown-menu">
                                 <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                                 <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                             </ul>
                         </li>
                         <li class="nav-item submenu dropdown">
                             <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                 aria-haspopup="true" aria-expanded="false">Pages</a>
                             <ul class="dropdown-menu">
                                 @if (auth()->user())
                                     <li class="nav-item">
                                         <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                                     </li>
                                     <li class="nav-item"> <a href="{{ url('profile') }}" class="nav-link">Profile</a>
                                     </li>
                                     <li class="nav-item">
                                         <form method="POST" action="{{ route('logout') }}">
                                             @csrf

                                             {{-- <a href="{{ route('logout') }}" class="nav-link">Logout</a> --}}
                                             <x-responsive-nav-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                              this.closest('form').submit();">
                                                 {{ __('Log Out') }}
                                             </x-responsive-nav-link>
                                         </form>
                                     </li>
                                 @endif


                             </ul>
                         </li>
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
