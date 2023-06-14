 @php
 $headTitle = 'Master Data';
 $subTitle = 'Edit Data Gedung';
 $contenTitle = 'Gedung';
 @endphp

@extends('layouts.app')

@section('title', $headTitle . ' - ' . $contenTitle)
@section('content-title', $subTitle)

@push('custom-css')
@endpush

@section('breadcrumbs')

@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <p><a href="{{ route('gedung.index') }}" class="btn btn-info btn-xs">Kembali</a></p>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $subTitle }}</h3>

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
                            <form action="{{ route('gedung.store') }}" method="POST">

                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Nama Gedung</label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control form-control-sm">
                                        <small id="name" class="form-text text-muted"></small>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Keterangan</label>
                                    <textarea type="text" name="ket" value="{{ old('ket') }}"
                                        class="form-control form-control-sm"></textarea>
                                </div>

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

@endpush
