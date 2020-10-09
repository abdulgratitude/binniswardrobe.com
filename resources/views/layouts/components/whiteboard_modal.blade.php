<div class="modal fade p-0 {{ isset($class) ? $class : '' }}" tabindex="-1" role="dialog"
    id="{{ isset($id) ? $id : '' }}" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true"
    data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered {{
            isset($size) ? $size : 'modal-lg'
        }}" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                @include(isset($body) ? $body : '')
            </div>
        </div>
    </div>
</div>
