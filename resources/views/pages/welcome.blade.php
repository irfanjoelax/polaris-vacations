@extends('layouts.template')

@section('content')
    <!-- slider_area_start -->
    <div class="slider_area mb-0">
        <div class="slider_active owl-carousel">
            @foreach ($sliders as $data)
                <div class="single_slider d-flex align-items-center overlay"
                    style="background-image: url('{{ asset($data['image']) }}')">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-md-12">
                                <div class="slider_text text-center">
                                    <h3>Where The Great Journey Begin</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- slider_area_end -->


    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center">
                        <h3 class="text-primary">Special Offer</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($specialOffer as $data)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_place">
                            <div class="thumb">
                                <img src="{{ asset('storage/' . $data->thumbnail) }}" alt="" loading="lazy">
                                <a href="{{ url('book-now/' . $data->slug) }}" class="prise">Book Now</a>
                            </div>
                            <div class="place_info">
                                <a href="" class="text-primary">
                                    <h3>{{ $data->title }}</h3>
                                </a>
                                <p class="text-primary">{{ $data->subtitle }}</p>
                                <small style="color: #0CAED8">Start form {{ $data->start_form }} ++</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- popular_destination_area_start  -->
    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3 class="text-primary">Umrah</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($umrah as $data)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_destination">
                            <div class="thumb">
                                <img src="{{ asset('storage/' . $data->thumbnail) }}" loading="lazy">
                            </div>
                            <div class="content">
                                <p>
                                    {{ $data->title }}<br>
                                    <small>{{ $data->subtitle }}</small>
                                    <br>
                                    <span style="font-size: 12px">Start From {{ $data->start_form }}
                                        ++</span>
                                    <a href="{{ url('book-now/' . $data->slug) }}" class="m-0">Book Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->

    <div class="travel_variation_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3 class="text-primary">Why Choose Us</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{ asset('img/icon-experience.png') }}" width="150" loading="lazy">
                        </div>
                        <h3 class="text-primary">Experience</h3>
                        <p>More than 20 years of tourism background. Gives us the competitive edge in the tourism
                            industry</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{ asset('img/icon-good-service.png') }}" width="150" loading="lazy">
                        </div>
                        <h3 class="text-primary">Good Service</h3>
                        <p>Ensure the trip is well organize and on time schedule</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{ asset('img/icon-good-price.png') }}" width="150" loading="lazy">
                        </div>
                        <h3 class="text-primary">Competitive Price</h3>
                        <p>Our motto is to offer the best deals and great savings to our clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{ asset('img/icon-trusted.png') }}" width="150" loading="lazy">
                        </div>
                        <h3 class="text-primary">Trusted</h3>
                        <p>We will provide the best service and be trusted by our customers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
