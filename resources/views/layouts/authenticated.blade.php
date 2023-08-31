<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <style type="text/css">
            #header {
                padding-top: 20px;
                padding-bottom: 20px;
                text-align: center;
                background-color: gray;
                font-weight: bold;
            }

            #menu {
                padding-top: 5px;
                padding-bottom: 5px;
                background-color: #534545;
            }

            #menu a {
                padding-left: 20px;
                padding-right: 20px;
                border-left: 1px solid black;
            }
        </style>
        @yield('style')
    </head>
    <body>
        <div id="header">Task Management System</div>
        <div id="menu">
            <a href="/employees">Employees</a>
            <a href="/employees">Tasks</a>
        </div>
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>