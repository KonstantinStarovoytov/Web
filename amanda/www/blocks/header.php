<header>
<div id="top">
	
	<div class="shell">
		
		<!-- Header -->
		<div id="header">
			<h1 id="logo"><a href="#">JS</a></h1>
			<h1 id="textLogo"><a href="#">Image previewer</a></h1>
			<div id="navigation">
				<ul>
				    <li><a href="/">Home</a></li>
					<li><a href="about.php">About</a></li>
					<?php if(!isset($_SESSION['login']))
					echo '
					<li><a href="reg.php">Sign In</a></li>';
					else
								echo '<li><a href="reg.php">Logout</a></li>';
									?>
					<li class="last"><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
		<!-- End Header -->
						
	</div>
</div>
</header>