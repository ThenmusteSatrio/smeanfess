<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> pesan anonim </title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">


</head>

<body>

    <div class="box">
        <div class="judul">
            <h2>Smeanfess</h2>
        </div>
        <form class="form" action="{{ route('auth') }}" method="POST">
            @csrf
            <div class="title">Welcome,<br><span>sign up to continue</span></div>
            <input class="input" name="name" placeholder="Name" type="text">
            <input class="input" name="password" placeholder="Password" type="password">

            <button class="button-confirm">Masuk →</button>
        </form>
    </div>
    <div class="container"></div>

</body>


</html>