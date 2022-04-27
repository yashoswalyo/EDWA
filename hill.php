<p>
	<p class="subTitle">Hill Cipher</p>
<form>
	<div class="row">
		<div class="column">
			<textarea name="plain_text" style="width: 240px; height: 173px;" maxlength="3" wrap="soft" placeholder="3 Letter String" class="bigbox"></textarea>
		</div>

		<div class="column mid">
			<p>Hill cipher key:</p>
			<table border="1">
				<tr>
					<td>6</td>
					<td>24</td>
					<td>1</td>
				</tr>
				<tr>
					<td>13</td>
					<td>16</td>
					<td>10</td>
				</tr>
				<tr>
					<td>20</td>
					<td>17</td>
					<td>15</td>
				</tr>
			</table>
			<br>
			<input type="button" onclick="encryptH()" name="encrypt" value=">> ENCRYPT >>">
		</div>

		<div class="column">
			<textarea name="cipher_text" style="width: 240px; height: 173px;" wrap="soft" placeholder="Cipher text here" readonly class="bigbox"></textarea>
		</div>
	</div>
</form>
</p>