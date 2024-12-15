@extends('layouts.master')

@section('content')
    @include('admin.layouts.header')
    <div class="container">
        <h1 class="mt-5 mb-3">Tour management</h1>
        <div class="float-right">
            <button type="button" class="btn btn-primary mb-3" id="addTourButton">
                Add new tour
            </button>
        </div>
        <table class="table" id="tourDatatable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Destination</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Type</th>
                    <th scope="col">Guest</th>
                    <th scope="col">Price</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
        </table>
    </div>
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
                    data: 'name',
                    name: 'name',
                    width: '20%',
                    orderable: false,
                    searchable: true,
                    class: 'align-middle'
                },
                {
                    data: 'duration',
                    name: 'duration',
                    orderable: false,
                    searchable: false,
                    class: 'align-middle'
                },
                {
                    data: 'destination',
                    name: 'destination',
                    orderable: false,
                    searchable: false,
                    class: 'align-middle'
                },
                {
                    data: 'departure_time',
                    name: 'departure_time',
                    orderable: false,
                    searchable: false,
                    class: 'align-middle'
                },
                {
                    data: 'type',
                    name: 'type',
                    orderable: false,
                    searchable: false,
                    class: 'align-middle'
                },
                {
                    data: 'number_of_guest',
                    name: 'number_of_guest',
                    orderable: false,
                    searchable: false,
                    class: 'align-middle'
                },
                {
                    data: 'price',
                    name: 'price',
                    orderable: false,
                    searchable: false,
                    class: 'align-middle'
                },
                {
                    data: 'rating',
                    name: 'rating',
                    orderable: false,
                    searchable: false,
                    class: 'align-middle'
                },
                {
                    data: 'action',
                    name: 'action',
                    width: '10%',
                    orderable: false,
                    searchable: false
                },
            ];
            var ajax = {
                method: 'GET',
                url: '{{ route('tour.list') }}',
            };

            let oTable = $('#tourDatatable').DataTable({
                processing: true,
                serverSide: true,
                columns: columns,
                ajax: ajax
            });

            //Add tour button event
            $('#addTourButton').on('click', function(e) {
                e.preventDefault();
                window.location.href = "{{ route('tour.view-create') }}";
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
