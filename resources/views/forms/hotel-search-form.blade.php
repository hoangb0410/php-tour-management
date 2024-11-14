<form class="search-form" id="hotel-search-form">
    <h2 class="mb-3">Find hotels for your next trip</h2>
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text fixed-width"><i class="input-icon fa-solid fa-location-dot"></i></span>
            <input type="text" class="form-control p-3" id="hotel-location"
                placeholder="Quatlam Beach, Giaothuy, Namdinh">
        </div>
    </div>
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text fixed-width"><i class="input-icon fa-regular fa-calendar"></i></span>
            <input type="text" class="form-control p-3" id="departure-time" placeholder="Departure time">
        </div>
    </div>
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text fixed-width"><i class="input-icon fa-solid fa-user-group"></i></span>
            <select class="form-select p-3" name="number-of-guests-hotel">
                <option class="p-3" selected>Number of Guests</option>
                <option>1-2</option>
                <option>3-4</option>
                <option>5+</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn form-button w-100 p-3"><span><i
                class="fa-solid fa-magnifying-glass me-3"></i></span>Search</button>
</form>
