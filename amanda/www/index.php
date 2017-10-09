<!DOCTYPE html>
<html lang="en">
<head>
	
	
	<?php 
	require_once "functions/image_view.php";
	$title = "Image previewer";
	require_once "blocks/head.php"; 
	$images = getImage(7);
	?>
	<script src="js/js_main.js" type="text/javascript"></script>
	
	
</head>
<body id="body">
<!-- Top -->
<header>
<div id="top">
	
	<div class="shell">
		
		<!-- Header -->
		<?php require_once "blocks/header.php" ?>
		<!-- End Header -->
						
	</div>
</div>
</header>
<!-- Top -->

<!-- Main -->
<!-- Modal window -->
	<div id="modal_form"><!-- Сaмo oкнo --> 
    	<span id="modal_close">X</span> <!-- Кнoпкa зaкрыть --> 
     	<div id="wrapLogo"><div id="imgadd"><h1 id="add_image" class="addlogomf">ADD IMAGE</h1></div><div id="infoadd"><h1 id="add_info" class="addlogomf">ADD INFO</h1></div></div>
		
    	<div id="leftSide">
    	
    	
    	<div id="inpImg">
		<input type="file" size="1" id="inputFile" />
		</div>

		</div>
		
		<div id="rightSide">
		
		<div id="phName" class="f_field">
		<h2 >Name your media</h2>
		<input type="text" placeholder="Name" id="iPhName" name="iPhName" class="a_field" />
		</div>
		<div id="mf_tags">
		<h2 >Add tags</h2>
		<div id="tagWind">
			
		</div>
		<div id="mf_tagAdder">
			<div id="mf_tagMain">
			<input type="text" name="i_TxTagAdder" class="a_field" id="i_TxTagAdder" placeholder="Write a tag.." value="tag" />
			<input type="button" value="Add tag" id="s_TxTagAdder" />
			</div>
		</div>
		</div>
		<div id="mf_discr">
			<h2 >Add discription</h2>
			<textarea name="discr" id="discr" cols="39" rows="8"></textarea>
		</div>
		<input type="submit" value="Publish" id="publish" />
		</div>
	</div>
	<div id="overlay"></div><!-- Пoдлoжкa -->
       
    


			<!-- <div id="dialogCont">
			
			<div ><img src="css/images/uploadimg.png" /></div>
			<button id="closeDialog" >Закрыть</button>
			
			</div>
			</div> -->
<div id="main">
	

	<div class="shell">
		
		<!-- Search, etc -->
		<div class="options">
			<div class="search">
				<form action="" method="post">
					<span class="field"><input type="text" class="blink" value="Enter search text here" title="Enter search text here" /></span>
					<input type="text" class="search-submit" value="GO" />
					
				</form>
			</div>
			
			 
			<div class="right">
				<span class="cart">
					<a href="#" class="cart-ico">&nbsp;</a>
					<strong></strong>
				</span>
				<span class="left more-links">
					<a href="#"></a>
					<a href="#"></a>
				</span>
			</div>
		</div>
		<!-- End Search, etc -->
		
		<!-- Content -->
		<div id="content">
			
			<!-- Tabs -->

			<!-- Tabs -->
			
			<!-- Container -->
			<div id="container">
				
				<div class="tabbed">
					
					<!-- First Tab Content -->
					<div class="tab-content" style="display:block;">
						
						<div class="items">
							<div class="cl">&nbsp;</div>

							<ul>

							    <li>
							    	<div class="image">
							    		<a href="" id="go"><img src="images/if_image_add_103590.png" /></a>
							    	</div>
							    	
							    	
							    </li>
							    <?
								for ($i = 0; $i < count($images); $i++){
									echo ' <li>
							    	<div class="image">
							    		<a href="#" title=""><img src="'.$images[$i]["img_parth"].'" alt="" /></a>
							    	</div>
							    	
							    </li>';
								}

								?>

							   
							</ul>
							<div class="cl">&nbsp;</div>
						</div>
					</div>
					<!-- End First Tab Content -->
					
						
					<!-- End Third Tab Content -->
					
				</div>
				
				<!-- Brands -->
				<div class="brands">
					<h3>Brands</h3>
					<div class="logos">
						<a href="#"><img src="images/heart2.png" alt="" /></a>
						<a href="#"><img src="images/heart2.png" alt="" /></a>
						<a href="#"><img src="images/heart2.png" alt="" /></a>
						<a href="#"><img src="images/heart2.png" alt="" /></a>
						<a href="#"><img src="	images/heart2.png" alt="" /></a>
					</div>
				</div>
				<!-- End Brands -->
				
				<!-- Footer -->
				<?php require_once "blocks/footer.php" ?>
				<!-- End Footer -->
				
			</div>
			<!-- End Container -->
			
		</div>
		<!-- End Content -->
		
	</div>
</div>
<!-- End Main -->
	
</body>
</html>