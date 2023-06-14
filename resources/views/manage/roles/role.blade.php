@extends('layouts.app')

@section('title', 'Manage')
@section('content-title', 'Data Role')

@push('custom-css')
@endpush

@section('breadcrumbs')
    {{ Breadcrumbs::render('role.index') }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 margin-tb">
                                <div class="pull-left">
                                    <h2>Role Management</h2>
                                </div>
                                <div class="pull-right">
                                        <a class="btn btn-success" href="{{ route('role.create') }}"> Create New Role</a>
                                </div>
                            </div>
                        </div>

<br>
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Permissions</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        @if (count($role->getPermissionNames()) > 0)
                                            @foreach ($role->getPermissionNames() as $PName)
                                                <span class="badge bg-success">{{ $PName }}</span>
                                            @endforeach
                                        @else
                                            <span class="badge bg-default"><i>No Permissions</i></span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('role.show', $role->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('role.edit', $role->id) }}">Edit</a>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['role.destroy', $role->id], 'style' => 'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>


                        <br>
                        {!! $roles->render() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-js')
@endpush
