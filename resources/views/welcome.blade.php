<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BHTPA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="antialiased" style="font-family: 'Montserrat', sans-serif;">
        <!--header start here-->
        <header id="header" class="w-full fixed z-20 py-4">
            <!--Navbar start here-->
            <nav class="relative flex flex-wrap align-center justify-between  py-2 ">
                <div class="w-full flex flex-wrap justify-between">
                        <div class="w-3/12 first-col px-4 py-3 flex bg-white rounded-r-full">
                            <a class="nav-link navbar-brand digitalbd-logo" href="\">
                                <img src="{{ asset('img/digitalbd-logo.png') }}" height="auto" class="max-w-full h-12 mr-5"
                                alt="digitalbd logo">
                            </a>
                            <a class="nav-link navbar-brand" href="\">
                                <img src="{{ asset('img/bhtpa-logo180.png') }}" height="auto" class="max-w-full h-12 "
                                    alt="bhtpa logo">
                            </a>
                        </div>
                        <div class="w-7/12 menu-col flex justify-end items-center pr-5">
                            <!-- Collapse button -->
                            <div class="flex menu-item text-white">
                                <div class="left-side">
                                </div><!--End left side-->
                                <div class="right-side flex">
                                    <span class="language">
                                        <a class="text-white" href="#">ENG</a> |
                                        <a class="text-muted" href="#">BN</a>
                                    </span>
                                    <button type="button" class="btn btn-default text-white" data-toggle="modal" data-target="#modalPoll-1"><i
                                    class="fas fa-bars"> </i> MENU</button>
                                </div><!--End right side-->

                            </div>
                        </div>
                        <div class="w-2/12 last-col bg-white rounded-l-full py-4 pl-6">
                            <a href="#" class="navbar-brand float-none">
                            <img src="{{ asset('img/Mujib-Borsho.jpg') }}" class="align-middle max-h-12"
                            alt="Mujib-Borsho logo"> </a>
                        </div>
                </div>
                <!-- toggle navigation -->
                <div class="hidden modal fade right toggle-menu" id="modalPoll-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
                    <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
                        <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" class="white-text">×</span> Close
                                </button>
                            </div>

                            <!--Body-->
                            <div class="modal-body ">
                                <ul class="navbar-nav justify-content-between ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="\">Home <span class="sr-only">(current)</span></a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        About
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a   class="dropdown-item" href="#">Park Information</a>
                                            <a class="dropdown-item" href="#">All focal point</a>
                                            <a class="dropdown-item" href="#">Annual Report</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Act, Rules & Guidelines
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Act</a>
                                        <a class="dropdown-item" href="#">Rules</a>
                                        <a class="dropdown-item" href="#">Guidelines</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Project</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Running Project</a>
                                        <a class="dropdown-item" href="#">Operational Project</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Service
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="/one-stop-services.html">One Stop Service</a>

                                        </div>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Gallery
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Photo</a>
                                            <a class="dropdown-item" href="#">Video</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a   class="nav-link" href="#">Key Personal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a   class="nav-link" href="#">Investors List</a>
                                    </li>

                                    <li class="nav-item">
                                        <a   class="nav-link" href="#">Contact</a>
                                    </li>
                                    @if (Route::has('login'))
                                        @auth
                                        <li class="nav-item">
                                            <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                                        </li>
                                        @else
                                            <li class="nav-item">
                                                <a href="{{ route('login') }}" class="">Log in</a>
                                            </li>

                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a href="{{ route('register') }}" class="ml-4 ">Register</a>
                                                </li>
                                            @endif
                                        @endauth
                                    @endif
                                    </ul>

                                </div>

                                <!-- modal Footer-->
                                <div class="modal-footer">
                                    <!-- Search form -->
                                    <form class="form-inline flex  lg-form form-lg active-pink active-pink-2 mt-2">

                                    <input class="form-control form-control-sm ml-3 w-90" type="text" placeholder="Search"
                                        aria-label="Search"><i class="fas fa-search fa-lg ml-2" aria-hidden="true"></i>
                                    </form>
                                </div>
                            </div><!--End modal content-->
                        </div>
                </div> <!-- Modal: modalPoll -->
                <!--/. toggle navigation -->
            </nav>
            <!-- Navbar end here-->
        </header>
        <!--header end here-->
        <!--main start here-->
        <main class="main-content">
            <!--Start slider-->
            <section class="relative slider-section p-0">
                <div class="container-slider">
                    <div id="carousel-example-1z" class="relative carousel slide carousel-fade" data-ride="carousel">

                        <!--Indicators-->
                        <ol class="carousel-indicators absolute bottom-0 left-0 right-0 z-15 flex justify-center pl-0 ">
                            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-1z" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-example-1z" data-slide-to="2" class=""></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">

                            <!--First slide-->
                            <div class="carousel-item third-slide active">
                                <div class="pt-40" style="height:700px; background-image: url({{asset('img/slider2.jpg')}}),linear-gradient(90deg,rgba(0, 0, 0, 0.5) 30%,rgba(0,0,0, .01) 90%) !important;">

                                    <!-- Mask & flexbox options-->
                                    <div class="w-full px-20 mx-auto">
                                        <div class="text-light items-center">
                                            <div class="w-2/4">
                                                <div class="content">
                                                    <h1 class="mb-4 text-6xl text-white">
                                                    <strong><span style="text-transform: initial;"> Key Drivers of the</span>DRIVING INDUSTRIES OF THE FUTURE</strong>
                                                    </h1>

                                                    <h5 class="mb-5 text-3xl text-white">Quamquam te quidem video minime esse deterritum</h5>
                                                    <a target="_blank" href="#" class="bg-white py-3 px-5 text-xl rounded-full">
                                                    Show more</a>
                                                </div>
                                            </div><!--end col-6-->
                                            <div class="col-md-6">
                                                <!-- content -->
                                                <div class="content">
                                                </div><!-- content -->
                                            </div><!--end col-6-->
                                        </div><!--end row -->
                                    </div><!-- end Container -->

                                </div><!--/slide container-->
                            </div><!--/First slide-->
                            <!--Second slide-->
                            <div class="carousel-item second-slide">
                                <div class="pt-40" style="height:700px; background-image: url({{asset('img/slider3.jpg')}}),linear-gradient(90deg,rgba(69,139,189,0.98) 40%,rgba(69,139,189,0.4) 90%) !important;">

                                    <!-- Mask & flexbox options-->
                                    <div class="w-full px-20 mx-auto">
                                        <div class="text-light wow fadeIn items-center">
                                            <div class="w-2/4">
                                                <h1 class="mb-4 text-6xl text-white"><strong>DRIVING INDUSTRIES OF THE FUTURE</strong></h1>
                                                <h5 class="mb-5 text-3xl text-white"> Quamquam te quidem video minime esse deterritum</h5>
                                                <a target="_blank" href="#" class="bg-white py-3 px-5 text-xl rounded-full">
                                                    Show more</a>
                                            </div>
                                            <div class="w-2/4">
                                                <div class="content">
                                                        <!-- Content -->
                                                </div>
                                            </div><!--end col-6-->
                                        </div><!-- row -->
                                    </div><!-- Mask & flexbox options-->
                                </div><!--end slide container-->
                            </div><!--/Second slide-->
                            <!--Third slide-->
                            <div class="carousel-item first-slide">
                                <div class="pt-40" style="height:700px; background-image: url({{asset('img/slider1.jpg')}}),linear-gradient(90deg,rgba(0, 0, 0, 0.6) 40%,rgba(0,0,0, 0.2) 95%) !important;">
                                    <!-- Mask & flexbox options-->
                                    <div class="w-full px-20 mx-auto">
                                        <div class="text-light wow fadeIn items-center">
                                            <div class="w-2/4">
                                            <div class="content">
                                                <h1 class="mb-4 text-6xl text-white"><strong>QUOTES FROM THE VISIONARIES</strong> </h1>
                                                <h5 class="mb-5 text-3xl text-white">Quamquam te quidem video minime esse deterritum</h5>
                                                <a target="_blank" href="#" class="bg-white py-3 px-5 text-xl rounded-full">
                                                    Show more</a>
                                            </div>

                                            </div>
                                            <div class="w-2/4">

                                            </div><!--End col-6-->
                                        </div><!-- row -->
                                    </div>
                                    <!-- Mask & flexbox options-->

                                </div>
                            </div><!--/Third slide-->
                        </div><!--/.Slides-->


                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->

                    </div>
                </div><!--end slider container-->
            </section>
            <!--End slider-->
            <section class="about-bhtpa bg-green-500 px-20 py-11">
                <div class="container">
                    <div class="row flex">
                        <div class="w-2/4">
                        <div class="content">
                            <h2 class="text-white font-bold text-4xl"><span class="text-lg">WELCOME TO</span> <br/> BANGLADESH HI-TECH PARK AUTHORITY</h2>
                        </div>
                        </div>
                        <div class="w-2/4">
                        <div class="content">
                            <p class="text-lg font-normal text-white">
                            Establish international standard infrastructure;create congenial & sustainable business environment; develop IT/ITES based Industrial ecosystem and ensure all services for IT/ITES business & industries through One Stop Platform <br><a href="#" class="capitalize text-green-500 bg-white rounded p-1.5"> read more </a>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </section><!--End about-bhtpa-->

            <section class="px-20 py-11">
                <div class="container">
                    <div class="row justify-center">
                        <div class="col-md-12">

                            <h2 class="font-medium pb-2 text-center text-5xl text-gray-700">Digital Bangladesh</h2>
                            <div class="line-wrap text-center text-gray-700">
                                <div class="inline-block w-1/12 h-1 bg-gray-700 mt-2 mb6"></div>
                            </div>


                        </div>
                    </div>
                    <div class="grid grid-flow-row grid-cols-3 grid-rows-2 gap-5 mt-4">
                        <div class="card col-one">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="card-img flip-card-front">
                                        <img src="{{asset('img/leading-1.jpg')}}" title="" alt="">
                                    </div>
                                    <h4 class="card-title ">Leading Bangladesh’s Digital Economy Forward</h4>
                                    <div class="card-box flip-card-back">

                                    <h5 class="card-sub-title mbr-fonts-style mbr-white display-4">
                                        As the world navigates unprecedented times, facing multiple industry disruptions, Bangladesh continues
                                        to set the narrative for the Southeast Asia region with a focused effort to drive.
                                    </h5>
                                    <a class="btn btn-light mt-2" href="#">Learn more</a>
                                    </div>
                                </div>
                            </div><!--End flip card-->
                        </div><!--End col one-->
                        <div class="card col-two">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="card-img flip-card-front">
                                        <img src="{{asset('img/bg-investing-in-the-future-desktop.jpg')}}" title="" alt="">
                                    </div>
                                    <h4 class="card-title">Making Bangladesh the Heart of Digital ASEAN</h4>
                                    <div class="card-box flip-card-back">

                                        <h5 class="card-sub-title mbr-fonts-style mbr-white display-4">
                                            As the world navigates unprecedented times, facing multiple industry disruptions, Bangladesh continues
                                            to set the narrative for the Southeast Asia region.
                                        </h5>
                                        <a class="btn btn-light mt-2" href="#">Learn more</a>

                                    </div>
                                </div>
                            </div><!--End flip card-->
                        </div><!--End col two-->
                        <div class="card col-three">
                            <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="card-img flip-card-front">
                                    <img src="{{asset('img/17.jpg')}}" title="" alt="">
                                </div>
                                <h4 class="card-title">Digitally Powered Businesses</h4>

                                <div class="card-box flip-card-back">
                                    <h5 class="card-sub-title mbr-fonts-style mbr-white display-4">
                                        As the world navigates unprecedented times, facing multiple industry disruptions, Bangladesh continues
                                        to set the narrative for the Southeast Asia region.
                                    </h5>
                                    <a class="btn btn-light mt-2" href="#">Learn more</a>

                                </div>
                            </div>
                            </div><!--End flip card-->
                        </div><!--End col three-->
                        <div class="card col-four">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="card-img flip-card-front">
                                        <img src="{{asset('img/gettyimages-3.jpg')}}" title="" alt="">
                                    </div>
                                    <h4 class="card-title">Digitally Skilled Bangladeshies</h4>

                                    <div class="card-box flip-card-back">
                                        <h5 class="card-sub-title mbr-fonts-style mbr-white display-4">
                                            As the world navigates unprecedented times, facing multiple industry disruptions, Bangladesh continues
                                            to set the narrative for the Southeast Asia region.
                                        </h5>
                                        <a class="btn btn-light mt-2" href="#">Learn more</a>

                                    </div>
                                </div>
                            </div><!--End flip card-->
                        </div><!--End col four-->
                        <div class="card col-five">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="card-img flip-card-front">
                                        <img src="{{asset('img/bg-hub-of-global-innovation-desktop.jpg')}}" title="" alt="">
                                    </div>
                                    <h4 class="card-title">Digital Sector Investments</h4>

                                    <div class="card-box flip-card-back">
                                        <h5 class="card-sub-title mbr-fonts-style mbr-white display-4">
                                            As the world navigates unprecedented times, facing multiple industry disruptions, Bangladesh continues
                                            to set the narrative for the Southeast Asia region.
                                        </h5>
                                        <a class="btn btn-light mt-2" href="#">Learn more</a>

                                    </div>
                                </div>
                            </div><!--End flip card-->
                        </div><!--End col Five-->
                        <div class="card col-six">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="card-img flip-card-front">
                                        <img src="{{asset('img/bg-hub-of-global-innovation-desktop.jpg')}}" title="" alt="">
                                    </div>
                                    <h4 class="card-title">Digital Sector Investments</h4>

                                    <div class="card-box flip-card-back">
                                        <h5 class="card-sub-title mbr-fonts-style mbr-white display-4">
                                            As the world navigates unprecedented times, facing multiple industry disruptions, Bangladesh continues
                                            to set the narrative for the Southeast Asia region.
                                        </h5>
                                        <a class="btn btn-light mt-2" href="#">Learn more</a>

                                    </div>
                                </div>
                            </div><!--End flip card-->
                        </div><!--End col six-->
                    </div>

                </div>
            </section><!--End digital bd-->

            <!--Start Hi-tech infrastructure section-->
            <section class="portfolio-section bg-carrier bg-cover bg-center bg-no-repeat px-20 py-11" style="background-image: url('{{asset('img/padma-yellow.jpg')}}');">
                <div class="container ongoing-project">
                <div class="row main-row py-5 flex items-center">
                    <div class="w-5/12 first-col">
                        <div class="content">
                            <h2 class="text-5xl font-semibold text-gray-700 mb-2">Hi-Tech Infrastructure in Bangladesh</h2>
                            <p class="text-gray-700">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>

                        </div><!--content end-->
                    </div><!--col-md-5 end-->

                    <div class="w-7/12 last-col">
                        <div class="row right-child-row grid grid-flow-col grid-cols-2 grid-rows-2 gap-4">
                                <div class="overlay bg-white p-8 mb-2">
                                    <i class="fas fa-city fa-3x mb-3"></i>
                                    <h4>Incentives for investing in Hi-Tech Park</h4>
                                    <p>Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p>
                                    <a class="more-btn" href="#">Learn more <i class="fas fa-arrow-right fa-xl "></i></a>
                                </div><!--overlay end-->

                                <div class="overlay bg-white p-8 mb-2">
                                    <i class="fas fa-chart-area fa-4x"></i>
                                    <h4>Project ready for Investment</h4>
                                    <p>Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p>
                                    <a class="more-btn" href="#">Learn more <i class="fas fa-arrow-right fa-xl "></i></a>
                                </div><!--overlay end-->
                                <div class="overlay bg-white p-8 mb-2">
                                    <i class="fas fa-chart-area fa-4x"></i>
                                    <h4>Ongoing Development Project</h4>
                                    <p>Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p>
                                    <a class="more-btn" href="#">Learn more <i class="fas fa-arrow-right fa-xl "></i></a>
                                </div><!--overlay end-->

                                <div class="overlay bg-white p-8 mb-2">
                                    <i class="fas fa-city fa-3x mb-3"></i>
                                    <h4>Incentives for investing in Hi-Tech Park</h4>
                                    <p>Some quick example text to build on the card title and make up the bulk of the card's
                                    content.</p>
                                    <a class="more-btn" href="#">Learn more <i class="fas fa-arrow-right fa-xl "></i></a>
                                </div><!--overlay end-->
                        </div>
                    </div><!--col-md-7 end-->


                </div><!--First row end-->
                </div>
            </section>
            <!--End Hi-tech infrastructure section-->

            <section class="noticeboard-section px-20 py-11 bg-center bg-cover bg-no-repeat" style="background-image: url('{{asset('img/bg-program-2.jpg')}}');">
                <div class="container">
                    <div class="row first-row py-3">
                    <div class="col-md-12">
                        <h2 class="font-medium pb-2 text-center text-5xl text-white">Notice Board</h2>
                        <div class="line-wrap text-center text-white">
                            <div class="inline-block w-1/12 h-1 bg-white mt-2 mb6"></div>
                        </div>
                    </div>
                    </div><!--End first row-->
                    <div class="row second-row">
                    <div class="col-md-12">

                        <div class="item">

                            <div class="content">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#" title="Re-Invitation for Tender"><i class="fas fa-angle-right mr-1"></i> Re-Invitation for Tender</a></li>
                                <li class="list-group-item">  <a href="#" title="EOI for Human Resource Development of ‘Bangabandhu Sheikh Mujib Hi-Tec..."><i class="fas fa-angle-right mr-1"></i> EOI for Human Resource Development of ‘Bangabandhu Hi-Tec...</a></li>
                                <li class="list-group-item"><a href="#" title="EoI Corrigendum of Establishment of Sheikh Kamal IT Training and Incub..."><i class="fas fa-angle-right mr-1"></i> EoI Corrigendum of Establishment of Sheikh Kamal IT Training and Incub...</a></li>
                                <li class="list-group-item"><a href="#" title="EOI of Establishment of Sheikh Kamal IT Training and Incubation center..."><i class="fas fa-angle-right mr-1"></i> EOI of Establishment of Sheikh Kamal IT Training and Incubation center...</a></li>
                                <li class="list-group-item"><a href="#" title="Practical exam result for the post of computer typist cum office assis..."><i class="fas fa-angle-right mr-1"></i> Practical exam result for the post of computer typist cum office assis...</a></li>
                            </ul>
                            <a class="btn btn-danger rounded mt-3" href="#" target="_blank" rel="noopener noreferrer">Read more <i class="fas fa-plus fa-xs red-text"></i></a>
                            </div>

                        </div><!--end item-->


                    </div><!--end-col-md-12-->

                    </div>



                </div>
            </section>
            <!--End notice board-->
            <section class="features1 service modernm4_features1 cid-sjdJjr6eXG px-20 py-11 bg-gray-200" id="features1-2 features1-e">
                <div class="container">
                    <!--Start first row-->
                    <div class="row first-row">
                        <div class="col">
                            <h2 class="font-medium pb-2 text-center text-5xl text-gray-700">Services we provide</h2>
                            <div class="line-wrap text-center text-gray-700">
                                <div class="inline-block w-1/12 h-1 bg-gray-700 mt-2 mb6"></div>
                            </div>
                        </div>
                    </div><!--End first row-->

                    <!--Start second row-->
                    <div class="row second-row showArrow mt-5">
                        <div class="items grid grid-flow-row grid-cols-3 grid-rows-2 gap-5">
                            <div class="card item one bg-white hover:bg-green-500 text-gray-700 hover:text-white rounded px-5 pt-6 pb-1.5 shadow-md">
                                <div class="card-head">
                                    <h4 class="text-left font-bold  mb-3 card-title">National Integrity Strategy (NIS)</h4>
                                </div>
                                <div class="card-body flex">
                                    <div class="card-image w-1/4">
                                        <img src="{{asset('img/nis.png')}}" alt="">
                                    </div>
                                    <div class="card-content w-3/4 pl-4">
                                        <ul class="navbar-nav">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/Tax</a>
                                            </li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/VAT</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/Customs</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Hi-Tech Park/STP Notification</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/Tax</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card item two bg-white hover:bg-green-500 text-gray-700 hover:text-white rounded px-5 pt-6 pb-1.5 shadow-md">
                                <div class="card-head">
                                    <h4 class="text-left font-bold  mb-3 card-title">Citizen's Charter</h4>
                                </div>
                                <div class="card-body flex">
                                    <div class="card-image w-1/4">
                                        <img src="{{asset('img/citizen-certer.png')}}" alt="">
                                    </div>
                                    <div class="card-content w-3/4 pl-4">
                                        <ul class="navbar-nav">
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Citizen Charter</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Complain /Opinion Focal Point/Evaluation</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer"></a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card item three bg-white hover:bg-green-500 text-gray-700 hover:text-white rounded px-5 pt-6 pb-1.5 shadow-md">
                                <div class="card-head">
                                    <h4 class="text-left font-bold  mb-3 card-title">Annual Performance Agreement</h4>
                                </div>
                                <div class="card-body flex">
                                    <div class="card-image w-1/4">
                                        <img src="{{asset('img/apa_100.png')}}" alt="">
                                    </div>
                                    <div class="card-content w-3/4 pl-4">
                                        <ul class="navbar-nav">
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/Tax</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/VAT</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/Customs</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Hi-Tech Park/STP Notification</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/Tax</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card  item four bg-white hover:bg-green-500 text-gray-700 hover:text-white rounded px-5 pt-6 pb-1.5 shadow-md">
                                <div class="card-head">
                                    <h4 class="text-left font-bold  mb-3 card-title">Grievance Redress System</h4>
                                </div>
                                <div class="card-body flex">
                                    <div class="card-image w-1/4">
                                        <img src="{{asset('img/grivence.png')}}" alt="">
                                    </div>
                                    <div class="card-content w-3/4 pl-4">
                                        <ul class="navbar-nav">
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/Tax</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/VAT</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/Customs</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Hi-Tech Park/STP Notification</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/Tax</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card  item five bg-white hover:bg-green-500 text-gray-700 hover:text-white rounded px-5 pt-6 pb-1.5 shadow-md">
                                <div class="card-head">
                                    <h4 class="text-left font-bold  mb-3 card-title">Right of Information</h4>
                                </div>
                                <div class="card-body flex">
                                    <div class="card-image w-1/4">
                                        <img src="{{asset('img/rights-info.png')}}" alt="">
                                    </div>
                                    <div class="card-content w-3/4 pl-4">
                                        <ul class="navbar-nav">
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/Tax</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/VAT</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/Customs</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Hi-Tech Park/STP Notification</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/Tax</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card   item six bg-white hover:bg-green-500 text-gray-700 hover:text-white rounded px-5 pt-6 pb-1.5 shadow-md">
                                <div class="card-head">
                                    <h4 class="text-left font-bold  mb-3 card-title">Budget & Others</h4>
                                </div>
                                <div class="card-body flex">
                                    <div class="card-image w-1/4">
                                        <img src="{{asset('img/budget.png')}}" alt="">
                                    </div>
                                    <div class="card-content w-3/4 pl-4">
                                        <ul class="navbar-nav">
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/Tax</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/VAT</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/Customs</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Hi-Tech Park/STP Notification</a></li>
                                            <li><a href="#" target="_blank" rel="noopener noreferrer">Incentive Package/Tax</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End second row-->

                    <div class="row row-arrow">
                        <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
                            <a href="#next">
                                <i class="mbr-iconfont mobi-mbri-down mobi-mbri" media-simple="true"></i>
                            </a>
                        </div>
                    </div>
                </div><!--End container-->
            </section>
            <!--End service section-->
            <!-- Upcoming Event -->
            <section class="upcomingevent">
                <div class="container">
                    <!--Start first row-->
                    <div class="row first-row">
                        <div class="col">
                            <h2 class="text-center">Events</h2>
                            <div class="line"></div>
                        </div>
                    </div><!--End first row-->

                    <!--Start Second row-->
                    <div class="row second-row py-5">
                        <div class="w-7/12 first-col">
                            <div class="content">
                                <div class="image">
                                    <img class="max-w-full h-auto" src="{{asset('img/conference16.jpg')}}" alt="" title="">
                                    <div class="mbr-figure">
                                        <div class="video-play-btn mx-auto">
                                            <a type="button" class="play-btn pulse" data-src="https://www.youtube.com/embed/GW02Jsj7QFk" data-toggle="modal" data-target="#modalYT">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--End first col-->
                        <div class="w-5/12 second-col">
                            <div class="content">
                                <div class="items grid grid-flow-col grid-cols-3 grid-rows-3 gap-4">
                                    <div class="item">
                                        <a type="button" class="play-btn" data-src="https://www.youtube.com/embed/GW02Jsj7QFk" data-toggle="modal" data-target="#modalYT">
                                        <img src="{{asset('img/conference16.jpg')}}" alt="" class="max-w-full h-auto">
                                        <div class="text">
                                            <h2 class="vedio-title">UNIBATOR PROMO</h2>
                                            <p>Turn university reports into real life venture</p>
                                        </div>

                                        </a>
                                    </div>
                                    <div class="item">
                                        <a type="button" class="play-btn" data-src="https://www.youtube.com/embed/GW02Jsj7QFk" data-toggle="modal" data-target="#modalYT">
                                        <img src="{{asset('img/conference16.jpg')}}" alt="" class="max-w-full h-auto">
                                        <div class="text">
                                            <h2 class="vedio-title">APA Celebration</h2>
                                            <p>Best in Public Service, Information and Communication Technology Department</p>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a type="button" class="play-btn" data-src="https://www.youtube.com/embed/GW02Jsj7QFk" data-toggle="modal" data-target="#modalYT">
                                        <img src="{{asset('img/conference16.jpg')}}" alt="" class="max-w-full h-auto">
                                        <div class="text">
                                            <h2 class="vedio-title">UNIBATOR PROMO</h2>
                                            <p>Turn university reports into real life venture</p>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a type="button" class="play-btn" data-src="https://www.youtube.com/embed/GW02Jsj7QFk" data-toggle="modal" data-target="#modalYT">
                                        <img src="{{asset('img/conference16.jpg')}}" alt="" class="max-w-full h-auto">
                                        <div class="text">
                                            <h2 class="vedio-title">video title</h2>
                                            <p>fjgjkjh fkhh guuhhl iuguhioii uiguhlil</p>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div><!--End second col-->

                        <!--Vedio modal-->
                        <div class="modal fade intro-vedio" id="modalYT" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <!--Content-->
                                <div class="modal-content">
                                    <!--model header-->
                                    <div class="bg-black">
                                        <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" class="white-text text-right mr-1">×</span>
                                        </button>
                                    </div>

                                    <!--Body-->
                                    <div class="modal-body mb-0 p-0">

                                        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                            <iframe id="player" class="embed-responsive-item" src="https://www.youtube.com/embed/GW02Jsj7QFk" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                                        </div>

                                    </div>
                                    <!--Footer-->
                                </div>
                                <!--/.Content-->
                            </div>
                        </div>
                    </div>
                    <!--End Second row-->
                </div>
            </section><!--End upcoming Event -->

            <!-- Start Recent news section -->
            <section class="recent-news hidden">
                <div class="container">
                    <div class="row">
                        <div class="col-12 pb-4">
                            <h2 class="text-center"> News & Publications</h2>
                        </div>
                    </div>
                    <!-- Card deck -->
                    <div class="card-deck">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!--Card image-->
                            <div class="view overlay">
                                <img class="card-img-top" src="{{asset('img/shsp.jpg')}}"
                                alt="Card image cap">
                                <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card content-->
                            <div class="card-body">

                                <!--Title-->
                                <h4 class="card-title">Sheikh Hasina Software Technology Park</h4>
                                <!--Text-->
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                content.</p>
                                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                <button type="button" class="btn btn-light-blue btn-md red-btn">Read more</button>

                            </div>
                        </div><!-- End of Card -->

                        <!-- Card -->
                        <div class="card mb-4">
                            <!--Card image-->
                            <div class="view overlay">
                                <img class="card-img-top" src="{{asset('img/rhtp.jpg')}}"
                                alt="Card image cap">
                                <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">Bangabandhu Sheikh Mujib Hi-Tech Park, Rajshahi</h4>
                                <!--Text-->
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                content.</p>
                                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                <button type="button" class="btn btn-light-blue btn-md red-btn">Read more</button>
                            </div>
                        </div><!-- End of Card -->

                        <!-- Card -->
                        <div class="card mb-4">
                            <!--Card image-->
                            <div class="view overlay">
                                <img class="card-img-top" src="{{asset('img/sylhet-park.jpg')}}"
                                alt="Card image cap">
                                <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">Bangabandhu Sheikh Mujib Hi-Tech Park, Sylhet</h4>
                                <!--Text-->
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                content. Some quick example text to build on the card title and make up the bulk of the card's
                                content.</p>
                                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                <button type="button" class="btn btn-light-blue btn-md red-btn">Read more</button>

                            </div>
                        </div><!-- End of Card -->
                    </div><!-- End of Card deck -->
                </div><!--End of Container end-->
            </section><!-- End of  Recent news section -->

            <!--floating corner p-2 inline-block fixed z-99 t-1/3 right-2 rounded-l-lg-->
            <div class=" bg-red-500 z-50 fixed">
                <div class="row row-sm items-center justify-end">
                    <div class="icon corner-icon">
                        <i class="fas fa-angle-right fa-lg red-text"></i>
                    </div>
                    <div class="content flex flex-column pr-2">
                        <div class="first-item">
                        <div class="investment-corner p-1">
                            <a href="#" class=" btn btn-light" target="_blank" rel="noopener noreferrer">
                            Investment
                            </a>
                        </div>
                        <div class="startup-corner p-1">
                            <a href="https://startupbangladesh.gov.bd/" class=" btn btn-light" target="_blank" rel="noopener noreferrer">Startup</a>
                        </div>
                        </div>

                        <div class="last-item pt-3">
                        <div class="oss p-1">
                            <a href="https://ossbhtpa.gov.bd/" class=" btn btn-light" target="_blank" rel="noopener noreferrer">
                            One Stop Service
                            </a>
                        </div>
                        <div class="business-manager p-1">
                            <a href="https://startupbangladesh.gov.bd/" class=" btn btn-light" target="_blank" rel="noopener noreferrer">Contact Business Manager</a>
                        </div>
                        <div class="training-class p-1">
                            <a href="#" class=" btn btn-light" target="_blank" rel="noopener noreferrer">Training and Clases </a>
                        </div>
                        </div>

                    </div>

                </div><!--/row-->
            </div>
            <!--/End floating corner-->

            <!--Chatbox Modal-->
            <button type="button" class="btn btn-default chat-btn" data-toggle="modal" data-target="#myModal">
                <i class="fab fa-facebook-messenger fa-4x"></i>
            </button>
            <div class="modal fade chatboxmodal" id="myModal">
                <div class="modal-dialog modal-dialog-scrollable modal-bottom-right">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h6 class="active-title"><i class="fas fa-user-alt fa-lg mr-2"></i>Active Now</h6>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                        <div class="sender px-1 py-2">
                            <i class="fas fa-user-alt fa-lg mr-2"></i><span class="txt">Whether we can look forward</span>
                        </div>
                        <div class="receber  px-1 py-2 text-right">
                            <span class="txt">Whether we can look forward</span><i class="fas fa-user-alt fa-lg ml-2"></i>
                        </div>
                        <div class="sender  px-1 py-2">
                            <i class="fas fa-user-alt fa-lg mr-2"></i><span class="txt">Whether we can look forward</span>
                        </div>
                        <div class="receber  px-1 py-2 text-right">
                            <span class="txt">Whether we can look forward</span><i class="fas fa-user-alt fa-lg ml-2"></i>
                        </div>
                        <div class="receber  px-1 py-2 text-right">
                            <span class="txt">Whether we can look forward</span><i class="fas fa-user-alt fa-lg ml-2"></i>
                        </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                        <form action="">
                            <i class="fas fa-smile fa-lg mx-2"></i><i class="fas fa-file-pdf fa-lg mx-2"></i><i class="fas fa-image fa-lg mx-2"></i><input class="input-box" type="text" placeholder="Aa">
                        </form>
                        </div>

                    </div>
                </div>
            </div>
            <!--End Chatbox Modal-->

            <a href="#"  onclick="topFunction()" class="back-to-top inline" id="backTop"><i class="fas fa-chevron-up"></i></a>
        </main>
        <!--main end here-->
        <!--footer start here-->
        <footer class="">
            <!-- Footer Links -->
            <div class="py-11 px-20 bg-gray-200 text-gray-700">
                <!-- Grid row -->
                <div class="row flex">

                    <!-- Grid column -->
                    <div class="w-1/4 mx-auto">

                        <!-- Links -->
                        <h3 class="font-bold text-uppercase mt-3 mb-4">Finding Hi-Tech Park</h3>

                        <ul class="list-unstyled">
                        <li class="hover:text-red-500" ><a href="#">Home</a></li>
                        <li class="hover:text-red-500" ><a href="#">FAQ</a></li>
                        <li class="hover:text-red-500" ><a href="#">Act, Rules & Guidelines</a></li>
                        <li class="hover:text-red-500" ><a href="#">National Intrigety</a></li>
                        <li class="hover:text-red-500" ><hr></li>
                        <li class="hover:text-red-500" ><a href="#">Anual Performance</a></li>
                        <li class="hover:text-red-500" ><a href="#">Agreement</a></li>
                        <li class="hover:text-red-500" ><hr></li>
                        <li class="hover:text-red-500" ><a href="#">Grievance Redress System</a></li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="w-1/4 mx-auto">

                        <!-- Links -->
                        <h3 class="font-bold text-uppercase mt-3 mb-4">About BHTPA</h3>

                        <ul class="list-unstyled">
                        <li class="hover:text-red-500"><a href="#">Advisor Massages</a></li>
                        <li class="hover:text-red-500"><a href="#">HSMS Massages</a></li>
                        <li class="hover:text-red-500"><a href="#">MD's Massages</a></li>
                        <li class="hover:text-red-500"><a href="#">BHTPA At A Glance</a></li>
                        <li class="hover:text-red-500"><a href="#">BHTPA Services</a></li>
                        <li class="hover:text-red-500"><a href="#">BHTPA Management</a></li>
                        <ul>
                            <li class="hover:text-red-500"><a href="#">Key Personal</a></li>
                            <li class="hover:text-red-500"><a href="#">Project Statistics</a></li>
                        </ul>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="w-1/4 mx-auto">

                        <!-- Links -->
                        <h3 class="font-bold text-uppercase mt-3 mb-4">Important Links</h3>

                        <ul class="list-unstyled">
                            <li class="hover:text-red-500"><a href="tel:333">Gov’t Info &amp; service</a></li>
                            <li class="hover:text-red-500"><a href="tel:999">National Emergency Service</a></li>
                            <li class="hover:text-red-500"><a href="tel:109">Prevent women &amp; child harassment</a></li>
                            <li class="hover:text-red-500"><a href="tel:106">Corruption Prevent Commission</a></li>
                            <li class="hover:text-red-500"><a href="http://ictd.gov.bd/">ICT Division</a></li>
                            <li class="hover:text-red-500"><a target="_blank" rel="noopener noreferrer" href="http://techcitybd.net/">Tech City BD</a></li>
                            <li class="hover:text-red-500"><a target="_blank" rel="noopener noreferrer" href="http://bhtc.bhtpa.gov.bd/">Bangabandu Hi-Tech City Project</a></li>
                            <li class="hover:text-red-500"><a target="_blank" rel="noopener noreferrer" href="http://bcc.gov.bd/">Bangladesh Computer Council (BCC)</a></li>
                            <li class="hover:text-red-500"><a target="_blank" rel="noopener noreferrer" href="http://www.connectingstartupsbd.net/">Connecting Startup Bangladesh</a></li>

                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="w-1/4 mx-auto social-links">

                        <!-- Links -->
                        <h3 class="font-bold text-uppercase mt-3 mb-4">Quick Links</h3>
                        <ul class="list-unstyled">
                        <li class="hover:text-red-500"><a href="#">Tenders / EOI Notice</a></li>
                        <li class="hover:text-red-500"><a href="#">Contact us</a></li>
                        </ul>

                        <hr>

                        <h3 class="font-weight-bold text-uppercase mt-3 mb-4">Media</h3>
                        <ul class="list-unstyled flex flex-row  justify-center">
                        <li class="hover:text-red-500">
                            <a href="https://www.facebook.com/BHTPA/" title="Facebook" target="_blank" class="fb-ic">
                            <i class="fab fa-facebook-f fa-lg white-text mr-md-1 mr-3 fa-lg"> </i>
                            </a>
                        </li>
                        <li class="hover:text-red-500">
                            <a href="https://twitter.com/BHTPA2010" title="Twitter" target="_blank" class="tw-ic">
                            <i class="fab fa-twitter fa-lg white-text mr-md-1 mr-3 fa-lg"> </i>
                            </a>
                        </li>
                        <li class="hover:text-red-500">
                            <a href="https://www.youtube.com/channel/UCERgWYFRyE20JmhLrS8-ytg" title="Youtube" target="_blank" class="gplus-ic">
                            <i class="fab fa-youtube fa-lg white-text mr-md-1 mr-3 fa-lg"> </i>
                            </a>
                        </li>

                        </ul>

                        <hr>

                        <h3 class="font-weight-bold text-uppercase mt-4 mb-4">Subscribe Now</h3>
                        <!-- Material form subscription -->
                        <div class="subscription">

                            <!--Card content-->
                            <div class="card-content">

                                <!-- Form -->
                                <form class="subscription-form input-group" style="color: #757575;" action="#!">
                                    <!-- E-mai -->
                                        <input type="email" id="emailField" class="form-control rounded-lg" placeholder="E-mail">

                                    <!-- Sign in button -->
                                    <button class="btn btn-danger btn-rounded  waves-effect" type="submit">Submit</button>

                                </form>
                                <!-- Form -->

                            </div>

                        </div>
                        <!-- Material form subscription -->
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->
            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="py-4 px-20 bg-gray-300 text-gray-700 text-center">© 2020 Copyright:
                <a class="text-green-500 hover:text-red-500" href="https://softxltd.com/"> BHTPA.</a> | <span>Design & Development by <a class="text-green-500 hover:text-red-500" href="https://www.softxltd.com/" target="_blank">Softx Technology Ltd</a></span>
            </div>
            <!-- Copyright -->
        </footer>
        <!--footer end here-->
    </body>
</html>
