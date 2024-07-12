@extends('layouts.master')
{{-- Your custom styles --}}
@section('css')
    <style>
        body {
            background-image: url('/images/doctor3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card col-lg-12 col-md-10 col-12 mx-auto mt-3">
            <div class="card-header shadow-lg">
                <h1 class="text-dark">Edit Appointment</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('appoinment.update',$appoinmentedit->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-10 col-sm-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name"
                                            class="form-control border-primary" value="{{$appoinmentedit->name}}"
                                            placeholder="Enter your name">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="treatment">Types of Treatment</label>
                                        <input type="text" name="types_of_treatment" id="treatment"
                                            class="form-control border-primary" value="{{$appoinmentedit->types_of_treatment}}"
                                            value="{{ $doctorwithdaytime->specialist }}">
                                        @if ($errors->has('types_of_treatment'))
                                            <span class="text-danger">{{ $errors->first('types_of_treatment') }}</span>
                                        @endif
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="time">Time</label>
                                        <input type="time" name="time" id="time" class="form-control border-primary">
                                        @if ($errors->has('time'))
                                            <span class="text-danger">{{ $errors->first('time') }}</span>
                                        @endif
                                    </div> --}}
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email"
                                            class="form-control border-primary" value="{{$appoinmentedit->email}}" placeholder="Enter your email">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="doctor">Doctor</label>
                                        <input type="text" name="doctor" id="doctor"
                                            class="form-control border-primary" value="{{$appoinmentedit->doctor}}"
                                            value='{{ $doctorwithdaytime->doctor_name }}'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-10 col-sm-12">
                            <div class="form-group">
                                <label for="contact">Contact Number</label>
                                <input type="text" name="contact" id="contact" class="form-control border-primary" value="{{$appoinmentedit->contact}}"
                                    placeholder="Enter your Contact Number">
                                @if ($errors->has('contact'))
                                    <span class="text-danger">{{ $errors->first('contact') }}</span>
                                @endif
                            </div>
                            {{-- <div class="form-group">
                                <label for="doat">Day of Appointment</label>
                                <select name="day_of_appointment" id="doat" class="form-control border-primary" value="{{$appoinmentedit->name}}">
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
                                    <span class="text-danger">{{ $errors->first('day_of_appointment') }}</span>
                                @endif
                            </div> --}}
                            
                            <div class="form-group">
                                <label for="doat">Day of Appointment</label>
                                <select name="day_of_appointment" id="doat" class="form-control border-primary">
                                    <option value="">Select day and time</option>
                                    @foreach ($doctorwithdaytime->availabilities as $doctordaytime)
                                    @php
                                        $doctorTime = $doctordaytime->day.' '.$doctordaytime->from.' - '.$doctordaytime->to;
                                    @endphp
                                        <option value="{{ $doctordaytime->day }} {{ $doctordaytime->from }} - {{ $doctordaytime->to }}"
                                            {{ $appoinmentedit->day_of_appointment == $doctorTime ? 'selected' : '' }}>
                                            {{ $doctordaytime->day }} {{ $doctordaytime->from }} - {{ $doctordaytime->to }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('day_of_appointment'))
                                    <span class="text-danger">{{ $errors->first('day_of_appointment') }}</span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="time" name="time" id="time" class="form-control border-primary" value="{{$appoinmentedit->time}}">
                                @if ($errors->has('time'))
                                    <span class="text-danger">{{ $errors->first('time') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="remark">Remark</label>
                                <textarea name="remark" id="remark" class="form-control border-primary" placeholder="Type your problem"
                                    rows="3">{{$appoinmentedit->remark}}
                                </textarea>
                                @if ($errors->has('remark'))
                                    <span class="text-danger">{{ $errors->first('remark') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" onclick="selecttimevalidation()" class="btn btn-primary form-control">Book
                            Appointment</button>
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
            // alert('hellloooooo');
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

        // function cantChange() {
        //     alert("Can't Change It");
        // }
        // function selecttimevalidation() {
        //     let dayodappoinment = document.getElementById('doat').value;
        //     if (dayodappoinment == "") {
        //         alert('Please fill the details');
        //         event.preventDefault(); // Prevent form submission
        //     }
        // }
    </script>
    {{-- dynamic time depends on dr. available day & time end --}}

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
