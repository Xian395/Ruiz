@extends('layouts.main')

@section('content')
<br>
    <section class="block">
        <div class="container agnet-prop">
            <div class="row">

                <aside class="col-md-10 column">
                <div class="agent_bg_widget widget">
                        <div class="agent_widget">
                            <div class="agent_pic">
                                <a href="agent.html" title="">
                                    <img src="img/demo/man1.jpg" alt="" />
                                    <h5>Smith forbes</h5>
                                </a>
                            </div>
                            <div class="agent_social">
                                <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                                <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                <a href="#" title=""><i class="fa fa-tumblr"></i></a>
                            </div>

                            <span>
                                    <i class="fa fa-phone"> </i> +1 9090909090
                                </span>
                            <span>
                                    <i class="fa fa-envelope"> </i>     
                                </span>
                            <ul class="agent-menu">
                                <li>
                                    <a href="" ><i class="fa fa-user"> </i> My Profile </a>
                                </li>
                                <li>
                                    <a href="" ><i class="fa fa-home"> </i> My Properties </a>
                                </li>
                                <li>
                                    <a href="" ><i class="fa fa-sign-out"> </i> Log-out </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </aside>


                

                <div class="col-md-6 column">

                    <div class="submit-content">

                    <form method="POST" action="/post" enctype="multipart/form-data">
                    @csrf 

                    <div class="form-container" style="border: 1px solid #ccc;  padding: 10px; margin: 10px;">
                        <div class="group-title text-info" style=" font-weight: bold; font-size: 18px; margin-bottom: 10px;">Property Description &amp; Price</div>

                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" required><br>

                        <label for="area">Area (sqft)</label>
                        <input type="text" id="area" name="area" required>
                        <br>

                        <label for="desc">Description</label>
                        <textarea id="desc" name="desc" required></textarea><br>

                        <!-- STATUS -->
                        <label>Status</label>
                        <select name="status" class="form-control">
                          <option value="" disabled selected>Select an option</option>
                          <option value="Sale">Sale</option>
                          <option value="Open house">Open house</option>
                          <option value="Rent">Rent</option>
                          <option value="Sold">Sold</option>
                        </select>
                        <br>
                        <!-- TYPE -->
                        <label>Type</label>
                        <select name="type" class="form-control">
                          <option value="" disabled selected>Select an option</option>
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
                        <label for="price">Price (₱)</label>
                        <input type="text" id="price" name="price" required>
                      </div>
                      <br> <br>




                      <div class="group-container" style="border: 1px solid #ccc;  padding: 10px; margin: 10px;">
                          <div class="group-title text-info" style="font-weight: bold; font-size: 18px; margin-bottom: 10px;">Property Image</div>
                          <br>
                          <label for="input-upload" class="btn btn-dark border-0 w-100 py-3">Select Images</label>
                          <input id="input-upload" type="file" multiple="" name="image" value="{{ old('image') }}" accept="image/jpeg,image/gif,image/png"><br>
                      </div>

                          

                       <br>

                        <!-- <button type="submit" class="btn btn-success col-md-3">Submit</button> -->
                        <div class="submit row" style="clear: both; margin-top: 25px;">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-lg flat-btn" id="property_submit" value="Add Property">
                                 
                                </div>
                            </div>

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
