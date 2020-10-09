<div class="form-row">

    <div class="form-group col-md-12">
        <label for="filter_country_id">Select Country</label>
        <select class="form-control form-control border selectpicker" name="country_id[]" id="filter_country_id" data-show-subtext="true" data-live-search="true">
            <option value="" disabled selected>Select Country</option>
{{--            @php--}}
{{--                $countries = getCountry();--}}
{{--                echo getSelectOptions($countries,'Select Country')--}}
{{--            @endphp--}}
        </select>
    </div>
    <div class="form-group col-md-12">
        <label for="filter_state_id">Select State</label>
        <select class="form-control form-control border selectpicker" name="state_id[]" id="filter_state_id" data-show-subtext="true" data-live-search="true">
            <option value="" disabled selected>Select country first</option>
        </select>
    </div>

    <div class="form-group col-md-12">
        <label for="filter_city_id">Select City</label>
        <select class="form-control form-control border selectpicker" name="city_id[]" id="filter_city_id" data-show-subtext="true" data-live-search="true">
            <option value="" disabled selected>Select state first</option>
        </select>
    </div>

    <div class="form-group col-md-12">
        <label for="filter_town_id">Select Town</label>
        <select class="form-control form-control border selectpicker" name="town_id[]" id="filter_town_id" data-show-subtext="true" data-live-search="true">
            <option value="" disabled selected>Select City first</option>
        </select>
    </div>



</div>
