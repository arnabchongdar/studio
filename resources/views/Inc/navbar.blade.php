
    <header class="navbar navbar-expand-md navbar-dark bd-navbar">
        <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
          <a class="navbar-brand p-0 me-2" href="/" aria-label="Bootstrap">
            <svg xmlns="https://images.all-free-download.com/images/graphicthumb/man_wearing_hat_56359.jpgg" width="40" height="32" class="d-block my-1" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"/></svg>
          </a>
      
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="bi" viewBox="0 0 16 16" xmlns="https://images.all-free-download.com/images/graphicthumb/man_wearing_hat_56359.jpg">
              <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
          </button>
      
          <div class="collapse navbar-collapse" id="bdNavbar">
           
      
           
          </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-light ">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'Laravel') }}
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">

                  </ul>
                  <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0">
             
                    <li class="nav-item col-6 col-md-auto">
                      <a class="nav-link p-2 active" aria-current="true" href="/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Examples');">Home</a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                      <a class="nav-link p-2" href="about" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Icons');"  rel="noopener">About</a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                      <a class="nav-link p-2" href="services" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Themes');"  rel="noopener">Services</a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                      <a class="nav-link p-2" href="package" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');" rel="noopener">Packages</a>
                    </li>
                  </ul>
            
                  <hr class="d-md-none text-white-50">
            
                  <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                    <li class="nav-item col-6 col-md-auto">
                      <a class="nav-link p-2" href="https://github.com/arnabchongdar" target="_blank" rel="noopener">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" class="navbar-nav-svg d-inline-block align-text-top" viewBox="0 0 512 499.36" role="img"><title>GitHub</title><path fill="currentColor" fill-rule="evenodd" d="M256 0C114.64 0 0 114.61 0 256c0 113.09 73.34 209 175.08 242.9 12.8 2.35 17.47-5.56 17.47-12.34 0-6.08-.22-22.18-.35-43.54-71.2 15.49-86.2-34.34-86.2-34.34-11.64-29.57-28.42-37.45-28.42-37.45-23.27-15.84 1.73-15.55 1.73-15.55 25.69 1.81 39.21 26.38 39.21 26.38 22.84 39.12 59.92 27.82 74.5 21.27 2.33-16.54 8.94-27.82 16.25-34.22-56.84-6.43-116.6-28.43-116.6-126.49 0-27.95 10-50.8 26.35-68.69-2.63-6.48-11.42-32.5 2.51-67.75 0 0 21.49-6.88 70.4 26.24a242.65 242.65 0 0 1 128.18 0c48.87-33.13 70.33-26.24 70.33-26.24 14 35.25 5.18 61.27 2.55 67.75 16.41 17.9 26.31 40.75 26.31 68.69 0 98.35-59.85 120-116.88 126.32 9.19 7.9 17.38 23.53 17.38 47.41 0 34.22-.31 61.83-.31 70.23 0 6.85 4.61 14.81 17.6 12.31C438.72 464.97 512 369.08 512 256.02 512 114.62 397.37 0 256 0z"/></svg>
                        <small class="d-md-none ms-2">GitHub</small>
                      </a>
                    </li>
                    <li class="nav-item col-6 col-md-auto">
                      <a class="nav-link p-2" href="https://twitter.com/arnab_chongdar" target="_blank" rel="noopener">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" class="navbar-nav-svg d-inline-block align-text-top" viewBox="0 0 512 416.32" role="img"><title>Twitter</title><path fill="currentColor" d="M160.83 416.32c193.2 0 298.92-160.22 298.92-298.92 0-4.51 0-9-.2-13.52A214 214 0 0 0 512 49.38a212.93 212.93 0 0 1-60.44 16.6 105.7 105.7 0 0 0 46.3-58.19 209 209 0 0 1-66.79 25.37 105.09 105.09 0 0 0-181.73 71.91 116.12 116.12 0 0 0 2.66 24c-87.28-4.3-164.73-46.3-216.56-109.82A105.48 105.48 0 0 0 68 159.6a106.27 106.27 0 0 1-47.53-13.11v1.43a105.28 105.28 0 0 0 84.21 103.06 105.67 105.67 0 0 1-47.33 1.84 105.06 105.06 0 0 0 98.14 72.94A210.72 210.72 0 0 1 25 370.84a202.17 202.17 0 0 1-25-1.43 298.85 298.85 0 0 0 160.83 46.92"/></svg>
                        <small class="d-md-none ms-2">Twitter</small>
                      </a>
                    </li>
                    
                  </ul>
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }}
                              </a>

                              <ul class="nav-item dropdown"  role="menu">
                                <li>
                                  <a  href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                                </li>
                              </ul>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>
      </header>
      