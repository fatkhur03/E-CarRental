<?php 
error_reporting(0);
$username	= $_POST['username'];
$password = $_POST['password'];

//apakah username sudah terdaftar atau belum
$data = file("config.txt", FILE_IGNORE_NEW_LINES);
foreach ($data as $value) {
	$pecah = explode("|", $value);
	if ($username==$pecah['0']) {
		$cek = true;
	}
}

if ($cek) { // jika username sudah terdaftar ?>
	<script type="text/javascript">
	alert('!! Maaf username anda sudah terdaftar.');
	window.location.assign('register.php');
	</script>

<?php }else{ //jika data tidak ditemukan
	//buat format penyimpanan ke txt config
	$format = "\n$username|$password";

	//buka dulu file config txt
	$file = fopen ('config.txt','a');
	fwrite($file, $format);

	//tutup file
	fclose($file);

	?>
	<script type="text/javascript">
	alert('Alhamdulillah, pendaftaran kamu berhasil');
	window.location.assign('index.php');
	</script>

	<?php }