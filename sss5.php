<!doctype html>
<html>
<head> 
<title>project</title>
<link rel="stylesheet" href="ss.css" type="text/css" media="all" />
</head>
<body>
  <form>
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
				                <label>Search<input  id="ser" type="text" placeholder="search" /></label>
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
						   <div class="why">
						
						   <div class="pppp2">
						     <img src="anoma img/202.jpg"> </img>
						   </div>

	                     
					  <?php

								session_start();
								if(isset($_SESSION["myArray"]))
								{
									
									$str =" ";
									$str .= "<div class=\"ppp\"><div class=\"ppp1\">";
								    $tmp = $_SESSION["myArray"];
							
									$counter = 0;
									foreach($tmp as $product)
 									{

										$str .= "<div class=pp>";
										$str .= "<div class=pp1><img src=\"$product[1]\"> </img></div>";
										 $str .= "<div class=pp2>$product[2]<br>$product[4]<br>Quntity:$product[3]</div>";
										$str .= '<div class="pp3"><a href="del.php?key='. $counter++ .'">X</a></div>';
										$str.='</div>';
				                     	
									}
									
									
									
									$str.='<div class="p12">';
									$str.=' <div class="pppp3"> <h3> <a href="sss3.php">Check-out </a></h3></div>';
									$sum=0;
									foreach($tmp as $product)
									{
										$resul=($product[4]*$product[3]);
									
										$sum+=$resul;
									
									}
									$str.= "<div class=\"pppp4\"><h3>Total:$sum$</h3></div>";
									
								
								
									
							                
									$str.="</div>";
									
									$str.= "</div></div>";
								
									echo $str;

																
								}
                        ?>
						
			
  </div>				 
							
					 </div>
    	</div>
	</form>	
</body>
</html>