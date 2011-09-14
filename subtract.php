<title>Subtract Function</title>
testing subtract calculator
<form method="post">
	<input type="text" name="sub1" value="<?= $_POST[sub1];?>">
	-
	<input type="text" name="sub2" value="<?= $_POST[sub2];?>">
	<input type="submit" name="equal" value="=">
	<?php
	$sub1=($_POST[sub1]);
	$sub2=($_POST[sub2]);
	$result=$sub1-$sub2;
	?>
	<input type="text" name="result" value="<?= $result;?>">
</form>
<a href="..">back</a>
