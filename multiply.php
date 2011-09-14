<title>Multiply Function</title>
testing multiply calculator
<form method="post">
	<input type="text" name="mul1" value="<?= $_POST[mul1];?>">
	x
	<input type="text" name="mul2" value="<?= $_POST[mul2];?>">
	<input type="submit" name="equal" value="=">
	<?php
	$mul1=($_POST[mul1]);
	$mul2=($_POST[mul2]);
	$result=$mul1*$mul2;
	?>
	<input type="text" name="result" value="<?= $result;?>">
</form>
<a href="..">back</a>
