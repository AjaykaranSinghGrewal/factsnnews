<?php
if (isset($_POST['email'])){
    $email = $_POST['email'];
    
    mail('twenty.one0892@gmail.com', 'Email from News and Facts', $email, 'from: response@factsnnews.com');
}   
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Facts N News | Fun App</title>
      
      <!--FONTS-->
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
      
      <!--FONT AWESOME-->
      <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      
      <!--Custom CSS-->
      <link href="css/style.css" rel="stylesheet">
      <link href="css/media.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

      <!-- STICKY NAVIGATION -->
	<div class="navbar bs-docs-nav navbar-fixed-top sticky-navigation">
		<div class="container">
			<div class="navbar-header">
				
				<!-- LOGO ON STICKY NAV BAR -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#kane-navigation">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>

        <a class="navbar-brand" href="#">
            <img src="image/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
          </a>
			</div>
			
			<!-- NAVIGATION LINKS -->
			<div class="navbar-collapse collapse" id="kane-navigation">
				<ul class="nav navbar-nav navbar-right main-navigation list-font">
					<li><a href="#stage">Home</a></li>
					<li><a href="#features">Features</a></li>
                    <li><a href="#about">About</a></li>
					<li><a href="#screenshots">Screenshots</a></li>
				</ul>
			</div>
		</div> <!-- /END CONTAINER -->
	</div> <!-- /END STICKY NAVIGATION -->
      
     
    <video id="bgvid" playsinline autoplay muted loop>
      <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
    <source src="video/Kittens%20first%20bath!.mp4">
    <source src="video/Kittens%20first%20bath!.avi">
    </video>


    <div id="stage">
    <div id="container" class="col-lg-offset-1">
    <div>
        <div id="stage-caption"  class="col-lg-6">
            <h1 class="display-3">Download and have fun!</h1>
            <p>Free Android Application with loads of Fun Facts along with regularly updated current News with a spice of puppy love.</p> <br/>
            <a target="_blank" href="https://play.google.com/store/apps/details?id=grewal.example.ajayk.factofun" class="btn btn-lg btn-success" style="font-size: 2.5rem;"><i class="fa fa-android" aria-hidden="true"></i>          Download App</a>
          </div>
    </div>
    </div>
        <div id="stage-caption" class="col-lg-6">
            <img class="col-lg-offset-3" src="image/front.png" style="border-radius: 17px;">
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a id="down-button" href="#features" class="btn btn-secondary-outline btn-lg" role="button"><i class="fa fa-angle-double-down fa-4x" aria-hidden="true"></i></a>
        </div>
    </div>
</div>
      
      
<section id="features" style="background-color: white;">    
<div class="container">
                
    <h3 class="display-3">WOOFING FEATURES</h3>
    <hr>      
      
<div class="row">
<div class="col-sm-12">
<div class="card-columns">
    
  <div class="card">
    <img class="card-img-top img-fluid" src="image/cat.jpg" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Get updated with random facts for various categories.</h4>
      <p class="card-text">Fact Categories include - Dogs, Technology, Cats, Random Facts, India, Weird Laws, Celebrities, Random Number Facts.</p>
    </div>
  </div>
    
  <div class="card p-3">
    <blockquote class="card-block card-blockquote">
      <p>Laugh with your friends with unlimited Yo Mama and Chuck Norris jokes.</p>

        <small class="text-muted">
          Laughter is an instant vacation. <cite title="Source Title"><br/> Milton Berle</cite>
        </small>

    </blockquote>
  </div>
    
  <div class="card">
    <img class="card-img-top img-fluid" src="image/dog.jpg" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Random Puppy pictures for relaxation after a stressful day.</h4>
      <p class="card-text">Just click the refresh button and  *tada* a new picture of a cut pup.</p>
    </div>
  </div>
    
  <div class="card card-inverse card-primary p-3 text-center" style="background-color: orange;">
    <blockquote class="card-blockquote">
      <p>“No thief, however skillful, can rob one of knowledge, and that is why knowledge is the best and safest treasure to acquire.” </p>
        <small>
          L. Frank Baum
        </small>
    </blockquote>
  </div>

  <div class="card">
    <img class="card-img img-fluid" src="image/news.jpg" alt="Card image">
  </div>
    
  <div class="card p-3 text-right">
    <blockquote class="card-blockquote">
      <p>Keep Your self updated with the latest/most current news with an option to read the full story by navigating to the website.</p>
        <small class="text-muted">
          An investment in knowledge pays the best interest.<cite title="Source Title"><br/>Benjamin Franklin</cite>
        </small>
    </blockquote>
  </div>
    
    <div class="card text-center">
    <div class="card-block">
      <h4 class="card-title">Other Features</h4>
      <p class="card-text">Text-to-Speech, Favourite and Unfavourite facts, Sharing via Email, Messages, WhatsApp, Messanger etc., Set Wallpaper of your favourite canine with just a click.</p>
    </div>
  </div>
    
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">Also</h4>
      <p class="card-text">Free in-store download. Easy to use and navigate. Simple UI for all ages.</p>
    </div>
  </div>
    
