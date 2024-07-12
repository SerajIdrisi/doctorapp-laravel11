<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor-Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome 6.5.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font awesome 6.5.2 end -->

    {{-- animate style css  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- animate style css  --}}
</head>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #ADD8E6;
        /* Light blue background */
    }


    .carousel-item img {
            width: 125%;  /* Adjust the width as needed */
            margin: 0 auto;  /* Center the image */
        }

    /* doctor content css start here  */
    .doctor-bg {
        position: relative;
        background-image: url('{{ asset('images/doctorpagebg.jpg') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    /* Create a semi-transparent overlay */
    .doctor-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.5);
        z-index: 1;
    }

    /* Ensure content stays above the overlay */
    .doctor-bg>* {
        position: relative;
        z-index: 2;
    }

    /* header menu css start */
    .navbar-nav {
        flex-wrap: wrap;
        justify-content: center;
    }

    .navbar-nav .nav-item {
        margin: 5px;
    }

    .navbar-brand img {
        height: 100px;
    }

    @media (max-width: 992px) {
        .navbar-brand img {
            height: 80px;
        }
    }

    @media (max-width: 576px) {
        .navbar-brand {
            width: 100%;
            text-align: center;
        }

        .navbar-toggler {
            margin-left: auto;
        }
    }

    /* header menu css end */

    .contact {
        background-color: #458cdd;
        padding: 10px 0;
    }

    .contact .col-8 {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .contact h4 {
        margin: 0 10px;
    }

    .contact i {
        margin: 0 10px;
    }

    /* footer css start  */
    #footer {
        background-image: url('{{ asset('images/footer.jpeg') }}');
        background-size: cover;
        background-repeat: no-repeat;
        padding-top: 10px;
        padding-bottom: 50px;
    }

    /* footer css end  */
</style>

