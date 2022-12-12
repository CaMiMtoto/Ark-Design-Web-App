@extends('layouts.master')
@section('title',"Events")
@section('navigation')
    <li class="breadcrumb-item text-dark">Events</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Manage Events</h4>
                <button class="btn btn-sm btn-primary" type="button" id="addBtn">
                    Add Event
                </button>
            </div>
            <div class="table-responsive">
                <table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
                    <thead>
                    <tr class="fw-bold fs-6 text-muted text-uppercase">
                        <th></th>
                        <th>Name</th>
                        <th>Organiser</th>
                        <th>Date</th>
                        <th>Location</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="addModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Event&News</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>

                <form action="{{ route('admin.events.store') }}" method="post" id="submitForm"
                      enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="id" name="id" value="0"/>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="name" name="name"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="type" class="form-label">Type</label>
                                    <select class="form-select" id="type" name="type">
                                        <option value=""></option>
                                        <option value="event">Event</option>
                                        <option value="news">News</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="mb-3">
                                    <label for="organizer" class="form-label">Organiser</label>
                                    <input type="text" class="form-control" id="organizer" name="organizer"/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" class="form-control" id="location" name="location"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="date" name="date"/>
                                </div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="5" name="description"></textarea>
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
@endsection
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endsection
@section('scripts')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.min.js')}}"></script>

    {!! JsValidator::formRequest(\App\Http\Requests\StoreEventRequest::class) !!}
    <script>


        $(document).ready(function () {


            $('.nav-events').addClass('active');
            let dt = $('#kt_datatable_example_1').DataTable({
                responsive: true,
                "order": [[0, "desc"]],
                "ajax": "{{route('admin.events.index')}}",
                "columns": [
                    {
                        data: 'image', name: 'image', render: function (data, type, row) {
                            return `<div class="symbol symbol-50px "> <div class="symbol-label" style="background-image:url(${row.image_url})"></div> </div>`;
                        },
                        searchable: false,
                        orderable: false
                    },
                    {data: 'name', name: 'name'},
                    {data: 'organizer', name: 'organizer'},
                    {
                        data: 'date', name: 'date',
                        render: function (data, type, row) {
                            // format date without moment.js
                            return formatDate(data);
                        }
                    },
                    {data: 'location', name: 'location'},
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
                let data = new FormData(this);

                let submitBtn = form.find('button[type="submit"]');
                submitBtn.attr('disabled', true)
                    .html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...');
                $.ajax({
                    url: url,
                    method: method,
                    data: data,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (response) {
                        $('#addModal').modal('hide');
                        dt.ajax.reload();
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: "Event saved successfully",
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
                $('#id').val(0);
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
                        $('#organizer').val(response.organizer);
                        $('#location').val(response.location);
                        $('#date').val(formatDate(response.date, '-'));
                        $('#description').val(response.description);
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
                    title: 'Are you sure you want to delete this Event?',
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
                                    text: "Event deleted successfully",
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
        });
    </script>

@endsection
