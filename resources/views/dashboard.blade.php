@extends('layouts.app')

@section('title', 'Dashboard')
@section('content-title', 'Dashboard')

@push('custom-css')
@endpush

@section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard') }}
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-6">

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>100</h3>
                        <p>Pendaftar</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>45</h3>
                        <p>Verifikasi</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                </div>
            </div>

           


        </div>
    </div>
@endsection

@push('custom-js')
@endpush
