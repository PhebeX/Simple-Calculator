<title>Add Function</title>
testing add calculator
<form method="post">
	<input type="text" name="add1" value="<?= $_POST[add1];?>">  <!$_POST: agar FORM memkopi angka yang kita masukan>
	+
	<input type="text" name="add2" value="<?= $_POST[add2];?>">  <!$_POST: agar FORM memkopi angka yang kita masukan>
	<input type="submit" name="equal" value="=">
	<?php
	$add1=($_POST[add1]);
	$add2=($_POST[add2]);
	$result=$add1+$add2; //proses perhitungan
	?>
	<input type="text" name="addresult" value="<?= $result;?>">
</form>
<a href="..">back</a>
