<div class="form-row">
    <div class="form-group col-md-12">
        <label class="py-2" for="create_country_code">Country Code</label>
        <input type="text" name="country_code" id="create_country_code" class="form-control text-uppercase" placeholder="Enter Country Code" minlength="2" maxlength="3" autocomplete="off" autofocus="true">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <label class="py-2" for="create_country_name">Country Name</label>
        <input type="text" name="country_name" id="create_country_name" class="form-control text-uppercase" placeholder="Enter Country Name" autocomplete="off">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <label class="py-2" for="create_country_description">Country Description</label>
        <input type="text" name="country_description" id="create_country_description" class="form-control text-uppercase" placeholder="Enter Country Description" autocomplete="off">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <label for="create_default_currency_code">Select Default Currency</label>
        <select class="form-control form-control border selectpicker" name="default_currency_code" id="create_default_currency_code" data-show-subtext="true" data-live-search="true">
            <option value="" disabled selected>Select Default Currency</option>
            @php
                $currency = getCurrency();
                echo getSelectOptions($currency,'Select Default Currency')
            @endphp
        </select>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <label for="create_continent_code">Select Continental</label>
        <select class="form-control form-control border selectpicker" name="continent_code" id="create_continent_code" data-show-subtext="true" data-live-search="true">
            <option value="" disabled selected>Select Continental</option>
            @php
                $continentals = getContinental();
                echo getSelectOptions($continentals,'Select Continental')
            @endphp
        </select>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <label class="py-2" for="create_country_code_iso3">Country Code (ISO3)</label>
        <input type="text" name="country_code_iso3" id="create_country_code_iso3" class="form-control text-uppercase" placeholder="Enter Country Code (ISO3)" minlength="3" maxlength="3" autocomplete="off">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <label class="py-2" for="create_country_prefix">Country Code (ISO3)</label>
        <input type="text" name="country_prefix" id="create_country_prefix" class="form-control text-uppercase" placeholder="Enter Country Prefix" minlength="2" maxlength="4" autocomplete="off">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <label for="create_country_image">Upload Country Image<span
                class="text-danger"><small> only PNG, JPEG, JPG supported </small></span></label><br>
        <input type="file" name="resume" id="create_country_image" class="custom-resume">
    </div>
</div>

<div class="form-row pt-2">
    <div class="form-group col-md-12">
        <label class="" for="">Active Status</label>
    </div>
    <div class="form-check form-check-inline pl-2">
        <input class="form-check-input" type="radio" name="is_active" id="create_country_is_active_true" value="1" checked onclick="$('#create_country_is_active_true').val(1)">
        <label class="form-check-label" for="create_country_is_active_true">Yes</label>
    </div>
    <div class="form-check form-check-inline pl-2">
        <input class="form-check-input" type="radio" name="is_active" id="create_country_is_active_false" value="0" onclick="$('#create_country_is_active_false').val(0)">
        <label class="form-check-label" for="create_country_is_active_false">No</label>
    </div>
</div>

<div class="form-row pt-2">
    <div class="form-group col-md-12">
        <label class="" for="">Shipping Enable</label>
    </div>
    <div class="form-check form-check-inline pl-2">
        <input class="form-check-input" type="radio" name="shipping_enabled" id="create_shipping_enabled_true" value="1" checked onclick="$('#create_shipping_enabled_true').val(1)">
        <label class="form-check-label" for="create_shipping_enabled_true">Yes</label>
    </div>
    <div class="form-check form-check-inline pl-2">
        <input class="form-check-input" type="radio" name="shipping_enabled" id="create_shipping_enabled_false" value="0" onclick="$('#create_shipping_enabled_false').val(0)">
        <label class="form-check-label" for="create_shipping_enabled_false">No</label>
    </div>
</div>

<div class="form-row pt-2">
    <div class="form-group col-md-12">
        <label class="" for="">Check Pincode Delivery Serviceable</label>
    </div>
    <div class="form-check form-check-inline pl-2">
        <input class="form-check-input" type="radio" name="check_pincode_delivery_serviceable" id="create_check_pincode_delivery_serviceable_true" value="1" checked onclick="$('#create_check_pincode_delivery_serviceable_true').val(1)">
        <label class="form-check-label" for="create_check_pincode_delivery_serviceable_true">Yes</label>
    </div>
    <div class="form-check form-check-inline pl-2">
        <input class="form-check-input" type="radio" name="check_pincode_delivery_serviceable" id="create_check_pincode_delivery_serviceable_false" value="0" onclick="$('#create_check_pincode_delivery_serviceable_false').val(0)">
        <label class="form-check-label" for="create_check_pincode_delivery_serviceable_false">No</label>
    </div>
</div>