</div>              
</div>
      </div>
    </div>
	</section>
      
      
      
      
      
    <section class="feature-dark" id="about">
        <div class="container">
            <div class="row content">
                    <div class="col-lg-6 feature-caption">
                        <h6>About the App   <i class="fa fa-code fa-2x" aria-hidden="true"></i></h6>
                        <h2> Totally Random stuff just a touch away.</h2>
                        <p class="lead">The idea behind the application is clean,random and knowledgeable fun for users of all ages at the expense of nothing. Read up on some facts, jokes and most recent news from reputable sources.</p>
                        <a href="https://play.google.com/store/apps/details?id=grewal.example.ajayk.factofun" role="button" class="btn btn-secondary btn-lg ">Get in on the action</a>
                    </div>
                    
                    <div class="col-lg-6 img-width text-sm-center hidden-sm-down">
                        <img src="image/Android.png">
                    </div>
            </div>
          </div>
      </section>
      
      
      
      
<section id="screenshots" style="background-color: white;">    
    <div class="container">

    <h3 class="display-3">SCREENSHOTS</h3>
    <div class="row resp-pad">
      <div class="col-md-3"><img src="image/seven.png"></div>
      <div class="col-md-3"><img src="image/six.png"></div>
        <div class="col-md-3"><img src="image/one.png"></div>
      <div class="col-md-3"><img src="image/two.png"></div>
    </div>
    </div>
</section>
      
      
      
<footer id="main_footer">
      <div id="stage">
        <div id="stage-caption">
            <h1 class="display-2">Start having Fun Now!!</h1>
            <a href="https://play.google.com/store/apps/details?id=grewal.example.ajayk.factofun" class="btn btn-lg btn-success" style="font-size: 2rem;">Download App!</a>
            <br/><br/>
            <p id="para" class="display-4">Subscribe for more updates</p>
        
        <div id="formi">
        <form class="form-inline" action="#formi" method="post" name="form1">
          <div class="form-group form-group-lg">
              
            <label for="email"></label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail2" placeholder="Your Email" required>
          </div>
          <button id="submit" type="submit" class="btn btn-lg btn-success">Subscibe</button>
            
        </form>
        </div>
        <br/>
            
            <p>Also Check Out the <a href="https://play.google.com/store/apps/details?id=grewal.example.ajayk.bottlespin">Other App</a> by Ajaykaran Singh Grewal</p>
          </div>
      </div>
    

</footer>
      
<div id="icons">
<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline">
                        <a href="https://twitter.com/" target="blank"><li class="list-inline-item"><i class="twitter fa fa-twitter-square fa-lg fa-3x" aria-hidden="true"></i></li></a>
                        <a href="https://facebook.com/" target="blank"><li class="list-inline-item"><i class="facebook fa fa-facebook-square fa-lg fa-3x" aria-hidden="true"></i></li></a>
                        <a href="https://instagram.com/" target="blank"><li class="list-inline-item"><i class="instagram fa fa-instagram fa-lg fa-3x" aria-hidden="true"></i></li></a>
                        <a href="https://googleplus.com/" target="blank"><li class="list-inline-item"><i class="google fa fa-google-plus-square fa-lg fa-3x" aria-hidden="true"></i></li></a>
                    </ul>
                </div>
            </div>
    <p style="color: black; opacity: 0.6;">&copy; Facts N News | 2017 Grewal, Inc. &middot; <a href="#kane-navigation">Back to Top</a> &middot;</p>
        </div>
    </div>

      

      



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="js/bootstrap.min.js"></script>
      
    <script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script>
          $('form').submit(function(evnt){
           evnt.preventDefault();
            var url = $(this).attr("action");
            var formData = $(this).serialize();
            $.post(url, formData, function(resp){
               $('#formi').html("<p>Thank You for subscribing.</p>"); 
            });
        });  
    </script>
    
    <script src="js/custom.js"></script>
  </body>
</html>