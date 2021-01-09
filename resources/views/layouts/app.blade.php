<!DOCTYPE html>
<html lang="en">
<head>
<title>Toshokan | @yield('title')</title>
<link href="{{ url('/css/apps.css') }}" rel="stylesheet">
</head>

<body>
    @section('sidebar')

        <h4 id="titleheader">Toshokan - A Simple Web Library</h4>
        <div class="menu">
            <ul>
                <li><a href="{{route('books.index')}}">Home</a></li>
                <li><a href="{{url('about')}}">About</a></li>
                <li><a href="{{route('books.create')}}">New Book</a></li>
            </ul>
        </div>
    <div class="container" id="contentpage">
        @yield('content')
    </div>

    <div id="footerpage">
        <b>Toshokan - A Simple Web Library</b><br>
        Version: 1.0<br>
        Created by: Carl Nera | <a href="https://github.com/carlnera1/carlnera_portfolio">Github</a></h5>        
    </div>

</body>

</html>