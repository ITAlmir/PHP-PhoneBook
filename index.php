<html>

 <head>
 <meta charset="UTF-8">
 <title>Phonebook</title>
 <link rel="stylesheet" type="text/css" href="css/style.css">
   <body>
    <div id="wrap">
	 <div id="search">
	   <img src="img/phonebookimage.png">
	    <a style="float:left" href="insert.php">dodaj<br><img src="img/addcontact.png" title="Add new contact" height="50px"></a>
        <a style="float:right" href="remove.php">izbrisi<br> <img src="img/removecontact.png" title="Remove contact" height="50px"></a><br>
	<div>	 <form action="#" method="get">
		  <input type="text" pleaseholder="Search Phone Boook" name="criteria">
		  <input type="submit" value="search"><br>
		 </form></p>
       </div>
	 </div>
	 <?php
	 include("inc/getResults.php") ;
	 ?>
	</div>
   </body>
 </head>

</html>