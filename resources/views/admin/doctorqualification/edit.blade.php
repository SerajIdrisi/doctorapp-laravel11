@extends('layouts.master')
@section('css')
    <style>
        /* body {
            background-image: url('../images/doctor4.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 800px;
        } */
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div id="form-container">
            <div class="row">
                <div class="col-12">
                    <div class="card mx-auto align-item-center">
                        <h1 class="card-header">Edit Doctor Qualification</h1>
                        <div class="card-body">
                            <form action="{{ route('doctorqualification.update',$doctorqualificationedit->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="dspecialist">Doctor Qualification</label>
                                    <input type="text" name="doctor_qulification" id="dqualification" class="form-control"
                                           placeholder="Doctor Qualification" value="{{$doctorqualificationedit->doctor_qulification}}">
                                    @if ($errors->has('doctor_qulification'))
                                        <span class="text-danger">{{ $errors->first('doctor_qulification') }}</span>
                                    @endif
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
@endsection
