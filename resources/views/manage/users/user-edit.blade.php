@extends('layouts.app')

@section('title', 'Manage')
@section('content-title', 'Ubah')

@push('custom-css')
@endpush

@section('breadcrumbs')
    {{ Breadcrumbs::render('user.edit', $user) }}
@endsection

@section('content')
    {{-- {{ dd($faculties) }} --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Ubah User') }}</h3>

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
                            {{-- <form action="{{ route('user.update', $user->id) . '?level=' . request()->get('level') }}" > --}}

                            {!! Form::model($user, ['method' => 'PUT', 'route' => ['user.update', $user->id]]) !!}

                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" value="{{ $user->username }}" disabled id="username"
                                    class="form-control form-control-sm">
                                <small id="username" class="form-text text-muted">Username tidak dapat di ganti</small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="name" value="{{ $user->name }}"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Level</label>

                                <select class="form-control form-control-sm" name="level">
                                    <option selected value=''>Pilih</option>
                                    <option {{ $user->level == 'user' ? 'selected' : '' }} value="user">
                                        User</option>
                                        <option {{ $user->level == 'pelamar' ? 'selected' : '' }} value="pelamar">Pelamar
                                        </option>

                                        @if (Auth::user()->isDeveloper())
                                            <option {{ $user->level == 'developer' ? 'selected' : '' }} value="developer">Developer
                                            </option>
                                        @endif

                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" value="{{ $user->email }}"
                                    class="form-control form-control-sm">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Unit</label>
                                <select class="form-control" name="id_unit">
                                    <option value>- Pilih -</option>
                                    @foreach ($units as $key => $unitName)
                                        {{-- {{print_r($userRole)}} --}}
                                        <option value="{{ $key }}"
                                            {{ $unitName == ($user->units->name ?? null) ? 'selected' : '' }}>
                                            {{ $unitName }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Reset Password</label>
                                <div class="form-check">
                                    <input type="checkbox" name="password" value="doreset" id="password"
                                        class="form-check-input">
                                    <label class="form-check-label" for="password">Reset Password</label>
                                    <small id="password" class="form-text text-muted">Centang untuk reset password menjadi
                                        username kembali, yaitu : <b> {{ $user->username }}</b></small>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Role (Jabatan)</label>

                                {{-- {{dd($roles)}} --}}
                                {{ Form::select('roles[]', $roles, null, ['id' => 'roles[]', 'class' => 'select2', 'data-placeholder' => 'Pilih Role', 'multiple' => 'multiple', 'style' => 'width: 100%;']) }}
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="submit" value="Update" class="btn btn-primary">
                            </div>
                            {{-- </form> --}}
                            {{ Form::close() }}
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
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2({
                theme: 'bootstrap4'
            });

        });
    </script>
@endpush
