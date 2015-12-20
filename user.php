<!DOCTYPE html>
<html lang="en">
	<head>
		  	
  		<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Epicalender</title>
	    <link href="css//bootstrap1.min.css" rel="stylesheet">
	    <link href="css//user.css" rel="stylesheet">
	    <script src="js/html5shiv.min.js"></script>
	    <script src="js/respond.min.js"></script>
	    <script type="text/javascript" src="js/template.js"></script>
  	</head>

  	
  	<body>
  		<nav class = "navbar navbar-default navbar-fixed-top" id ="my-navbar">
			<div class = "container-fluid">
			    <div class = "navbar-header">
			      	<button type="button" class ="navbar-toggle" data-toggle = "collapse" data-target ="#navbar-collapse">
				    	<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				  	</button>
		         	<a href="#" class="navbar-brand">Epicalender</a>	
			    </div>
		       
		      	<div class="collapse navbar-collapse" id="navbar-collapse">
		      		<form class="navbar-form navbar-left" role="search" action="search.php" method="post">
				        <div class="form-group left">
				            <input type="text" class="form-control" name="showname" placeholder="Search shows..">
				        </div>
			    	</form>
		         	<ul class="nav navbar-nav">
				        <li><a href="">Home</a>
				        <li><a href="">My Stats</a>
				        <li><a href="">Settings</a>
					</ul>
		      	</div>
		    </div>
	   	</nav>

	   	<table>
	   		<tr>
	   			<td>
				   	<div class="container">
					   	<div id="UserProfile">
					   		<div id="MiniProfile">
					   			<div id="Name">
					   			</div>
					   			<div id="ProfilePicture">
					   			</div>
					   			<div id="HoursWatched">
					   			</div>
					   			<div id="NoShowsFollowed">
					   			</div>
					   		</div>
					   		<div id="ShowsFollowed">
					   			<h4>FOLLOWED</h4>
					   			<div id="ListOfShowsFollowed">
					   				<table>
					   					<tr>
					   						<td></td>
					   						<td></td>
					   						<td></td>
					   						<td></td>
					   					</tr>
					   					<tr>
					   						<td></td>
					   						<td></td>
					   						<td></td>
					   						<td></td>
					   					</tr>
					   				</table>
					   			</div>
					   		</div>
					   		<div id="TrendingShows">
					   			<h4>SUGGESTION</h4>
					   			<div id="ListOfTrendingShows">
					   				<table>
					   					<tr>
					   						<td></td>
					   						<td></td>
					   						<td></td>
					   						<td></td>
					   					</tr>
					   					<tr>
					   						<td></td>
					   						<td></td>
					   						<td></td>
					   						<td></td>
					   					</tr>
					   				</table>
					   			</div>
					   		</div>
					   	</div>
					</div>
				</td>
				<td>
					<div class="container">
						<div id="Calendar">
						</div>
					</div>
					</td>
			</tr>
		</table>
  		<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script-->
	    <script src="js/bootstrap.min.js"></script>
  	</body>
  	</html>