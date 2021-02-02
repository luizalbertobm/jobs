@extends('_template.index')

@section('content')
<a href="{{route('jobs.create')}}" class="btn btn-primary float-right">
    <i data-feather="plus"></i> Create new
</a>
<h1>Jobs</h1>

@include('_template.alert')

<table class="table table-striped table-sm table-bordered">
    <thead class="">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Min. Salary</th>
            <th>Max. Salary</th>
            <th class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->min_salary}}</td>
            <td>{{$item->max_salary}}</td>
            <td class="text-right">
                <a class="btn btn-sm btn-secondary" href="{{route('jobs.edit', ['job' => $item->id])}}"><i data-feather="edit"></i></a>
                <form action="{{ route('jobs.destroy', $item->id) }}" class="float-right ml-1" method="post">
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

{{$items->links()}}
Showing {{$items->firstItem()}} to {{$items->lastItem()}} out of {{$items->total()}}
@endsection
