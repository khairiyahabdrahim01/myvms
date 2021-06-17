@extends('layout.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Role</h2>
        </div>
        <div class="pull-right">
            <a href="{{ route('roles.index' ) }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $role->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permission:</strong>
            <br/>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label for="name" class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif            
        </div>
    </div>
</div>
@endsection