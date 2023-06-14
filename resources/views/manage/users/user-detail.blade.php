@extends('layouts.app')

@section('title', 'Manage')
@section('content-title', 'Detail User')

@push('custom-css')
@endpush

@section('breadcrumbs')
    {{ Breadcrumbs::render('user.show', $user) }}
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Detail User') }}</h3>

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
                        <b> Detail User: {{ $user->name }}</b> <br>
                        Username : {{ $user->username }}<br>
                        Email : {{ $user->email }}<br>
                        Level : {{ $user->level }}<br>
                        Role :
                        @foreach ($user->getRoleNames() as $roleName)
                            <li> <span class="badge bg-primary">{{ $roleName }}</span> </li>
                        @endforeach
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
