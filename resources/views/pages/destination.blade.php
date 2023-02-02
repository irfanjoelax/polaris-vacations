@extends('layouts.template')

@section('extra-style')
    <style>
        hr {
            height: 5px;
            background-color: #022461;
            border: none;
        }
    </style>
@endsection

@section('content')
    @if (Storage::mimeType($category->image_header) == 'video/mp4')
        <video width="100%" height="240" controls class="img-fluid">
            <source src="{{ asset('storage/' . $category->image_header) }}" type="video/mp4"> Your browser does not support
            the video tag.
        </video>
    @endif

    @if (in_array(Storage::mimeType($category->image_header), ['image/jpg', 'image/jpeg', 'image/png']))
        <img src="{{ asset('storage/' . $category->image_header) }}" loading="lazy" class="img-fluid" width="100%">
    @endif

    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_title text-center mb_70">
                        <div class="row no-gutters align-items-center">
                            <div class="col-4">
                                <hr>
                            </div>
                            <div class="col-4">
                                <h3 class="text-primary m-0">
                                    Best of {{ Str::title($category->name) }}
                                </h3>
                            </div>
                            <div class="col-4">
                                <hr>
                            </div>
                        </div>
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
