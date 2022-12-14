@extends('layouts.master')
@section('title',"Projects")
@section('navigation')
    <li class="breadcrumb-item text-dark">Projects</li>
@endsection
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
          href="https://unpkg.com/filepond-plugin-image-preview@4.6.4/dist/filepond-plugin-image-preview.min.css"/>

@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Manage projects</h4>
                <button class="btn btn-sm btn-primary" type="button" id="addBtn">
                    Add Project
                </button>
            </div>
        <div class="table-responsive ">
            <table id="kt_datatable_example_1" class="table table-row-dashed gy-1">
                <thead>
                <tr class="fw-bold fs-6 text-muted">
                    <th>Name</th>
                    <th>Type</th>
                    <th>Location</th>
                    <th></th>
                </tr>
                </thead>

            </table>
        </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="addModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>

                <form action="{{ route('admin.projects.store') }}" method="post" id="submitForm">
                    @csrf
                    <input type="hidden" id="id" name="id" value="0"/>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"/>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <select class="form-select" id="type" name="project_type_id">
                                <option value="">
                                    Select Type
                                </option>
                                @foreach($types as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location"/>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
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
    <div class="modal fade" tabindex="-1" id="imagesModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Images</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>

                <div class="modal-body">
                    <input type="file" class="my-pond" name="filepond"/>

                    <div id="imagesResult"></div>

                </div>


            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.min.js')}}"></script>

    {!! JsValidator::formRequest(\App\Http\Requests\StoreProjectRequest::class) !!}
    {{--    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>--}}

    <!-- include FilePond library -->
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

    <!-- include FilePond plugins -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>

    <!-- include FilePond jQuery adapter -->
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>

    <script>
        $(document).ready(function () {
            // First register any plugins
            $.fn.filepond.registerPlugin(FilePondPluginImagePreview);
            /*  $.fn.filepond.registerPlugin(FilePondPluginFileValidateSize);

              $.fn.filepond.setDefaults({
                  maxFileSize: '3MB',
              });*/
            // Turn input element into a pond
            let $my = $('.my-pond');
            $my.filepond();

            // Set allowMultiple property to true
            $my.filepond('allowMultiple', true);

            // Listen for addfile event
            $my.on('FilePond:addfile', function (e) {
                console.log('file added event', e);
            });


            $('.nav-projects').addClass('active');
            let dt = $('#kt_datatable_example_1').DataTable({
                responsive: true,
                "order": [[0, "desc"]],
                "ajax": "{{route('admin.projects.index')}}",
                "columns": [
                    {data: 'name', name: 'name'},
                    {data: 'project_type.name', name: 'projectType.name'},
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
                            text: "Project saved successfully",
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
                        $('#type').val(response.project_type_id);
                        $('#location').val(response.location);
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
                    title: 'Are you sure you want to delete this project?',
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
                                    text: "Project deleted successfully",
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

            $(document).on('click', '.js-images', function (e) {
                let href = $(this).attr('href');
                e.preventDefault();
                let imageUrl = $(this).data("images-url");
                $.ajax({
                    url: href,
                    method: 'get',
                    success: function (response) {
                        $('#imagesResult').html(response);
                        $('#imagesModal').modal('show');
                    },
                    error: function (error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: "Something went wrong!",
                        });
                    },
                });

                FilePond.setOptions({
                    server: {
                        url: href,
                        method: 'POST',
                        process: {
                            ondata: (formData) => {
                                formData.append('_token', "{{csrf_token()}}");
                                return formData;
                            }
                        }
                    },

                });
                // $('#imagesModal').modal('show');

            });
        });


    </script>

@endsection
