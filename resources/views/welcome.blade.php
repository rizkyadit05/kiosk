<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            .twocolordiv  {
                position: absolute;
                z-index: 1;
                background: green;
                width:500px;
                height:100px;
            }

            .twocolordiv:before {
                content: "";
                position: absolute;
                z-index: -1;
                top: 0;
                right: 20%;
                bottom: 0;
                left: 0;
                background: red;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
            <div class="twocolordiv"></div>
        </div>
    </body>
</html>
