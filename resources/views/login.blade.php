<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> pesan anonim </title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">


</head>

<body>

</body>
<div class="box">
    <form class="form" action="{{ route('auth') }}" method="POST">
        @csrf
        <div class="title">Welcome,<br><span>sign up to continue</span></div>
        <input class="input" name="name" placeholder="Name" type="text">
        <input class="input" name="password" placeholder="Password" type="password">
      
        <button class="button-confirm">Masuk →</button>
    </form>
    <div class="container"></div>
</div>

</html>