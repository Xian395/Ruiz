@include('layouts.blades.styles')
@include('layouts.blades.navbar')


@include('sweetalert::alert')

  <main id="main" class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg" >
    
@yield('content')

 </main>


 @include('layouts.blades.footer')

     
 @include('layouts.blades.scripts')

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

