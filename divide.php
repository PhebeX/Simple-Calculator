<?php
error_reporting(0); //mencegah terjadinya error saat menggunakan operator bagi (/)
?>
<title>Divide Function</title>
testing divide calculator
<form method="post">
	<input type="text" name="div1" value="<?= $_POST[div1];?>">
	:
	<input type="text" name="div2" value="<?= $_POST[div2];?>">
	<input type="submit" name="equal" value="=">
	<?php
	$div1=($_POST[div1]);
	$div2=($_POST[div2]);
	$result=$div1/$div2;
	?>
	<input type="text" name="result" value="<?= $result;?>">
</form>
<a href="..">back</a>
