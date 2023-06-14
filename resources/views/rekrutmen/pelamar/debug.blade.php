@extends('layouts.app')

@section('title', 'Manage')
@section('content-title', 'Detail User Pelamar')

@push('custom-css')
@endpush

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Detail User Pelamar Debug') }}</h3>

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
						<br>
						<br>



						<table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" colspan="2">Resume</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
									@if(!empty($dataUserPelamar['file']['PAS POTO']))
									<img src="{{ url($dataUserPelamar['file']['PAS POTO']) }}"
                                            alt="Snow" style="width:150px">
									@else
									<i>Foto Belum Diupload</i>
									@endif
											</td>
                                </tr>

                            </tbody>
                        </table>

                        &nbsp;
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" colspan="4">Formasi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($dataUserPelamar['formasi'] as $key => $value)
                                    <tr>
                                        <th scope="col">{{ $key }}</th>
                                        <td>:</td>
                                        <td>{{ $value }}</td>
                                        </tr>
                                @endforeach

                            </tbody>
                        </table>
                        &nbsp;
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" colspan="4">Biodata</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($dataUserPelamar['biodata'] as $key => $value)
                                    <tr>
                                        <th scope="col">{{ $key }}</th>
                                        <td>:</td>
                                        <td>{{ $value }}</td>
                                        </tr>
                                @endforeach

                            </tbody>
                        </table>
                        &nbsp;
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" colspan="4">File Dokumen</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($dataUserPelamar['file'] as $key => $value)
                                    <tr>
                                        <th scope="col">{{ $key }}</th>
                                        <td>:</td>
                                        <td>
										@if(!empty($value))
										<a href="#" class='btn btn-info btn-md'
                                                onclick="window.open('{{ url($value) }}', 'parent', 'location=yes,height=570,width=520,scrollbars=yes,status=yes,menubar=no'); return false;">
                                                Lihat
                                            </a>
									@else
									<i>Berkas Belum Diupload</i>
									@endif

										</td>
                                       </tr>
                                @endforeach

                            </tbody>
                        </table>








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
