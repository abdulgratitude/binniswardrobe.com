<div class="form-group col-md-12">
    <label for="country">Select Country</label>
    {{-- onChange="getState(this.value);" --}}
    <select class="form-control border selectpicker text-uppercase" name="country_id_create_state" id="country_id_create_state" data-show-subtext="true" data-live-search="true">
        <option value="" disabled selected>Select Country</option>
        @php
        $countries = getCountry();
        echo getSelectOptions($countries,'Select Country')
        @endphp
    </select>
</div>

<div class="form-group col-md-12">
    <label class="" for="">State</label>
    <input type="text" name="create_state" id="create_state" class="form-control text-uppercase" placeholder="Enter state Name">
</div>
