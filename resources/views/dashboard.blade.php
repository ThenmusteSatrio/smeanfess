<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/admindash.css">
	<title>Pesan Anonim</title>
</head>
@viteReactRefresh
@vite('resources/js/app.jsx')

<body>
	<a href="/new">
		<button class="noselect addAdmin"><span class="text">Add Admin</span><span class="icon"><ion-icon name="add-outline"></ion-icon></span></button>
	</a>
	<div id="app"></div>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>