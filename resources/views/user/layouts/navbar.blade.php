   <!--::header part start::-->
   <header class="main_menu home_menu">
       <div class="container">
           <div class="row align-items-center">
               <div class="col-lg-12">
                   <nav class="navbar navbar-expand-lg navbar-light">
                       <a class="navbar-brand" href="index.html" id="buildTxt"> BUILD<span id="hubTxt">HUB</span></a>
                       <button class="navbar-toggler" type="button" data-toggle="collapse"
                           data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                           aria-expanded="false" aria-label="Toggle navigation">
                           <span class="menu_icon"><i class="fas fa-bars"></i></span>
                       </button>

                       <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                           <ul class="navbar-nav">
                               <li class="nav-item">
                                   <a class="nav-link" href="index.html">Home</a>
                               </li>
                               <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Vendor
                                   </a>
                                   <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                       <a class="dropdown-item" href="category.html"> shop category</a>
                                       <a class="dropdown-item" href="single-product.html">product details</a>

                                   </div>
                               </li>
                               <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Store
                                   </a>
                                   <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                       <a class="dropdown-item" href="login.html"> Promo 🔥</a>
                                       <a class="dropdown-item" href="tracking.html">tracking</a>
                                       <a class="dropdown-item" href="checkout.html">product checkout</a>
                                       <a class="dropdown-item" href="cart.html">shopping cart</a>
                                       <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                       <a class="dropdown-item" href="elements.html">elements</a>
                                   </div>
                               </li>
                               <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Inspiration
                                   </a>
                                   <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                       <a class="dropdown-item" href="blog.html"> blog</a>
                                       <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                   </div>
                               </li>

                               <li class="nav-item">
                                   <a class="nav-link" href="contact.html">Event</a>
                               </li>

                               <li class="nav-item">
                                   <a class="nav-link" href="contact.html">Blog</a>
                               </li>
                           </ul>
                       </div>

                       <a href="#" type="button" data-toggle="modal" data-target="#loginModal"
                           class="genric-btn danger-border circle arrow" id="loginBtn">Login/Register</a>

                   </nav>
               </div>
           </div>
       </div>
       <div class="search_input" id="search_input_box" style="display: none;">
           <div class="container ">
               <form class="d-flex justify-content-between search-inner">
                   <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                   <button type="submit" class="btn"></button>
                   <span class="ti-close" id="close_search" title="Close Search"></span>
               </form>
           </div>
       </div>
   </header>

   <div class="modal fade " id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content border-0 p-3">
               <div class="modal-header border-0">
                   <h2 class="modal-title" id="loginModalLabel">Login</h2>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">×</span>
                   </button>
               </div>
               <div class="modal-body">
                   <!-- Session Status -->
                   <x-auth-session-status class="mb-4" :status="session('status')" />

                   <button class="genric-btn danger-border w-100 my-3" type="submit"><i
                           class="fab fa-google me-2"></i>
                       Sign in
                       with google</button>


                   <div class="border-top my-3"></div>

                   <form id="loginForm" method="POST" action="{{ route('login') }}">
                       @csrf

                       <!-- Email Address -->
                       <div class="mb-3">
                           <label for="email" class="form-label">{{ __('Email') }}</label>
                           <input id="email" class="form-control" type="email" name="email"
                               value="{{ old('email') }}" required autofocus autocomplete="username">
                           <x-input-error :messages="$errors->get('email')" class="mt-2" />
                       </div>

                       <!-- Password -->
                       <div class="mb-3">
                           <label for="password" class="form-label">{{ __('Password') }}</label>
                           <input id="password" class="form-control" type="password" name="password" required
                               autocomplete="current-password">
                           <x-input-error :messages="$errors->get('password')" class="mt-2" />
                       </div>

                       <div class="d-flex justify-content-between">
                           <div class="form-check mb-3">
                               <input id="remember_me" class="form-check-input" type="checkbox" name="remember">
                               <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
                           </div>


                           <div class="text-end">
                               @if (Route::has('password.request'))
                                   <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                               @endif
                           </div>
                       </div>

                       <div class="text-center mt-3">
                           {{-- <x-primary-button>{{ __('Log in') }}</x-primary-button> --}}
                           <button class="btn_login w-100">Masuk</button>
                       </div>
                   </form>
               </div>
               <div class="modal-footer mx-auto border-0">
                   <p>Belum punya akun? <a href="" class="text-primary"> daftar sekarang</a></p>
               </div>
           </div>
       </div>
   </div>
   <!-- Header part end-->

   @if ($errors->any())
       <script type="text/javascript">
           $(window).on('load', function() {
               $('#loginModal').modal('show');
           });
       </script>
   @endif
