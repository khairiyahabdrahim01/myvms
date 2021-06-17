@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <br>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}">Create New User</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<br>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Roles</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($data as $key =>$user)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <label for="names" class="badge badge-success">{{ $v }}</label>
                @endforeach
            @endif
        </td>
        <td>
            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">Show</a>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>

{!! $data->render() !!}

<p class="text-center text-primary"><small>Visitor Management System</small></p>

@endsection