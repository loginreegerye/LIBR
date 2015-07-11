<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>L!BR | @yield('page_title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('/') }}">L!BR</a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ URL::to('/users') }}">ALL USERS</a></li>
                        <li><a href="{{ URL::to('/books') }}">ALL BOOKS</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ URL::to('/') }}">HOME</a></li>
                        <li><a href="{{ URL::to('/user/create') }}">CREATE USER</a></li>
                        <li><a href="{{ URL::to('/book/create') }}">CREATE BOOK</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <hr>
        <div class="content">
            @yield('content')
        </div>
        <hr>
        <footer class="footer text-center">
            <p>L!BR V.0.5 BETA</p>
            <p>ALL RIGHTS RESERVED &amp; COPYRIGHT &copy; 2015. CREATED BY _CHERNIUK</p>
        </footer>
    </div>
</body>
</html>
