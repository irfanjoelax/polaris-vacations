@extends('layouts.template')

@section('content')
    <img src="{{ asset('storage/' . $paket->image_header) }}" loading="lazy" class="img-fluid" width="100%">

    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 col-12 mb-3">
                <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button style="background-color: #022461" class="nav-link text-white  active" id="pills-program-tab"
                            data-toggle="pill" data-target="#pills-program" type="button" role="tab"
                            aria-controls="pills-program" aria-selected="true">
                            Program
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button style="background-color: #022461" class="nav-link text-white "
                            id="pills-include-exclude-tab" data-toggle="pill" data-target="#pills-include-exclude"
                            type="button" role="tab" aria-controls="pills-include-exclude" aria-selected="false">
                            Include & Exclude
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button style="background-color: #022461" class="nav-link text-white " id="pills-term-condition-tab"
                            data-toggle="pill" data-target="#pills-term-condition" type="button" role="tab"
                            aria-controls="pills-term-condition" aria-selected="false">
                            Term & Conditions
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button style="background-color: #022461" class="nav-link text-white " id="pills-harga-tab"
                            data-toggle="pill" data-target="#pills-harga" type="button" role="tab"
                            aria-controls="pills-harga" aria-selected="false">
                            Harga
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-program" role="tabpanel"
                        aria-labelledby="pills-program-tab">
                        {!! $paket->program !!}
                    </div>
                    <div class="tab-pane fade" id="pills-include-exclude" role="tabpanel"
                        aria-labelledby="pills-include-exclude-tab">
                        {!! $paket->include_exclude !!}
                    </div>
                    <div class="tab-pane fade" id="pills-term-condition" role="tabpanel"
                        aria-labelledby="pills-term-condition-tab">
                        {!! $paket->term_conditions !!}
                    </div>
                    <div class="tab-pane fade" id="pills-harga" role="tabpanel" aria-labelledby="pills-harga-tab">
                        {!! $paket->harga !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-3">
                <div class="card p-3">
                    <h3 class="mb-4 text-primary">Contact for Detail</h3>
                    <form action="{{ url('book-now/' . $paket->slug) }}" method="POST">
                        @csrf
                        <input type="hidden" name="paket_id" value="{{ $paket->id }}">
                        <div class="form-group">
                            <input type="text" placeholder="Name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" placeholder="Phone" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="personal"
                                    value="personal" onclick="checkType('personal')" checked>
                                <label class="form-check-label" for="personal">
                                    Personal
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="travel_agent"
                                    value="travel_agent" onclick="checkType('travel_agent')">
                                <label class="form-check-label" for="travel_agent">
                                    Travel Agent
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Name of Travel" name="name_travel" class="form-control"
                                id="name_travel" disabled>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" name="message" class="form-control" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-block text-white"
                            style="background-color: #022461">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-script')
    @include('sweetalert::alert')
    <script>
        function checkType(type) {
            const nameTravel = document.getElementById("name_travel");

            if (type === 'personal') {
                nameTravel.setAttribute('disabled', '');
            }

            if (type === 'travel_agent') {
                nameTravel.removeAttribute("disabled");
            }
        }
    </script>
@endsection
