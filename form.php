<?php
@include 'config.php';
?>
<html>
<body>
<center>
<h1>
Membuat Barcode baru
</h1>
<form action="form.php">
Masukan Data Barcode <input type="" name="bar_code"><br>
<input type="submit" value="Create Barcode">
</form>
<?php
if(isset($_GET['bar_code'])){
	$bar_code=$_GET['bar_code'];
	include 'barcode128.php';
	echo bar128($bar_code);

    
	}	
?>
    
    
</form>
</center>
</body>
</html>