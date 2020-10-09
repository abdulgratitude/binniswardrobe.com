@if(isset($form) && $form == 'true')
<form action="{{isset($formAction) ? route($formAction) : ''}}" id="{{isset($formId) ? $formId : ''}}" method="{{isset($formMethod) ? $formMethod : ''}}" enctype="{{isset($formHeader) ? $formHeader : ''}}">
    @csrf
    @endif
    <div class="modal fade p-0" tabindex="-1" role="dialog" id="{{isset($id) ? $id : ''}}" role="dialog"
        aria-labelledby="createModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered {{isset($size) ? $size : 'modal-lg'}}" role="document">
            <div class="modal-content">
                <div class="modal-header align-items-center px-3 pt-3 pb-1">
                    <h5 class="modal-title d-flex align-items-center">{!! isset($title) ? $title : '' !!}</h5>
                    <i class="mdi mdi-close mdi-22px cursor-pointer " class="close" data-dismiss="modal"></i>
                </div>
                <div class="modal-body">
                    @include(isset($body) ? $body : '')
                </div>
                @if(isset($footer) && $footer == 'true')
                <div class="modal-footer">
                    @if(isset($closeBtn)) <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        id="close">{{isset($closeBtn) ? $closeBtn : ''}}</button>@endif
                        @if(isset($extraBtn))
                        @if(is_array($extraBtn))
                            @foreach($extraBtn as $key => $val)
                                    <button type="button" class="btn {{isset($closeBtn) ? $closeBtn : ''}}" id="{{ $key }}">{{ $val['name'] }}</button>
                                @endforeach
                            @endif
                        @endif

                    @if(isset($submitBtn)) <button class="btn btn-primary" id="{{isset($submitBtnId) ? $submitBtnId : ''}}" type="submit"
                        name="submit">{{isset($submitBtn) ? $submitBtn : ''}}</button>@endif
                </div>
                @endif
            </div>
        </div>
    </div>
    @if(isset($form))
</form>
@endif
