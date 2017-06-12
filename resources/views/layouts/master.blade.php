<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.min.css">
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
        <div id="app">

            @include('layouts.header')

            <section class="section">
                <div class="container">
                    <router-view></router-view>
                </div>
                <!-- /.container -->
            </section>
            <!-- /.section -->

        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
