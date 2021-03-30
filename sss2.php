<!doctype html>
<html>
<head> 
<title>project</title>
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="ff2/style.css" />
<script type="text/javascript" src="ff2/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<link rel="stylesheet" href="ss.css" type="text/css" media="all" />
</head>
<body>
      <form action="<?php echo$_SERVER["PHP_SELF"];?>" method="POST">
	  <?php  
	  $link=mysqli_connect("localhost","root","","project")or die (mysqli_connect_error());
	  
	  if(isset($_POST["Send"])){
	   $name= $_POST['Name'] ;
	   $email= $_POST['email'] ;
       $phone =  $_POST['Phone-number'];
	   $comm=$_POST['comm'];
	   $submit=$_POST["Send"];
      if($submit=='Send')
	  {
		  $sql="INSERT INTO `project`.`use1`(comment,Email,Name,Phone) VALUES 
		           ('$comm','$email','$name','$Phone')";
		  		
 $qry= mysqli_query($link,$sql) or die(mysqli_error($link));
 header("Location:sssw.php");
  		
	
}
	  }
	  ?>
        <div id="rr">
              <div class="ano">

                  <div class="ano1">
				    <div class="ty2">
						 <img src="anoma img/250.jpg"> </img>
						</div>
				  <div class="ty1">
			            <img src="anoma img/190.jpg"> </img>
						</div>
						
				   </div> 
						
						   <div class="mm">
				                <label>Search<input  id="ser" type="text"  placeholder="search" /></label>
				           </div>
				         
						   <div class="d7">
			
					            <ul>
                                     <li>
				                         <a href="sss.php"> Home </a> </li>
			                         
			                          <li>
				                          <a href="sss1.php">Products </a> </li>
				                      <li>  
				                          <a href="sss3.php"> Buying  </a> </li>
				                      <li>
				                           <a href="sss2.php"> Contact </a> </li>
									  <li>
				                            <a href="sss5.php"><img src="anoma img/cart2.jpg"></a> </li>
			                    </ul>
					
					       </div>
						      <div class="content4">
							  
							     <div class="bb">
								 <p>
					Anoma is a new company worldwide which started as the needs of ladies and girls of jewelleries. 
					 Anoma’s products are from different perfect brands in the world like Dior and Magesty 
					 …..Anoma is located in Yemen country ,Sana’a province ,Huda street infront of YemenMall. 
					 for commercial advertising your goods in our websites you would like to fill up your 
					 information in the block below. for your enquiries ,questions and comments you could 
					 write comments below.
                                </p>
								 </div>
								     <div class="bb1">
									  
									   <img src="anoma img/119.jpg"> </img>
									 
								     </div>
					
						      </div>
							      <div class="content5">
							  
							     <div class="bb2">
								  <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="fff/images/143.jpg" alt="143" title="143" id="wows1_0"/></li>
		<li><img src="fff/images/123.jpg" alt="123" title="123" id="wows1_1"/></li>
		<li><img src="fff/images/126.jpg" alt="126" title="126" id="wows1_2"/></li>
		<li><img src="fff/images/127.jpg" alt="127" title="127" id="wows1_3"/></li>
		<li><img src="fff/images/131.jpg" alt="131" title="131" id="wows1_4"/></li>
		<li><img src="fff/images/133.jpg" alt="133" title="133" id="wows1_5"/></li>
		<li><a href="http://wowslider.com"><img src="fff/images/136.jpg" alt="html slideshow" title="136" id="wows1_6"/></a></li>
		<li><img src="fff/images/138.png" alt="138" title="138" id="wows1_7"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="143"><span><img src="fff/tooltips/143.jpg" alt="143"/>1</span></a>
		<a href="#" title="123"><span><img src="fff/tooltips/123.jpg" alt="123"/>2</span></a>
		<a href="#" title="126"><span><img src="fff/tooltips/126.jpg" alt="126"/>3</span></a>
		<a href="#" title="127"><span><img src="fff/tooltips/127.jpg" alt="127"/>4</span></a>
		<a href="#" title="131"><span><img src="fff/tooltips/131.jpg" alt="131"/>5</span></a>
		<a href="#" title="133"><span><img src="fff/tooltips/133.jpg" alt="133"/>6</span></a>
		<a href="#" title="136"><span><img src="fff/tooltips/136.jpg" alt="136"/>7</span></a>
		<a href="#" title="138"><span><img src="fff/tooltips/138.png" alt="138"/>8</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">carousel bootstrap</a> by WOWSlider.com v7.8</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="ff2/wowslider.js"></script>
<script type="text/javascript" src="ff2/script.js"></script>
<!-- End WOWSlider.com BODY section -->
								 
								 </div>
								     <div class="bb3">
					                          <table  align="center">
					                                    <tr class="u">
					                                        <th>For advertisement</th>
                                                        </tr>
														<tr class="u">
                                                            <td>
                                                                   <label for="Name">Name</label></td>
                                                            <td><input class="uu7" name="Name" type="text" id="Name" placeholder="your name"/></td>
                                                        </tr>

	                                                    <tr class="u">
                                                            <td> <label for="email">Email</label></td>
                                                            <td> <input  class="uu7" name="email" type="email" id="email" placeholder="your Email"/></td>
                                                        </tr>
	  
	 
	                                                    <tr class="u">
                                                            <td> <label for="Phone-number">Phone-number</label></td>
                                                             <td> <input class="uu7" name="Phone-number" type="text" id="Phone-number" placeholder="your Phone-number" /></td>
		                                                </tr>
		                                                <tr class="u">
	                                                          <td> <input id="vv" type="submit" value="Send" height="50" name="Send"> </td>
	                                                          <td> <input id="vv" type="submit" value="Clean" height="50"> </td>
                                                        </tr>
					                           </table>
								     </div>
					
						     </div>

							     <div class="content6">
							  
							     <div class="bb4">
								   <h1>Comments</h1>
								   <textarea class="cc" col="12" rows="5" align="center" name="comm" placeholder="comments ^ - ^"></textarea>
								    <input id="vv" type="submit" value="Send" height="50" name="Send"> 
									 <input id="vv" type="reset" value="Clean" height="50"> 
								 </div>
								     <div class="bb5">
										    <img src="anoma img/125.jpg"> </img>
								     </div>
					       </div>
						    
				 <div class="nn4">
	             <div id="ff">
                    <img src="anoma img/tt1.jpg"> </img>
                                      <img src="anoma img/tt2.jpg"> </img>
                                      <img src="anoma img/tt3.jpg"> </img>
					
                </div>
				
				   <div id="ff1">
				
				    <h1> Copy right for Anoma website </h1>
				
				   </div>
             </div>
	       </div>
		</div>
	 </form>
</body>
</html>