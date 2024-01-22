<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admindash.css">
    <title>Pesan Anonim</title>
</head>

<body>
    <div class="container">
		
	</div>
	<div class="b2 d-none">
		<div class="card_message">
			<div class="from">
				<h2>From : -</h2>
			</div>
			<div class="to">
				<h2>to : -</h2>
			</div>
			<div class="mess">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dolorum eveniet impedit aut, quas similique doloremque consectetur nemo quisquam rem tempore vitae perferendis necessitatibus nam voluptates animi delectus maiores minus?</p>
			</div>
				<button class="mess_button"><ion-icon name="arrow-forward-outline"></ion-icon></button>

		</div>
	</div>
    <div class="box">
        <div class="option_box">
            <button class="comic-button">
                kritik siswa
            </button>
            <button class="comic-button">
                menfess
            </button>
        </div>
        <div class="letter_box">
            
			<div class="card">
				<div class="text">
					<p class="subtitle">pesan pesan pesan Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis deserunt placeat magnam blanditiis itaque necessitatibus rerum dignissimos dolorem iste! Natus, porro! Minima, expedita asperiores. Officia sequi quo suscipit odit nihil, sapiente nobis laboriosam! Beatae voluptatem sit, assumenda molestias rerum cum dolore veniam sed minus et ad praesentium sequi recusandae explicabo.

					</p>

				</div>
	
				<div class="btn_view">
					<button onclick="click()"><ion-icon name="mail-unread-outline"></ion-icon></button>
				</div>
   			 </div>
			
			
		
			
	
  		</div>
	<div class="pagechose">
			<div class="btn_chose">
				<button><ion-icon name="arrow-back-outline"></ion-icon></button>
			</div>
			<div class="btn_chose">
				<button><ion-icon name="arrow-forward-outline"></ion-icon></button>
			</div>
	</div>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
	let card = document.getElementById('card');
	let mess = document.getElementById('mess');

	function click(){
		card.classList.toggle('d-none');
		mess.classList.toggle('d-none');
	}
</script>
</body>

</html>