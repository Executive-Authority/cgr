<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">

<html>
<head> 
<title>College Gear Recycler</title>
<link rel="stylesheet" media="screen" href="home.css">
</head>

<body id = "page">

<script type="text/javascript">
	function go()
	{
		window.location=document.getElementById("link").value
	}
</script>
	
	</script>


<section class = "menu">
	
	<!-- Website title -->
	<div class = "title">
		<h1 class="titleText"> College Gear Recycler </h1>
	</div>
	
	<!-- Appliances Drop Down -->
	<div class = "appliances">
		<form>
		<select id="link" onchange="go()">
		<option disabled="disabled" selected="selected"> Appliances </option>
		<option value ="http://www.google.com"> Air Conditioner </option>
		<option value="URL"> Refrigerator </option>
		<option value="URL"> Fans </option>
		<option value="URL"> Television </option>
		<option value="URL"> Other </option>
		</select>
		</form>
	</div>
	
	<!-- Decor Drop Down -->
	<div class = "decor">
		<form>
		<select id="link" onchange="go()">
		<option disabled="disabled" selected="selected"> Decor </option>
		<option value ="URL"> Frames </option>
		<option value="URL"> Posters </option>
		<option value="URL"> Lamps </option>
		</select>
		</form>
	</div>
	
	<!-- Textbooks Drop Down -->
	<div class = "textbooks">
		<form>
		<select id="link" onchange="go()">
		<option disabled="disabled" selected="selected"> Textbooks</option>
		<option value ="URL"> Biology</option>
		<option value ="URL"> Chemistry </option>
		<option value="URL"> Math </option>
		<option value="URL"> English </option>
		<option value="URL"> Computer Science </option>
		<option value="URL"> Music </option>
		<option value="URL"> Business </option>
		<option value="URL"> Media and Communications </option>
		<option value="URL"> Religion/Philosophy </option>
		<option value="URL"> CIE </option>
		</select>
		</form>
	</div>
	
	<!-- Search bar -->
	<div class = "search">
	<form action=""> 
	 <input type="text" placeholder="Search..." required>
     <input type="button" value="Search">
	</form>
	</div>
	
	<!-- Home button icon and link -->
	<a href="../CGR/CGR_home.php"><img class="homeButton" src="home.ico" /></a>
	
	<!-- Show date  -->
	<div class="date"><p class="today">Today is : </p><b><?php print(date("l F d, Y")); ?></div></b>
	
	<!-- Show welcome message -->
	<p class="welcomeText">Welcome, UC Bears !</p>
	
	<!-- My Account Drop Down -->
	<div class = "myAccount">
		<form>
		<select id="link" onchange="go()">
		<option disabled="disabled" selected="selected"> My Account</option>
		<option value ="url"> My Profile</option>
		<option value ="url"> Upload </option>
		<option value="url">Log Out</option>
		</select>
		</form>
	</div>
</section>

</body>
</html>