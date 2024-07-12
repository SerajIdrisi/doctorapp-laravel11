@extends('layouts.master')
@section('css')
    <style>
        body {
            background-image: url('../images/doctor4.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 800px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid bg-primary">
        <div id="form-container">
            <div class="row">
                <div class="col-12">
                    <div class="card mx-auto opacity-75 align-item-center">
                        <h1 class="card-header">Add Doctor</h1>
                        <div class="card-body">
                            <form action="{{ route('doctor.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="dname">Doctor Name</label>
                                    <input type="text" name="doctor_name" id="dname" class="form-control"
                                        placeholder="Enter your name">
                                    @if ($errors->has('doctor_name'))
                                        <span class="text-danger">{{ $errors->first('doctor_name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="specialist">Doctor Qualification</label>
                                    <select name="doctor_qualification" id="dqualification" class="form-control">
                                        <option value="">Qualification</option>
                                        @foreach ($doctorqualification as $value)
                                            <option value="{{ $value->doctor_qulification }}">{{ $value->doctor_qulification }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('doctor_qualification'))
                                        <span class="text-danger">{{ $errors->first('doctor_qualification') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="dimg">Doctor Image</label>
                                    <input type="file" name="doctor_img" id="dimg" class="form-control">
                                    @if ($errors->has('doctor_img'))
                                        <span class="text-danger">{{ $errors->first('doctor_img') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Enter your email">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="">Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    @if ($errors->has('gender'))
                                        <span class="text-danger">{{ $errors->first('gender') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="specialist">Specialist</label>
                                    <select name="specialist" id="specialist" class="form-control">
                                        <option value="">Select</option>
                                        @foreach ($specialist as $value)
                                            <option value="{{ $value->specialist }}">{{ $value->specialist }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('specialist'))
                                        <span class="text-danger">{{ $errors->first('specialist') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="remark">Remark</label>
                                    <textarea name="remark" id="remark" class="form-control" rows="3"></textarea>
                                    @if ($errors->has('remark'))
                                        <span class="text-danger">{{ $errors->first('remark') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="day" class="form-label">Days</label>
                                    <select class="form-control" name="day[]" id="day" multiple>
                                        <option value="Mon">Monday</option>
                                        <option value="Tue">Tuesday</option>
                                        <option value="Wed">Wednesday</option>
                                        <option value="Thu">Thursday</option>
                                        <option value="Fri">Friday</option>
                                        <option value="Sat">Saturday</option>
                                        <option value="Sun">Sunday</option>
                                    </select>
                                    @if ($errors->has('day'))
                                        <span class="text-danger">{{ $errors->first('day')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="from" class="form-label">From:</label>
                                    <input type="time" class="form-control" id="from" name="from">
                                    @error('from')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="too" class="form-label">To:</label>
                                    <input type="time" class="form-control" id="too" name="too">
                                    @error('too')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mt-4">
                                    <button type="submit" class="form-control btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
    $(document).ready(function() {
        $('#addButton').on('click', function() {
            let newRow = `
                    <div class="row mt-2 dynamic-row">
                        <div class="col-4">
                            <div class="form-group">
                                <select class="form-control" name="day[]">
                                    <option selected>Select day</option>
                                    <option value="Mon">Monday</option>
                                    <option value="Tue">Tuesday</option>
                                    <option value="Wed">Wednesday</option>
                                    <option value="Thu">Thursday</option>
                                    <option value="Fri">Friday</option>
                                    <option value="Sat">Saturday</option>
                                    <option value="Sun">Sunday</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <input type="time" class="form-control" name="from">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <input type="time" class="form-control" name="too">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <button type="button" class="btn btn-danger w-100 removeButton">-</button>
                            </div>
                        </div>
                    </div>
                `;
            $('#dynamicInputs').append(newRow);
        });

        // Use event delegation to handle dynamically added elements
        $('#dynamicInputs').on('click', '.removeButton', function() {
            $(this).closest('.dynamic-row').remove();
        });
    });
</script>




@endsection
