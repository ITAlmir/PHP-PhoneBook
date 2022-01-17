<html>

<head>
<meta charset="UTF-8">
<title> Phonebook </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>

	<div id="wrap">
		<div id="search">

		<img style="float:inherit" src="img/deletecontact.png">
		
		<b>	<a style="float:left" href="index.php">trazi<br> <img src="img/phonebookimage.png" height="50px" title="Search"></a>
			<a style="float:right" href="insert.php">dodaj<br> <img src="img/addcontact.png" height="50px" title="Add new contact"> </a></b>
				<div style="clear:both"></div>

		</div>
		<?php
		
		require('inc/connect.php');
		$query = "SELECT * FROM contacts";
		$result = mysqli_query($conn,$query);
		
		if(mysqli_num_rows($result) > 0) {
			
			while($row = mysqli_fetch_assoc($result)) {
				?>
				
				<div id="result">
				
				<a href="inc/removeContact.php?id=<?php echo $row['id'] ?>"> <img src="img/removecontact.png"> </a>
				<p><b>Name: </b> <?php echo $row['fname'] . " " . $row['lname']; ?> </p>
				<p><b>Tel: </b> <?php echo $row['tel']; ?> </p>
				</div>
				<?php
			}
			
		} else {
			echo "No contacts!";
		}
		
		?>
		
	</div>

</body>

</html>