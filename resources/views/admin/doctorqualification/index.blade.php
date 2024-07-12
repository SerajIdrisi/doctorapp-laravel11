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
        <div class="card align-item-center" style="">
            <h1 class="card-header">Doctor Qualification List
                <a href="{{ route('doctorqualification.create') }}" class="btn btn-primary float-right">Add Doctor Qualification</a>
            </h1>
            <div class="card-body">
                <table class="table table-bordered data-table">
                    <thead class="">
                        <tr>
                            <th>Doctor Qualification</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody class="">
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
                    ajax: "{{ route('doctorqualification.index') }}",
                    columns: [
                        {
                            data: 'doctor_qulification',
                            name: 'doctor_qulification'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        }
                    ]
                });
            });
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
