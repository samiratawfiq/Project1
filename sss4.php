<!doctype html>
<html>
<head> 
<title>project</title>
<link rel="stylesheet" href="ss.css" type="text/css" media="all" />
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
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
	
								
                            				
                               <?php
							   	$tmp1=null;
							if (isset($_GET["id"])){
							$id=$_GET["id"];
						$connect=mysqli_connect("localhost","root","","project")
						  or die (mysqli_connect_error());
						 
							$sql="SELECT * FROM prodect WHERE id=$id"; 
						    $gry=mysqli_query($connect,$sql) or die (mysqli_connect_error( $connect));
							$tmp1 = mysqli_fetch_assoc($gry);
							
							}
							else {
										session_start();
										$tmp = array();
										if(isset($_SESSION["myArray"]))
										{
											$tmp = $_SESSION["myArray"];
											
										}
										
										if(isset($_POST["add"]))
										{   
											$item = array();
											
											
											$id=$_POST["id"];
											$item[] = $id;
											
											$img = $_POST['product_img'];
											$item[] = $img;
									
											
										    $name=$_POST["name1"];
											$item[]=$name;
											
											$newquant = $_POST["quant"];
											$item[] = $newquant;
											
											$price=$_POST["price"];
											$item[]=$price;
											
											$tmp[] = $item;
											$_SESSION["myArray"] = $tmp;
										  
								}
                                    header("LOCATION:sss1.php");
							}
										?>
										<?php
										
										
										?>
										
										

							
						   <div class="hh">
						           <div class="hh1">
								         <div class="hh2">
								                <img src="<?php echo $tmp1["img"];?>"> </img>
										 </div>
										 <div class="hh3">
										       
										           <a href="sss5.php"><input class="ww1" type="submit" name="show" value="Show"/></a>
										      
										       <div>
											        <input type=hidden  name = product_img value = "<?php echo $tmp1["img"]; ?>" />
											        <input type=hidden name = name1  value = "<?php echo $tmp1["name"]; ?>"/>
													<input type=hidden name = price value = "<?php echo $tmp1["price"];?>"/>
													
										             <input class="ww1" type="submit" name="add" value="Add To cart"/>
												   </div>
												 
										 </div>
								   </div>
										
								   <div class="hh4">
								     <p><?php echo $tmp1["name"];?><br><?php echo $tmp1["detils"];?><br><?php echo $tmp1["price"]."\$";?><br>
								   
								   <label>Quantity <input  class="uu3" type="text" name="quant"  value="" required></label></p>
								   
								   </div>
														
										
											
								   <div class="ww3">
								        <img src="anoma img/5.jpg"> </img>
								        <img src="anoma img/97.jpg"> </img>
										<img src="anoma img/1.jpg"> </img>
								   </div>
						   </div>
						    <div class="nn5">
	                             <div id="ff">
                                 <img src="anoma img/tt1.jpg"> </img>
                                      <img src="anoma img/tt2.jpg"> </img>
                                      <img src="anoma img/tt3.jpg"> </img>
				
                                  </div>
				
				                  <div id="ff1">
				
				                       <h1> Copy right  for Anoma website </h1>
				
				                  </div>
                           </div>

			  </div>
  </div>
  </form>
</body>
</html>  