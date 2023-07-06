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
                        <form class="mb-5" action="{{ route('pelamar.datatable') }}" method="GET">
                            <h6>Filter Data</h6>
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <label class="form-label">Status Submit</label>
                                    <select id="status_sub" name="status_sub" class="select2 form-control">
                                        <option value="">Pilih Status Submit</option>
                                        <option value="dikirim">Terdaftar</option>
                                        <option value="update">Tidak Melengkapai</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Status Penerimaan</label>
                                    @php
                                        $status = DB::table('jenisformasis')->where('nama_jenis', 'Umum')->first();
                                        $data_form = json_decode($status->tahapan, true);
                                    @endphp
                                    <select id="status" name="status" class="select2 form-control">
                                        <option value="">Pilih Status Penempatan</option>
                                        @foreach ($data_form as $item)
                                            <option value="{{ $item['subject'] }}">{{ $item['subject'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Penempatan</label>
                                    @php
                                        $periode = DB::table('periode_penerimaans')->get()
                                    @endphp
                                    <select id="penempatan" name="penempatan" class="select2 form-control">
                                        <option value="">Pilih Penempatan</option>
                                        @foreach ($periode as $item)
                                            <option value="{{ $item->kode }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Pendidikan</label>
                                    @php
                                        $pendidikan = DB::table('pendidikans')->get()
                                    @endphp
                                    <select id="pendidikan" name="pendidikan" class="select2 form-control">
                                        <option value="">Pilih Pendidikan</option>
                                        @foreach ($pendidikan as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                              
                              <div class="col-md-3">
                                <div class="pt-4">
                                  <button type="submit" id="cari" class="btn btn-primary" style="margin-top: 7px">Cari</button>
                                </div>
                              </div>
                            </div>
                          </form>

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
                                        <th scope="col">Pendidikan</th>
                                        <th scope="col">Status Submit</th>
                                        <th scope="col">Waktu Submit</th>
                                        <th scope="col">Penempatan</th>
                                        <th scope="col">Status</th>
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
                                                    if ($user->status_reg == 'dikirim') {
                                                        $stat_reg = '<i style="color:green">Terdaftar</i>';
                                                        $stat_reg_time = $user->registrasi->waktu_dikirim;
                                                        $stat_reg_terdaftar = $stat_reg_terdaftar + 1;
                                                    } elseif ($user->status_reg == 'update') {
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
                                                <td>{{ $user->pendidikan }}</td>
                                                <td><b>{!! $stat_reg !!}</b></td>
                                                <td><b>{!! $stat_reg_time !!}</b></td>
                                                <td>{{ $user->penerimaan }}</td>
                                                {{-- <td>{{ !is_null($user->units) ? $user->units->name : '-' }}</td> --}}
                                                @if($user->status == "Tidak Lulus")
                                                    <td style="background-color: red;color: white">{{$user->status}}</td>
                                                @elseif($user->status == "Lulus")
                                                    <td style="background-color: green;color: white">{{$user->status}}</td>
                                                @else
                                                    <td style="background-color: blue;color: white">{{$user->status}}</td>
                                                @endif
                                                <td>-</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Tidak Ada Data</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            {{-- <td colspan="10" style="text-align:center; background-color: rgb(223, 223, 223); ">Tidak ada data</td> --}}
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
							<p>
							- Total User Pelamar = <b>{{ count($users) }} User</b><br>
							- Terdaftar/Submited = <b>{{ $stat_reg_terdaftar ?? 0 }} User</b><br>
							- Tidak Melengkapi = <b>{{ $stat_reg_tidak_melengkapi ?? 0 }} User</b><br>
							- Belum/Tidak Mendaftar = <b>{{ $stat_reg_belum_tidak_mendaftar ?? 0 }} User</b><br>
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

            $('#status').val('{{ request()->get('status') }}')
            $('#status_sub').val('{{ request()->get('status_sub') }}')
            $('#penempatan').val('{{ request()->get('penempatan') }}')
            $('#pendidikan').val('{{ request()->get('pendidikan') }}')
        });
    </script>
@endpush
