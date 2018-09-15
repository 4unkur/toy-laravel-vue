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
<div id="app" class="container">
    <form method="post" class="mb-10" @submit.prevent="onSubmit">
        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input type="text" name="name" class="input" v-model="name">
            </div>
            <p class="help is-danger"></p>
        </div>
        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <input type="text" name="description" class="input" v-model="description">
            </div>
            <p class="help is-danger"></p>
        </div>
        <div>
            <button class="button is-primary">Create</button>
        </div>
    </form>

    <div class="box">
        @if (empty($projects))
            <p class="help is-info">No projects</p>
        @else
            <ul>
                @foreach ($projects as $project)
                    <li>{{ $project.name }}</li>
                @endforeach
            </ul>
        @endif
    </div>

</div>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
