@extends('layouts.app')

@section('title', 'Manage')
@section('content-title', 'Tambah')

@push('custom-css')
@endpush



@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Tambah Jenis Formasi') }}</h3>

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
                        @if (count($errors) > 0)
                            {{ z_alert('danger', false, $errors->all()) }}
                        @endif
                        <div class="col-md-6">
                            <form action="{{ route('formasi.store')}}" method="POST">
                       
                                @csrf

                                <select class="form-control" name='periode'>
                                    <option selected="selected" disabled hidden>-- Selected Periode --</option>
                                    @foreach($periodes as $i)
                                        <option value="{{$i->kode}}">{{$i->kode}} - {{$i->name}}</option>
                                    @endforeach
                                </select>
                                <br>
                                <select class="form-control" name='unit'>
                                    <option selected="selected" disabled hidden>-- Selected Unit --</option>
                                    @foreach($units as $i)
                                        <option value="{{$i->id}}">{{$i->name}}</option>
                                    @endforeach
                                </select>
                                <br>
                                <input class="form-control" type="text" name="jabatan" placeholder="Jabatan"><br>
                                <input class="form-control" type="text" name="lokasi_penempatan" placeholder="Lokasi Penempatan"><br>
                                <select class="form-control" name='kode_penempatan'>
                                    <option selected="selected" disabled hidden>-- Selected Penempatan --</option>
                                    @foreach($prodis as $i)
                                        <option value="{{$i->kode_prodi}}">{{$i->nama_prodi}}</option>
                                    @endforeach
                                </select>
                                <br>
                                <select class="form-control" name='jenis_formasi'>
                                    <option selected="selected" disabled hidden>-- Selected Jenis Formasi --</option>
                                    @foreach($jenisFormasi as $i)
                                        <option value="{{$i->id}}">{{$i->nama_jenis}}</option>
                                    @endforeach
                                </select>
                                <br>
                                <input class="form-control" type="date" name="kebutuhan"><br>
                                <div class="mb-3">
                                    <input type="submit" name="submit" value="Save" class="btn btn-primary">
                                </div>
                            </form>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
       
      <script>
        $(document).ready(function() {
            // Select2 Multiple
            $('.select2-multiple').select2({
                placeholder: "Select",
                allowClear: true
            });

        });

    </script>
@endpush

