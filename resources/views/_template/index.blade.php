<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#666666">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jobs Platform">
    <meta name="author" content="Luiz Alberto B. Mesquita">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>

<body style="background-color: white">

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Jobs Platform</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link
                                {{request()->routeIs('dashboard')? 'active':''}}" href="{{route('dashboard')}}">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link
                                {{request()->routeIs('employees*')? 'active':''}}" href="{{route('employees')}}">
                                <span data-feather="users"></span>
                                Employees
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link
                                {{request()->routeIs('departments*')? 'active':''}}" href="{{route('departments')}}">
                                <span data-feather="share-2"></span>
                                Departments
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link
                                {{request()->routeIs('jobs*')? 'active':''}}" href="{{route('jobs')}}">
                                <span data-feather="bar-chart-2"></span>
                                Jobs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link
                                {{request()->routeIs('job-history*')? 'active':''}}" href="{{route('job-history')}}">
                                <span data-feather="file"></span>
                                Job History
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 pt-2">
                @yield('content')
            </main>
        </div>
    </div>

    @yield('footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
    @yield('scripts')
</body>

</html>
