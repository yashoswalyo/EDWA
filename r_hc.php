<?php
if (isset($_POST['plain_text'])){
	echo shell_exec('./codes/hill e ' . $_POST['key'] . ' ' . $_POST['plain_text']);
}
?>