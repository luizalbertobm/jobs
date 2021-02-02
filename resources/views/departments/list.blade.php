@extends('_template.index')

@section('content')
<a href="{{route('departments.create')}}" class="btn btn-primary float-right">
    <i data-feather="plus"></i> Create new
</a>
<h1>Departments</h1>

@include('_template.alert')

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
                <a class="btn btn-sm btn-secondary" href="{{route('departments.edit', ['department' => $d->id])}}"><i data-feather="edit"></i></a>
                <form action="{{ route('departments.destroy', $d->id) }}" class="float-right ml-1" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure?')">
                        <i data-feather="trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endForeach
    </tbody>
</table>
{{$departments->links()}}
Showing {{$departments->firstItem()}} to {{$departments->lastItem()}} out of {{$departments->total()}}
@endsection
