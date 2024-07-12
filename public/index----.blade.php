<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor-Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
    #footer {
        background-image: url('{{ asset('images/footer.jpeg') }}');
        background-size: cover;
        background-repeat: no-repeat;
        padding-top: 10px;
        padding-bottom: 50px;
    }

    /* doctor content css start here  */
    .doctor-bg {
        position: relative;
        /* Ensure the pseudo-element is positioned correctly */
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
        /* Adjust the opacity and color here */
        z-index: 1;
        /* Ensure it sits above the background image but below the content */
    }

    /* Ensure content stays above the overlay */
    .doctor-bg>* {
        position: relative;
        z-index: 2;
    }

    /* doctor content css end here  */


    /* Always hide the navbar content */
    .navbar-collapse {
        display: none !important;
    }

    /* Always show the toggler icon */
    .navbar-toggler {
        display: block !important;
    }

    /* Position the toggler on the left for medium and larger screens */
    @media (min-width: 768px) {
        .navbar-toggler {
            margin-left: auto;
        }
    }

    /* Ensure the collapse class is shown when the toggler is clicked */
    .navbar-collapse.show {
        display: block !important;
    }

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

    .navbar-brand {
        /* position: absolute;
        bottom: 0; */
    }
</style>

<body>
    {{-- header  --}}
    <section id="header">
        {{-- <div class="contact">
            <div class="row">
                <div class="col-8 offset-4" style="background-color:#458cdd">
                    <div class="col-8 offset-4">
                        <div class="pt-1 pb-1">
                            <span class="d-flex">
                                <h4 class="fw-bold mx-5">+91</h4>
                                <i class="mt-2 fab fa-facebook text-dark fa-2x rounded-circle"></i>
                                <i class="fab fa-instagram text-dark fa-2x p-3 rounded-circle"></i>
                            </span>
                            <h4 class="fw-bold">9326384512</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <h4 class="fw-bold">+91 9326384512</h4>
                        <i class="fab fa-facebook text-dark fa-2x rounded-circle"></i>
                        <i class="fab fa-instagram text-dark fa-2x rounded-circle"></i>
                        <i class="fab fa-whatsapp text-dark fa-2x rounded-circle"></i>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-md bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="{{ asset('images/header.jpeg') }}" alt=""
                        style="height: 200px; width:200px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fs-5 text-primary fw-bold" aria-current="page"
                                href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5 text-primary fw-bold" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fs-5 text-primary fw-bold" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Our Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">CATHLAB</a></li>
                                <li><a class="dropdown-item" href="#">ICU</a></li>
                                <li><a class="dropdown-item" href="#">OT</a></li>
                                <li><a class="dropdown-item" href="#">WARD</a></li>
                                <li><a class="dropdown-item" href="#">DIALYSIS CENTER</a></li>
                                <li><a class="dropdown-item" href="#">PHARMACY</a></li>
                                <li><a class="dropdown-item" href="#">LAB</a></li>
                                <li><a class="dropdown-item" href="#">BLOOD BANK</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fs-5 text-primary fw-bold" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Surgeries
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Genral Surgery</a></li>
                                <li><a class="dropdown-item" href="#">Plastic Surgery</a></li>
                                <li><a class="dropdown-item" href="#">Onco Surgery</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fs-5 text-primary fw-bold" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Consultants
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Cardiology</a></li>
                                <li><a class="dropdown-item" href="#">Neurology</a></li>
                                <li><a class="dropdown-item" href="#">Urology</a></li>
                                <li><a class="dropdown-item" href="#">Proctology</a></li>
                                <li><a class="dropdown-item" href="#">Orthopedic</a></li>
                                <li><a class="dropdown-item" href="#">Ent</a></li>
                                <li><a class="dropdown-item" href="#">Obstetrics & Gynaecology</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5 text-primary fw-bold" href="#">Cashless & tpa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5 text-primary fw-bold" href="#">Government Schemes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    {{-- header end --}}

    {{-- content start  --}}
    <section>
        <div class="container-fluid shadow-lg doctor-bg">
            <h1 class="text-center pt-5 pb-5 fw-bold">OUR DOCTORS</h1>
            <div class="row pb-3">
                @foreach ($doctorall as $doctor)
                    {{-- @php echo '<pre>';print_r($doctor);exit();@endphp --}}
                    <div class="col-lg-3 col-md-3 col-sm-10 col-12">
                        <div class="card mb-2 animate__animated animate__backInLeft">
                            <div class="card-body shadow-lg">
                                <div class="card-img shadow text-center">
                                    <img src="{{ asset('uploads/doctorimg/' . $doctor->doctor_img) }}"
                                        class="img-fluid text-center rounded" alt="..." style="height:100px;">
                                </div>
                                <h4 class="card-title text-center  fw-bold mt-2">{{ $doctor->doctor_name }}</h4>
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
                                            <p class="fw-bold">{{ $day }} - {{ $doctoravailabilty->from }} - {{ $doctoravailabilty->to }}</p>
                                        @else
                                            <p class="fw-bold">{{ $day }} - Not Available</p>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="text-center">
                                    <a href="{{route('appoinment.create',$doctor->id)}}" class="btn btn-primary">Book Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-3 col-md-3 col-sm-10 col-12">
                    <div class="card mb-2 animate__animated animate__backInUp">
                        <div class="card-body shadow-lg">
                            <div class="card-img shadow">
                                <img src="{{ asset('images/doctor4.jpg') }}" class="img-fluid rounded" alt="..."
                                    style="height:320px;">
                            </div>
                            <h4 class="card-title text-center  fw-bold mt-2">Dr. John Doe</h4>
                            <h4 class="card-text text-center fw-bold mt-2">Senior surgon</h4>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-10 col-12">
                    <div class="card mb-2 animate__animated animate__backInDown">
                        <div class="card-body shadow-lg">
                            <div class="card-img shadow">
                                <img src="{{ asset('images/doctor4.jpg') }}" class="img-fluid rounded" alt="..."
                                    style="height:320px;">
                            </div>
                            <h4 class="card-title text-center  fw-bold mt-2">Dr. John Doe</h4>
                            <h4 class="card-text text-center fw-bold mt-2">Senior surgon</h4>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-10 col-12">
                    <div class="card mb-2 animate__animated animate__backInRight">
                        <div class="card-body shadow-lg">
                            <div class="card-img shadow">
                                <img src="{{ asset('images/doctor4.jpg') }}" class="img-fluid rounded" alt="..."
                                    style="height:320px;">
                            </div>
                            <h4 class="card-title text-center  fw-bold mt-2">Dr. John Doe</h4>
                            <h4 class="card-text text-center fw-bold mt-2">Senior surgon</h4>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    {{-- content end  --}}

    {{-- footer  --}}
    <section id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-10 col-12">
                    <img src="{{ asset('images/footerlogo.png') }}" alt="" style="height:125px; width:125px;">
                    <h6 class="mx-3 mt-4"><i class="fa-solid fa-phone-flip" style="color: #4350C5"></i>+91 90820
                        97421
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
</body>

</html>
