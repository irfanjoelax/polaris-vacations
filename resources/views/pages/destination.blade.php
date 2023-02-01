@extends('layouts.template')

@section('content')
    <img src="{{ asset('storage/' . $category->image_header) }}" loading="lazy" class="img-fluid" width="100%">

    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3 class="text-primary">Special Offer</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($category->pakets as $data)
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
@endsection
