<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  
  <title>Create Account-GFLOCK.LK</title>
		<style>
			div.TOP img{
				width:11%;
				padding-top:7px;
				padding-left:362px;
				
			}
			
			hr {
				display: block;
				height: 1px;
				border: 0;
				border-top: 1px solid #ccc;
				margin: 1em 0;
				padding: 0; 
			}
			
			#signin{
				font-family: Arial, Helvetica, sans-serif;
				color:#5B5B5B;
				font-size:12px;
				padding-top:50%;
				text-decoration: none;
			}
			
			#SearchBar{
				border-radius:5px;
				height:45px;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				border-radius: 7px;
				box-sizing: border-box;		
				background-image: url('searchicon.png');
				background-position: 2px 12px; 
				background-repeat: no-repeat;
				
				
			}
			
			div.column{
				float:left;
			}
			div.menuBar{
				font-family: Arial, Helvetica, sans-serif;
				font-size:15px;
				padding-left:10%;
				
			}
			
			.button {
				
				border: none;
				color: white;
				padding: 16px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				-webkit-transition-duration: 0.4s;
				transition-duration: 0.4s;
				cursor: pointer;
				border-radius:8px;
				
			}
	
			.button1 {
				background-color: white;
				color: black;
				border: 2px solid #e7e7e7;
			}
			
			.button2 {
				background-color: black;
				color: white;
				border: 2px solid #e7e7e7;
			}

			.button1:hover {
				background-color: #e7e7e7;
			}	
			
			.topic{
				font-family: Arial, Helvetica, sans-serif;
				font-size:15px;
				padding-left:15%;
			}
			
			input{
				width: 50%;
				padding: 12px 20px;
				margin: 8px 0;			
				border: 1px solid #ccc;
				border-radius: 4px;	
				align:center;
				
				
			}
			p.form{
				font-family: Arial, Helvetica, sans-serif;
				font-size:15px;
				
			}
		</style>
    <meta charset="utf-8">

    <!-- cdn script imports-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>

    <!-- cdn css import -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">

    <!-- custom script and css import -->
    <script type="text/javascript" src="js/main/script.js"></script>
    <link rel="stylesheet" href="css/main/style.css">
    <title></title>
  </head>
  <body>

      <!-- header -->
    <?php include 'includes/header.php' ?>

	<hr size="1">
		
		<div class="MID" id="test">
		
			<div class="topic">
				<h2>Billing Details</h3>
				<hr size="1" width="70%">
			</div>
			<div class="form" style="margin-left: 500px;">
				<form action="index2.php">
				
					<p class="form">Full Name</p>
					<input type="text" />
					
					<p class="form">Billing Address</p>
					<input type="text" />
					
					<p class="form">Phone Number</p>
					<input type="text" /><br/>
			
					
					<button class="button button2">UPDATE</button>
					
					
				</form>
					
			</div>
			
		</div>
    <!-- footer -->
    <?php include 'includes/footer.php'; ?>
  </body>
</html>