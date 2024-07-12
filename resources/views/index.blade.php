@extends('layouts.frontend')
@section('css')
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #ADD8E6;
            /* Light blue background */
        }


        .carousel-item img {
            width: 125%;
            /* Adjust the width as needed */
            margin: 0 auto;
            /* Center the image */
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

        .contact {
            background-color: #458cdd;
            padding-top: 10px;
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
            /* padding-top: 0px;
                    padding-bottom: 50px; */
        }

        #my-svg {
            filter: invert(20%) sepia(86%) saturate(3888%) hue-rotate(198deg) brightness(98%) contrast(104%);
        }

        /* footer css end  */
    </style>
@endsection

@section('content')
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
    {{-- <section>
        <div class="container-fluid shadow-lg doctor-bg">
            <h1 class="text-center pt-5 pb-5 fw-bold">OUR DOCTORS</h1>
            <div class="row pb-3">
                @foreach ($doctorall as $doctor)
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
                                <div class="text-center">
                                    @php $day = ['Mon','Tue','wed','Thu','Fri','Sat','Sun']; @endphp
                                    @foreach ($doctor->availabilities as $doctoravailabilty)
                                        <p class="fw-bold">{{ $doctoravailabilty->day }} -
                                            {{ $doctoravailabilty->from }} - {{ $doctoravailabilty->to }}</p>
                                    @endforeach
                                </div> --}}

    {{-- this is my doctor cards with doctor not available time  --}}
    {{-- <div class="text-center">
                                    @php
                                        $days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                                        $availabilities = [];

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
                                </div> --}}
    {{-- this is my doctor cards with doctor not available time  end --}}

    {{-- <div class="text-center">
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
    </section> --}}
    {{-- content end  --}}


    {{-- card  --}}
    <!-- <section id="doctorsection">
        <div class="conatiner-fluid mb-2">
            <h1 class="text-center pt-3 pb-3 fw-bold">OUR DOCTORS</h1>
            {{-- @foreach ($doctorall as $doctor) --}}
                <div class="card pt-3 pb-3 shadow-lg mt-2" style="margin-left:10px;">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="row mt-3" style="padding-left: 10px;">
                                <div class="col-lg-2 col-md-2 col-sm-10 col-12">
                                    {{-- <img src="{{ asset('uploads/doctorimg/' . $doctor->doctor_img) }}" --}}
                                        class="ml-5 rounded-corner" alt="" style="height: 100px; width:100px;">
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-12">
                                    <div class="" style="padding-left: 15px;">
                                        {{-- <p class="fw-bold">{{ $doctor->specialist }}</p> --}}
                                        {{-- <h4 class="fw-bold">Dr. {{ $doctor->doctor_name }}</h4> --}}
                                        {{-- <h6 class="">{{ $doctor->doctor_qualification }}</h6> --}}
                                        {{-- <h5 class="fw-bold text-danger">{{ $doctor->remark }}</h5> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 mt-3">
                            {{-- <div class="d-flex">
                                @php $day = ['Mon','Tue','wed','Thu','Fri','Sat','Sun']; @endphp
                                @foreach ($doctor->availabilities as $doctoravailabilty)
                                    <p class="fw-bold">{{ $doctoravailabilty->day }},  </p>

                                    {{-- -{{ $doctoravailabilty->from }} - 
                                        {{ $doctoravailabilty->to }} --}}
                            {{-- </p> --}}
                            {{-- @endforeach
                            </div> --}}



                            <div class="">
                                {{-- @php --}}
                                    // $days = [];
                                    // $times = [];
                                    // foreach ($doctor->availabilities as $doctoravailabilty) {
                                //         $days[] = $doctoravailabilty->day;
                                //         $times[] = $doctoravailabilty->from . ' - ' . $doctoravailabilty->to;
                                //     }
                                //     $availableDays = implode(', ', $days);
                                //     $availableTimes = implode(', ', $times);
                                {{-- // @endphp --}}

                                {{-- // @if (!empty($availableDays)) --}}
                                    {{-- <p class="fw-bold">Available: {{ $availableDays }}</p> --}}
                                {{-- @else --}}
                                    <p class="fw-bold">No availability</p>
                                {{-- @endif --}}

                                {{-- @if (!empty($availableTimes)) --}}
                                    <p class="card-text">
                                        <strong class="text-secondary">Available Time:</strong>
                                        {{-- @php --}}
                                            // // $from = \Carbon\Carbon::parse($doctor->availabilities[0]->from)->format(
                                                // 'h:i A',
                                            // );
                                            // // $to = \Carbon\Carbon::parse($doctor->availabilities[0]->to)->format(
                                                // 'h:i A',
                                            // );
                                        {{-- // @endphp --}}
                                        {{-- {{ $from }} - {{ $to }} (By Appointment) --}}
                                    </p>
                                {{-- @else --}}
                                    <p class="fw-bold">No available time</p>
                                {{-- @endif --}}
                            </div>

                            {{-- <p>Neuro Surgery</p> --}}
                            {{-- <a href="{{ route('appoinment.create', $doctor->id) }}" class="mt-2 btn btn-outline-primary" --}}
                                type="submit" disabled>Book
                                Appoinment</a>
                        </div>
                    </div>
                </div>
            {{-- @endforeach --}}
        </div>
    </section>-->
    {{-- end card  --}}

    <section id="doctorsection">
        <div class="container-fluid mb-2">
            <h1 class="text-center pt-3 pb-3 fw-bold">OUR DOCTORS</h1>
            @foreach ($doctorall as $doctor)
                <div class="card pt-3 pb-3 shadow-lg mt-2" style="margin-left:10px;">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="row mt-3" style="padding-left: 10px;">
                                <div class="col-lg-2 col-md-2 col-sm-10 col-12">
                                    <img src="{{ asset('uploads/doctorimg/' . $doctor->doctor_img) }}"
                                        class="ml-5 rounded-corner" alt="" style="height: 100px; width:100px;">
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-12">
                                    <div class="" style="padding-left: 15px;">
                                        <p class="fw-bold">{{ $doctor->specialist }}</p>
                                        <h4 class="fw-bold">Dr. {{ $doctor->doctor_name }}</h4>
                                        <h6 class="">{{ $doctor->doctor_qualification }}</h6>
                                        {{-- <p class="fw-bold text-danger">{{ $doctor->remark }}</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 mt-3">
                            <div class="">
                                @php
                                    $days = [];
                                    $times = [];
                                    foreach ($doctor->availabilities as $doctoravailabilty) {
                                        $days[] = $doctoravailabilty->day;
                                        $times[] = $doctoravailabilty->from . ' - ' . $doctoravailabilty->to;
                                    }
                                    $availableDays = implode(', ', $days);
                                    $availableTimes = implode(', ', $times);
                                @endphp
    
                                @if (!empty($availableDays))
                                    <p class="fw-bold">Available: {{ $availableDays }}</p>
                                @else
                                    <p class="fw-bold">No availability</p>
                                @endif
    
                                @if (!empty($availableTimes))
                                    <p class="card-text">
                                        <strong class="text-secondary">Available Time:</strong>
                                        @php
                                            $from = \Carbon\Carbon::parse($doctor->availabilities[0]->from)->format('h:i A');
                                            $to = \Carbon\Carbon::parse($doctor->availabilities[0]->to)->format('h:i A');
                                        @endphp
                                        {{ $from }} - {{ $to }} (By Appointment)
                                    </p>
                                @else
                                    <p class="fw-bold">No available time</p>
                                @endif
                            </div>
    
                            @if ($doctor->availabilities->contains('status', 'Inactive'))
                                <a href="#" class="mt-2 btn btn-outline-primary disabled" aria-disabled="true">Book Appointment</a>
                                {{-- <p class="text-danger mt-2">Doctor currently inactive for appointments.</p> --}}
                                <p class="mt-2 text-danger">{{ $doctor->remark }}</p>
                            @else                  
                                <a href="{{ route('appoinment.create', $doctor->id) }}" class="mt-2 btn btn-outline-primary">Book Appointment</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    

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
            interval: 3000, // 3 seconds interval
            ride: 'carousel',
            pause: false // Disable pause on hover
        });
    </script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
@endsection
