<br>
<hr>
<br>
<div align="center">
<?php
	if(!empty($_GET)){
		//_________________________________________Mengambil data kota
		$country = 'ina';
		$city = $_GET['city'];
		//_________________________________________Mengambil data kota


		//_________________________________________Mengkoneksikan ke API untuk mengirim value nama kota yang dicari
		$api_url = "http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."&APPID=797adee60b4fb6626882b4ba41d61f4a";
		// APPID adalah API Key yang saya dapatkan setelah saya membuat akun di openweathermap.org
		$weather_data = file_get_contents($api_url);
		$json = json_decode($weather_data, TRUE);
		//_________________________________________Mengkoneksikan ke API untuk mengirim value nama kota yang dicari


		//_________________________________________Mengambil info cuaca dari API sesuai kota yang dicari
		$conditions 	=	$json['weather'][0]['main'];// Weather Condition
		//_________________________________________Mengambil info cuaca dari API sesuai kota yang dicari
		

		//_________________________________________Menampilkan info cuaca ke Halaman Website
		$date = date("d M Y");
		echo "The weather of ".$city." at ".$date." is ".$conditions."<br>";

		//_________________________________________Menampilkan info cuaca ke Halaman Website

	}

?>
</div>
<br>
<hr>
