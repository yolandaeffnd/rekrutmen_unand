@extends('layouts.app')

@section('title', 'Manage Periode')
@section('content-title', 'Data Periode')

@push('custom-css')
@endpush

@section('breadcrumbs')
    {{ Breadcrumbs::render('periode-penerimaan.index') }}
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Periode</h3>

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
                        {{-- Get Data Periode --}}
                        <p><a class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal_input" onclick="clearform()">Tambah Periode</a></p>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Kode</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($periodes->isNotEmpty())
                                        @foreach ($periodes as $key => $Periode)
                                            <tr>
                                                <th scope="row">{{ $key + 1 }}</th>
                                                <td>{{ $Periode->kode }}</td>
                                                <td>{{ $Periode->name }}</td>
                                                <td>
                                                    <a class="btn btn-warning btn-xs edit" data-kode="{{ $Periode->kode }}" data-name="{{ $Periode->name }}"> <i class="far fa-edit icon-size"></i></a>

                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['periode-penerimaan.destroy', $Periode->id], 'style' => 'display:inline']) !!}
                                                    {!! Form::hidden('level', $Periode->level) !!}
                                                    {{ Form::button('<i class="far fa-trash-alt icon-size"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs show_confirm']) }}
                                                    {!! Form::close() !!}
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
  
    <!-- Modal -->
    <div class="modal fade" id="modal_input" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="title">Input Data Periode</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('periode-penerimaan.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Kode</label>
                        <input type="text" id="kode" name="kode" class="form-control form-control-sm" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" id="name" name="name" class="form-control form-control-sm">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun</label>
                        <select class="form-control" id="tahun" name="tahun">
                            <option value="">Pilih Tahun</option>
                            <?php
                            $startYear = date("Y")-5; // Tahun awal
                            $endYear = date("Y")+1; // Tahun saat ini

                            for ($year = $endYear; $year >= $startYear; $year--) {
                                echo "<option value='$year'>$year</option>";
                            }
                            ?>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" name="submit" value="Save" class="btn btn-primary">
            </div>
        </form>
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

        $(document).on('click', '.edit', function () {
            kode = $(this).data('kode');
            name = $(this).data('name');
            th = kode.toString();
            tahun = th.substring(0, 4)

            $('#modal_input').modal('show');
            $('#kode').val(kode)
            $('#name').val(name)
            $('#tahun').val(tahun)
            $('#tahun').prop('disabled', true)
            $('#title').html('Edit Data Periode')
        });

        function clearform() {
            $('#kode').val('')
            $('#name').val('')
            $('#tahun').val('')
            $('#tahun').prop('disabled', false)
            $('#title').html('Input Data Periode')
        }
    </script>
@endpush
