<?php
/*
 @Author 			 : Ardan (Ardzz) [Z0NK3X]
 @Date 				 : 10-05-2018
 @Last modified by 	 	 : 10-05-2018
 My Github 			 : https://github.com/ardzz/
 IG 				 : https://www.instagram.com/ar_dhann/
*/

$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
system("clear");
sleep(1);
echo "     [ Translator Jawa CLI Based ]\n";
sleep(1);
echo "+------------------------------------+\n";

//echo basename(__FILE__)."\n";
echo "1) Bahasa Indonesia ke Jawa\n";
sleep(1);
echo "2) Jawa ke Bahasa Indonesia\n";
sleep(1);
echo "3) Bahasa Indonesia ke Krama\n";
sleep(1);
echo "4) Krama ke Bahasa Indonesia\n";
sleep(1);
echo "5) Bahasa Indonesia ke Krama Inggil\n";
sleep(1);
echo "6) Krama Inggil ke Bahasa Indonesia\n";
sleep(1);
echo "7) About Me :)\n";
sleep(1);
echo "Pilih salah satu opsi : ";
$id = trim(fgets(STDIN, 1024));
echo "+------------------------------------+\n";
if (empty($id)) {
	echo "Opsi Tidak Boleh Kosong!\n";
	exit();
}
if ($id == "1") {
echo "Kata/Kalimat Bahasa Indonesia 		: ";
$indo = trim(fgets(STDIN, 1024));
if (empty($indo)) {
	echo "\nKata/Kalimat Bahasa Indonesia Tidak Boleh Kosong!\n";
	return;
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'jv-NG',
			'from' => 'id-ID',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);
	if ($result['_meta']['status'] == "SUCCESS") {	
	echo "Hasil Terjemahan Dari \n$indo 	: ".$result['content']['model']['basic']."\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
// Hasil Terjemahan Dari \n$indo 	: 
if ($id == "2") {
	echo "Kata/Kalimat Bahasa Jawa 		: ";
$indo = trim(fgets(STDIN, 1024));
if (empty($indo)) {
	echo "\nKata/Kalimat Jawa Tidak Boleh Kosong!\n";
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'id-ID',
			'from' => 'jv-NG',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);
	if ($result['_meta']['status'] == "SUCCESS") {	
	echo "Hasil Terjemahan Dari \n$indo 	: ".$result['content']['model']['basic']."\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
if ($id == "5") {
	echo "Kata/Kalimat Bahasa Indonesia 		: ";
$indo = trim(fgets(STDIN, 1024));
if (empty($indo)) {
	echo "$red\nKata/Kalimat Bahasa Indonesia Tidak Boleh Kosong!\n$white";
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'jv-KI',
			'from' => 'id-ID',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);
	if ($result['_meta']['status'] == "SUCCESS") {	
	echo "Hasil Terjemahan Dari \n$indo 	: ".$result['content']['model']['basic']."\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
if ($id == "6") {
		echo "Kata/Kalimat Krama Inggil 		: ";
$indo = trim(fgets(STDIN, 1024));
if (empty($indo)) {
	echo "\nKata/Kalimat Krama Inggil Tidak Boleh Kosong!\n";
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'id-ID',
			'from' => 'jv-KI',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);
	if ($result['_meta']['status'] == "SUCCESS") {	
	echo "Hasil Terjemahan Dari \n$indo 	: ".$result['content']['model']['basic']."\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
if ($id == "3") {
			echo "Kata/Kalimat Bahasa Indonesia 		: ";
$indo = trim(fgets(STDIN, 1024));
if (empty($indo)) {
	echo "$red\nKata/Kalimat Bahasa Indonesia Tidak Boleh Kosong!\n$white";
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'jv-KR',
			'from' => 'id-ID',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);
	if ($result['_meta']['status'] == "SUCCESS") {	
	echo "Hasil Terjemahan Dari \n$indo 	: ".$result['content']['model']['basic']."\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
if ($id == "4") {
			echo "Kata/Kalimat Krama 		: ";
$indo = trim(fgets(STDIN, 1024));
if (empty($indo)) {
	echo "\nKata/Kalimat Krama Tidak Boleh Kosong!\n";
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'id-ID',
			'from' => 'jv-KR',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);
	if ($result['_meta']['status'] == "SUCCESS") {	
	echo "Hasil Terjemahan Dari \n$indo 	: ".$result['content']['model']['basic']."\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
if ($id == "7") {
	system("clear");
	sleep(1);
	echo " 		   ABOUT ME (Ardzz)";
	sleep(2);
	echo "
 	   ________  _   _ _  _________  __
	  |__  / _ \| \ | | |/ /___ /\ \/ /
	    / / | | |  \| | ' /  |_ \ \  / 
	   / /| |_| | |\  | . \ ___) |/  \ 
	  /____\___/|_| \_|_|\_\____//_/\_\
	  
	           [#] Z0NK3X [#]
	           [#]BCO-TEAM[#]
	             :: 2K18 ::
	            BAC0DERS.COM
        +--------------------------------------+\n";
        exit();
}
?>
