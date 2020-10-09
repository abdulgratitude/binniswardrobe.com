<div class="row">
    <div class="form-group col-md-12">
        <label for="country">Select Country</label>
        <select class="form-control border selectpicker text-uppercase" name="country_id_town_update" id="country_id_town_update" data-show-subtext="true" data-live-search="true">
            <option value="" disabled selected>Select Country</option>
            @php
            $countries = getCountry();
            echo getSelectOptions($countries,'Select Country')
            @endphp
        </select>
    </div>
</div>
<div class="row">
     <div class="form-group col-md-12">
        <label for="state">Select State</label>
        <select class="form-control border selectpicker text-uppercase" name="state_id_town_update" id="state_id_town_update" data-show-subtext="true" data-live-search="true">
            <option class="form-control border" value="" disabled selected>Select Country First</option>
        </select>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-12">
        <label for="city">Select City</label>
        <select class="form-control border selectpicker text-uppercase" name="city_id_town_update" id="city_id_town_update" data-show-subtext="true" data-live-search="true" >
            <option class="form-control border" value="" disabled selected>Select State First</option>
        </select>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-12">
        <label class="" for="">Town</label>
        <input type="hidden" id="update_town_id" name="update_town_id" value="" class="form-control" placeholder="Enter state Name">
        <input type="text" name="update_town" id="update_town" value="" class="form-control text-uppercase" placeholder="Enter Town Name">
    </div>
</div>

