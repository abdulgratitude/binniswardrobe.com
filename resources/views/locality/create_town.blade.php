<div class="row">
    <div class="form-group col-md-9">
        <label for="country">Select Country</label>
        <select class="form-control border selectpicker" name="country" id="country" data-show-subtext="true" data-live-search="true">
            <option value="" disabled selected>Select Country</option>
            @php
            $countries = getCountry();
            echo getSelectOptions($countries,'Select Country')
            @endphp
        </select>
    </div>
    <div class="form-group col-md-3">
        <label for="createCountryModal">Add country here</label>
        <div class="btn btn-primary" data-toggle="modal" data-target="#createCountryModal"
                data-backdrop="static">
            <i class="mdi mdi-plus mdi-22px cursor-pointer " id="showCreateCountryModal"></i> Create Country
        </div>
    </div>
</div>
<div class="row">
     <div class="form-group col-md-9">
        <label for="state">Select State</label>
        <select class="form-control border selectpicker" name="state" id="state" data-show-subtext="true" data-live-search="true">
            <option class="form-control border" value="" disabled selected>Select Country First</option>
        </select>
    </div>
    <div class="form-group col-md-3">
        <label for="createStateModal">Add state here</label>
        <div class="btn btn-primary" data-toggle="modal" data-target="#createStateModal"
                data-backdrop="static">
            <i class="mdi mdi-plus mdi-22px cursor-pointer " id="showCreateStateModal"></i> Create State
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-9">
        <label for="city">Select City</label>
        <select class="form-control border selectpicker" name="city" id="city" data-show-subtext="true" data-live-search="true">
            <option class="form-control border" value="" disabled selected>Select State First</option>
        </select>
    </div>
    <div class="form-group col-md-3">
        <label for="createCityModal">Add city here</label>
        <div class="btn btn-primary" data-toggle="modal" data-target="#createCityModal"
                data-backdrop="static">
            <i class="mdi mdi-plus mdi-22px cursor-pointer " id="showCreateCityModal"></i> Create City
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-9">
        <label class="" for="">Town</label>
        <input type="text" name="town" id="town" class="form-control text-uppercase" placeholder="Enter Town Name">
    </div>
</div>

