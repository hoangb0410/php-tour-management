@extends('layouts.master')

@section('content')
    @include('admin.layouts.header')
    <div class="container">
        <h1 class="mt-3 mb-3">Add new tour</h1>
        <form method="POST" action="{{ route('tour.create') }}" id="createTourForm" class="row">
            @csrf
            <div class="col-6">
                <div class="form-group mb-3">
                    <label for="createName">Name</label>
                    <input type="text" class="form-control" id="createName" name="name" required
                        placeholder="Tour name">
                    <p class="p-error valid_error-name text-danger"></p>
                </div>
                <div class="form-group mb-3">
                    <label for="createDuration">Duration</label>
                    <input type="text" class="form-control" id="createDuration" name="duration" required
                        placeholder="Duration">
                    <p class="p-error valid_error-duration text-danger"></p>
                </div>
                <div class="form-group mb-3">
                    <label for="createDestination">Destination</label>
                    <select class="form-select" id="createDestination" name="destination_id" required>
                        @foreach ($destinations as $destination)
                            <option value="{{ $destination->id }}">{{ $destination->district }},
                                {{ $destination->province }}, {{ $destination->country }}</option>
                        @endforeach
                    </select>
                    <p class="p-error valid_error-destination_id text-danger"></p>
                </div>
                <div class="form-group mb-3">
                    <label for="createDepartureTime">Departure Time</label>
                    <input type="time" class="form-control" id="createDepartureTime" name="departure_time" required>
                    <p class="p-error valid_error-departure_time text-danger"></p>
                </div>
                <div class="form-group mb-3">
                    <label for="createType">Type</label>
                    <select class="form-select" id="createType" name="type_id" required>
                        @foreach ($tourTypes as $tourType)
                            <option value="{{ $tourType->id }}">{{ $tourType->name }}</option>
                        @endforeach
                    </select>
                    <p class="p-error valid_error-type_id text-danger"></p>
                </div>
                <div class="form-group mb-3">
                    <label for="createGuest">Number of guest</label>
                    <input type="number" class="form-control" id="createGuest" name="number_of_guest" required
                        min="1" value="1">
                    <p class="p-error valid_error-number_of_guest text-danger"></p>
                </div>
                <div class="form-group mb-3">
                    <label for="createPrice">Price</label>
                    <input type="number" class="form-control" id="createPrice" name="price" required min="0"
                        value="0">
                    <p class="p-error valid_error-price text-danger"></p>
                </div>
                <div class="form-group mb-3">
                    <label for="images">Images</label>
                    <input type="file" class="form-control" id="images" name="images[]" multiple>
                    <ul id="imageFileNames" class="mt-2"></ul>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group mb-3">
                    <label for="createOverview">Overview</label>
                    <textarea class="form-control" id="createOverview" name="overview" required rows="5"></textarea>
                    <p class="p-error valid_error-overview text-danger"></p>
                </div>
                <div class="form-group mb-3">
                    <label for="createInclusion">Inclusion</label>
                    <textarea class="form-control" id="createInclusion" name="inclusion" required rows="5"
                        placeholder="Inclusion 1; Inclusion 2; Inclusion 3"></textarea>
                    <p class="p-error valid_error-inclusion text-danger"></p>
                </div>
                <div class="form-group mb-3">
                    <label for="createAdditionalInfo">Additional Info</label>
                    <textarea class="form-control" id="createAdditionalInfo" name="additional_info" rows="6"
                        placeholder="Info 1; Info 2; Info 3"></textarea>
                    <p class="p-error valid_error-additional_info text-danger"></p>
                </div>
            </div>
        </form>
        <button type="button" class="btn form-button mb-3" style="padding: 10px 40px" id="createTourButton">Save</button>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#images').on('change', function(e) {
                const files = e.target.files;
                const fileNamesList = $('#imageFileNames');
                fileNamesList.empty();

                if (files.length > 0) {
                    $.each(files, function(index, file) {
                        fileNamesList.append('<li>' + file.name + '</li>');
                    });
                }
            });
        });

        //Submit form button event
        $('#createTourButton').on('click', function(e) {
            $('#createTourForm').submit();
        })

        //Submit form event
        $('#createTourForm').on('submit', function(e) {
            e.preventDefault();
            $('.p-error').text('');
            const formData = $(this).serialize() + '&_token={{ csrf_token() }}';
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: formData,
                success: function(response) {
                    showVanillaToast(response.message, response.alert)
                    window.location.href = "{{ route('tour.index') }}";
                },
                error: function(xhr, status, error) {
                    formValidAjax(xhr);
                }
            })
        })
    </script>
@endpush
