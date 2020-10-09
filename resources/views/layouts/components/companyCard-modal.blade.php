<!-- Modal -->
<div class="modal fade" id="{{isset($divId) ? $divId:''}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{!! isset($title) ? $title : '' !!}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{isset($formAction) ? route($formAction) : ''}}" method="{{isset($formMethod)? $formMethod : ''}}"
                      id="{{isset($formId) ? $formId : ''}}" name="{{isset($formName) ? $formName : ''}}" class="{{isset($class) ? $class : ''}}"
                      enctype="{{isset($formHeader) ? $formHeader : ''}}" novalidate="">
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Company Name<span class="text-danger">*</span></label>
                                <select name="function" class="form-control selectpickerr" id="functionSelect" data-live-search="true" data-selected-text-format="count" style="color: #666; font-style: italic"  autocomplete="off" >
                                    <option disabled selected >Select Company</option>
                                    <option value="1">Company</option>
                                    <option value="2">Company</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for=""> Referral<span class="text-danger">*</span></label>
                                <select name="function" class="form-control selectpickerr" id="functionSelect" data-live-search="true" data-selected-text-format="count" style="color: #666; font-style: italic"  autocomplete="off" >
                                    <option  disabled selected>Select Referral</option>
                                    <option value="1">Referral</option>
                                    <option value="2">Referral</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                            <label for="exampleFormControlTextarea1">Remark<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" style="color: #666; font-style: italic" placeholder="Type your remark here" rows="4" cols="30"></textarea>

                    </div>
                    @if($form)
                </form>
                @endif
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-secondary ">{!! isset($submit) ? $submit : '' !!}</button>
            </div>
        </div>
    </div>
</div>
