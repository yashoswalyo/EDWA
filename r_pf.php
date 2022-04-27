<?php
if (isset($_POST['plain_text'])){
	echo shell_exec('./codes/playfair e ' . $_POST['key'] . ' ' . $_POST['plain_text']);
} else {
	echo shell_exec('./codes/playfair d ' . $_POST['key'] . ' ' . $_POST['cipher_text']);
}
?>