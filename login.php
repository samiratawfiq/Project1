<!doctype html>
<html>
<head> 
<head> 
<title>project</title>
<link rel="stylesheet" href="ss.css" type="text/css" media="all" />
</head>
<body>
  <form action="login.php"  method="post">
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
					
				
					
					       <?php 
	   session_start();

$link=mysqli_connect("localhost","root","","project")or die (mysqli_connect_error());




		if (isset($_POST["submit"])){
		    $e=$_POST["Email"];
		    $p=$_POST["pass"];
			
			$submit=$_POST["submit"];
		
		if($submit=='login')
{
$sql3 ="INSERT INTO `project`.`log`(email,pass)
			VALUES('$e','$p')";
		
 $qry3= mysqli_query($link,$sql3) or die(mysqli_error($link));
 header("Location:sss.php");
}
}
	   ?>	   
						   <div class="ii1">
						  Welcom To Anoma Websites
						  We Wish You Could<br> Find What You Want ^-^<br>
						 
						 <table>
						 <tr class="uu1">
						 <td> Email:</td>
						  <td><input class="uu3" type="email" name="Email" placeholder="Enter your Email"  required></td>
						 
						 </tr>
						  <tr class="uu1">
						  <td> Password:</td>
						   <td><input class="uu3" type="password" name="pass" placeholder="Enter your password" required></td>
						 </tr>
						  <tr class="uu1">
						   <td><input class="wm1" type="submit" value="login" name="submit"></td>
						 </tr>

						 </table>
						

						   
						   </div>
						    <div class="nn7">
	                             <div id="ff">
                                      <img src="anoma img/116.png"> </img>
                                      <img src="anoma img/108.png"> </img>
                                      <img src="anoma img/109.jpeg"> </img>
				
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