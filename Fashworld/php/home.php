<?php
    include 'dbConfig.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashworld-Home</title>
    <link rel="stylesheet" href="../styles/style.css" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">

</head>

<body>
    <div class="jumbotron home-hero">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.html">Fashworld</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="../php/home.php">Home<span class="sr-only">(current)</span></a></li>
                        <li class="active"><a href="../php/catalog.php">Catalog<span class="sr-only">(current)</span></a></li>
                        <li class="active"><a href="../contact.html">Contact<span class="sr-only">(current)</span></a></li>
                        <li class="active"><a href="../about.html">About<span class="sr-only">(current)</span></a></li>

                    </ul>
					<form  class="navbar-right">
						<button type="button" class="button button-accent" data-toggle="modal" data-target="#registermodal" >Register</button>
						<button type="button" class="button button-accent" data-toggle="modal" data-target="#loginmodal" >Log in</button>
						


                        <div id="divform">
						<!-- Register MODAL -->
						<div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
								

									<div class="modal-header">
										<h5 class="modal-title" id="registermodal">Register</h5>
										
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									</div>
								
									<!--Register Modal -->

										<div class="modal-body">
										
											<div id="div-register-msg">
												<div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
												<span id="text-register-msg">Register an account.</span>
											</div>			
											
											<input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
											<input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
											<input id="register_password" class="form-control" type="password" placeholder="Password" required>
                                            <input id="register_account" class="form-control" type="text" placeholder="Account Number" required>
										</div>
									
										<div class="modal-footer">
										
											<div>
												<button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
											</div>
											
											<div>
												<button id="register_login_btn" type="button" class="btn btn-link" data-toggle="modal" data-target="#loginmodal" >Log In</button>
												<button id="register_lost_btn" type="button" class="btn btn-link" data-toggle="modal" data-target="#lostmodal">Lost Password?</button>
											</div>
										
										</div>
									<!--End register-form -->
								</div>
								
							</div>
						</div>	
						
						
						<!-- LOGIN MODAL -->
						<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
								

									<div class="modal-header">
										<h5 class="modal-title" id="loginmodal">Log In</h5>
										
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									</div>
								
									<!--Login Modal -->
									<div class="modal-body">
										<div id="div-login-msg">
											<div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
											<span id="text-login-msg">Type your username and password.</span>
										</div>
										<input id="login_username" class="form-control" type="text" placeholder="Username" required>
										<input id="login_password" class="form-control" type="password" placeholder="Password" required>
										<div class="checkbox">
											<label>
												<input type="checkbox"> Remember me
											</label>
										</div>
									</div>
														
									<div class="modal-footer">
										<div>
											<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
										</div>
									</div>
									<!--End login modal -->
								</div>
								
							</div>
						</div>
						
						
						<!-- Lost Password MODAL -->
						<div class="modal fade" id="lostmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
																
									<!--Lost Password Modal -->

									<div class="modal-body">
										<div id="div-lost-msg">
											<div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
											<span id="text-lost-msg">Type your e-mail.</span>
										</div>
										<input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
									</div>
									<div class="modal-footer">
										<div>
											<button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
										</div>
									</div>
									<!--End Lost Password Modal -->
								</div>
								
							</div>
						</div>	
						
					</div>
					</form>
				</div>

            </div>
                <!-- /.navbar-collapse -->
    
            <!-- /.container-fluid -->
				
        </nav>


        <div class="container">

            <h1 class="page-header">
                <img src="../img/logowide.png" width="200" height="200"> <br><small>Making style simple</small>
            </h1>
        </div>

        <a href="../php/catalog.php" class="button button-accent">Shop Now</a>
	</div>

    <div class="container">
        <section class="home-about">
            <div class="home-about-textbox">
                <h1>Who We Are</h1>
                <p>
                    <strong> Fashworld </strong> is a platform that aims to give start-up "streetwear" fashion brands an opportunity to make their business profitable by offering sevices thtat will improve their internet presence.
                </p>
            </div>
        </section>
    </div>

    <div class="container portfolio">
        <h1 class="h1-split">Feature Items</h1>

                <!--portfolio item 01-->
        <figure class="port-item">   
                        
            <img src="../img/portfolio-item-1.png" alt="portfolio item">
                        
            <?php
            //get rows query
            $query = $db->query("SELECT * FROM products WHERE id = '1' ORDER BY id DESC LIMIT 10");
             if($row = $query->fetch_assoc()){
            ?>

            <figcaption class="port-desc">
            
                <h4><?php echo $row["name"]; ?></h4>
                <h4><?php echo 'R'.$row["price"].' ZAR'; ?></h4>
                <a href="../php/cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="button button-accent button-small">
                 Add To Cart
                </a>
            </figcaption>
            <?php } else {?>
                <p>Product(s) not found...</p>
            <?php } ?>
            
        </figure>

        <!--portfolio item 02-->
        <figure class="port-item">   
                        
            <img src="../img/portfolio-item-2.png" alt="portfolio item">
                        
            <?php
            //get rows query
            $query = $db->query("SELECT * FROM products WHERE id = '2' ORDER BY id DESC LIMIT 10");
             if($row = $query->fetch_assoc()){
            ?>

            <figcaption class="port-desc">
            
                <h4><?php echo $row["name"]; ?></h4>
                <h4><?php echo 'R'.$row["price"].' ZAR'; ?></h4>
                <a href="../php/cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="button button-accent button-small">
                 Add To Cart
                </a>
            </figcaption>
            <?php } else {?>
                <p>Product(s) not found...</p>
            <?php } ?>
            
        </figure>
        
        <!--portfolio item 03-->
        <figure class="port-item">   
                        
            <img src="../img/portfolio-item-3.png" alt="portfolio item">
                        
            <?php
            //get rows query
            $query = $db->query("SELECT * FROM products WHERE id = '3' ORDER BY id DESC LIMIT 10");
             if($row = $query->fetch_assoc()){
            ?>

            <figcaption class="port-desc">
            
                <h4><?php echo $row["name"]; ?></h4>
                <h4><?php echo 'R'.$row["price"].' ZAR'; ?></h4>
                <a href="php/cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="button button-accent button-small">
                 Add To Cart
                </a>
            </figcaption>
            <?php } else {?>
                <p>Product(s) not found...</p>
            <?php } ?>
            
        </figure>

    </div>
	


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>