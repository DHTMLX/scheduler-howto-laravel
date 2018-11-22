<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Getting started with dhtmlxScheduler</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                flex-direction: column;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            h2 {
                margin-top:20px;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links.samples > a {
                font-size:16px;
                text-decoration: underline;
            }
            .links.samples{
                margin-bottom:50px;
                
            }

            .m-b-md {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    dhtmlxScheduler
                </div>

                <h2>Check out our samples:</h2>
                <div class="links samples">
                    <a href="{{ url('/scheduler') }}">Basic CRUD</a>
                    <a href="{{ url('/recurring_events') }}">Recurring events</a>
                </div>
                <h2>Useful links</h2>
                <div class="links useful-links">
                    <a href="https://docs.dhtmlx.com/scheduler">Guides</a>
                    <a href="https://github.com/DHTMLX/scheduler-howto-laravel">Github</a>
                    <a href="https://forum.dhtmlx.com/c/scheduler-all/scheduler">Forum</a>
                    <a href="https://dhtmlx.com/docs/products/dhtmlxScheduler/">Sales & Licensing</a>
                </div>
            </div>
            
        </div>
    </body>
</html>
