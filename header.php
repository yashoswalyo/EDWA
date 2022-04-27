<!-- <div id="mainmenu">
  <a href="home.php">Home</a> | <a href="about.php">About</a> | etc...
</div> -->

<div id="navcontainer">
	<ul id="navlist">
		<li><a class="btn current" href="index.php">Home</a></li>
		<li><a class="btn" href="#" id="c" onclick="onNavClick('c')" >Ceaser Cipher</a></li>
		<li><a class="btn" href="#" id="v" onclick="onNavClick('v')">Vigenere Cipher</a></li>
		<li><a class="btn" href="#" id="p" onclick="onNavClick('p')">Playfair Cipher</a></li>
		<li><a class="btn" href="#" id="h" onclick="onNavClick('h')">Hill Cipher</a></li>
		<li><a class="btn" href="#" id="combined" onclick="onNavClick('combined')" >Combined Cipher</a></li>
	</ul>
</div>
<script>

	// Get all buttons with class="btn" inside the container
	// var btns = document.getElementsByClassName("btn");

	// // Loop through the buttons and add the active class to the current/clicked button
	// for (var i = 0; i < btns.length; i++) {
	// 	btns[i].addEventListener("click", function() {
	// 		var current = document.getElementsByClassName("current");
	// 		current[0].className = current[0].className.replace(" current", "");
	// 		this.className += " current";
	// 		var content = document.getElementsByClassName("container");
	// 		console.log(content[0].innerHTML);
	// 		content[0].innerHTML = "Ceaser";

	// 	});
	// }
</script>
<style>
	#navlist {
		margin: 0;
		padding: 0 0 20px 10px;
		border-bottom: 2px solid green;
	}

	#navlist ul,
	#navlist li {
		margin: 0;
		padding: 0;
		display: inline;
		list-style-type: none;
	}

	#navlist a:link,
	#navlist a:visited {
		float: left;
		line-height: 14px;
		font-weight: bold;
		margin: 0 10px 4px 10px;
		text-decoration: none;
		color: #999;
	}

	#navlist a:link.current,
	#navlist a:visited.current,
	#navlist a:hover {
		border-bottom: 4px solid green;
		padding-bottom: 4px;
		background: transparent;
		color: green;
	}
</style>