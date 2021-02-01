@extends('_template.index')

@section('content')
<h1>Departments</h1>

<form method="POST" action="{{route('departments')}}">
    @csrf
    <div class="form-group">
        <label for="name">Department name</label>
        <input type="text" value="{{old('name')}}" name="name" maxlength="30" class="form-control"
            aria-describedby="nameHelp">
        @if ($errors->has('name'))
        <small id="nameHelp" class="form-text text-danger">{{$errors->first('name')}} </small>
        @endif
    </div>
    <div class="form-group">
        <label for="manager_id">Manager</label>
        <select name="manager_id" id="manager_id" class="form-control">
            <option value="">Select one</option>
            @foreach($employees as $e)
            <option {{old('manager_id') == $e->id ? 'selected': '' }} value="{{$e->id}}">{{$e->first_name}}
                {{$e->last_name}}</option>
            @endForeach
        </select>
        @if ($errors->has('manager_id'))
        <small id="managerHelp" class="form-text text-danger">{{$errors->first('manager_id')}} </small>
        @endif
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{$error}} <br>
        @endforeach
    </div>
    @endif

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('departments.list')}}" class="btn btn-secondary">
        <i data-feather="list"></i> List all
    </a>
</form>


@endsection
