<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en">

	<head>
		<title>MetHotel</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		
		<!-- Bootstrap Date-Picker Plugin -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
		
		<?php include 'function.php'; ?>
		<?php include 'baza.php'; ?>
		
		
		<style>
		.modal-header, h4, .close {
			background-color: #5cb85c;
			color:white !important;
			text-align: center;
			font-size: 30px;
		}
		.modal-footer {
			background-color: #f9f9f9;
		}

		</style>
	</head>
	
	<body>
	

	<div class="container">
	

	    	<!-- Modal za login formu-->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header" style="padding:35px 50px;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
						</div>
						<div class="modal-body" style="padding:40px 50px;">
						
							<form role="form" action="login.php" method="POST">
							
							<div class="form-group">
								<label for="usrname">Username</label>
								<input type="text" class="form-control" name="usrname" id="usrname" placeholder="Enter username">
							</div>
							<div class="form-group">
								<label for="psw">Password</label>
								<input type="password" class="form-control" name="psw" id="psw" placeholder="Enter password">
							</div>
							
							<div class="checkbox">
								<label><input type="checkbox" value="" checked>Remember me</label>
							</div>
							
							<button type="submit" name="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
							
							</form>
						</div>
						
						<div class="modal-footer">
							<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
						<!--	<p>Not a member? <a href="#">Sign Up</a></p> -->
							<p>Forgot <a href="#">Password?</a></p>
						</div>
					</div>

				</div>
			</div> 

			
			<!-- Modal za registraciju-->
			<div class="modal fade" id="myModalRegistration" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header" style="padding:35px 50px;">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>Registration</h4>
						</div>
						<div class="modal-body" style="padding:40px 50px;">
						
							<form role="form" action="signup.php" method="POST">
							
							<div class="form-group">
								<label for="usrname">Ime</label>
								<input type="text" class="form-control" name="ime" id="ime" placeholder="Enter name" required>
					
							</div>
							
							<div class="form-group">
								<label for="usrname">Prezime</label>
								<input type="text" class="form-control" name="prezime" id="prezime" placeholder="Enter last name" required>
					
							</div>
							
							<div class="form-group">
								<label for="usrname">Username</label>
								<input type="text" class="form-control" name="usrname" id="usrname" placeholder="Enter username" required>
							</div>
							
							<div class="form-group">
								<label for="psw">Password</label>
								<input type="password" class="form-control" name="psw" id="psw" placeholder="Enter password" required>
							</div>
	
							<!-- resenje = dodati name="submit" da bi php prihvatio -->
							<button type="submit" name="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Save</button>
							
							</form>
						</div>
						
						<div class="modal-footer">
						    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
							<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
						
						</div>
					</div>

				</div>
			</div> 
		
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
				
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<a class="navbar-brand" href="#">MetHotel</a>
					
				</div>
				
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">O nama</a></li>
						<li><a href="#">Aktuelnosti</a></li>
						<li><a href="#">Kontakt</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
					<!--	<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
					<!--	<li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Login</a></li> -->
					    <li><button type="button" class="btn btn-default btn-lg" id="myBtn1">Sign up</button></li>
						
						<?php if(!isset($_SESSION['username'])){ ?>
						
						<li><button type="button" class="btn btn-default btn-lg" id="myBtn">Login  </button></li>
						
						<?php }else{ ?>

						<li><button onclick="window.location.href='logout.php'" type="button" class="btn btn-default btn-lg" id="myBtn2">Log out</button></li>
						
					    <?php }  ?>
					   
						
					</ul>
				</div>
				
			</div>
		</nav>

		<div class="jumbotron">
			<h1>MET HOTEL</h1>
			
		    <?php 
		
			$tekst = getBrowser();
			echo "Browser  : " . $tekst['name'] . "</br>"; 
			echo "Platform  : " . $tekst['platform'] . "</br>"; 
			echo "ip : " . get_ip_address() . "</br>";
			
			if(isset($_SESSION['username'])){
				echo "Vase ime je : " . $_SESSION['username'];
			}
		//	dodajKorisnik("nesa","djuricic","nesa","123");
        //    echo proveriKorisnika("nesa","123");
			
		    ?>

		</div>
		
		<div class="row">
		
			<div class="col-sm-4">
				<h3>Aktuelno</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
			</div>
			
			<div class="col-sm-4">
				<h3>HIT ponuda</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
			</div>
			
			<div class="col-sm-4">
				<h3>Preporuke</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
			</div>
		
		</div>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images\slika10.jpg" alt="Chania">
				</div>

				<div class="item">
				    <img src="images\slika20.jpg" alt="Chania">
				</div>

				<div class="item">
				    <img src="images\slika30.jpg" alt="Flower">
				</div>

				<div class="item">
				    <img src="images\slika40.jpg" alt="Flower">
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	
		<div>
		
			<h2>Rezervacija sobe</h2>

			
			<form role="form">
			
			    <label>Izaberite tip sobe:</label>
			    <select class="form-control">
	                <option>Jednokrevetna Soba</option>
	                <option>Dvokrevetna Soba</option>
	                <option>Trokrevetna Soba</option>
	            </select>
				

				
				<div class="form-group">
					<label for="email">Ime i prezime:</label>
					<input type="email" class="form-control" id="email" placeholder="Unesite ime i prezime">
				</div>
				
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email" placeholder="Unesite email">
				</div>
				
				
			
				<div class="form-group"> <!-- Date input -->
					<label class="control-label" for="date">Check in date : </label>
					<input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
			    </div>
			  
			  
			    
				<div class="form-group"> <!-- Date input -->
					<label class="control-label" for="date">Check out date : </label>
					<input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
			    </div>
				
				
				
				<div class="checkbox">
					<label><input type="checkbox"> Hitno mi odgovorite!</label>
				</div>
				
				
		
				<button type="submit" class="btn btn-primary">Proveri dostupnost</button>
		    </form>
		</div>
		

	
		<!--   podatak koji korisnik lose unese 
		<div class="alert alert-danger" role="alert">
			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			<span class="sr-only">Greška:</span> Unesite validnu email adresu
		</div>
		-->
		
		<h2>Izdvajamo iz nase ponude</h2>
		<p></p>
		
		
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Period</th>
					<th>Soba</th>
					<th>Popust</th>
				</tr>
			</thead>
			
			<tbody>
				<tr>
					<td>Jun</td>
					<td>Trokrevetna</td>
					<td>30%</td>
				</tr>
				<tr>
					<td>Jul</td>
					<td>Trokrevetna</td>
					<td>30%</td>
				</tr>
				<tr>
					<td>Avgust</td>
					<td>Jednokrevetna</td>
					<td>30%</td>
				</tr>
			</tbody>
		</table>
		
		
		
		<nav>
			<ul class="pagination">
				<li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
				</li>
			</ul>
		</nav>
		

		
	</div>
	
	<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
   
	$(document).ready(function(){
		$("#myBtn").click(function(){
			$("#myModal").modal();
		});
	});
	
	$(document).ready(function(){
		$("#myBtn1").click(function(){
			$("#myModalRegistration").modal();
		});
	});
	
	

	
	</script>
	
	
	</body>
</html>