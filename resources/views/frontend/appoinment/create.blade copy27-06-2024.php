<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Appointment</title>
    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Your custom styles --}}
    <style>
        body {
            background-image: url('../images/doctor3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="card col-lg-8 col-md-10 col-12 mx-auto mt-3">
            <div class="card-header bg-primary">
                <h1 class="text-center text-light">Appointment Form</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('appoinment.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-10 col-sm-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control border-primary border-primary"
                                            placeholder="Enter your name">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="treatment">Types of Treatment</label>
                                        <input type="text" name="types_of_treatment" id="treatment"
                                            class="form-control border-primary" onclick="cantChange()"
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
                                        <input type="text" name="email" id="email" class="form-control border-primary"
                                            placeholder="Enter your email">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="doctor">Doctor</label>
                                        <input type="text" name="doctor" id="doctor" class="form-control border-primary"
                                            onclick="cantChange()" value='{{ $doctorwithdaytime->doctor_name }}'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-10 col-sm-12">
                            <div class="form-group">
                                <label for="contact">Contact Number</label>
                                <input type="text" name="contact" id="contact" class="form-control border-primary"
                                    placeholder="Enter your Contact Number">
                                @if ($errors->has('contact'))
                                    <span class="text-danger">{{ $errors->first('contact') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="doat">Day of Appointment</label>
                                <select name="day_of_appointment" id="doat" class="form-control border-primary">
                                    <option value="Select">Select day and time</option>
                                    @foreach ($doctorwithdaytime->availabilities as $doctordaytime)
                                        <option
                                            value="{{ $doctordaytime->day }} {{ $doctordaytime->from }} - {{ $doctordaytime->to }}">
                                            {{ $doctordaytime->day }} {{ $doctordaytime->from }} -
                                            {{ $doctordaytime->to }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="time" name="time" id="time" class="form-control border-primary">
                                @if ($errors->has('time'))
                                    <span class="text-danger">{{ $errors->first('time') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="remark">Remark</label>
                                <textarea name="remark" id="remark" class="form-control border-primary" rows="3">
                                </textarea>
                                @if ($errors->has('remark'))
                                    <span class="text-danger">{{ $errors->first('remark') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" onclick="selecttimevalidation()" class="btn btn-primary form-control">Book Appointment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script>
        function cantChange() {
            alert("Can't Change It");
        }
        function selecttimevalidation(){
            // alert('hellloooooo');
            let dayodappoinment = document.getElementById('doat').val();
            alert(dayodappoinment);
            if (dayodappoinment == ""){
                alert('please select Day of Appoinment');
            }
        }
    </script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
