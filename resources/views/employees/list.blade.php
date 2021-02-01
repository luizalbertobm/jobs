@extends('_template.index')

@section('content')
<h1>Employees</h1>

<table class="table table-striped table-sm table-bordered">
    <thead class="">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Job Title</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($entities as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->getFullName()}}</td>
            <td>{{$item->getJob()->title}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phone}}</td>
            <td class="text-right">
                <a class="btn btn-sm btn-secondary" href="{{route('employees.edit', ['employee' => $item->id])}}"><i
                        data-feather="edit"></i></a>
                <form action="{{ route('employees.destroy', $item->id) }}" class="float-right ml-1" method="post">
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
<a href="{{route('employees.create')}}" class="btn btn-primary float-right">
    <i data-feather="plus"></i> Create a new
</a>
{{$entities->links()}}
Showing {{$entities->firstItem()}} - {{$entities->lastItem()}} from {{$entities->total()}}
@endsection
