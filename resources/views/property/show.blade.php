@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Information</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #495057;
        }

        header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1, h2 {
            color: #007bff;
        }

        p {
            line-height: 1.6;
            color: #343a40;
        }

        .property-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li::before {
            content: "\2022";
            color: #007bff;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }

        h2.price {
            color: #28a745;
        }

        footer {
            text-align: center;
            padding: 1em 0;
            background-color: #007bff;
            color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Property Information</h1>
    </header>

    <main>
        <img src="{{ asset('img/properties/' . $property->image) }}" alt="">
        <br>
        <p>This stunning property is located in a peaceful neighborhood, offering a perfect blend of comfort and style. With spacious rooms, modern amenities, and a beautiful garden, this house is the perfect place to call home.</p>

        <h2>Key Features:</h2>
        <ul>
            <li>4 Bedrooms</li>
            <li>3 Bathrooms</li>
        </ul>

        <h2 class="price">Price: $500,000</h2>

        <p>Contact us for more information and to schedule a viewing.</p>
    </main>

   

</body>
</html>



















<div class="row">

<!-- Images + Further Details -->
<div class="col-md-8 column">
    <div class="single-post-sec">
        <div class="blog-post property-post">
           

            <h1> {{ $property->title }} </h1>

            <div class="row">
                <div class="col-md-4">
                    <div class="property-detail">

                        <div class="detail-field row" >
                            <span class="col-xs-6 col-md-5 detail-field-label">Type</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"><a href="#" rel="tag"></a></span>
                            <span class="col-xs-6 col-md-5 detail-field-label">Status</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"><a href="#" rel="tag">{{ $property->status }}</a></span>
                            <span class="col-xs-6 col-md-5 detail-field-label">Location</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"><a href="#" rel="tag"></a></span>
                            <span class="col-xs-6 col-md-5 detail-field-label">Price</span>
                            <span class="col-xs-6 col-md-7 detail-field-value">
                                    <span class="amount">${{ $property->price }}</span> 
                                </span>
                            <span class="col-xs-6 col-md-5 detail-field-label">Area</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"> sqft</span>
                            <span class="col-xs-6 col-md-5 detail-field-label">Bedrooms</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"></span>
                            <span class="col-xs-6 col-md-5 detail-field-label">Bathrooms</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"></span>
                            <span class="col-xs-6 col-md-5 detail-field-label">Lot Area</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"></span>
                            <span class="col-xs-6 col-md-5 detail-field-label">Year Built</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"></span>
                            <span class="col-xs-6 col-md-5 detail-field-label">Flooring</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"></span>
                            <span class="col-xs-6 col-md-5 detail-field-label">Roofling</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"></span>
                            <span class="col-xs-6 col-md-5 detail-field-label">Parking</span>
                            <span class="col-xs-6 col-md-7 detail-field-value"> slots</span>
                        </div>

                    </div>
                </div>
                <div class="col-md-8">
                    <p>{{ $property->desc }}</p>
                </div>
            </div>

            

            <div class="property-video">
                <div class="heading3">
                    <h3>Property Video </h3>
                </div>
                <iframe height="400" src="{{ $property->video }}" allowfullscreen></iframe>
            </div>

            <div class="property-map">
                <div class="heading3">
                    <h3>Find this property on the map </h3>
                </div>
                <div id="propertyMap" ></div>
            </div>


            <div class="send-email-to-agent">
                <div class="comment-form">
                    <div class="heading3">
                        <h3>Send Message to Agent</h3>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <label>
                                    <i class="fa fa-user"></i>
                                    <input type="text" placeholder="Name" />
                                </label>
                            </div>
                            <div class="col-md-12">
                                <label>
                                    <i class="fa fa-at"></i>
                                    <input type="text" placeholder="Email Id" />
                                </label>
                            </div>
                            <div class="col-md-12">
                                <label>
                                    <i class="fa fa-phone"></i>
                                    <input type="text" placeholder="Phone Number" />
                                </label>
                            </div>
                            <div class="col-md-12">
                                <label>
                                    <i class="fa fa-pencil"></i>
                                    <textarea placeholder="Your Message"></textarea>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="flat-btn">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div><!-- Blog Post -->
    </div><!-- Blog POst Sec -->
</div>

<!-- Follow Widget -->
<aside class="col-md-4 column">

    <!-- Profile Account -->
    <div class="agent_bg_widget widget">
        <div class="agent_widget">
            <div class="agent_pic">
                <a href="" title="">
                    <img src="" alt="" />
                    <h5></h5>
                </a>
            </div>
            <div class="agent_social">
                <a href="" title=""><i class="fa fa-facebook"></i></a>
                <a href="" title=""><i class="fa fa-google-plus"></i></a>
                <a href="" title=""><i class="fa fa-twitter"></i></a>
                <a href="" title=""><i class="fa fa-linkedin"></i></a>
                <a href="" title=""><i class="fa fa-pinterest"></i></a>
            </div>

            <span>
                    <i class="fa fa-phone"> </i> 
                </span>
            <span>
                    <i class="fa fa-envelope"> </i> 
                </span>


            <a href=""  title="" class="btn contact-agent">More Listings</a>
        </div>
    </div>


    <!-- Search Property -->
    <div class="search_widget widget">
        <div class="heading2">
            <h3>SEARCH PROPERTIES</h3>
        </div>
        <div class="search-form">
            <form action="properties.html"  method="get" class="form-inline">
                <div class="search-form-content">
                    <div class="search-form-field">
                        <div class="form-group col-md-12">
                            <div class="label-select">
                                <select class="form-control" name="s_location">
                                    <option>All Locations</option>
                                    <option>Tokyo</option>
                                    <option>New Jersey</option>
                                    <option>New York</option>
                                    <option>Paris</option>
                                    <option>Marrakech</option>
                                    <option>lille</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="label-select">
                                <select class="form-control" name="s_sub_location">
                                    <option>All Sub-locations</option>
                                    <option>Central New York</option>
                                    <option>GreenVille</option>
                                    <option>Long Island</option>
                                    <option>New York City</option>
                                    <option>West Side</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="label-select">
                                <select class="form-control" name="s_cat">
                                    <option>All Categories </option>
                                    <option>Apartment</option>
                                    <option>Load</option>
                                    <option>Office Building</option>
                                    <option>House</option>
                                    <option>Villa</option>
                                    <option>Retail</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="label-select">
                                <select class="form-control" name="s_statu">
                                    <option> All Status </option>
                                    <option>Open house</option>
                                    <option>Rent </option>
                                    <option>Boy</option>
                                    <option>used</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="label-select">
                                <select class="form-control">
                                    <option>No. of Bedrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="label-select">
                                <select class="form-control">
                                    <option>No. of Bed</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <span class="gprice-label">Price</span>
                            <input type="text" class="span2" value="" data-slider-min="0"
                                   data-slider-max="600" data-slider-step="5"
                                   data-slider-value="[0,450]" id="price-range" >
                        </div>
                        <div class="form-group col-md-12">
                            <span class="garea-label">Area</span>
                            <input type="text" class="span2" value="" data-slider-min="0"
                                   data-slider-max="600" data-slider-step="5"
                                   data-slider-value="[50,450]" id="property-geo" >
                        </div>
                    </div>
                </div>
                <div class="search-form-submit">
                    <button type="submit" class="btn-search">Search</button>
                </div>
            </form>
        </div><!-- Services Sec -->
    </div>

</aside>

</div>




@endsection