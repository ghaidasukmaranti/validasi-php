<html><body>
<?php
$nama = $NIM = "";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama"]) && isset($_POST["NIM"])) {
$nama = $_POST["nama"];
$NIM = $_POST["NIM"];

}
?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Nama: <input type="text" name="nama"><br>
NIM: <input type="text" name="NIM"><br>
<input type="submit">
</form>
<?php
if(!empty($nama) && !empty($NIM) ){
echo "<h2>Selamat Datang</h2>";
if(!is_numeric($NIM)){
	die("NIM harus berupa angka");
}
else if(($NIM)>10){
	die("NIM anda lebih dari 10 angka");
}
else{
	echo $nama . "<br>" . $NIM;
}
}
else{
	echo"Nama dan Nim tidak boleh Kosong";
}
?>
</body></html>