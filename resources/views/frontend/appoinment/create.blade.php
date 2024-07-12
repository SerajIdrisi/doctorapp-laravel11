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
    <div class="container-fluid doctor-bg">
        <div class="card col-lg-6 col-md-10 col-12 mx-auto mt-3 mb-3">
            <div class="card-header bg-primary">
                <h1 class="text-center text-light fw-bold">Appointment Form</h1>
            </div>
            {{-- @php echo '<pre>';print_r($doctors);exit;@endphp --}}
            <div class="card-body">
                <form action="{{ route('appoinment.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name"
                                            class="form-control border-primary border-primary"
                                            placeholder="Enter your name">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="contact">Contact Number</label>
                                        <input type="text" name="contact" id="contact"
                                            class="form-control border-primary"
                                            placeholder="Enter your Contact Number">
                                        @if ($errors->has('contact'))
                                            <span class="text-danger">{{ $errors->first('contact') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="treatment">Types of Treatment</label>
                                        <input type="text" name="types_of_treatment" id="treatment"
                                            class="form-control border-primary"
                                            value="{{ $doctorwithdaytime->specialist }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        {{-- <label for="treatment">Types of Treatment</label> --}}
                                        <input type="hidden" name="types_of_treatment" id="treatment"
                                            class="form-control border-primary"
                                            value="{{ $doctorwithdaytime->specialist }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email"
                                            class="form-control border-primary" placeholder="Enter your email">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="doctor">Doctor</label>
                                        <select type="text" name="doctor" id="doctor"
                                            class="form-control border-primary">
                                            <option value="{{ $doctorwithdaytime->id }}">
                                                {{ $doctorwithdaytime->doctor_name }}</option>
                                        </select>
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="doctor">Doctor</label>
                                        <input type="text" name="doctor" id="doctor"
                                            class="form-control border-primary" value="{{ $doctorwithdaytime->doctor_name }}" disabled>
                                            {{-- <option value="{{ $doctorwithdaytime->id }}">
                                                {{ $doctorwithdaytime->doctor_name }}</option>
                                        </select> --}}
                                    </div>
                                    <div class="form-group">
                                        {{-- <label for="doctor">Doctor</label> --}}
                                        <input type="hidden" name="doctor" id="doctor"
                                            class="form-control border-primary" value="{{ $doctorwithdaytime->doctor_name }}">
                                    </div>

                                    {{-- <div class="form-group">
                                        <label for="doat">Day of Appointment</label>
                                        <select name="day_of_appointment" id="doat"
                                            class="form-control border-primary">
                                            <option value="">Select day and time</option>
                                            @foreach ($doctorwithdaytime->availabilities as $doctordaytime)
                                                <option
                                                    value="{{ $doctordaytime->day }} {{ $doctordaytime->from }} - {{ $doctordaytime->to }}">
                                                    {{ $doctordaytime->day }} {{ $doctordaytime->from }} -
                                                    {{ $doctordaytime->to }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('day_of_appointment'))
                                            <span
                                                class="text-danger">{{ $errors->first('day_of_appointment') }}</span>
                                        @endif
                                    </div> --}}


                                    <div class="form-group">
                                        <label for="doat">Day of Appointment</label>
                                        <select name="day_of_appointment" id="doat" class="form-control border-primary">
                                            <option value="">Select day and time</option>
                                            @foreach ($doctorwithdaytime->availabilities as $doctordaytime)
                                                @php
                                                    // Convert 24-hour format to 12-hour format with AM/PM
                                                    $start_time = date("g:i A", strtotime($doctordaytime->from));
                                                    $end_time = date("g:i A", strtotime($doctordaytime->to));
                                                @endphp
                                                <option value="{{ $doctordaytime->day }} {{ $doctordaytime->from }} - {{ $doctordaytime->to }}">
                                                    {{ $doctordaytime->day }} {{ $start_time }} - {{ $end_time }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('day_of_appointment'))
                                            <span class="text-danger">{{ $errors->first('day_of_appointment') }}</span>
                                        @endif
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="time" name="time" id="time"
                                    class="form-control border-primary">
                                @if ($errors->has('time'))
                                    <span class="text-danger">{{ $errors->first('time') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="remark">Remark</label>
                                <textarea name="remark" id="remark" class="form-control border-primary" rows="3">
                                </textarea>
                                {{-- @if ($errors->has('remark'))
                                    <span class="text-danger">{{ $errors->first('remark') }}</span>
                                @endif --}}
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="demail" value="{{ $doctors->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" onclick="selecttimevalidation()"
                            class="btn btn-primary form-control">Book Appointment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // function cantChange() {
        //     alert("Can't Change It");
        // }

        function selecttimevalidation() {
            let dayodappoinment = document.getElementById('doat').val();
            alert(dayodappoinment);
            if (dayodappoinment == "") {
                alert('please select Day of Appoinment');
            }
        }
    </script>

    {{-- dynamic time depends on dr. available day & time  --}}
    <script>
        document.getElementById('doat').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex].value;
            if (selectedOption) {
                var parts = selectedOption.split(' ');
                var fromTime = parts[1];
                var toTime = parts[3];
                document.getElementById('time').setAttribute('min', fromTime);
                document.getElementById('time').setAttribute('max', toTime);
            } else {
                document.getElementById('time').removeAttribute('min');
                document.getElementById('time').removeAttribute('max');
            }
        });
    </script>
    {{-- end dynamic time depends on dr. available day & time  --}}

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
