@extends('layouts.template')

@section('extra-style')
    <style>
        .bg-contact-us {
            height: 650px;
            background: url('{{ asset('img/bg-contact-us.jpeg') }}');
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
    </style>
@endsection

@section('content')
    <div class="bg-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-12">
                    <div class="mt-5 d-flex flex-column align-items-end">
                        <h3 class="text-white">CONTACT US</h3>

                        <h2 class="text-white">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </h2>

                        <h5 class="text-white">MALAYSIA</h5>
                        <h6 class="text-white m-0">1-23-5 Menara Bangkok Bank Berjaya Central Park</h6>
                        <h6 class="text-white m-0">Jalan Ampang 504 Kuala Lumpur</h6>
                        <h6 class="text-white m-0">+60 12-235-1099</h6>

                        <h5 class="text-white mt-3">INDONESIA</h5>
                        <h6 class="text-white m-0">Ruko 92 Avenix Blok E No. 16</h6>
                        <h6 class="text-white m-0">Jl. Serpong Lapan Sampora Cisauk Kab. Tanggerang</h6>
                        <h6 class="text-white m-0">+62 21 5569 0736 | +62 817 9009 390</h6>

                        <h6 class="text-white mt-3 m-0">Cyber 2 Tower 17 <sup class="text-white">th</sup> Floor, JL. HR.
                            Rusuna
                            Said Block</h6>
                        <h6 class="text-white m-0">X-5</h6>
                        <h6 class="text-white m-0">Kav.13 Jakarta 12050</h6>
                        <h6 class="text-white m-0">+62 21 5799 | +62 819 809 390</h6>

                        <h2 class="text-white mt-3 m-0">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </h2>
                        <p class="text-white">info@polarisvacations.com</p>

                        <h2 class="text-white mt-3 mb-0">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </h2>
                        <p class="text-white">www.polarisvacations.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
