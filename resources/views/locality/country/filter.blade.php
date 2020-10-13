<div class="form-row">

    <div class="form-group col-md-12">
        <label for="filter_continent_code">Select Country</label>
        <select class="form-control form-control border selectpicker" name="continent_code" id="filter_continent_code" data-show-subtext="true" data-live-search="true">
            <option value="" disabled selected>Select Country</option>
            @php
                $countries = getCountry();
                echo getSelectOptions($countries,'Select Country')
            @endphp
        </select>
    </div>



</div>
