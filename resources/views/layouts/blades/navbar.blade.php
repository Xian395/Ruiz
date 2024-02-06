<div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="{{ asset('img/icon-deal.png')}}" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">MAKAN</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ Route('home')}}" class="nav-item nav-link active">Home</a>
                        <a href="{{ Route('about')}}" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Property</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ Route('property.list')}}" class="dropdown-item">Property List</a>
                                <a href="{{ Route('property.types')}}" class="dropdown-item">Property Type</a>
                                <a href="{{ Route('property.agents')}}" class="dropdown-item">Property Agent</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ Route('testimonial')}}" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Error</a>
                            </div>
                        </div>
                        <a href="{{ Route('contact') }}" class="nav-item nav-link">Contact</a>
                        <a href="{{ route('login') }}" class="nav-item nav-link">login</a>
                        <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
                   
                       
                     
                       
                    </div>
                    <div class="nav-item dropdown">
                    <a href="{{ route('home') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" title="">Hello, {{ auth()->user()->name ?? ''}}</a>
                    <div class="dropdown-menu rounded-0 m-0">
                    <form method="POST" action="{{ route('logout') }}">
          @csrf
          <center><button type="submit">Logout</button>
      </form>
                            </div>
                    </div>
                    
                   
                </div>
            </nav>
        </div>
        <!-- Navbar End -->