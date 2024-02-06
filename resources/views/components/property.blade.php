@props(['property' => $property])





                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="{{ asset('img/properties/' . $property->image) }}" alt="" style="width: 70%; height: 200px;"></a>
                                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For {{ $property->status }}</div>
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">{{ $property->type }}</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">₱{{ $property->price }}</h5>
                                        <a class="d-block h5 mb-2" href="">{{ $property->title }}</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>{{ $property->area}} Sqft</small>
                                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i> Bed</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i> Bath</small>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">                
                                            <a href="{{ route('property.edit', $property->id) }}">
                                                <button type="submit" class="btn btn-info">Edit</button>
                                            </a>
                                        </div>
                                        <div class="col-md-2">                              
                                            <a href="{{ route('property.show', $property->id) }}">
                                                <button type="submit" class="btn btn-warning">View</button>
                                            </a>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-danger" onclick="confirmDelete('{{ encrypt($property->id) }}')">Delete</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            