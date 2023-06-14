@extends('layouts.app')

@section('title', 'Manage')
@section('content-title', 'Detail Role')

@push('custom-css')
@endpush

@section('breadcrumbs')
    {{ Breadcrumbs::render('role.show', $role) }}
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Detail Role') }}</h3>

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
                        {{-- Get Data Role --}}
                        <b> Detail Role: {{ $role->id }}</b> <br>
                        Name Role: <span class="badge bg-primary">{{ $role->name }}</span><br>
                        User Role :
                       @foreach ($users as $user)
                          <li> {{$user->name}} </li>
                       @endforeach
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <small><i>{{z_footer()}}</i></small>
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
