@extends('layouts.main')

@section('content')
<br>
    <section class="block">
        <div class="container agnet-prop">
            <div class="row">

                <aside class="col-md-4 column">
                <img src="{{ asset('img/vv.jpg')}}" alt="" style="width: 100%; height: 100%;" />  
                </aside>

                <div class="col-md-8 column">

                    <div class="heading4">
                        <h2 class=" text-success">UPDATE PROPERTY</h2>
                    </div>
                    <br>

                    <div class="submit-content">

                    <form action="{{ route('property.update', $property->id) }}" method="POST">
                   
                    @csrf 
                     {{ method_field('PUT') }}
                          <label for="title">Title:</label>
                          <input type="text" id="title" name="title" required=""  value="{{ $property->title }}"><br>

                          <label for="area">Area:</label>
                          <input type="text" id="area" name="area" required=""  value="{{ $property->area}}"><br>

                          <label for="desc">Description:</label>
                          {{-- <input type="text" id="textarea" class="form-control" name="desc" value="{{ old('desc') }}">--}}
                          <textarea id="desc" name="desc" required="" >{{ $property->desc }}</textarea><br>


                  <!-- STATUS -->
                          <label>Status</label>
                          <select name="status" class="form-control">
                            <option value=""disabled selected>Select an option</option>
                              <option value="Sale">Sale</option>
                              <option value="Open house">Open house</option>
                              <option value="Rent">Rent</option>
                              <option value="Sold">Sold</option>
                          </select>
                          <br>



                  <!-- TYPE        -->
                          <label>Type</label>
                          <select name="type" class="form-control">
                              <option value=""  disabled selected>Select an option</option>
                              <option value="Apartment">Apartment</option>
                              <option value="Condominium">Condominium</option>
                              <option value="Multifamily">Multifamily</option>
                              <option value="Commercial property">Commercial property</option>
                              <option value="Townhouse">Townhouse</option>
                              <option value="Single-family home">Single-family home</option>
                              <option value="Cooperative">Cooperative</option>
                              <option value="Industrial Property">Industrial Property</option>
                              <option value="Retail Property">Retail Property</option>
                              <option value="Office Building">Office Building</option>
                              <option value="Warehouse">Warehouse</option>                           
                          </select>
                          <br>


                          <label for="price">Price:</label>
                          <input type="text" id="price" name="price" required="" value="{{ $property->price }}"><br>

                          <label for="input-upload" class="btn flat-btn btn-lg">Select Images</label>
                          <input id="input-upload" type="file" multiple="" name="image" value="{{ old('image') }}" accept="image/jpeg,image/gif,image/png"><br>
                          <img src="{{ asset('img/properties/' . $property->image) }}" class="img-thumbnail" style="width: 25%" alt="">
                          @error('image')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                          @enderror

                    <br>

                        <button type="submit" class="btn btn-success col-md-3 text-success">Update</button>

</form>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <style>
    body {
      font-family: sans-serif;
      margin: 20px;
    }

    form {
      background-color: #f1f1f1;
      padding: 20px;
      border-radius: 5px;
      width: 500px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input, textarea, select {
      width: 100%;
      padding: 5px;
      border: 1px solid #ddd;
      border-radius: 2px;
      font-size: 16px;
    }

    input[type="submit"] {
      background-color: #008cba;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      font-size: 18px;
      cursor: pointer;
    }

    textarea {
      height: 100px;
    }
  </style>


  
    @endsection
