<!doctype html>
<html>
<head> 
<title>project</title>
<link rel="stylesheet" href="ss.css" type="text/css" media="all" />
</head>
<body>

       <?php 
	   session_start();

$link=mysqli_connect("localhost","root","","project")or die (mysqli_connect_error());




		if (isset($_POST["buy"])){
		    $name=$_POST["Name"];
		    $namec=$_POST["Country"];
			$namev=$_POST["VisaCard"];
			$names=$_POST["ssnNumber"];
		    $namep=$_POST["PhoneNumber"];
			$nameh=$_POST["houseNumber"];
		    $nameg=$_POST["GuaranteeBank"];
		    $namech=$_POST["ChargingCompany"];
			
			$submit=$_POST["buy"];
		
		if($submit=='Buy')
{
	$sql ="INSERT INTO `project`.`informition` (name,Country,Visacard,ssnnumber,Phonenumber,Housenumber,Guaranteebank,Chargingcompany)
			VALUES('$name','$namec',$namev,$names,'$namep',$nameh,'$nameg','$namech')";
		
 $qry= mysqli_query($link,$sql) or die(mysqli_error($link));
 header("Location:sssw.php");
}
}
	   ?>
	   <?php
	   
if(isset($qry)){

								if(isset($_SESSION["myArray"]))
								{
									
									
								    $tmp = $_SESSION["myArray"];
							
									
									foreach($tmp as $product)
 									{

										
										
										$product2=$product[2];
										
										$product4=$product[4];
										
										$product3=$product[3];
										
										$sql1="INSERT INTO `project`.`good`(name,price,quantity) VALUES ('$product2',$product4,$product3)";
	                                      $qry1= mysqli_query($link,$sql1) or die(mysqli_error($link));
									}
								}
}

	   ?>
<form action="sss3.php" method="POST">
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
					<div class="ee">
					         <div class="ee1">
							 
							     <img src="anoma img/141.jpg"> </img>
                                 <img src="anoma img/161.jpg"> </img>
                                 <img src="anoma img/157.jpg"> </img>
					             <img src="anoma img/167.jpg"> </img>
					            
							
							 </div>
							      <div class="ee2">
								 
							           <table align="center">
                                                 <tr class="uu1">
                                                           <td><label for="name">Name</label></td>
                                                           <td> <input class="uu3" name="Name" type="text" id="name"  placeholder="Full Name"required/> </td>
		                                         </tr>
                                                 <tr class="uu1">
		                                                    <td> <label for="Country">Country</label></td>
                                                            <td> <input  class="uu3" name="Country" type="text" id="Country" placeholder="Country/City" required/></td>
	                                             </tr>
		                                         <tr class="uu1">
	                                                        <td><label for="Visa-card">Visa-card</label></td>
		                                                    <td> <input class="uu3" name="VisaCard" type="password" id="Visa-card" placeholder="" required/></td>
	                                             </tr>
		                                         <tr class="uu1">
	                                                        <td> <label for="ssn-number">ssn-number</label></td> 
															  <td> <input class="uu3" name="ssnNumber" type="password" id="ssn-number" placeholder="" required/></td>
		                                         </tr>
		                                         <tr class="uu1">
		                                                    <td><label for="Phone-number">Phone-number</label></td>
		                                                    <td><input class="uu3" name="PhoneNumber" type="text" id="Phone-number" placeholder="+777-222-444"required/></td>
		                                         </tr>
		                                         <tr class="uu1">
		                                                    <td><label for="house-number">House-number</label></td>
			                                                <td><input  class="uu3" name="houseNumber" type="text" id="house-number" placeholder="Address-Number"required/></td>
		                                          </tr>
      	                                          <tr class="uu1">
		                                                     <td><label for="Guarantee bank">Guarantee-bank</label></td>
                                                             <td>  <input class="uu3" name="GuaranteeBank" type="text" id="Guarantee bank" placeholder="International Bank"required/></td>
	                                              </tr>	
		                                          <tr class="uu1">
		                                                      <td><label for="Charging company"> Charging company</label></td>
                                                              <td>  <input class="uu3" name="ChargingCompany" type="text" id="Charging company" placeholder="International Company Name"required/></td>
	                                              </tr>
		                                          <tr class="uu1">
		                                                      <td><label for="a">charging</label></td>
		                                          </tr>
		                                          <tr class="uu1">
		                                                     <td colspan="2"><input class="uu6" type="radio" name="a" checked="checked">air
		                                                     <input class="uu6" type="radio" name="a">land <input class="uu6" type="radio"name="a" required>see </td> 
	                                              </tr>
	                                              <tr class="uu1">
	                                                       	 <td><input id="vv" type="submit" name="buy" value="Buy" height="50" required></td> 
	                                                         <td><input id="vv" type="reset"  name="clean"value="Clean" height="50"required></td>
		                                          </tr>
      
			                         </table>
							 
							 
							      </div>
					        <div class="ee1">
	
							     <img src="anoma img/137.jpg"> </img>
                                 <img src="anoma img/159.jpg"> </img>
                                 <img src="anoma img/156.jpg"> </img>
					             <img src="anoma img/173.jpg"> </img>
							 
						    </div>
					
					</div>
						   
             <div class="nn3">
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