@extends('layouts.pelamar')

@section('title', 'Dashboard')
@section('content-title', 'Dashboard')

@push('custom-css')
@endpush


@section('content')

    @if (count($errors) > 0)
        {{ z_alert('danger', false, $errors->all()) }}
    @endif
    <div class="mb-5 p-4 bg-white shadow-sm">
        <h3>Registration</h3>
        <div id="stepper2" class="bs-stepper">
            <div class="bs-stepper-header">

                @include('pelamar/steper')

            </div>

            <div class="bs-stepper-content">
                <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane active dstepper-block"
                    aria-labelledby="stepper2trigger1">
                    <form action="{{ route('reg-formasi-store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Pilih Formasi</label>
                            <select class="form-control select2" style="width: 100%;" name="idformasi">
                                <option selected="selected">Pilih</option>
                                @foreach ($formasis as $val)
                                    <option value="{{ $val->id }}" {{ $val->id == $registrasi->id_formasi ? 'selected':'' }}>{{ $val->jabatan }} - {{ $val->lokasi_penempatan }}
                                        ({{ $val->kebutuhan }})
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <a href="{{ route('reg-biodata') }}" class="btn btn-primary">Previous</a>
                        <input type="submit" class="btn btn-primary" id="submit" value="Save & Next">
                    </form>

                    {{-- <a href="{{ route('reg-upload-berkas') }}" class="btn btn-primary">Next</a> --}}




                </div>

            </div>
        </div>
    </div>
@endsection

@push('custom-js')
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2({
                theme: 'bootstrap4'
            });

        });
    </script>
@endpush
