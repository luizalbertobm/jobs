@extends('_template.index')

@section('content')
<h1>Employees</h1>

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
        @foreach($entities as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->first_name}}</td>
            <td>{{$item->last_name}}</td>
            <td class="text-right">
                <a class="btn btn-sm btn-secondary" href="{{route('employees.edit', ['employee' => $item->id])}}"><i data-feather="edit"></i></a>
                <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"
                    href="{{route('employees.destroy', $item->id)}}">
                    <i data-feather="trash"></i>
                </a>
            </td>
        </tr>
        @endForeach
    </tbody>
</table>
<a href="{{route('employees.create')}}" class="btn btn-primary float-right">
    <i data-feather="plus"></i> Create a new
</a>
{{$entities->links()}}
Showing {{$entities->firstItem()}} - {{$entities->lastItem()}} from {{$entities->total()}}
@endsection
