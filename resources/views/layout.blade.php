<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
    @yield('style')
    @livewireStyles
</head>

<body>
    <div class="container">
        <ul class="nav nav-pills justify-content-center mt-3">
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('task') ? 'active' : '' }}" href="{{ route('task') }}">Task</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('category') ? 'active' : '' }}"
                    href="{{ route('category') }}">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::routeIs('sub_category') ? 'active' : '' }}"
                    href="{{ route('sub_category') }}">Sub Category</a>
            </li>
        </ul>
    </div>
    <div class="wrapper mt-3">
        <div class="page-wrapper">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>
