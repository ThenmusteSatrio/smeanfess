<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> pesan anonim </title>
    <link rel="stylesheet" href="css/login.css">


</head>

<body>

    <div class="box">

        <form class="form" action="{{ route('auth') }}" method="POST">
            @csrf
            <div class="title"><span>Create New Admin</span></div>
            <input class="input" name="name" placeholder="Name" type="text">
            <input class="input" name="password" placeholder="Password" type="password">

            <button class="button-confirm">Add →</button>
        </form>
    </div>
    <div class="container"></div>

</body>


</html>