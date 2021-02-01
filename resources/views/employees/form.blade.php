@extends('_template.index')

@section('content')
<h1>Employees</h1>

<form method="POST" action="{{route('employees')}}">
    @if (isset($employee->id))
    @method('PUT')
    <input type="hidden" name="id" value="{{$employee->id}}">
    @endif

    @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="first_name">First name</label>
                <input type="text" value="{{$employee->first_name ?? old('first_name')}}" name="first_name" maxlength="30" class="form-control"
                    aria-describedby="first_nameHelp">
                @if ($errors->has('first_name'))
                <small id="first_nameHelp" class="form-text text-danger">{{$errors->first('first_name')}} </small>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input type="text" value="{{$employee->last_name ?? old('last_name')}}" name="last_name" maxlength="30" class="form-control"
                    aria-describedby="last_nameHelp">
                @if ($errors->has('last_name'))
                <small id="last_nameHelp" class="form-text text-danger">{{$errors->first('last_name')}} </small>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" value="{{$employee->email ?? old('email')}}" name="email" maxlength="30" class="form-control"
                    aria-describedby="emailHelp">
                @if ($errors->has('email'))
                <small id="emailHelp" class="form-text text-danger">{{$errors->first('email')}} </small>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" value="{{$employee->phone ?? old('phone')}}" name="phone" maxlength="11" class="form-control"
                    aria-describedby="phoneHelp">
                @if ($errors->has('phone'))
                <small id="phoneHelp" class="form-text text-danger">{{$errors->first('phone')}} </small>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="hire_date">Hire date</label>
                <input type="date" value="{{$employee->hire_date ?? old('hire_date')}}" name="hire_date" maxlength="10" class="form-control"
                    aria-describedby="hire_dateHelp">
                @if ($errors->has('hire_date'))
                <small id="hire_dateHelp" class="form-text text-danger">{{$errors->first('hire_date')}} </small>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="number" value="{{$employee->salary ?? old('salary')}}" name="salary" maxlength="11" class="form-control"
                    aria-describedby="salaryHelp">
                @if ($errors->has('salary'))
                <small id="salaryHelp" class="form-text text-danger">{{$errors->first('salary')}} </small>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="commission">Commission</label>
                <input type="number" value="{{$employee->commission ?? old('commission')}}" name="commission" maxlength="11" class="form-control"
                    aria-describedby="commissionHelp">
                @if ($errors->has('commission'))
                <small id="commissionHelp" class="form-text text-danger">{{$errors->first('commission')}} </small>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="job_id">Job</label>
                <select name="job_id" id="job_id" class="form-control">
                    <option value="">- Select one -</option>
                    @foreach($jobs ?? [] as $job)
                    <option {{(isset($employee->job_id) && $employee->job_id == $job->id)
                        || old('job_id') == $job->id ? 'selected': '' }} value="{{$job->id}}">{{$job->title}}</option>
                    @endForeach
                </select>
                @if ($errors->has('job_id'))
                <small id="job_idHelp" class="form-text text-danger">{{$errors->first('job_id')}} </small>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="manager_id">Manager</label>
                <select name="manager_id" id="manager_id" class="form-control">
                    <option value="">- Select one -</option>
                    @foreach($managers as $manager)
                    <option {{(isset($employee->manager_id) && $employee->manager_id == $manager->id)
                        || old('manager_id') == $manager->id ? 'selected': '' }} value="{{$manager->id}}">{{$manager->getFullName()}}</option>
                    @endForeach
                </select>
                @if ($errors->has('manager_id'))
                <small id="manager_idHelp" class="form-text text-danger">{{$errors->first('manager_id')}} </small>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="department_id">Department</label>
                <select name="department_id" id="department_id" class="form-control">
                    <option value="">- Select one -</option>
                    @foreach($departments as $department)
                    <option {{(isset($employee->department_id) && $employee->department_id == $department->id)
                        || old('department_id') == $department->id ? 'selected': '' }} value="{{$department->id}}">{{$department->name}}</option>
                    @endForeach
                </select>
                @if ($errors->has('department_id'))
                <small id="department_idHelp" class="form-text text-danger">{{$errors->first('department_id')}} </small>
                @endif
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        Check the form errors
        @foreach ($errors as $error)
        {{$error}}
        @endforeach
    </div>
    @endif

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('employees.list')}}" class="btn btn-secondary">
        <i data-feather="list"></i> List all
    </a>
</form>


@endsection
