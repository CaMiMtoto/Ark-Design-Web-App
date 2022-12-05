@extends('layouts.master')
@section('title',"Inquires")
@section('navigation')
    <li class="breadcrumb-item text-dark">Inquires</li>
@endsection
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Manage Events</h4>
            </div>
            <div class="table-responsive">
                <table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
                    <thead>
                    <tr class="fw-bold fs-6 text-muted text-uppercase">
                        <th>Name</th>
                        <th>Phone</th>
                        <th>UPI</th>
                        <th>Message</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.nav-inquiries').addClass('active');
            let dt = $('#kt_datatable_example_1').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.inquiries.index') }}",
                columns: [
                    {
                        data: 'name', name: 'name', render: function (data, type, row) {
                            return `<small>${data}</small>`;
                        }
                    },
                    {
                        data: 'phone', name: 'phone', render: function (data, type, row) {
                            return `<small>${data}</small>`;
                        }
                    },
                    {
                        data: 'upi_number', name: 'upi_number', render: function (data, type, row) {
                            return `<small>${data}</small>`;
                        }
                    },
                    {
                        data: 'message',
                        name: 'message',
                        render: function (data, type, row) {
                            return `  <p class="text-muted small" data-bs-toggle="collapse" href="#multiCollapseExample${row.id}" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">${data.substr(0, 50) + '…'}</p>
 <div class="collapse multi-collapse small border" id="multiCollapseExample${row.id}">
      <div class="card card-body">
        ${data}
      </div>
    </div>
`
                        }
                    },
                    {data: 'action', name: 'action', orderable: false, searchable: false, width: '15%'},
                ]
            });

            $(document).on('click', '.js-delete', function (e) {
                e.preventDefault();
                let id = $(this).data('id');
                let url = "{{ route('admin.inquiries.destroy', ':id') }}";
                url = url.replace(':id', id);
                Swal.fire({
                    title: 'Are you sure you want to delete this inquiry?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then(function (result) {
                    if (result.value) {
                        $.ajax({
                            url: url,
                            type: 'DELETE',
                            data: {
                                _token: "{{ csrf_token() }}"
                            },
                            success: function (result) {
                                Swal.fire(
                                    'Deleted!',
                                    'Inquiry has been deleted.',
                                    'success'
                                );
                                dt.ajax.reload();
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
