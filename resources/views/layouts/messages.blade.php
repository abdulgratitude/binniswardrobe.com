<script>
    @if(count($errors->all()) > 0)
    toastr.error('{{$errors->all()[0]}}');
    @endif

    @if(session('success'))
    toastr.success('{{session('success')}}');
    @endif

    @if(session('error'))
        '{{session('error')}}');
    @endif
</script>
