<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Magical Contact Form // Php Mysql for websites</title>
		
		<link href="assets/css/style.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<?php
											// display form if user has not clicked submit
										if (!isset($_POST["submit"])) {
											?>
			<header>
				<img src="tricksway.gif" alt="TricksWay Coding Lab - Code Done by Abhishek" title="TricksWay Coding Lab - Code Done by Abhishek"/>
				<h2 class="fade">Magical Contact Form  </h2>
				</header>
				
			<h3 class="fade">Try It</h3>
			
			<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
				<label class="fade">
					<input name="field1" placeholder="Your good name please..." />
					<div class="arrow"></div>
				</label>
				<label class="fade">
					<input name="field2" placeholder="Your mail..sshhh we keep it private..."/>
					<div class="arrow"></div>
				</label>
				<label class="fade">
					<textarea name="field3" placeholder="Inputs or Textareas"></textarea>
					<div class="arrow"></div>
				</label>
				<br/>
				
				<input type="submit" name="submit" value="Submit"/>
				
			</form>
			<?php } else {
			
		 $database="database name"; //database name 
$name=$_POST['field1'];//this values comes from html file after submitting 
$email=$_POST['field2']; 
$message=$_POST['field3'];  
$con = mysql_connect("localhost","username" ,"password","database name");
if (!$con)     
{     die('Could not connect: ' . mysql_error());     }    
 mysql_select_db("$database", $con); 
 $sql="CREATE TABLE clientcontact(FirstName CHAR(30),LastName CHAR(30),Age INT,College CHAR(20))";
 $query = "INSERT INTO clientcontact (Name,Email,Message)VALUES ('$name','$email','$message')"; 
 mysql_query($query); 
 echo "<script type='text/javascript'>\n"; 
 echo "alert('Your message received...Thank You!!! ');\n";
 echo "</script>"; 
 mysql_close();
 
 ?>
 <header>
					<img src="tricksway.gif" alt="TricksWay Coding Lab - Code Done by Abhishek" title="TricksWay Coding Lab - Code Done by Abhishek"/><br/>
				<h2 class="fade">Thank you <?php echo "$name"?>...</h2>
				<h2 class="fade">For shearing your secret, We will contact Soon...</h2>
				</header>
				<img src="img.gif" alt="TricksWay Coding Lab - Code Done by Abhishek" title="TricksWay Coding Lab - Code Done by Abhishek"/>
				
				<?php } ?>
			
		
		</div>
		<script src="placeholdem.min.js"></script>
		<script>
			Placeholdem( document.querySelectorAll( '[placeholder]' ) );

			var fadeElems = document.body.querySelectorAll( '.fade' ),
				fadeElemsLength = fadeElems.length,
				i = 0,
				interval = 50;

				function incFade() {
					if( i < fadeElemsLength ) {
						fadeElems[ i ].className += ' fade-load';
						i++;
						setTimeout( incFade, interval );
					}
				}

				setTimeout( incFade, interval );
		</script>
		
	</body>
</html>