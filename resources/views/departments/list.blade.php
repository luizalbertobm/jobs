@extends('_template.index')

@section('content')
<h1>Departments</h1>
<table class="table table-striped table-sm table-bordered">
    <thead class="">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Manager</th>
            <th class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($departments as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->name}}</td>
            <td>{{$d->getManager()->getFullName()}}</td>
            <td class="text-right">
                <a class="btn btn-sm btn-secondary" href="{{route('departments')}}"><i data-feather="edit"></i></a>
                <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"
                    href="{{route('departments.destroy', $d->id)}}">
                    <i data-feather="trash"></i>
                </a>
            </td>
        </tr>
        @endForeach
    </tbody>
</table>
<a href="{{route('departments.create')}}" class="btn btn-primary float-right">
    <i data-feather="plus"></i> Create a new
</a>
{{$departments->links()}}
Showing {{$departments->firstItem()}} - {{$departments->lastItem()}} from {{$departments->total()}}
@endsection
