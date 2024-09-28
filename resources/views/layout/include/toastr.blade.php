@if (Session::has('toaster_danger'))
{{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ Session::get('toaster_danger') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> --}}
<script>
    toastr.error("{{ Session::get('toaster_danger') }}")
</script>
@endif

@if (Session::has('toaster_success'))
{{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ Session::get('toaster_success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> --}}
<script>
    toastr.success("{{ Session::get('toaster_success') }}")
</script>
@endif