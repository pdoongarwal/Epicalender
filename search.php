<html>
	<head>
		<title>Search</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/search.css">
	    <script src="js/html5shiv.min.js"></script>
	    <script src="js/respond.min.js"></script>
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
		        	<a href="Signup.php" class="btn btn-warning navbar-btn navbar-right">Login</a>
		         	<ul class="nav navbar-nav">
				        <li><a href="template.html">Home</a>
					</ul>
		      	</div>
		    </div>
	   	</nav>

	   	<div class="jumbotron" id="search">
	      
	      	<div class="container text-center">
	      		<h1>NEVER MISS AN EPISODE</h1>
	      		<p></p>
	      		<div class="row">
	      			<form action="search.php" method="post">
		      		<div class="col-lg-6-center">
					    <div class="input-group input-group-lg">
					    	
					      	    <input type="text" class="form-control" name="showname"placeholder="Search for a TV show...">
					      	    <span class="input-group-btn">
					        	  <button class="btn btn-default" type="submit">Go!</button>
					      	    </span>

					      	   
					    </div><!-- /input-group -->
					</div><!-- /.col-lg-6 -->
					</form> 
				</div>
			</div>
	    </div>

	    <div class="container">

			<?php

                if(isset($_POST['showname'])){

			    $showname=strtolower($_POST['showname']);

			    $url="http://api.tvmaze.com/search/shows?q=$showname";

			 
			    $ch=curl_init();

			    curl_setopt($ch,CURLOPT_URL,$url);

			    curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);

			    $response=curl_exec($ch);

			    curl_close($ch);

			    $response=json_decode($response,true);

			    $numberofitems=count($response);


			    for($i=0;$i<$numberofitems;$i++){
			?>

			<div width="70%">

			    <?php

				    $res=$response[$i];

				    $show=$res['show'];

				    $url=$show['url'];

				    $name=$show['name'];

				    $id=$show['id'];

				    $status=$show['status'];

				    $genres=$show['genres'];

				    $premiered=$show['premiered'];

                    $genrecount=count($genres);

                    //echo $genrecount."<br>";

				    $rating=$show['rating'];

				    $avgrating=$rating['average'];

				    $image=$show['image'];
 
				    $mediumimage=$image['medium'];

				    $summary=$show['summary'];
				?>

					<table class="table">
						<tr>
							<td>
								<div class="panel-body" id="photo">
									<?php
										echo "<img src=$mediumimage><br><br>";
									?>
								</div>
							</td>

							<td>
								<div class="panel-body" id="titleAndRating">
									<table width="100%">
										<tr>
											<td>
												<div id="title">
													<?php
														echo "".$name;
													?>
												</div>
											</td>

											<td align="right">
												<div id="Rating">
													<?php
														echo "".$avgrating;
													?>
													<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												</div>
											</td>
										</tr>
									</table>
								</div>

								<div class="panel-body" id="genresAndPremiere">
									<table width="100%">
										<tr>
											<td>
												<div id="genre">
													<span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
										            <?php
										                echo "";
										                for($j=0;$j<$genrecount;$j++){
										                    echo $genres[$j]." ";
										                }
										            ?>
												</div>
											</td>
											<td align="right">
												<div id="premiere">
													<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
													<?php
														echo "".$premiered;
													?>
												</div>
											</td>
										</tr>
									</table>
								</div>

								<div class="panel-body" id="summary">
									<?php
							   			echo "".$summary;
							   		?>
							   	</div>

							   	<div class="panel-body" id="Status">
									<table width="100%">
										<tr>
											<td>
												<div id="more">
													<?php
														echo "Know More...";
													?>
												</div>
											</td>

											<td align="right">
												<div id="status">
													<span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span>
													<?php
														echo "".$status;
													?>
												</div>
											</td>
										</tr>
									</table>
								</div>
							</td>
						</tr>
					</table>
			</div>
				    
			<?php
					}
			    }
			?>
		</div>
	   	

	   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
