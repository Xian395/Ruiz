@extends('layouts.main')
@section('content')
    <!-- Property List Start -->
    <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Property Listing</h1>
                            <!-- <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit diam justo sed rebum.</p> -->
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <li class="nav-item me-2">
                            <a href="{{ Route('property.create')}}" class="btn btn-primary px-3 d-none d-lg-flex">Add Property</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Sell</a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For Rent</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
    

                        @if ($property->count())

                            @foreach ($property as $property)

                                <x-property :property="$property" />

                            @endforeach


                        @else
                            <p>There are no properties</p>
                        @endif

                        </div>


                        <br><br>
                            <div class="col-12 text-center">
                                <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->













        <script>    
         function confirmDelete(id){
        var formData = new FormData()
          formData.append('id', id)
          Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
        type: "POST",
        url: "{{ route('x_removeProperty') }}",
        data: formData,
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false, 
        async: false,
        success: function(data){
          if (data.result == true){
              Swal.fire({
                  icon: data.icon,
                  title: data.title,
                  text: data.message
              })

              setTimeout( function(){
                location.reload() 
              }, 1000)
          
          }
        },
        error: function(data){
          message = 'We are unable to process request.';
          if (data.responseJSON !== undefined) {
              message = '';
              for (var i in data.responseJSON.errors){
                  var d = data.responseJSON.errors[i];
                  message += d + '<br>';
              }
          }
          Swal.fire({
            icon: 'error',
            title: 'Ooopss...',
            text: message
          })
        }
  });

} 
})

}</script>
@endsection
