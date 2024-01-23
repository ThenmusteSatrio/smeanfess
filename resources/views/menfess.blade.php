<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/message.css">
    <title>Kirim Menfess</title>
</head>

<body>
    <div class="container"></div>

    <div class="main">
        <div class="text_group">
            <h2>Kirim Menfess Anonim</h2>
            <p>kirim pesan rahasia untuk kritik atau menfess</p>
        </div>
        <form action="{{ route('kirimmenfess') }}" method="POST" class="input_box">
            @csrf
            <input type="text" name="from" placeholder="From">
            <input type="text" name="to" placeholder="To">
            <textarea class="pesan" name="pesan" id="pesan" placeholder="Pesan..." cols="30" rows="10"></textarea>
            <button type="submit" class="sbt">Kirim</button>
        </form>

    </div>
</body>

</html>