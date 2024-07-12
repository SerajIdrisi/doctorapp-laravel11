@extends('layouts.master')
@section('css')
    <style>
        body {
            background-image: url('../images/doctor4.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            /* background-position: center; */
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
                        <h1 class="card-header">Edit Specialist</h1>
                        <div class="card-body">
                            <form action="{{ route('specialist.update', $specialistedit->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="dspecialist">Doctor Specialist</label>
                                    <input type="text" name="specialist" id="dspecialist" class="form-control"
                                        value="{{ $specialistedit->specialist }}" placeholder="Doctor Specialist">
                                    @if ($errors->has('specialist'))
                                        <span class="text-danger">{{ $errors->first('specialist') }}</span>
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
