<input type="hidden" name="old_continent_code" id="edit_old_continent_code">
<div class="form-row">
    <div class="form-group col-md-12">
        <label class="py-2" for="edit_continent_code">Continent Code</label>
        <input type="text" name="continent_code" id="edit_continent_code" class="form-control text-uppercase" placeholder="Enter Continent Code" minlength="2" maxlength="3" autocomplete="off" autofocus="true" readonly>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <label class="py-2" for="edit_continent_name">Continent Name</label>
        <input type="text" name="continent_name" id="edit_continent_name" class="form-control text-uppercase" placeholder="Enter Continent Name" autocomplete="off">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <label class="py-2" for="edit_continent_description">Continent Description</label>
        <input type="text" name="continent_description" id="edit_continent_description" class="form-control text-uppercase" placeholder="Enter Continent Description" autocomplete="off">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <label class="" for="">Active Status</label>
    </div>
    <div class="form-check form-check-inline pl-2">
        <input class="form-check-input" type="radio" name="is_active" id="edit_continent_is_active_true" value="1" checked onclick="$('#edit_continent_is_active_true').val(1)">
        <label class="form-check-label" for="edit_continent_is_active_true">Yes</label>
    </div>
    <div class="form-check form-check-inline pl-2">
        <input class="form-check-input" type="radio" name="is_active" id="edit_continent_is_active_false" value="0" onclick="$('#edit_continent_is_active_false').val(0)">
        <label class="form-check-label" for="edit_continent_is_active_false">No</label>
    </div>
</div>
