@extends('layouts.app')

@section('title', 'Manage')
@section('content-title', 'Tambah')

@push('custom-css')
@endpush

@section('breadcrumbs')
    {{ Breadcrumbs::render('user.create') }}
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Tambah User') }}</h3>

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
                        @if (count($errors) > 0)
                            {{ z_alert('danger', false, $errors->all()) }}
                        @endif
                        <div class="col-md-6">
                            <form action="{{ route('user.store') . '?level=' . request()->get('level') }}" method="POST">

                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" id="username" name="username" value="{{ old('username') }}"
                                        onInput="edValueKeyPress()" class="form-control form-control-sm">
                                    <small id="username" class="form-text text-muted">Disarankan username adalah
                                        <b>NIP/NIK/NIM/NO PASPORT/NO SIM</b>.</small>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="form-control form-control-sm">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Level</label>
                                    <select class="form-control form-control-sm" name="level">
                                        <option selected value=''>Pilih</option>
                                        <option {{ old('level') == 'user' ? 'selected' : '' }} value="user">User
                                        </option>
                                        <option {{ old('level') == 'pelamar' ? 'selected' : '' }} value="pelamar">Pelamar
                                        </option>
                                        @if (Auth::user()->isDeveloper())
                                            <option {{ old('level') == 'developer' ? 'selected' : '' }} value="developer">Developer
                                            </option>
                                        @endif

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control form-control-sm">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Unit</label>
                                    <select class="form-control" name="id_unit">
                                        <option value>- Pilih -</option>
                                        @foreach ($units as $key => $unitName)
                                            {{-- {{print_r($userRole)}} --}}
                                            <option value="{{ $key }}"
                                                {{ $key == old('id_unit') ? 'selected' : '' }}>{{ $unitName }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <span class="form-text text-danger">SILAHKAN CATAT !! <br>Password user baru sama dengan
                                        Username : <b id="passwordGetFromUsername"></b></span>

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Role (Jabatan)</label>

                                    {{-- {{dd($roles)}} --}}

                                    {{ Form::select('roles[]', $roles, null, ['id' => 'roles[]', 'class' => 'select2', 'data-placeholder' => 'Pilih Role', 'multiple' => 'multiple', 'style' => 'width: 100%;']) }}

                                </div>
                                <div class="mb-3">
                                    <input type="submit" name="submit" value="Save" class="btn btn-primary">
                                </div>
                            </form>
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
    <script>
        function edValueKeyPress() {
            // var edValue = document.getElementById("username");
            // var s = edValue.value;

            // var lblValue = document.getElementById("passwordGetFromUsername");
            // lblValue.innerText = s;
            const value = event.target.value;
            document.getElementById("passwordGetFromUsername").innerText = value;
        }

        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2({
                theme: 'bootstrap4'
            });

        });
    </script>
@endpush
