<?php $headTitle = 'Profile'; ?>
<?php $subTitle = 'Your Profile'; ?>
<?php $contenTitle = 'Profile'; ?>

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

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data {{ $contenTitle }}</h3>

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
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p><b>{{ __('You are logged in!') }}</b></p>

                        {{-- Cek Role --}}
                        <table class="table table-bordered">
                            <tr>
                                <td width="20%">Level</td>
                                <td>{{ auth()->user()->level }}</td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>{{ $user->username }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>Unit</td>
                                <td> <span class="badge bg-info">
                                        {{ !is_null($user->units) ? $user->units->name : 'no unit' }}</span></td>
                            </tr>

                            <tr>
                                <td>Role {{-- Cek Role --}}</td>
                                <td>
                                    @foreach ($user->roles->pluck('name') as $name)
                                        <span class="badge bg-success">{{ $name }}</span>
                                    @endforeach
                                </td>
                            </tr>

                            <tr>
                                <td>Get Your Data Profile</td>
                                <td>
                                    <a href="{{ route('notify-myprofile') }}"
                                        class="btn btn-sm btn-warning rounded-pill show_confirm"><i
                                            class="fas fa-envelope"></i>&nbsp;Get My Profile [send to email]</a>

                                </td>
                            </tr>
                        </table>

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
