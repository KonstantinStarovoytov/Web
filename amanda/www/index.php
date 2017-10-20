<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
require_once "functions/image_view.php";
$title = "Image previewer";
require_once "blocks/head.php"; 
$images = getImage(7); 
?>
	<script src="js/js_main.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script> 
	
</head>
<body id="body">

		<!-- Header -->
		<?php require_once "blocks/header.php" ?>

<!-- Main -->
<!-- Modal window -->
	<div id="modalForm"> 
    	<span id="modalClose">X</span>
     	<div id="wrapLogo"><div id="imgadd"><h1 id="add_image" class="addlogomf">ADD IMAGE</h1></div><div id="infoadd"><h1 id="add_info" class="addlogomf">ADD INFO</h1></div></div>
		
    	
    	<div id="leftSide">
    	
    	<form id="imageform" method="post" enctype="multipart/form-data" action='/functions/upload.php' style="clear:both">
    	<div id="inpImg">
    	    <img src="images/379.png" alt="" style="opacity: 0.8; display: none;margin: auto;padding-top:45px" id="waitingImgUpl"  />
		<input type="file" size="1" id="inputFile" name="inputFile[]" />
		</div>
        </form>
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
			<input type="text" name="i_TxTagAdder" class="a_field" id="i_TxTagAdder" placeholder="Write a tag.." value="" />
			<input type="button" value="Add tag" id="s_TxTagAdder" />
			</div>
		</div>
		</div>
		<div id="mf_discr">
			<h2 >Add description</h2>
			<textarea name="discr" id="discr" cols="39" rows="8"></textarea>
		</div>
		
		<input type="button" value="Publish" id="publish" />
		</form>
		</div>
	
	</div>
	<div id="overlay"></div>
       
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
			 <h1 id="hi"> </h1> <span><h2 id="hi"><?php 
			 if(isset($_SESSION['login']))
			 echo "Hi, ".$_SESSION['login'];
			 else "Login"
			 ?></h2></span>
			</div>
		</div>
		<!-- End Search, etc -->
		
		<!-- Content -->
		<div id="content">
			
			
			<!-- Container -->
			<div id="container">
				
				<div class="tabbed">
					
					<div class="tab-content" style="display:block;">
						
						<div class="photos">
							<div class="cl">&nbsp;</div>

							<ul id="ulmain">

							    <li>
							    	<div class="image">
							    		<a href="" id="go"><img src="images/if_image_add_103590.png" style="opacity: 0.4"/></a>
							    	</div>
							    	
							    	
							    	</li>
							    	<?php
									for ($i = 0; $i < count($images); $i++){
									echo ' <li>
							    	<div class="image">
							    		<a href="#" title=""><img src="'.$images[$i]["path"].'" alt="" /></a>
							    	</div>
							    	
							    </li>';
								}

								?>

							   
							</ul>
							<img src="images/801.gif" alt="" style="opacity: 0.7; display: none;margin: auto;" id="waiting" hidden >
							<div class="cl">&nbsp;</div>
						</div>
					</div>
					
					
				</div>
				
				<!-- Brands -->
				<div class="brands">
					<h3>Brands</h3>
					<div class="logos">
						<a href="#"><img class="b_img" src="images/if_nikon_294645.png" alt="" /></a>
						<a href="#"><img class="b_img" src="images/if_pinterest_2537824.png" alt="" /></a>
						<a href="#"><img class="b_img" src="images/if_canon_294694.png" alt="" /></a>
						<a href="#"><img class="b_img" src="images/if_Lightroom_2529526.png" alt="" /></a>
						<a href="#"><img class="b_img" src="images/if_starbucks_294657.png" alt="" /></a>
					</div>
				</div>
				<!-- End Brands -->
				
				<!-- Footer -->
				<?php require_once "blocks/footer.php" ?>
				
			</div>
			<!-- End Container -->
			
		</div>
		<!-- End Content -->
		
	</div>
</div>
<!-- End Main -->
	
</body>
</html>