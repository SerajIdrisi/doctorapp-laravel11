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
            background-image: url('{{ asset('../images/doctor3.jpg') }}');
            /* background-image: url('asset('/images/doctor3.jpg'); */
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
            /* background-color: rgba(255, 255, 255, 0.5); */
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
            background-image: url('{{ asset('../images/footer.jpeg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            padding-top: 10px;
            padding-bottom: 50px;
        }

        #my-svg {
            filter: invert(20%) sepia(86%) saturate(3888%) hue-rotate(198deg) brightness(98%) contrast(104%);
        }

        /* footer css end  */
    </style>
@endsection
@section('content')
    {{-- <h1 class="text-center">Cardiology</h1> --}}

    <section id="doctorsection">
        <div class="conatiner-fluid mb-2">
            <h1 class="text-center pt-3 pb-3 fw-bold">Our Doctor</h1>
            {{-- allDoctors  --}}
            @foreach ($doctorall as $doctorspecialist)
                {{-- Urology   --}}
                @if ($doctorspecialist->specialist == 'Urology')
                    @foreach ($urology_doctor as $doctor)
                        <div class="card pt-3 pb-3 shadow-lg mt-2" style="margin-left:10px;">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="row mt-3" style="padding-left: 10px;">
                                        <div class="col-lg-2 col-md-2 col-sm-10 col-12">
                                            <img src="{{ asset('uploads/doctorimg/' . $doctor->doctor_img) }}"
                                                class="ml-5 rounded-corner" alt=""
                                                style="height: 100px; width:100px;">
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-12">
                                            <div class="" style="padding-left: 15px;">
                                                <p class="fw-bold">{{ $doctor->specialist }}</p>
                                                <h4 class="fw-bold">Dr. {{ $doctor->doctor_name }}</h4>
                                                <h6 class="">{{ $doctor->doctor_qualification }},
                                                    {{ $doctor->remark }}
                                                </h6>
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
                                                    $from = \Carbon\Carbon::parse(
                                                        $doctor->availabilities[0]->from,
                                                    )->format('h:i A');
                                                    $to = \Carbon\Carbon::parse($doctor->availabilities[0]->to)->format(
                                                        'h:i A',
                                                    );
                                                @endphp
                                                {{ $from }} - {{ $to }} (By Appointment)
                                            </p>
                                        @else
                                            <p class="fw-bold">No available time</p>
                                        @endif
                                    </div>

                                    {{-- <p>Neuro Surgery</p> --}}
                                    <a href="{{ route('appoinment.create', $doctor->id) }}"
                                        class="mt-2 btn btn-outline-primary" type="submit">Book
                                        Appoinment</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            @endforeach
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
