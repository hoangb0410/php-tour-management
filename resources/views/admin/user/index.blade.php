@extends('layouts.master')

@section('content')
    @include('admin.layouts.header')
    <div class="container">
        <h1 class="mt-5 mb-3">User management</h1>
        <div class="float-right">
            <button type="button" class="btn btn-primary mb-3" id="addUserButton">
                Add new user
            </button>
        </div>
        <table class="table" id="userDatatable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
        </table>
    </div>
    @include('admin.user.modal-add-edit-user')
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {

            var columns = [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    width: '5%',
                    orderable: false,
                    searchable: false,
                    class: 'align-middle text-center'
                },
                {
                    data: 'first_name',
                    name: 'first_name',
                    orderable: false,
                    searchable: false,
                    class: 'align-middle'
                },
                {
                    data: 'last_name',
                    name: 'last_name',
                    orderable: false,
                    searchable: false,
                    class: 'align-middle'
                },
                {
                    data: 'email',
                    name: 'email',
                    orderable: false,
                    searchable: true,
                    class: 'align-middle'
                },
                {
                    data: 'action',
                    name: 'action',
                    width: '15%',
                    orderable: false,
                    searchable: false
                },
            ];
            var ajax = {
                method: 'GET',
                url: '{{ route('user.list') }}',
            };

            let oTable = $('#userDatatable').DataTable({
                processing: true,
                serverSide: true,
                columns: columns,
                ajax: ajax
            });

            //Add user button event
            $('#addUserButton').on('click', function(e) {
                $('#createEditUserModel').modal('toggle');
                $('#createEditUserModelLabel').text('Add new user'),
                    $('.p-error').text('');
                $('#createEditUserModel').find('input').val('');
            })

            //Edit user button event
            $('body').on('click', '.edit-obj-modal', function(e) {
                $('.p-error').text('');
                $.ajax({
                    url: $(this).data('url'),
                    type: 'GET',
                    success: function(response) {
                        $('#createEditUserModelLabel').text('Edit user')
                        $('#createEditUserModel').find('#userIdInput').val(response.user.id);
                        $('#createEditUserModel').find('#createEditFirstName').val(response.user
                            .first_name);
                        $('#createEditUserModel').find('#createEditLastName').val(response.user
                            .last_name);
                        $('#createEditUserModel').find('#createEditEmail').val(response.user
                            .email);
                        $('#createEditUserModel').find('#createEditPassword').prop('disabled',
                            true);
                        $('#createEditUserModel').modal('toggle');
                    },
                    error: function(xhr, status, error) {
                        showVanillaToast(xhr.responseJSON.message, 'error')
                    }
                })
            })

            //Submit form button event
            $('#submitUserForm').on('click', function() {
                $('#createEditUserForm').submit();
            })

            //Submit form event
            $('#createEditUserForm').on('submit', function(e) {
                e.preventDefault();
                $('.p-error').text('');
                const formData = $(this).serialize() + '&_token={{ csrf_token() }}';
                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: formData,
                    success: function(response) {
                        $('#createEditUserModel').modal('hide');
                        showVanillaToast(response.message, response.alert)
                        oTable.ajax.reload();
                    },
                    error: function(xhr, status, error) {
                        formValidAjax(xhr);
                    }
                })
            })

            //Delete button event
            $('body').on('click', '.delete-btn', function(e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).data('url'),
                    type: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        showVanillaToast(response.message, response.alert)
                        oTable.ajax.reload();
                    },
                    error: function(xhr, status, error) {
                        formValidAjax(xhr);
                    }
                })
            })
        })
    </script>
@endpush
