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
            <h1 class="card-header">Doctor List
                <a href="{{ route('doctor.create') }}" class="btn btn-primary float-right">Add More Doctor</a>
            </h1>

            <div class="card-body col-12">
                <table class="table table-bordered table-responsive data-table">
                    <thead class="text-center">
                        <tr>
                            <th>Id</th>
                            <th>Doctor Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Specialist</th>
                            <th>Status</th>
                            <th>Services</th>
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
                ajax: "{{ route('doctor.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'doctor_name',
                        name: 'doctor_name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'gender',
                        name: 'gender'
                    },
                    {
                        data: 'specialist',
                        name: 'specialist'
                    },
                    // { 
                    //     data: 'availabilities', 
                    //     name: 'availabilities',
                    //     render: function(data) {
                    //         return data.length > 0 ? data[0].status : '';
                    //     }
                    // },
                    {
                        data: 'availabilities',
                        name: 'availabilities',
                        render: function(data) {
                            if (data.length > 0) {
                                var status = data[0].status;
                                var btnClass = status === 'Active' ? 'btn-success' : 'btn-danger';
                                return '<button class="btn ' + btnClass + ' status-btn" data-id="' +
                                    data[0].doctor_id + '" data-status="' + status + '">' + status +
                                    '</button>';
                            } else {
                                return '';
                            }
                        }
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ],
                order: [
                    [0, 'desc']
                ]
            });
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
