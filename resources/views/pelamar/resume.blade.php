@extends('layouts.pelamar')

@section('title', 'Dashboard')
@section('content-title', 'Dashboard')

@push('custom-css')
    <style>
        input[type=checkbox] {
            transform: scale(2);
        }
    </style>
@endpush


@section('content')

    <div class="mb-5 p-4 bg-white shadow-sm">
        <h3>Registration</h3>
        <div id="stepper2" class="bs-stepper">
            <div class="bs-stepper-header">
                @include('pelamar/steper')
            </div>

            <div class="bs-stepper-content">
                <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane active dstepper-block"
                    aria-labelledby="stepper2trigger1">
                    <form action="{{ route('reg-resume-store') }}" method="POST">
                        @csrf
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" colspan="2">Resume</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="{{ url($dataResume['file']['PAS POTO']) }}"
                                            alt="Snow" style="width:150px"></td>
                                    <td><input type="hidden" value="0" name="validasiConfirm[]"><input type="checkbox" value="1" name="validasi[]"></td>
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

                                @foreach ($dataResume['formasi'] as $key => $value)
                                    <tr>
                                        <th scope="col">{{ $key }}</th>
                                        <td>:</td>
                                        <td>{{ $value }}</td>
                                        <td><input type="hidden" value="0" name="validasiConfirm[]"><input type="checkbox" value="1" name="validasi[]"></td>
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

                                @foreach ($dataResume['biodata'] as $key => $value)
                                    <tr>
                                        <th scope="col">{{ $key }}</th>
                                        <td>:</td>
                                        <td>{{ $value }}</td>
                                        <td><input type="hidden" value="0" name="validasiConfirm[]"><input type="checkbox" value="1" name="validasi[]"></td>
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

                                @foreach ($dataResume['file'] as $key => $value)
                                    <tr>
                                        <th scope="col">{{ $key }}</th>
                                        <td>:</td>
                                        <td> <a href="#" class='btn btn-info btn-md'
                                                onclick="window.open('{{ url($value) }}', 'parent', 'location=yes,height=570,width=520,scrollbars=yes,status=yes,menubar=no'); return false;">
                                                Lihat
                                            </a></td>
                                        <td><input type="hidden" value="0" name="validasiConfirm[]"><input type="checkbox" value="1" name="validasi[]"></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                        <a href="{{ route('reg-upload-berkas') }}" class="btn btn-primary">Previous</a>
                        <input type="submit" class="btn btn-primary" id="submit" value="Kirim">
                    </form>



                </div>

            </div>
        </div>
    </div>
@endsection

@push('custom-js')
@endpush
