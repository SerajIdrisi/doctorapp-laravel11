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
    <div class="cotainer-fluid bg-primary">
        <div id="form-container">
            <div class="row">
                <div class="col-12">
                    <div class="card mx-auto opacity-75 align-item-center" style="">
                        <h1 class="card-header">Edit Doctor</h1>
                        <div class="card-body">
                            <form action="{{ route('doctor.update', $doctoredit->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="dname">Doctor Name</label>
                                    <input type="text" name="doctor_name" id="dname" class="form-control"
                                        value="{{ $doctoredit->doctor_name }}" placeholder="Enter your name">
                                    @if ($errors->has('doctor_name'))
                                        <span class="text-danger">{{ $errors->first('doctor_name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="dqualification">Doctor Qualification</label>
                                    <select name="doctor_qualification" id="dqualification" class="form-control">
                                        <option value="">Qualification</option>
                                        @foreach ($doctorqualification as $value)
                                            <option value="{{ $value->doctor_qulification }}"@if ($doctoredit->doctor_qualification == $value->doctor_qulification) selected @endif>
                                                {{ $value->doctor_qulification }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('doctor_qualification')) 
                                        <span class="text-danger">{{ $errors->first('doctor_qualification') }}</span>
                                    @endif
                                </div>
                                {{-- <div class="form-group">
                                    <label for="dimg">Doctor Image</label>
                                    <input type="file" name="doctor_img" id="dimg" class="form-control">
                                    <img src="{{ asset('uploads/doctorimg/' . $doctoredit->doctor_img) }}" value=""
                                        alt="" name="doctor_img" style="height:100px; width:100px;"></span>
                                    @if ($errors->has('doctor_img'))
                                        <span class="text-danger">{{ $errors->first('doctor_img') }}</span>
                                    @endif
                                </div> --}}
                                <div class="form-group">
                                    <label for="dimg">Doctor Image</label>
                                    <input type="file" name="doctor_img" id="dimg" class="form-control">
                                    @if ($doctoredit->doctor_img)
                                        <img src="{{ asset('uploads/doctorimg/' . $doctoredit->doctor_img) }}"
                                            alt="Doctor Image" style="height:100px; width:100px;">
                                    @else
                                        <span>No image available</span>
                                    @endif
                                    @if ($errors->has('doctor_img'))
                                        <span class="text-danger">{{ $errors->first('doctor_img') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Enter your email" value="{{ $doctoredit->email }}">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="">Select</option>
                                        <option value="Male" {{ $doctoredit->gender == 'Male' ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="Female" {{ $doctoredit->gender == 'Female' ? 'selected' : '' }}>
                                            Female</option>
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
                                            <option value="{{ $value->specialist }}" {{ $doctoredit->specialist == $value->specialist ? 'selected' : '' }}>
                                                {{ $value->specialist }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('specialist'))
                                        <span class="text-danger">{{ $errors->first('specialist') }}</span>
                                    @endif
                                </div>
                                <!--<div class="form-group">
                                    <label for="davail">Doctor Availability Status</label>
                                    {{-- @php echo '<pre>';print_r($doctoredit->availabilities);exit;@endphp --}}
                                    <select name="status" id="davail" class="form-control">
                                        <option value="">Select</option>
                                        {{-- @foreach ($doctoredit->availabilities as $doctorstatus) --}}
                                            {{-- <option value="Active" {{ $doctorstatus->status == 'Active' ? 'selected' : '' }}> --}}
                                                Active
                                            </option>
                                            {{-- <option value="Inactive" {{ $doctorstatus->status == 'Inactive' ? 'selected' : '' }}> --}}
                                                Inactive
                                            </option>
                                        {{-- @endforeach --}}
                                    </select>
                                    {{-- @if ($errors->has('status')) --}}
                                        {{-- <span class="text-danger">{{ $errors->first('status') }}</span> --}}
                                    {{-- @endif --}}
                                </div>-->


                                {{-- <div class="form-group">
                                    <label for="davail">Doctor Availability Status</label>
                                    <select name="status" id="davail" class="form-control">
                                        <option value="">Select</option> --}}
                                        {{-- Check if 'Active' option should be selected --}}
                                        {{-- <option value="Active" @if ($doctoredit->availabilities->contains('status', 'Active')) selected @endif>
                                            Active
                                        </option> --}}
                                        {{-- Check if 'Inactive' option should be selected --}}
                                        {{-- <option value="Inactive" @if ($doctoredit->availabilities->contains('status', 'Inactive')) selected @endif>
                                            Inactive
                                        </option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="remark">Remark</label>
                                    <textarea name="remark" id="remark" class="form-control" rows="3">{{$doctoredit->remark}}
                                    </textarea>
                                    @if ($errors->has('remark'))
                                        <span class="text-danger">{{ $errors->first('remark') }}</span>
                                    @endif
                                </div> --}}



                                <div class="form-group">
                                    <label for="davail">Doctor Availability Status</label>
                                    <select name="status" id="davail" class="form-control" onchange="toggleRemark()">
                                        <option value="">Select</option>
                                        <option value="Active" @if ($doctoredit->availabilities->contains('status', 'Active')) selected @endif>Active</option>
                                        <option value="Inactive" @if ($doctoredit->availabilities->contains('status', 'Inactive')) selected @endif>Inactive</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                                <div class="form-group" id="remark-group">
                                    <label for="remark">Remark</label>
                                    <textarea name="remark" id="remark" class="form-control" rows="3">{{ $doctoredit->remark }}</textarea>
                                    @if ($errors->has('remark'))
                                        <span class="text-danger">{{ $errors->first('remark') }}</span>
                                    @endif
                                </div>

                                {{-- <div class="form-group">
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
                                </div> --}}
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
                                <input type="time" class="form-control" name="from[]">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <input type="time" class="form-control" name="too[]">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
