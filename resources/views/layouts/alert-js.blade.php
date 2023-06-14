<script>
    @if ($message = Session::get('success'))
        swal({
        position: 'top-end',
        icon: 'success',
        title: '{{ $message }}',
        showConfirmButton: false,
        timer: 3000
        })
    @endif

    @if ($message = Session::get('error'))
        swal({
        position: 'top-end',
        icon: 'error',
        title: '{{ $message }}',
        })
    @endif

    @if ($message = Session::get('warning'))
        swal({
        position: 'top-end',
        icon: 'warning',
        title: '{{ $message }}',
        })
    @endif

    @if ($message = Session::get('info'))
        swal({
        position: 'top-end',
        icon: 'info',
        title: '{{ $message }}',
        })
    @endif

    @if ($errors->any())
        swal({
        position: 'top-end',
        icon: 'error',
        title: 'Kesalahan, cek kembali form yang diisi ',
        })
    @endif
</script>
