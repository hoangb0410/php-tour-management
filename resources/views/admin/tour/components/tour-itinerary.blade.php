<div class="form-group">
    <div id="itineraries-container" class="row">
        <div class="itinerary col-6">
            <p>Tour Itinerary</p>
            <input type="text" class="form-control mb-2" name="itineraries[0][day]" placeholder="Day" required>
            <input type="text" class="form-control mb-2" name="itineraries[0][place]" placeholder="Place" required>
        </div>
        
        <div class="stops-container col-6">
            <p>Stops</p>
            <input type="text" class="form-control mb-2" name="itineraries[0][stops][0][stop_name]"
                placeholder="Stop Name" required>
            <input type="text" class="form-control mb-2" name="itineraries[0][stops][0][description]"
                placeholder="Description" required>
            <input type="text" class="form-control mb-2" name="itineraries[0][stops][0][duration]"
                placeholder="Duration" required>
            <input type="text" class="form-control mb-2" name="itineraries[0][stops][0][admission_info]"
                placeholder="Admission Info" required>
            <button type="button" class="btn outline-button add-stop mb-3">Add Another Stop</button>
        </div>
        <button type="button" id="add-itinerary" class="btn outline-button mb-3">Add Another Itinerary</button>
    </div>
</div>
