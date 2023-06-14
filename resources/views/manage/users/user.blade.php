@extends('layouts.app')

@section('title', 'Manage Users')
@section('content-title', 'Data User')

@push('custom-css')
@endpush

@section('breadcrumbs')
    {{ Breadcrumbs::render('user.index') }}
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List User</h3>

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
                        <p><a href="{{ route('user.create') }}" class="btn btn-info btn-xs">Tambah User</a></p>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Verify</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Unit</th>
                                        <th scope="col">Roles</th>
                                        <th scope="col">Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($users->isNotEmpty())
                                        @foreach ($users as $key => $user)
                                            <tr>
                                                <th scope="row">{{ $key + 1 }}</th>
                                                <td>{{ $user->id }}</td>
                                                <td><a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a>
                                                </td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->email_verified_at }}</td>
                                                <td>{{ $user->level }}</td>
                                                <td>{{ !is_null($user->units) ? $user->units->name : '-' }}</td>
                                                <td>

                                                    @if (count($user->roles) > 0)
                                                        @foreach ($user->roles as $roleName)
                                                            <span class="badge bg-primary">{{ $roleName->name }}</span>
                                                            {{-- {{dd($user)}} --}}
                                                        @endforeach
                                                    @else
                                                        <span class="badge bg-default"><i>No Role</i></span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('user.edit', $user['id']) }}"
                                                        class="btn btn-warning btn-xs"> <i
                                                            class="far fa-edit icon-size"></i></a>

                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id], 'style' => 'display:inline']) !!}
                                                    {!! Form::hidden('level', $user->level) !!}
                                                    {{ Form::button('<i class="far fa-trash-alt icon-size"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs show_confirm']) }}
                                                    {!! Form::close() !!}
                                                </td>
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
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: 'Are you sure you want to delete this record?',
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endpush
