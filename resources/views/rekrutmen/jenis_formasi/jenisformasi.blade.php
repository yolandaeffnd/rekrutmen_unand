@extends('layouts.app')

@section('title', 'Manage Formasi')
@section('content-title', 'Data Formasi')

@push('custom-css')
@endpush

@section('breadcrumbs')
    {{ Breadcrumbs::render('formasi.index') }}
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Formasi</h3>

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
                        {{-- Get Data Formasi --}}
                        <p><a href="{{ route('jenisformasi-create') }}" class="btn btn-info btn-xs">Tambah Jenis Formasi</a></p>

                        <div class="table-responsive">
                        <table class="table">
                        <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Jenis Formasi</th>
                                        <th scope="col">Tahapan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($jenisformasis->isNotEmpty())
									

                                        @foreach ($jenisformasis as $key => $js)
                                        
                                            <tr>
                                                <th scope="row">{{ $key + 1 }}</th>
                                                <td>{{ $js->id }}</td>
                                                <td>{{ $js->nama_jenis }}</td>
                                                <td>
                                                @php

                                                   $tampung = json_decode($js->tahapan);
                                                   $j=1;
                                                @endphp
                                               
                                                @foreach($tampung as $tp)

                                                   {{$j++ }} . {{ $tp->subject}} <br \>

                                                @endforeach
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="12"
                                                style="text-align:center; background-color: rgb(223, 223, 223); ">Tidak ada
                                                data</td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>

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
