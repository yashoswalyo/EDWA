<?php
if (isset($_POST['plain_text'])){
	echo shell_exec('./codes/vigenere e ' . $_POST['key'] . ' ' . $_POST['plain_text']);
} else {
	echo shell_exec('./codes/vigenere d ' . $_POST['key'] . ' ' . $_POST['cipher_text']);
}
?>