<body>
    <section id="header">
        <div class="contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <a href="tel:9082097421" class="text-dark" style="text-decoration: none">
                            <h4 class="fw-bold">+91 9082097421</h4>
                        </a>
                        <a
                            href="https://www.facebook.com/people/Mallika-Multi-Specialty-Hospital/pfbid02Pkrawe4R7h9VMUDp1uXTmm2kuwhRfHiBRcjebFsz4A9kgQtDALhYj8aMNXaGKfd4l/?mibextid=ZbWKwL"><i
                                class="fab fa-facebook text-dark fa-2x rounded-circle"></i></a>
                        <a href="https://www.instagram.com/mallika_hospital/?utm_source=qr"><i
                                class="fab fa-instagram text-dark fa-2x rounded-circle"></i></a>
                        <a href="https://wa.link/rq9lde"><i
                                class="fab fa-whatsapp text-dark fa-2x rounded-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light pt-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://goldfieldws.com/mallikahospital/"><img
                        src="{{ asset('images/header.jpeg') }}" alt="Logo" style="height: 100px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active fw-bold text-primary fs-5" aria-current="page"
                                href="https://goldfieldws.com/mallikahospital/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-primary fs-5"
                                href="https://goldfieldws.com/mallikahospital/about-us/">AboutUs</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-bold text-primary fs-5 dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Our Services</a>
                            <ul class="dropdown-menu" style="background-color:#7db8d8">
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/cathlab/">CATHLAB</a></li>
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/icu/">ICU</a></li>
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/ot/">OT</a></li>
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/ward/">WARD</a></li>
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/dialysis-center/">DIALYSIS
                                        CENTER</a></li>
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/pharmacy/">PHARMACY</a></li>
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/lab/">LAB</a></li>
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/blood-bank/">BLOOD BANK</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-bold text-primary fs-5 dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Surgeries</a>
                            <ul class="dropdown-menu" style="background-color:#7db8d8">
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/general-surgery/">General
                                        Surgery</a></li>
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/plastic-surgery/">Plastic
                                        Surgery</a></li>
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/onco-surgery/">Onco Surgery</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-bold text-primary fs-5 dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Consultants</a>
                            <ul class="dropdown-menu" style="background-color:#7db8d8">
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/cardiology/">Cardiology</a></li>
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/neurology/">Neurology</a></li>
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/urology/">Urology</a></li>
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/proctology/">Proctology</a></li>
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/orthopedic/">Orthopedic</a></li>
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/ent/">ENT</a></li>
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/obstetrics-genecology/">Obstetrics
                                        & Gynaecology</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-primary fs-5"
                                href="https://goldfieldws.com/mallikahospital/cashless-tpa/">Cashless&TPA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-primary fs-5"
                                href="https://goldfieldws.com/mallikahospital/government-schemes/">GovernmentSchemes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-primary fs-5"
                                href="https://goldfieldws.com/mallikahospital/contact-us/">ContactUs</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-bold text-primary fs-5 dropdown-toggle" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">Media</a>
                            <ul class="dropdown-menu" style="background-color:#7db8d8">
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/gallery/">Gallery</a></li>
                                <li><a class="dropdown-item text-light fw-bold"
                                        href="https://goldfieldws.com/mallikahospital/video/">Video</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    {{-- header end --}}

    {{-- carousel Start   --}}
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/carouselimg-1.jpeg') }}" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/carouselimg-2.jpeg') }}" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/carouselimg-3.jpeg') }}" class="d-block" alt="...">
            </div>
        </div>
    </div>
    {{-- carousel End   --}}

    {{-- content start  --}}
    <section>
        <div class="container-fluid shadow-lg doctor-bg">
            <h1 class="text-center pt-5 pb-5 fw-bold">OUR DOCTORS</h1>
            <div class="row pb-3">
                @foreach ($doctorall as $doctor)
                    {{-- @php echo '<pre>';print_r($doctor);exit();@endphp --}}
                    <div class="col-lg-3 col-md-4 col-sm-10 col-12">
                        <div class="card mb-2 animate__animated animate__backInLeft">
                            <div class="card-body shadow-lg">
                                <div class="card-img shadow text-center">
                                    <img src="{{ asset('uploads/doctorimg/' . $doctor->doctor_img) }}"
                                        class="img-fluid text-center rounded-circle " alt="..."
                                        style="height:100px;width:100px;">
                                </div>
                                <h4 class="card-title text-center fw-bold mt-2">Dr. {{ $doctor->doctor_name }}</h4>
                                <h5 class="card-text text-center fw-bold mt-2">{{ $doctor->doctor_qualification }}</h5>
                                <h4 class="card-text text-center fw-bold mt-2">{{ $doctor->specialist }}</h4>
                                {{-- <div class="text-center">
                                    @php $day = ['Monday','Tuesday','wednesday','Thursday','Friday','Saturday','Sunday']; @endphp
                                    @foreach ($doctor->availabilities as $doctoravailabilty)
                                        {{-- @php echo '<pre>';print_r($doctoravailabilty->day);exit();@endphp --}}
                                {{-- <p class="fw-bold">{{ $doctoravailabilty->day }} -
                                            {{ $doctoravailabilty->from }} - {{ $doctoravailabilty->to }}</p>
                                    @endforeach
                                </div> --}}
                                <div class="text-center">
                                    @php
                                        $days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                                        $availabilities = [];

                                        // Create a mapping of availabilities keyed by the day
                                        foreach ($doctor->availabilities as $availability) {
                                            $availabilities[$availability->day] = $availability;
                                        }
                                    @endphp
                                    @foreach ($days as $day)
                                        @if (isset($availabilities[$day]))
                                            @php $doctoravailabilty = $availabilities[$day]; @endphp
                                            <p class="fw-bold">{{ $day }} - {{ $doctoravailabilty->from }} -
                                                {{ $doctoravailabilty->to }}</p>
                                        @else
                                            <p class="fw-bold">{{ $day }} - Not Available</p>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="text-center">
                                    <a href="{{ route('appoinment.create', $doctor->id) }}"
                                        class="btn btn-primary">Book
                                        Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- content end  --}}

    {{-- footer  --}}
    <section id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-10 col-12">
                    <img src="{{ asset('images/footerlogo.png') }}" alt=""
                        style="height:125px; width:125px;">
                    <h6 class="mx-3 mt-4"><i class="fa-solid fa-phone-flip" style="color: #4350C5"></i>+91 9082097421
                    </h6>
                    <h6 class="mx-3 mt-4"><i class="fa-regular fa-envelope" style="color: #4350C5"></i>
                        hospital.m@gmail.com</h6>
                    <h6 class="mx-3 mt-4"><i class="fa-solid fa-location-dot" style="color: #4350C5"></i>
                        Mallika Hospital, Sharma Estate , next to Dewan shopping centre, S.V road Jogeshwari West Mumbai
                        - 400102.</h6>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-10 col-12">
                    <h5 class="mb-4">Legal</h5>
                    <h6 class="text-info fw-bold">Privacy Policy</h6>
                    <h6 class="text-info fw-bold">Terms and Conditions</h6>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-10 col-12">
                    <h5 class="mb-4">Connect With Us</h5>
                    <a href="">
                        <i class="fab fa-facebook text-light fa-1x p-3 rounded-circle"
                            style="background-color:#124279"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-twitter text-light fa-1x p-3 rounded-circle"
                            style="background-color:#124279"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-instagram text-light fa-1x p-3 rounded-circle"
                            style="background-color:#124279"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-whatsapp text-light fa-1x p-3 rounded-circle"
                            style="background-color:#124279"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- footer end --}}


    <script>
        // function servicesHoverIn() {
        //     let servicesMenu = document.getElementById('servicesMenu');
        //     servicesMenu.classList.add('show');
        // }
        // function servicesHoverOut() {
        //     let servicesMenu = document.getElementById('servicesMenu');
        //     servicesMenu.classList.remove('show');
        // }
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var myCarousel = document.querySelector('#carouselExample');
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 3000,  // 3 seconds interval
        ride: 'carousel',
        pause: false     // Disable pause on hover
    });
</script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
</body>

</html>
