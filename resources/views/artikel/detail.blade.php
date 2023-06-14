@extends('layouts.app')

@section('title', 'Artikel')
@section('content-title', 'Detail')

@push('custom-css')
@endpush


@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Detail') }}</h3>

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
                        {{-- Get Data data --}}
                          <p><a href="{{ route('article.index')}}" class="btn btn-info btn-xs">Kembali</a></p>
                        <b> Detail data:</b> <br>
                        judul : {{ $data->judul }}<br>
                        isi : {{ $data->isi }}<br>
                        kategori : {{ $data->kategori->name }}<br>
                        author : {{ $data->user->name }}<br>
                        image : {{ $data->image }}<br>

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
