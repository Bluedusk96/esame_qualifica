<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PALESTRA</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/animate.css" rel="stylesheet" />
	<link href="css/prettyPhoto.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<div class="site-logo">
						<a href="index.html" class="brand">Cesena Fitness</a>
						
					</div>
				</div>					  

				<div class="col-md-10">	 
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="menu">
						<ul class="nav navbar-nav navbar-right">
							  <li><a href="#home">Home</a></li>
							  <!--  <li><a href="#about">About Us</a></li> -->
							 <!--   <li><a href="#portfolio">Prodotti</a></li> -->
							  <li><a href="#features">Offerte</a></li>				                                                                  								  
							  <li><a href="#contact">Contatti</a></li>
						</ul>
					</div>
					<!-- /.Navbar-collapse -->		 
				</div>
			</div>
		</div>		
	</nav>
   
    <div id="home">
		<div class="slider">
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators visible-xs">
						<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-slider" data-slide-to="1"></li>
						<li data-target="#carousel-slider" data-slide-to="2"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="images/A.jpg" class="img-responsive" alt=""> 
						</div>
					   <div class="item">
							<img src="images/B.jpg" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/C.jpg" class="img-responsive" alt=""> 
					   </div> 
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
		</div>
	</div>
   
	 
	
      <!-- <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInRight">
					<img src="images/1.png" class="img-responsive" />
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni autem minus sint, commodi.</p>
                </div><!--/.col-sm-6-->

              <!--   <div class="col-sm-6 wow fadeInDown">
                    <div class="accordion">
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  Web Design
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="images/accordion1.png">
                                        </div>
                                        <div class="media-body">
                                             <h4>Adipisicing elit</h4>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
								<div class="panel-body">
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
									3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									Brunch 3 wolf moon tempor.<br>
									
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
									non cupidatat skateboard dolor brunch.</p>
								</div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
								Brunch 3 wolf moon tempor.<br>
								
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
								non cupidatat skateboard dolor brunch.</p>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
								<div class="panel-body">
								   <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
									3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
									Brunch 3 wolf moon tempor.<br>
									
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
									non cupidatat skateboard dolor brunch.</p>
								</div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#about-->
   
	 <!--   <section id="portfolio">
		<div class="container">
			<div class="center">
				<div class="col-md-6 col-md-offset-3">
					<h2>Prodotti</h2>
					<hr>					
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
				</div>
			</div>
		</div> 
		
		
	
     <!--    <div class="container">
			<div class="col-lg-12">		
				<ul class="portfolio-filter text-center">
					<li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
					<li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
				</ul><!--/#portfolio-filter-->

		 <!--		<div class="row">
					<div class="portfolio-items">
						<div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/item1.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Business theme</a></h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
										<a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>
						</div><!--/.portfolio-item-->

			 <!--			<div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Business theme</a></h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
										<a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>          
						</div><!--/.portfolio-item-->

		 <!--				<div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Business theme</a></h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
										<a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>        
						</div><!--/.portfolio-item-->

			 <!--				<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/item4.png" alt="">
								<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Business theme</a></h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
										<a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>           
						</div><!--/.portfolio-item-->
			  
				<!--  	<div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/D.png" alt="">
						 	<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Business theme</a></h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
										<a class="preview" href="images/portfolio/full/D.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>      
						</div><!--/.portfolio-item-->

				<!--	<div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/E.png" alt="">
							<div class="overlay">
									<div class="recent-work-inner">
										<h3><a href="#">Business theme</a></h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
										<a class="preview" href="images/portfolio/full/E.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>         
						</div><!--/.portfolio-item-->

			<!--		<div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/F.png" alt="">
								<div class="overlay">
								<div class="recent-work-inner">
										<h3><a href="#">Business theme</a></h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
										<a class="preview" href="images/portfolio/full/F.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>          
						</div><!--/.portfolio-item-->

			 <!--			<div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
							<div class="recent-work-wrap">
								<img class="img-responsive" src="images/portfolio/recent/G.png" alt="">
								<div class="overlay">
								<div class="recent-work-inner">
										<h3><a href="#">Business theme</a></h3>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
										<a class="preview" href="images/portfolio/full/G.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
									</div> 
								</div>
							</div>          
						</div><!--/.portfolio-item-->
					</div>
				</div>
			</div>
		</div>
    </section><!--/#portfolio-item-->
	
	  <section id="features">
		<div class="container">
			<div class="row">
				<div class="center">
				<!-- 	<div class="col-md-12 col-md-offset-3">
						<h2>Prodotti</h2>
						<hr>					
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
					</div>  -->
				</div> 
				
				<div class="col-md-4 wow fadeInLeft">
					<h3>Offerte</h3>
					<img src="images/portfolio/recent/D1.jpg" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					non cupidatat skateboard dolor brunch.</p>
				</div>
				
				<div class="col-md-4 wow fadeInUp">
					<h3>Zumba</h3>
					<img src="images/portfolio/recent/D.jpg" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					non cupidatat skateboard dolor brunch.</p>
				</div>
				
				<div class="col-md-4 wow fadeInRight">
					<h3>Difesa Personale</h3>
					<img src="images/portfolio/recent/E.jpg" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					non cupidatat skateboard dolor brunch.</p>
				</div>
				
	 		<div class="col-md-4 wow fadeInRight">
					<h3>Pesistica</h3>
					<img src="images/portfolio/recent/F.jpg" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					non cupidatat skateboard dolor brunch.</p>
				</div>
				
				<div class="col-md-4 wow fadeInRight">
					<h3>Ginnastica Artistica</h3>
					<img src="images/portfolio/recent/G.jpg" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					non cupidatat skateboard dolor brunch.</p>
				</div>
				
				<div class="col-md-4 wow fadeInRight">
					<h3>Pole dance</h3>
					<img src="images/portfolio/recent/H.jpg" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					non cupidatat skateboard dolor brunch.</p>
				</div>
				
			
				
			</div>
		</div>		
	</section>
	

	
		
	
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2859.2416231432867!2d12.03835621551628!3d44.22268357910597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132b578e2852ac2b%3A0x6f22e05149571318!2sPiazza+Saffi+Aurelio%2C+47121+Forl%C3%AC+FC!5e0!3m2!1sit!2sit!4v1458769053915">
			</iframe>
		</div>
	<section id="contact">
		<div class="contact-page">
			<div class="container">
				<div class="center">        
					<h2></h2>						
				</div> 
				
				<div class="row contact-wrap">						
					<div class="status alert alert-success" style="display: none"></div>
					<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
						<div class="wow fadeInDown">
							<div class="col-sm-5 col-sm-offset-1">
								<div class="form-group">
									<label>Nome *</label>
									<input type="text" name="name" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Email *</label>
									<input type="email" name="email" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Telefono</label>
									<input type="number" class="form-control">
								</div>
								                       
							</div>
						</div>
						<div class="wow fadeInRight">
							<div class="col-sm-5">
								<div class="form-group">
									<label>Oggetto *</label>
									<input type="text" name="subject" class="form-control" required="required">
								</div>
								<div class="form-group">
									<label>Messaggio *</label>
									<textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
								</div>                        
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">INVIA</button>
								</div>
							</div>
						</div>
					</form> 
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/#contact-page-->		
	</section>
	
	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
					<div class="text-center">
						<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
					</div>
                    &copy; 2016 <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Alessandra Peters</a>. All Rights Reserved.
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=OnePage
                    -->
                </div>
				
                <div class="top-bar">			
					<div class="col-lg-12">
					   <div class="social">
							<ul class="social-share">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-skype"></i></a></li>
							</ul>
					   </div>
					</div>
				</div>
			</div>
		</div>
    </footer><!--/#footer-->
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script> 
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>	
	<script src="js/main.js"></script>
  </body>
</html>