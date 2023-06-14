@extends('layouts.pelamar')

@section('title', 'Dashboard')
@section('content-title', 'Dashboard')

@push('custom-css')
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

                    <form action="{{ route('reg-biodata-store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input type="text" class="form-control" name="nik"
                                            value="{{ old('nik') ? old('nik') : $biodata->nik }}" placeholder="NIK">
                                        @error('nik')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap (tanpa gelar)</label>
                                        <input type="text" class="form-control" name="nama"
                                            value="{{ old('nama') ? old('nama') : $biodata->nama }}"
                                            placeholder="Nama Lengkap (tanpa gelar)">
                                        @error('nama')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Gelar Depan Ijazah</label>
                                        <input type="text" class="form-control" name="gelardepan"
                                            value="{{ old('gelardepan') ? old('gelardepan') : $biodata->gelardepan }}"
                                            placeholder="Gelar Depan">
                                        @error('gelardepan')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Gelar Belakang Ijazah</label>
                                        <input type="text" class="form-control" name="gelarbelakang"
                                            value="{{ old('gelarbelakang') ? old('gelarbelakang') : $biodata->gelarbelakang }}"
                                            placeholder="Gelar Belakang">
                                        @error('gelarbelakang')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tempatlahir"
                                            value="{{ old('tempatlahir') ? old('tempatlahir') : $biodata->tempatlahir }}"
                                            placeholder="Tempat Lahir (sesuai KTP)">
                                        @error('tempatlahir')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tgllahir"
                                            value="{{ old('tgllahir') ? old('tgllahir') : $biodata->tgllahir }}"
                                            placeholder="">
                                        @error('tgllahir')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jk">
                                            @php
                                                $jk = old('jk') ? old('jk') : $biodata->jk;
                                            @endphp
                                            <option selected="selected" value=""> Pilih</option>
                                            <option {{ $jk == 'L' ? 'selected' : '' }} value="L">Laki-Laki</option>
                                            <option {{ $jk == 'P' ? 'selected' : '' }} value="P">Perempuan</option>
                                        </select>
                                        @error('jk')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        {!! Form::textarea('alamat', $biodata->alamat, [
                                            'rows' => '3',
                                            'class' => 'form-control',
                                            'placeholder' =>
                                                'Ex: Perumahan Griya Mandala, Jl. Kehormatan Blok A No.19 Rt.002 Rw.08 Duri Kepa, Kebon Jeruk, Jakarta Barat, Indonesia, 11510',
                                        ]) !!}
                                        @error('alamat')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Provinsi Domisili saat ini</label>
                                        <select class="form-control select2" style="width: 100%;" name="idprovinsi"
                                            id="idprovinsi">
                                            @php
                                                $idprovinsi = old('idprovinsi') ? old('idprovinsi') : $biodata->idprovinsi;
                                            @endphp
                                            <option selected="selected" value=""> Pilih</option>
                                            @foreach ($wilayah_provinsi as $val)
                                                <option {{ $idprovinsi == $val->id ? 'selected' : '' }} value="{{ $val->id }}">{{ $val->nama }}
                                                </option>
                                            @endforeach

                                        </select>
                                        @error('idprovinsi')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Kota / Kab. Domisili saat ini</label>
                                        <select class="form-control select2" style="width: 100%;" name="idkota"
                                            id="idkota">
                                            @php
                                                $idkota = old('idkota') ? old('idkota') : $biodata->idkota;
                                            @endphp
                                            <option selected="selected" value="">Pilih Provinsi Terlebih Dahulu</option>
                                            @if (!empty($idkota))
                                                 @foreach ($wilayah_kota as $val)
                                                <option {{ $idkota == $val->id ? 'selected' : '' }} value="{{ $val->id }}">{{ $val->nama }}
                                                </option>
                                            @endforeach
                                            @endif

                                        </select>
                                        @error('idkota')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Nomor HP (Aktif)</label>
                                        <input type="text" class="form-control" name="hp"
                                            value="{{ old('hp') ? old('hp') : $biodata->hp }}"
                                            placeholder="No. HP">
                                        @error('hp')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>IPK</label>
                                        <input type="text" class="form-control" name="ipk"
                                            value="{{ old('ipk') ? old('ipk') : $biodata->ipk }}" placeholder="IPK">
                                        @error('ipk')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Perguruan Tinggi</label>
                                        <input type="text" class="form-control" name="namapt"
                                            value="{{ old('namapt') ? old('namapt') : $biodata->namapt }}"
                                            placeholder="">
                                        @error('namapt')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Program Studi</label>
                                        <select class="form-control select2" style="width: 100%;" name="idprodi"
                                            id="idprodi">
                                            @php
                                                $idprodi = old('idprodi') ? old('idprodi') : $biodata->idprodi;
                                            @endphp
                                            <option selected="selected" value="null"> Pilih</option>
                                            @foreach ($pendidikan as $val)
                                                <option {{ $idprodi == $val->id ? 'selected' : '' }} value="{{ $val->id }}">{{ $val->name }}</option>
                                            @endforeach

                                        </select>
                                        @error('idprodi')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label>No. Ijazah</label>
                                        <input type="text" class="form-control" name="noijazah"
                                            value="{{ old('noijazah') ? old('noijazah') : $biodata->noijazah }}"
                                            placeholder="">
                                        @error('noijazah')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Ijazah</label>
                                        <input type="date" class="form-control" name="tglijazah"
                                            value="{{ old('tglijazah') ? old('tglijazah') : $biodata->tglijazah }}"
                                            placeholder="....">
                                        @error('tglijazah')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun Ijazah</label>
                                        <input type="text" class="form-control" name="tahunijazah"
                                            value="{{ old('tahunijazah') ? old('tahunijazah') : $biodata->tahunijazah }}"
                                            placeholder="">
                                        @error('tahunijazah')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary" id="submit" value="Save & Next">

                    </form>



                    {{-- <a href="{{ route('reg-formasi') }}" class="btn btn-primary">Next</a> --}}

                </div>

            </div>
        </div>
    </div>
@endsection

@push('custom-js')
    <script type="text/javascript">
        $('#idprovinsi').change(function() {
            var idprovinsi = $(this).val();
            $.ajax({
                type: 'GET',
                url: '{{ route('ajax-kota') }}',
                data: 'idprovinsi=' + idprovinsi,
                success: function(response) {
                    $('#idkota').html(response);
                }
            });
        });


        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2({
                theme: 'bootstrap4'
            });

        });
    </script>
@endpush
