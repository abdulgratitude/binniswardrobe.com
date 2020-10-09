
<div class="form-group col-md-12">
    <label for="country_id_create_city">Select Country</label>
    <select class="form-control border selectpicker text-uppercase" name="country_id_create_city" id="country_id_create_city" data-show-subtext="true" data-live-search="true">
        <option value="" disabled selected>Select Country</option>
        @php
        $countries = getCountry();
        echo getSelectOptions($countries,'Select Country')
        @endphp
    </select>
</div>
<div class="form-group col-md-12">
    <label for="state_id_create_city">Select State</label>
    <select class="form-control border selectpicker text-uppercase" name="state_id_create_city" id="state_id_create_city" data-show-subtext="true" data-live-search="true">
        <option value="" disabled selected>Select country first</option>
    </select>
</div>

<div class="form-group col-md-12">
    <label class="" for="">City</label>
    <input type="text" name="create_city" id="create_city" class="form-control text-uppercase" placeholder="Enter state Name">
</div>
