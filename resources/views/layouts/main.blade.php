<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                min-height: 100vh;
                margin: 0;
                overflow-x: hidden;
            }

            .full-height {
                min-height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
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

            .title {
                font-size: 60px;
            }

            .lists-ul{
              padding-bottom: 5vh;
            }

            .lists-ul li{
              font-size: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .error{
              width: 100%;
              display: block;
              color: #fff;
              font-weight: 50;
              font-size: 18px;
              background-color: red;
            }

            .success{
              width: 100vw;
              display: block;
              color: #fff;
              font-weight: 50;
              font-size: 18px;
              background-color: green;
            }
        </style>
    </head>
    <body>
      <div class="success">
        @if (Session::has('message'))
          {{Session::get('message')}}
        @endif
      </div>

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    @yield('content')
                </div>

            </div>
        </div>
    </body>
</html>
