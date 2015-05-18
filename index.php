<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LAURIER MANTEL</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	<link href="github-widget/github-widget.css" rel="stylesheet" type="text/css" />
    

	<script src="js/jquery.js" > </script>
	
	<style>
		#linkstyle{
			color:white;
			
			
		}
		#resumedynamic{
			display:none;
		}
		#twitterdynamic{
			display:none;
		}
		#linkedindynamic{
			display:none;
		}
		#githubdynamic{
			display:none;	
		}
		#contactdynamic{
			display:none;
		}
		
		#gotorepo,#send,#openresume,#downloadresume{
			background-color:#2C3E50;	
		}
		#contactform{
			
		}
		textarea{
			resize:vertical;
		}
		#fail{
			display:none;
		}
		#results{
			display:none;
		}
		.circular {
		position:relative;
		left:20px;
		width: 300px;
		height: 300px;
		border-radius: 150px;
		-webkit-border-radius: 150px;
		-moz-border-radius: 150px;
		background: url(img/lmantel.jpg) no-repeat;
		background-position:-200px -150px;
		box-shadow: 0 0 8px rgba(0, 0, 0, .8);
		-webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
		-moz-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
		}
		
	</style>
	
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Laurier Mantel</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li class="page-scroll">
                        <a href="#" onClick = "return false" id = "aboutclick">About</a>
                    </li>
					<li class="page-scroll">
                        <a href="#" onClick = "return false" id = "linkedinclick">LinkedIn</a>
                    </li>
					<li class="page-scroll">
                        <a href="#" onClick = "return false" id = "resumeclick">Resume</a>
                    </li>
					<li class="page-scroll">
                        <a href="#" onClick = "return false" id = "twitterclick">Twitter</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#" onClick = "return false" id = "githubclick">GitHub</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#" onClick = "return false" id = "contactclick">Contact</a>
                    </li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" height="100%">
            <div class="row">
                <div class="col-lg-4">
				<div class="intro-text">
                        <span class="skills">Hello!	 Bonjour!</span>
				</div>
				<br>
					<div class="circular"></div>
					<br>
                    <div class="intro-text">
                        
                     
                        <span class="skills">My name is Laurier Mantel.  I'm a designer, developer, and overall lover of technology!</span>
						<br>
                    </div>
                </div>
				<div class="col-lg-3"></div>
				<div class="col-lg-5" id = "aboutdynamic">
					
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<h2>About</h2>
						<p>
						<p>
							This is a web application I made to help others find me online and connect.  Take a look around and let me know what you think!
						</p>
					
					
				</div>
				<div class="col-lg-5" id = "twitterdynamic">
					<a class='twitter-timeline' href='https://twitter.com/Lauriermantel' data-widget-id='598684024039677952'>Tweets by @Lauriermantel</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>
				</div>
				
				<div class="col-lg-5" id = "resumedynamic">
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					
					
					
					<p>Press view to open my resume in browser or download to save. (Download not yet available for Safari or Internet Explorer)</p>
					
					
					<a id = "linkstyle" href = "LAURIER MANTEL RESUME.pdf" target = +_blank>View</a>
					 
					<br>
					<br>
					
					
					<a id = "linkstyle" href = "LAURIER MANTEL RESUME.pdf" download = "LAURIER MANTEL RESUME">Download</a>
					
				</div>
				
				
				
				<div class="col-lg-5" id = "linkedindynamic">
					<p>Feel free to send me a connection request!</p><script src='//platform.linkedin.com/in.js' type='text/javascript'></script><script type='IN/MemberProfile'data-id='https://www.linkedin.com/in/lauriermantel' data-format = 'inline' data-related='false'></script>
				</div>
				
				<div class="col-lg-5" id = "githubdynamic">
					<br>
					<br>
					<p>Like the website?  All my code is available on GitHub, as well as my other projects!</p>
					<p>I have made an effort to make this website more like a web application than just a website. I built a cool IP address data capture tool in PHP!  Check out the repo:</p>
					<button id = "gotorepo">Go to GitHub Repository</button>
				</div>
				
				<div class="col-lg-5" id = "contactdynamic">
					<h2>Contact</h2>
					<p>Send me a message!  Let's talk about 'whatever'.  If you don't want to use this form and would rather send me an email, my email address is lauriermantel@gmail.com.</p>
					
					<br>
					<br>
					<div id = "fail" class = "alert alert-danger" >Invalid email address</div>
					<div id = "results" class = "alert alert-success" ></div>
					<div class="form-group">
						<label for = "name">Your Name</label>
						<input class="form-control" name = "name" type = "text" value = "Enter your name" id = "name"/>
						<div></div>
						<label  for = "email">Your email address</label>
						<input class="form-control" type = "email" value = "Your email address" id = "email"/>
						<div></div>
						<label for = "body" >Your Message</label>
						<textarea class="form-control" name = "body" type = "text" value = "Message Body" id="message" > </textarea>
						<div></div>
						<br>
						<button class="form-submit" id = "send" type = "submit" value = "Send Email"/>Send!</button>
					</div>
					
				</div>
				
				
				
				
				
            </div>
			<br>
			<br>
			<br>
			
        </div>
    </header>
	
	
	
	<script>
		function validateEmail(email) 
		{
			
		var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		return re.test(email);
		}
		//get HTTP to PHP which sends me an email
		$("#send").on('click',function(e){
			console.log("clicked");
			var tempemail = $("#email").val();
			console.log(tempemail);
			if (tempemail == "Your email address"||tempemail == ""||tempemail == " ")
			{
				$("#fail").html("Please enter an email address");
				$("#fail").css("display","block");
			}
			else if(!validateEmail(tempemail))
			{
				$("#fail").html("Please enter a valid email address");
				$("#fail").css("display","block");
			}
			else{
				$("#results").css("display","block");
				$("#fail").css("display","none");
				tempmessage = $("#message").val();
				tempname = $("#name").val();
				$.get("email.php?email=" + tempemail + "&message=" + tempmessage + "&name=" + tempname, function(data)
				{
					if(data = "Thanks for your email.  I'll be in touch soon!")
					{
						$(".form-group").css("display","none");
						$("#results").html(data).fadeIn();
					}
					else
					{
						$("#fail").css("display","block");
						$("#fail").html(data);
					}
				});
				
			}
			
		})
		
		("#downloadresume").on('click',function(e){
			window.location = "LAURIER MANTEL RESUME.pdf";
			
			
		})
		
	</script>
	
	<script>
		
		
		function viewSwap(current, next)
		{
			$("#"+current).css("display","none");
			current = next;
			$("#"+current).css("display","block");
			return current;
		}
		
		var currentView = "aboutdynamic";
		
		
		$("#aboutclick").on('click',function(e){
			if("aboutdynamic" != currentView)
			{
				
				currentView = viewSwap(currentView,"aboutdynamic");
			}
		});
		
		$("#twitterclick").on('click',function(e){
			if("twitterdynamic" != currentView)
			{
				currentView = viewSwap(currentView,"twitterdynamic");
			}
			else
			{
				window.open('https://twitter.com/Lauriermantel','_blank');
			}
		});
		
		$("#linkedinclick").on('click',function(e){
			
			if("linkedindynamic" != currentView)
			{
				currentView = viewSwap(currentView,"linkedindynamic");
			}
			
			else
			{
				window.open('https://www.linkedin.com/in/lauriermantel','_blank');
			}		
		});
		
		$("#resumeclick").on('click',function(e){
			
			if("resumedynamic" != currentView)
			{
				currentView = viewSwap(currentView,"resumedynamic");
			}
			
			else
			{
				window.open('LAURIER MANTEL RESUME.pdf','_blank');
			}		
		});
		
		$("#githubclick").on('click',function(e){
			
			if("githubdynamic" != currentView)
			{
				currentView = viewSwap(currentView,"githubdynamic");
			}
			
			else
			{
				window.open('https://github.com/LaurierMantel','_blank');
			}
		});
		
		$("#gotorepo").on('click',function(e){
			window.open('https://github.com/LaurierMantel/lauriermantel.com','_blank');
			
		})
		
		$("#contactclick").on('click',function(e){
			
			if("contactdynamic" != currentView)
			{
				currentView = viewSwap(currentView,"contactdynamic");
				
			}
			else
			{
				win = window.open("mailto:lauriermantel@gmail.com", 'emailWindow');
				if (win && win.open && !win.closed) win.close();
			}
			
			
			
		});
		
		
		
	
		
		
	</script>

    <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script> 

    <!-- Plugin JavaScript -->
    <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>-->

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    
<script src="github-widget/github-widget.min.js"></script>	
</body>

</html>

<?php

include "execute.php";


?>

