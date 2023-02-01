<header>
    <div class="header-area" style="background-image: url({{ asset('img/bg-header-2.jpeg') }})">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('img/logo-horizontal.png') }}" width="180">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu d-none d-lg-block">
                                <nav class="nav justify-content-center">
                                    <ul id="navigation" class="">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        @foreach ($menus as $menu)
                                            <li>
                                                <a
                                                    href="{{ $menu->sub_menus->isNotEmpty() ? '#' : url('pages/' . $menu->slug) }}">
                                                    {{ $menu->name }} {!! $menu->sub_menus->isNotEmpty() ? '<i class="ti-angle-down"></i>' : '' !!}
                                                </a>
                                                @if ($menu->sub_menus->isNotEmpty())
                                                    <ul class="submenu">
                                                        @foreach ($menu->sub_menus as $submenu)
                                                            <li>
                                                                <a
                                                                    href="{{ $submenu->deep_menus->isNotEmpty() ? '#' : url('pages/' . $submenu->slug) }}">
                                                                    {{ $submenu->name }}
                                                                </a>
                                                                @if ($submenu->deep_menus->isNotEmpty())
                                                                    <ul class="submenu">
                                                                        @foreach ($submenu->deep_menus as $deepmenu)
                                                                            <li>
                                                                                <a
                                                                                    href="{{ url('pages/' . $deepmenu->slug) }}">
                                                                                    {{ $deepmenu->name }}
                                                                                </a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                        {{-- 
                                        <li>
                                            <a href="#">Destination <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ url('/pages/turkiye', []) }}">Turkiye</a></li>
                                                <li><a href="{{ url('/pages/Middle-East', []) }}">Middle East</a>
                                                </li>
                                                <li><a href="{{ url('/pages/Europe', []) }}">Europe</a></li>
                                                <li>
                                                    <a href="#">Asia <i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ url('/pages/Malaysia', []) }}">Malaysia</a>
                                                        </li>
                                                        <li><a href="{{ url('/pages/Singapore', []) }}">Singapore</a>
                                                        </li>
                                                        <li><a href="{{ url('/pages/Indonesia', []) }}">Indonesia</a>
                                                        </li>
                                                        <li><a href="{{ url('/pages/Jepang', []) }}">Jepang</a>
                                                        </li>
                                                        <li><a href="{{ url('/pages/Korea', []) }}">Korea</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/pages/Umrah', []) }}">Umrah</a></li>
                                        <li><a href="#">Special Interest <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ url('/pages/Cycling', []) }}">Cycling</a></li>
                                                <li><a href="{{ url('/pages/Honeymoon', []) }}">Honeymoon</a></li>
                                                <li><a href="{{ url('/pages/Wellness', []) }}">Wellness</a></li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                        <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                            <div class="d-flex align-items-center justify-content-end">
                                <div class="number d-flex flex-column g-0 align-items-end">
                                    <span style="font-size: 10px">For Booking & Enquries:</span>
                                    <a href="tel:+62819809390" target="_blank">
                                        <i class="fa fa-phone"></i> +62 819 809 390
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
