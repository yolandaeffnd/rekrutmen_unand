 @php
 $headTitle = 'Master Data';
 $subTitle = 'Detail Data Gedung';
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
                        {{-- Get Data gedung --}}
                        <b> Detail Gedung : </b><br>

                        Nama Gedung :   {{ $gedung->name }} <br>
                        Keterangan :    {{ $gedung->keterangan }}<br>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <small><i>{{z_footer()}}</i></small>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection

@push('custom-js')
@endpush
