@if (Session::has('statusDanger'))
    <script>
        Toastify({
            text: "{{ Session::get('statusDanger') }}",
            className: "danger",
        }).showToast();
    </script>
@endif

@if (Session::has('statusSuccess'))
    <script>
        Toastify({
            text: "{{ Session::get('statusSuccess') }}",
            className: "success",
        }).showToast();
    </script>
@endif
