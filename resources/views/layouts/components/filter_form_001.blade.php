@if(isset($form) && $form == 'true')
<form action="{{isset($formAction) ? route($formAction) : ''}}" id="{{isset($formId) ? $formId : ''}}"
    method="{{isset($formMethod) ? $formMethod : ''}}">
    @csrf
    @endif
    <div id="accordion">
        <div class="card-filter-basic card shadow-on-hover">
            <div class="card-header">
                <div class="row align-items-center  no-gutters">
                    <div class="col cursor-pointer" data-toggle="collapse"
                        data-target="#{{isset($targetId) ? $targetId : 'accFilters'}}" aria-expanded="true"
                        aria-controls="{{isset($targetId) ? $targetId : 'accFilters'}}">
                        Filters
                    </div>
                </div>
            </div>
            <div id="{{isset($targetId) ? $targetId : 'accFilters'}}" class="collapse " aria-labelledby="headingOne"
                data-parent="#accordion">
                <div class="card-body">
                    <input type="hidden" name="page" id="filterPage" value="1">
                    <input type="hidden" name="no_of_records" id="" value="10">
                    @include(isset($body) ? $body : '')
                    <div class="form-group float-right">
                        @if(isset($resetBtn)) <button class="btn btn-outline-secondary"  type="button" id="resetFilter">{{isset($resetBtn) ? $resetBtn : ''}} </button>@endif
                        @if(isset($searchBtn)) <button class="btn btn-primary" id="submitFilter" type="submit" name="submit">{{isset($searchBtn) ? $searchBtn : ''}}</button>@endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>
