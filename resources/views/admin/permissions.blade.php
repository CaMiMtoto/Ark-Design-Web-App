@extends('layouts.master')
@section('title',"Permissions")
@section('navigation')
    <li class="breadcrumb-item text-dark">Permissions</li>
@endsection

@section('content')
    <div class="card ">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Manage Permissions</h4>
            </div>
            <div class="table-responsive">
                <table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
                    <thead>
                    <tr class="fw-bold fs-6 text-muted text-uppercase">
                        <th>Created At</th>
                        <th>Name</th>
                        <th>Users</th>
                        <th>Guard</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($permissions as $permission)
                        <tr>
                            <td>{{ optional($permission->created_at)->toDateString() }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->users_count }}</td>
                            <td>{{ $permission->guard_name }}</td>

                        </tr>

                    @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>

@endsection
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endsection
@section('scripts')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <script>


        $(document).ready(function () {


            $('.nav-permissions').addClass('active');
            $('#kt_datatable_example_1').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });

        });
    </script>

@endsection
