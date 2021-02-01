@extends('_template.index')

@section('content')
<h1>Jobs</h1>

<form method="POST" action="{{route('jobs')}}">
    @if (isset($job->id))
    @method('PUT')
    <input type="hidden" name="id" value="{{$job->id}}">
    @endif

    @csrf
    <div class="form-group">
        <label for="title">Job title</label>
        <input type="text" value="{{$job->title ?? old('title')}}" name="title" maxlength="30" class="form-control"
            aria-describedby="titleHelp">
        @if ($errors->has('title'))
        <small id="titleHelp" class="form-text text-danger">{{$errors->first('title')}} </small>
        @endif
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="min_salary">Min. Salary</label>
                <input type="text" value="{{$job->min_salary ?? old('min_salary')}}" name="min_salary" maxlength="30"
                    class="form-control">
                @if ($errors->has('min_salary'))
                <small class="form-text text-danger">{{$errors->first('min_salary')}} </small>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="max_salary">Max. Salary</label>
                <input type="text" value="{{$job->max_salary ?? old('max_salary')}}" name="max_salary" maxlength="30"
                    class="form-control">
                @if ($errors->has('max_salary'))
                <small class="form-text text-danger">{{$errors->first('max_salary')}} </small>
                @endif
            </div>
        </div>
    </div>



    @if ($errors->any())
    <div class="alert alert-danger">
        Check the form errors
    </div>
    @endif

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('jobs.list')}}" class="btn btn-secondary">
        <i data-feather="list"></i> List all
    </a>
</form>


@endsection
