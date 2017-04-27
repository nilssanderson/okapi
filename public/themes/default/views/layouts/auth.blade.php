<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') &mdash; Laravel Boilerplate</title>

        <link rel="stylesheet" href="{{ theme('css/backend.css') }}">

    </head>

    <body>
        <div class="header">
            <div class="container">
                <div class="row vertical-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">
                                    @yield('heading')
                                </h2>
                            </div>
                            <div class="panel-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>

        <div class="content">
            @yield('content')
        </div>
    </body>
</html>