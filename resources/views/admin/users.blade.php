@extends('layouts.master')
@section('title',"Manage Users")
@section('navigation')
    <li class="breadcrumb-item text-dark">Users</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Manage users</h4>
                <button class="btn btn-sm btn-primary" type="button" id="addBtn">
                    Add User
                </button>
            </div>
            <table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
                <thead>
                <tr class="fw-bold fs-6 text-muted">
                    <th>Created At</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                </tbody>

            </table>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="addModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>

                <form action="{{ route('admin.users.store') }}" method="post" id="submitForm">
                    @csrf
                    <input type="hidden" id="id" name="id" value="0"/>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"/>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"/>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone number</label>
                            <input type="tel" class="form-control" id="phone" name="phone"/>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address"/>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                        <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" id="permissionsModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User Permissions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>

                <div id="userPermissions"></div>

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
    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.min.js')}}"></script>

    {!! JsValidator::formRequest(\App\Http\Requests\ValidateUser::class) !!}
    <script>
        $(document).ready(function () {


            $('.nav-users').addClass('active');
            let dt = $('#kt_datatable_example_1').DataTable({
                responsive: true,
                "order": [[0, "desc"]],
                "ajax": "{{route('admin.users.index')}}",
                "columns": [
                    {
                        data: 'created_at', name: 'created_at',
                        render: function (data, type, row) {
                            return formatDate(row.created_at);
                        }
                    },
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'phone', name: 'phone'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                processing: true,
                serverSide: true,
            });

            $('#addBtn').on('click', function () {
                $('#addModal').modal('show');
            });

            $('#submitForm').on('submit', function (e) {
                e.preventDefault();
                let form = $(this);
                if (!form.valid()) {
                    return;
                }
                let url = form.attr('action');
                let method = form.attr('method');
                let data = form.serialize();
                let submitBtn = form.find('button[type="submit"]');
                submitBtn.attr('disabled', true)
                    .html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...');
                $.ajax({
                    url: url,
                    method: method,
                    data: data,
                    success: function (response) {
                        $('#addModal').modal('hide');
                        dt.ajax.reload();
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: "User saved successfully",
                        });
                    },
                    error: function (error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: "Something went wrong!",
                        });
                    },
                    complete: function () {
                        submitBtn.attr('disabled', false)
                            .html('Save changes');
                    }
                });
            });
            $('#addModal').on('hidden.bs.modal', function () {
                $('#submitForm')[0].reset();
            });
            $(document).on('click', '.js-edit', function (e) {
                e.preventDefault();
                let href = $(this).attr('href');
                $.ajax({
                    url: href,
                    method: 'get',
                    success: function (response) {
                        $('#id').val(response.id);
                        $('#name').val(response.name);
                        $('#email').val(response.email);
                        $('#phone').val(response.phone);
                        $('#address').val(response.address);
                        $('#addModal').modal('show');
                    },
                    error: function (error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: "Something went wrong!",
                        });
                    },
                });
            });

            $(document).on('click', '.js-delete', function (e) {
                let href = $(this).attr('href');
                e.preventDefault();
                Swal.fire({
                    title: 'Are you sure you want to delete this user?',
                    text: "You won't be able to revert this!",
                    showCancelButton: true,
                    confirmButtonText: `Delete`,
                    denyButtonText: `Cancel`,
                    icon: 'warning'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: href,
                            method: 'delete',
                            data: {
                                _token: "{{csrf_token ()}}"
                            },
                            success: function (response) {
                                dt.ajax.reload();
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: "User deleted successfully",
                                });
                            },
                            error: function (error) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: "Something went wrong!",
                                });
                            },
                        });
                    }
                });
            });

            $(document).on('click', '.js-permissions', function (e) {
                e.preventDefault();
                let href = $(this).attr('href');
                $.ajax({
                    url: href,
                    method: 'get',
                    success: function (response) {
                        $('#userPermissions').html(response);
                        $('#permissionsModal').modal('show');
                    },
                    error: function (error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: "Something went wrong!",
                        });
                    },
                });
            });
            $(document).on('submit', '#permissionsForm', function (e) {
                e.preventDefault();
                let form = $(this);
                let url = form.attr('action');
                let method = form.attr('method');
                let data = form.serialize();
                let submitBtn = form.find('button[type="submit"]');
                submitBtn.attr('disabled', true)
                    .html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...');
                $.ajax({
                    url: url,
                    method: method,
                    data: data,
                    success: function (response) {
                        $('#permissionsModal').modal('hide');
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: "Permissions saved successfully",
                        });
                        dt.ajax.reload();
                    },
                    error: function (error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: "Something went wrong!",
                        });
                    },
                    complete: function () {
                        submitBtn.attr('disabled', false)
                            .html('Save changes');
                    }
                });
            });

        });
    </script>

@endsection
