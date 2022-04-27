<p>
<p class="subTitle">Ceaser + Vigenere + Playfair Cipher</p>
<form>
	<div class="row">
		<div class="column">
			<textarea name="plain_text" style="width: 240px; height: 327px;" wrap="soft" placeholder="Plain text here" class="bigbox"></textarea>
		</div>

		<div class="column mid">
			<p>Enter keys below:</p>
			<label for="key1">Ceaser Cipher</label>
			<input type="text" id="key1" name="key1" required placeholder="Ceaser cipher key">
			<br>
			<label for="key2">Vigenere Cipher</label>
			<input type="text" id="key2" name="key2" required placeholder="Vigenere cipher key">
			<br>
			<label for="key3">Playfair Cipher</label>
			<input type="text" id="key3" name="key3" required placeholder="Playfair cipher key">
			<br>
			
			<input type="button" onclick="encryptComb()" name="encrypt" value=">> ENCRYPT >>">
		</div>

		<div class="column">
			<textarea name="cipher_text" style="width: 240px; height: 327px;" wrap="soft" placeholder="Cipher text here" class="bigbox"></textarea>
		</div>
	</div>
</form>
</p>