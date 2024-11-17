<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashboard.css">
    <title>Dashboard Pages</title>
</head>
<body>
    <div class="container">
        <h1>Management System</h1>
        <div class="content1">
            <div class="sidebar">
                @include('container.sidebar.sidebar')           
            </div>
            <div class="cont">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>