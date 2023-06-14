@extends('layouts.app')

@section('title', 'Manage Pelamar')
@section('content-title', 'Data Pelamar')

@push('custom-css')
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush


@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Pendaftaran</h3>

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

                        <div class="table-responsive">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Status Submit</th>
                                        <th scope="col">Waktu Submit</th>
                                        <th scope="col">Formasi</th>
                                        <th scope="col">Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($users->isNotEmpty())
										@php
											$stat_reg_terdaftar = 0;
											$stat_reg_tidak_melengkapi = 0;
											$stat_reg_belum_tidak_mendaftar = 0;
										@endphp

                                        @foreach ($users as $key => $user)
                                            @php

                                                if (!is_null($user->registrasi)) {
                                                    if ($user->registrasi->status == 'dikirim') {
                                                        $stat_reg = '<i style="color:green">Terdaftar</i>';
                                                        $stat_reg_time = $user->registrasi->waktu_dikirim;
                                                        $stat_reg_terdaftar = $stat_reg_terdaftar + 1;
                                                    } elseif ($user->registrasi->status == 'update') {
                                                        $stat_reg = '<i style="color:orange">Tidak Melengkapi</i>';
                                                        $stat_reg_time = '-';
                                                        $stat_reg_tidak_melengkapi = $stat_reg_tidak_melengkapi + 1;
                                                    } else {
                                                        $stat_reg = 'unknown';
                                                        $stat_reg_time = '-';
                                                    }
                                                } else {
                                                    $stat_reg = '<i style="color:red">Belum/Tidak Mendaftar</i>';
                                                    $stat_reg_time = '-';
                                                    $stat_reg_belum_tidak_mendaftar = $stat_reg_belum_tidak_mendaftar + 1;
                                                }
                                            @endphp
                                            <tr>
                                                <th scope="row">{{ $key + 1 }}</th>
                                                <td>{{ $user->id }}</td>
                                                <td><a href="{{ route('pelamar.show', $user->id) }}">{{ $user->name }}</a>
                                                </td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->level }}</td>
                                                <td><b>{!! $stat_reg !!}</b></td>
                                                <td><b>{!! $stat_reg_time !!}</b></td>
                                                <td>{{ !is_null($user->units) ? $user->units->name : '-' }}</td>

                                                <td>-</td>
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
							<p>
							- Total User Pelamar = <b>{{ count($users) }} User</b><br>
							- Terdaftar/Submited = <b>{{ $stat_reg_terdaftar }} User</b><br>
							- Tidak Melengkapi = <b>{{ $stat_reg_tidak_melengkapi }} User</b><br>
							- Belum/Tidak Mendaftar = <b>{{ $stat_reg_belum_tidak_mendaftar }} User</b><br>
							</p>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable({
				"pageLength": 10
			});
        });
    </script>
@endpush
