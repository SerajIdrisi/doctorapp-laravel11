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
    <div class="cotainer-fluid">
        <div class="card  align-item-center" style="">
            <h1 class="card-header">Appointment List
                {{-- <a href="{{ route('appointment.create') }}" class="btn btn-primary float-right">Add More Doctor</a> --}}
            </h1>

            <div class="card-body col-12">
                <table class="table table-bordered table-responsive data-table">
                    <thead class="text-center">
                        <tr>
                            <th>Id</th>
                            <th>Patient Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Types Of Treatment</th>
                            <th>Doctor</th>
                            <th>Day of Appoinment</th>
                            <th>time</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('appoinment.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'contact',
                        name: 'contact'
                    },
                    {
                        data: 'types_of_treatment',
                        name: 'types_of_treatment'
                    },
                    {
                        data: 'doctor',
                        name: 'doctor'
                    },
                    {
                        data: 'day_of_appointment',
                        name: 'day_of_appointment'
                    },
                    {
                        data: 'time',
                        name: 'time'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],
                order: [[0, 'desc']]
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
