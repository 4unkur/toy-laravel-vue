<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .mb-10 {
                margin-bottom: 10px;
            }

        </style>
    </head>
    <body>
    <section class="hero is-primary mb-10">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Projects
                </h1>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input class="input" type="email" placeholder="Name">
            </div>
            <p class="help is-danger">This email is invalid</p>
        </div>

        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <textarea class="textarea"></textarea>
            </div>
            <p class="help is-danger">This email is invalid</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    <script src="/js/main.js"></script>
    </body>
</html>
