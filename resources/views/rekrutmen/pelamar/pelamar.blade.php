@extends('layouts.app')

@section('title', 'Manage Pelamar')
@section('content-title', 'Data Pelamar')

@push('custom-css')
@endpush

@section('breadcrumbs')

@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List Pendaftaran</h3>
                        <br><br>
                        <form id="id-form-control" method="POST">
                            @csrf
                            <div class='grid-status'>
                            <select class="form-control" name=status>
                                <option selected="selected" disabled hidden>-- Selected Release --</option>
                                @foreach($test as $i)
                                <option value="{{$i->jabatan}}">{{$i->jabatan}}</option>
                                @endforeach
                            </select>
                            <div></div>
                            <input class="btn btn-primary" type="submit" name="submit" value="Apply">
                            </div>  
                        </form>

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
                            <table class="table">
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
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($users->isNotEmpty())
                                        @foreach ($users as $key => $user)
                                            @php

                                                if (!is_null($user->registrasi)) {
                                                    if ($user->registrasi->status == 'dikirim') {
                                                        $stat_reg = '<i style="color:green">Terdaftar</i>';
                                                        $stat_reg_time = $user->registrasi->waktu_dikirim;
                                                    } elseif ($user->registrasi->status == 'update') {
                                                        $stat_reg = '<i style="color:orange">Tidak Melengkapi</i>';
                                                        $stat_reg_time = '-';
                                                    } else {
                                                        $stat_reg = 'unknown';
                                                        $stat_reg_time = '-';
                                                    }
                                                } else {
                                                    $stat_reg = '<i style="color:red">Belum/Tidak Mendaftar</i>';
                                                        $stat_reg_time = '-';
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
                                                @if($user->status == "Tidak Lulus")
                                                <td style="background-color: red;color: white">{{$user->status}}</td>
                                                @elseif($user->status == "Lulus")
                                                <td style="background-color: green;color: white">{{$user->status}}</td>
                                                @else
                                                <td style="background-color: blue;color: white">{{$user->status}}</td>
                                                @endif
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
                            {!! $users->appends(Request::all())->links() !!}
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
