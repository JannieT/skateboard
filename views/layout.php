<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Skateboard App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #1a202c;
                font-family: 'Merriweather', serif;
                font-weight: 300;
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
            }
            .position-ref {
                position: relative;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: calc(40px + (80 - 40) * ((100vw - 300px) / (1600 - 300)));
                margin-bottom: 30px;
            }
            .subtitle {
                opacity: 0.7;
                margin-bottom: 30vh;
            }
        </style>
    </head>

    <body>
        <?= $content; ?>
    </body>
</html>