<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cipher Website</title>
	<link rel="stylesheet" href="style.css">
	<script src="jQuery/jquery-3.6.0.min.js"></script>
</head>

<body>
	<h1 class="title">CIPHER WEBSITE</h1>
	<?php include("header.php"); ?>
	<div class="container" id="container">
		<p>In cryptography, a cipher (or cypher) is an algorithm for performing encryption or decryption—a series of well-defined steps that can be followed as a procedure. An alternative, less common term is encipherment. To encipher or encode is to convert information into cipher or code. In common parlance, " cipher" is synonymous with "code" , as they are both a set of steps that encrypt a message; however, the concepts are distinct in cryptography, especially classical cryptography.</p>
		<p>Codes generally substitute different length strings of character in the output, while ciphers generally substitute the same number of characters as are input. There are exceptions and some cipher systems may use slightly more, or fewer, characters when output versus the number that were input.</p>
		<p>Codes operated by substituting according to a large codebook which linked a random string of characters or numbers to a word or phrase. For example, "UQJHSE" could be the code for "Proceed to the following coordinates." When using a cipher the original information is known as plaintext, and the encrypted form as ciphertext. The ciphertext message contains all the information of the plaintext message, but is not in a format readable by a human or computer without the proper mechanism to decrypt it.</p>
		<p>The operation of a cipher usually depends on a piece of auxiliary information, called a key (or, in traditional NSA parlance, a cryptovariable). The encrypting procedure is varied depending on the key, which changes the detailed operation of the algorithm. A key must be selected before using a cipher to encrypt a message. Without knowledge of the key, it should be extremely difficult, if not impossible, to decrypt the resulting ciphertext into readable plaintext.</p>
	</div>
</body>
<script>
	function onNavClick(linkTitle) {
		var x = document.getElementsByClassName('current');
		x[0].className = x[0].className.replace(' current', '');
		var y = document.getElementById(linkTitle);
		y.className += " current";
		console.log(linkTitle);
		if (linkTitle === 'c') {
			$('#container').load('ceaser.php');
		} else if (linkTitle === 'v') {
			$('.container').load('vigenere.php');
		} else if (linkTitle === 'h') {
			$('.container').load('hill.php');
		} else if (linkTitle === 'p') {
			$('.container').load('playfair.php');
		} else if (linkTitle === 'combined') {
			$('.container').load('combined.php');
		}
	}

	function encryptCeaser() {
		const form = document.querySelector('form');
		const data = Object.fromEntries(new FormData(form).entries());
		console.log(data);
		$.post(
			'r_cc.php', {
				key: data.key,
				plain_text: data.plain_text
			}
		).done((result) => {
			document.getElementsByName('cipher_text')[0].innerText = result;
		})
	}

	function decryptCeaser() {
		const form = document.querySelector('form');
		const data = Object.fromEntries(new FormData(form).entries());
		console.log(data);
		$.post(
			'r_cc.php', {
				key: data.key,
				cipher_text: data.cipher_text
			}
		).done((result) => {
			document.getElementsByName('plain_text')[0].innerText = result;
		})
	}

	function encryptV() {
		const form = document.querySelector('form');
		const data = Object.fromEntries(new FormData(form).entries());
		console.log(data);
		$.post(
			'r_vc.php', {
				key: data.key,
				plain_text: data.plain_text
			}
		).done((result) => {
			document.getElementsByName('cipher_text')[0].innerText = result;
		})
	}

	function decryptV() {
		const form = document.querySelector('form');
		const data = Object.fromEntries(new FormData(form).entries());
		console.log(data);
		$.post(
			'r_vc.php', {
				key: data.key,
				cipher_text: data.cipher_text
			}
		).done((result) => {
			document.getElementsByName('plain_text')[0].innerText = result;
		})
	}

	function encryptP() {
		const form = document.querySelector('form');
		const data = Object.fromEntries(new FormData(form).entries());
		console.log(data);
		$.post(
			'r_pf.php', {
				key: data.key,
				plain_text: data.plain_text
			}
		).done((result) => {
			document.getElementsByName('cipher_text')[0].innerText = result;
		})
	}

	function decryptP() {
		const form = document.querySelector('form');
		const data = Object.fromEntries(new FormData(form).entries());
		console.log(data);
		$.post(
			'r_pf.php', {
				key: data.key,
				cipher_text: data.cipher_text
			}
		).done((result) => {
			document.getElementsByName('plain_text')[0].innerText = result;
		})
	}

	function encryptComb() {
		const form = document.querySelector('form');
		const data = Object.fromEntries(new FormData(form).entries());
		console.log(data);
		$.post(
			'r_comb.php', {
				key1: data.key1,
				key2: data.key2,
				key3: data.key3,
				plain_text: data.plain_text
			}
		).done((result) => {
			document.getElementsByName('cipher_text')[0].innerText = result;
		})
	}
	function encryptH(){
		const form = document.querySelector('form');
		const data = Object.fromEntries(new FormData(form).entries());
		console.log(data);
		$.post(
			'r_hc.php', {
				key: data.key,
				plain_text: data.plain_text
			}
		).done((result) => {
			document.getElementsByName('cipher_text')[0].innerText = result;
		})
	}
</script>

</html>