<?php
if (isset($_POST['plain_text'])){
	$cc = shell_exec('./codes/ceaser e ' . $_POST['key1'] . ' ' . $_POST['plain_text']);
	$vc = shell_exec('./codes/vigenere e ' . $_POST['key2'] . ' ' . $cc);
	$pc = shell_exec('./codes/playfair e ' . $_POST['key3'] . ' ' . $vc);
	echo $pc;
}
