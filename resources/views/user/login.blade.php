<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Investindo</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One">
</head>
<body>

    <div class="background">

    </div>

    <section id="conteudo-view" class="login">
        <h1>Investimento</h1>
        <h3>O nosso gerenciador de investimento</h3>

        {!! Form::open(['route' => 'user.auth', 'method' => 'post']) !!}
            <p>Acesse o sistema</p>

            <label>
                {!! Form::text('username',null,['class' => 'input','placeholder' => 'Usuário']) !!}
            </label>

            <label>
                {!! Form::password('password',null,['placeholder' => 'Senha']) !!}
            </label>

            {!! Form::submit('Entrar') !!}

        {!! Form::close() !!}

    </section>
</body>
</html>
