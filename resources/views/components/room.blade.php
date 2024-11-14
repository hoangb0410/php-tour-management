<div class="room__item card mb-3">
    <div class="d-flex g-0">
        <div class="room__item__image" data-bs-toggle="modal" data-bs-target="#roomDetailsModal">
            <img src="{{ asset('assets/picture-8.png') }}" class="img-fluid rounded-start" alt="Room Image">
            <i class="fa-solid fa-image image-icon"></i>
        </div>
        <div class="card-body room-info">
            <h5 class="card-title">Family Suite</h5>
            <div class="content-font d-flex gap-5 mb-2">
                <span><i class="fas fa-ruler-combined me-2"></i>90m<sup>2</sup></span>
                <span><i class="fas fa-bed me-2"></i>2 Queen Bed</span>
                <span><i class="fa-solid fa-user-group me-2"></i>4 Guest</span>
            </div>
            <div class="room-facilities">
                <p>Air Conditioning • Airport Transport • Restaurant • <span>15 more</span></p>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <button class="btn outline-button select-btn">Select Room</button>
                <p class="text-danger mb-0">$240.00 <span style="color: gray; font-size: 15px;">/night</span></p>
            </div>
        </div>
    </div>
</div>

{{-- Modal --}}
@include('components.room-details')

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.select-btn').on('click', function() {
                $(this).toggleClass('selected-button');
                $(this).toggleClass('outline-button');
                if ($(this).hasClass('selected-button')) {
                    $(this).html('<i class="fas fa-check"></i> Selected');
                } else {
                    $(this).html('Select Room');
                }
            });
        });
    </script>
@endpush
