@extends('layouts.app')
@section('content')
@component('layouts.components.whiteboard_modal', [
'id' =>'white-board-modal-show',
'size'=>'modal-lg',
'body' =>'layouts.whiteboard.white-board-intro-001',
])
@endcomponent
@endsection

@section('script')
<script>
    $(document).ready(function () {
        whiteBoard('white-board-modal-show', 'white-board-modal')
    });
</script>
@endsection
