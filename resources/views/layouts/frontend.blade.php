<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Bootstrap CDN --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}

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
    {{-- css   --}}
    @yield('css')
    {{-- end css   --}}
<body>
    <section id="header">
        <div class="contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex justify-content-end pb-1">
                        <a href="tel:9082097421" class="text-dark" style="text-decoration: none">
                            <h6 class="fw-bold text-light" style="margin-top:5px; margin-right:15px;"><i
                                    class="fa-solid fa-phone"></i>+91 9082097421</h6>
                        </a>
                        <a
                            href="https://www.facebook.com/people/Mallika-Multi-Specialty-Hospital/pfbid02Pkrawe4R7h9VMUDp1uXTmm2kuwhRfHiBRcjebFsz4A9kgQtDALhYj8aMNXaGKfd4l/?mibextid=ZbWKwL"><i
                                class="fab fa-facebook fa-2x text-primary"></i></a>
                        <a href="https://www.instagram.com/mallika_hospital/?utm_source=qr"><i
                                class="fab fa-instagram text-danger fa-2x rounded-circle"></i></a>
                        <a href="https://wa.link/rq9lde"><i class="fab fa-whatsapp fa-2x rounded-circle"
                                style="color: rgb(35, 242, 35)"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="">
            <div class="container-fluid">
                <span><a class="navbar-brand" href="https://goldfieldws.com/mallikahospital/"><img
                            src="{{ asset('images/header_logo.png') }}" alt="Logo"
                            style="height: 150px;"></a></span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active fw-bold text-primary" aria-current="page"
                                href="https://goldfieldws.com/mallikahospital/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-primary"
                                href="https://goldfieldws.com/mallikahospital/about-us/">AboutUs</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-bold text-primary dropdown-toggle" href="#" role="button"
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
                            <a class="nav-link fw-bold text-primary dropdown-toggle" href="#" role="button"
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
                            <a class="nav-link fw-bold text-primary dropdown-toggle" href="#" role="button"
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
                            <a class="nav-link fw-bold text-primary"
                                href="https://goldfieldws.com/mallikahospital/cashless-tpa/">Cashless&TPA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-primary"
                                href="https://goldfieldws.com/mallikahospital/government-schemes/">GovernmentSchemes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-primary"
                                href="https://goldfieldws.com/mallikahospital/contact-us/">ContactUs</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link fw-bold text-primary dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Media</a>
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
    {{-- carousel End   --}}

    {{-- content  --}}
    @yield('content')
    {{-- end content  --}}

    {{-- footer  --}}
    <section id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-10 col-12">
                    <img src="{{ asset('images/header_logo.png') }}" alt=""
                        style="height:180px; width:180px;">
                    <h6 class="mx-3 mt-4 text-light fw-bold"><i class="fa-solid fa-phone-flip text-light"></i>+91
                        9082097421
                    </h6>
                    <h6 class="mx-3 mt-4 fw-bold"><i class="fa-regular fa-envelope" style="color: #4350C5"></i>
                        hospital.m@gmail.com</h6>
                    <h6 class="mx-3 mt-4 fw-bold"><i class="fa-solid fa-location-dot" style="color: #4350C5"></i>
                        Mallika Hospital, Sharma Estate , next to Dewan shopping centre, S.V road Jogeshwari West Mumbai
                        - 400102.</h6>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-10 col-12">
                    {{-- <h5 class="mb-4">Legal</h5>
                    <h6 class="text-info fw-bold">Privacy Policy</h6>
                    <h6 class="text-info fw-bold">Terms and Conditions</h6> --}}
                </div>
                <div class="col-lg-4 col-md-4 col-sm-10 col-12">
                    <h5 class="mb-4">Connect With Us</h5>
                    <div class="d-flex">
                        <div class="" style="margin-left: 10px;">
                            <a
                                href="https://www.facebook.com/people/Mallika-Multi-Specialty-Hospital/pfbid02Pkrawe4R7h9VMUDp1uXTmm2kuwhRfHiBRcjebFsz4A9kgQtDALhYj8aMNXaGKfd4l/?mibextid=ZbWKwL">
                                <img src="{{ asset('images/facebook.svg') }}" id="my-svg" alt=""
                                    style="height:31px; color:#0D6EFD">
                            </a>
                        </div>
                        <div style="margin-left: 10px;">
                            <a href="https://www.instagram.com/mallika_hospital/?utm_source=qr">
                                <img src="{{ asset('images/instagram.svg') }}" alt=""
                                    style="height:31px; color:">
                            </a>
                        </div>
                        <div style="margin-left: 10px;">
                            <a href="https://wa.link/rq9lde">
                                <img src="{{ asset('images/whatsapp.svg') }}" alt="" style="height:31px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- footer end --}}


    <!--<script>
        // function servicesHoverIn() {
        //     let servicesMenu = document.getElementById('servicesMenu');
        //     servicesMenu.classList.add('show');
        // }
        // function servicesHoverOut() {
        //     let servicesMenu = document.getElementById('servicesMenu');
        //     servicesMenu.classList.remove('show');
        // }
    </script>-->

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    {{-- <script>
        var myCarousel = document.querySelector('#carouselExample');
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 3000, // 3 seconds interval
            ride: 'carousel',
            pause: false // Disable pause on hover
        });
    </script>  --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
</body>

</html>
