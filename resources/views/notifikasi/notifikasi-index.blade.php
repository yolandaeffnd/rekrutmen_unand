@extends('layouts.app')

@section('title', 'Notifikasi')
@section('content-title', 'Data')

@push('custom-css')
@endpush

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        {{-- Get Data User --}}
                        <p><a href="{{ route('notifikasi.create')}}" class="btn btn-info btn-xs">Tambah</a></p>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Isi</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Penulis</th>
                                        <th scope="col">Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($notifs->isNotEmpty())
                                       
                                    @else
                                        <tr>
                                            <td colspan="8"
                                                style="text-align:center; background-color: rgb(223, 223, 223); ">Tidak ada
                                                data</td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                            {!! $notifs->appends(Request::all())->links() !!}
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <small><i>{{ z_footer() }}</i></small>
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection

@push('custom-js')
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: 'Are you sure you want to delete this record?',
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endpush
