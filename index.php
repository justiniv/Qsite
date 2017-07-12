<!DOCTYPE html>

<?php
	if(isset($_POST['submit']))
	{
		$fname	=	trim($_POST['firstname']);
		$email 	=	trim($_POST['email']);
		$msg	=	$_POST['message'];
		
		
		
			$from			 =	$email;
			$to				 = "Contact@Quantinel.com";
			$headers		 = "MIME-Version:1.0" ."\r\n";
			$headers		.= "Content-Type:text/html; charset=UTF-8" ."\r\n";
			$headers		.= "From:" . $from . "\r\n";
			$subject		 = "Contact-Form";
			$formcontent	 = "Contact form\n\nFrom: $fname \nMessage: $msg";
			
			mail($to,$subject, $formcontent, $headers)or die("ERROR !!!");
			echo "Thank you, your email has been sent.";
		
			
		
	}
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content=""/>
	<meta name="keywords" content="Data, Analytics, Quants, Data Design, Developer, Data Analytics, Data Analysis"/>
	<meta name="author" content="Quantinel.com"/>
	
    <title>QUANTINEL</title>


		<script src="js/jquery.min.js"></script>
		<script src="js/typed.min.js"></script>
		<script src="js/jquery.nicescroll.js"></script> <!-- jQuery NiceScroll -->
		<script src="js/jquery.sticky.js"></script> <!-- jQuery Stick Menu -->
		<link rel="shortcut icon" href="ms-icon-150x150.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/reset.css" media="all"/>
		<link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>

		
</head>

<script>


</script>
<body>
	<div class="container">

		<section class="sp">
			<div class="paper">
			 
				<p id="intro">
				 
				</p>
			</div>
		</section>
		<section class="menu-section">
			<nav class="menu">
			<div class="menu-logo">
				<div class="content">
					<p>Quantinel<p>
				</div>
			</div>
			<div class= "menu-content">
				<ul>
					<li>
						<a href=>ABOUT US</a>
					</li>
					<li>
						<a href=>SERVICES</a>
					</li>
					<li>
						<a href=>PROJECTS</a>
					</li>
					<li>
						<a href=>CONTACT US</a>
					</li>
				</ul>
			</div>
			
			</nav>
		</section>
		
		<section class="about-us">
			<h1>ABOUT US</h1><hr/>
			<p class="title">
				Quantinel is a firm centered around big data, analytics and development of data enrichment products.
				Our products have been effective in various industries including advertising, finance, healthcare, and non-profits,
				our team specializes in Data Enrichment, Data Visualization, and Process Optimization bringing clients closer to 
				respective goals through cognitive analytics. 
			</p>
		</section>
		<section class="services">
			<h1>SERVICES</h1><hr/>
			<div class="column-one">
  
				<div class="circle-one"></div>
    
				<h2>RESEARCH</h2><hr/>
				<p> In every project our team prefers to be submerged in the cultural environment, to take notice of varying aspects of industries and to craft strategies which  maximize the potential, value and insight which may be overlooked from a quantitative approach.</p>
    
			</div>
  
			<div class="column-two">
  
        <div class="circle-two"></div>
    
          <h2>COLLECTION</h2><hr/>
          <p>We use various in house data mining tools to gather data, we also have the capabilities to create novel tools for as client needs arise.</p>
    
      </div>
  
			<div class="column-three">
  
        <div class="circle-three"></div>
    
        <h2>EVALUATION</h2><hr/>
        <p>Evaluation of data  is a crucial in every facet of our process, to satisfy our clients needs, all data collected must be evaluated and validated as well as the processed by which they were gathered.</p>
    
    </div>

			<div class="column-four">
  
        <div class="circle-four"></div>
    
        <h2>DESIGN</h2><hr/>
        <p>Design is based on strategy defined to enrich data gathered, to test the shifts in time, it must be iterative to create the most value and insight, without losing scope or continuity with trends.</p>
    
    </div>

			<div class="column-five">
  
        <div class="circle-five"></div>
    
        <h2>BUILD</h2><hr/>
        <p>We love to build and prototyping, whether building processes, business model, or applications across a variety of platforms and markets</p>
    
    </div>
	    
		<div class="clear"></div> 
		</section>	
		    <section class="contact" id="contact">
        <h1>Contact Us</h1>
        <hr/>       
      
        <div class="content">
          
          <div class="form">
          
            <form method="post"  name="kontakt">
          
            <div class="column">
				YOUR FIRST NAME<br/><br/>
				<input name="firstname" id="firstname" value="" required />
            </div>
            
            <div class="column-2">
				YOUR E-MAIL<br/><br/>
				<input type="email" name="email" id="email" value="" required/>
            </div>
          
          
            <div class="column-3">  
            MESSAGE<br/><br/>        
            <textarea id="message" name="message" required></textarea>
            </div> 
 
              <div class="button">
                <span><input class="submit" id="submit" name="submit" type="submit" value="SEND"></span>
              </div>
 
            </form>
          
          </div>
          
          
          <div class="contact-text">
          
          To contact us please use the contact form visible<br/><br/>

          When sending files, please use<br/>
          the following e-mail<br/><br/>

          <strong>Contact Us</strong><br/><br/>

          e-mail: <strong>contact@Quantinel.com</strong>
          
          </div>
        
        
        </div>
      
    </section>
	
	
	<section class="footer">
      
        
        <div class="menu-footer">
        
          <a href="#home">Home</a>
          <a href="#">Facebook</a>
          <a href="#">Twitter</a>
        
        </div>
        
        <div class="copyright">© 2017. All Rights Reserved Quantinel Group.</div>        
    
    
    </section>


		
		<div class="clear"></div>  
</div>



	<!-- Scripts -->	
		<script>
		  // niceScroll
			$("html").niceScroll();
			
			//typed
		function newTyped(){}$(function(){$("#intro").typed({
		// Change to edit type effect
		strings: [" For every second there was 11.5740741 terabytes of data produced in 2016. "],

		typeSpeed:20,backDelay:900,contentType:"html",loop:false,showCursor:false,resetCallback:function(){newTyped()}}),$(".reset").click(function(){$("#typed").typed("reset")})});
		
		// Stick menu
		$(".menu-section").sticky({topSpacing:0,zIndex:10000});
		
		
		//setTimeout(function() { $(".container").css('overflowY','auto'); }, 11250);
	</script>
	


</body>

</html>
