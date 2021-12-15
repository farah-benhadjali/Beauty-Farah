    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="images/logo1.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="/home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('contact.create')}}">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="/cart">Panier</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle"
                                data-toggle="dropdown">{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu">

                                <li>
                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-jet-dropdown-link>

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                    @endif
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </li>

                            </ul>
                        </li>




                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="badge">3</span>
                            </a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>

        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">

            <li class="text-left">
                <img src="images/sliders_web1.jpg" alt="">
                <div class="container">
                    <div class="row">

                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/sliders_web6.jpg" alt="">
                <div class="container">
                    <div class="row">

                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/sliders_web3.jpg" alt="">
                <div class="container">
                    <div class="row">

                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/sliders_web4.jpg" alt="">
                <div class="container">
                    <div class="row">

                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/sliders_web2.jpg" alt="">
                <div class="container">
                    <div class="row">

                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/sliders_web.jpg" alt="">
                <div class="container">
                    <div class="row">

                    </div>
                </div>
            </li>
            <li class="text-right">
                <img src="images/sliders_web5.jpg" alt="">
                <div class="container">
                    <div class="row">

                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->