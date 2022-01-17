<html>

 <head>
 <meta charset="UTF-8">
 <title>Phonebook</title>
 <link rel="stylesheet" type="text/css" href="css/style.css">
   <body>
    <div id="wrap">
	 <div id="search">
	 		<form action="#" method="POST">

        	 <label>USER NAME :
       <input type="text" name="user"></label><br>
	   <label>PASSWORD:<br>
	   <input type="password" name="pass"></label><br>
<input type="submit" name="insert" value="potvrdi">	 
</form>
  <?php


$user1 ="almir";
$pass1 ="21081982";


		
		if(isset($_POST['insert']) && isset($_POST['user'])===$user1 && isset($_POST['pass'])===$pass1) {
			
				echo "loged in";}
			 else {
				echo "Error!";
			}

?>
       </div>
	 </div>
   </body>
 </head>

</html>
