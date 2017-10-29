<!DOCTYPE html>

<!--
---------------------------------------------
Website created and maintained by Alex Testin
---------------------------------------------
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#F1B82D">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="University of Missouri Student's Underwater Robotics Foundation">
    <title>MIZZOU SURF</title>
    <meta property="og:title" content="Mizzou SURF" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://mizzousurf.com/" />
    <meta property="og:image" content="http://mizzousurf.com/images/underwaterTiger.jpg" />
    <meta property="og:description" content="Student's Underwater Robotics Foundation is a student organization that strives to implement the knowledge of engineering courses- utilizing them by manufacturing marine robotics projects. SURF is a competition team with an element of robotic research." />
    <link rel="shortcut icon" href="images/favicon.ico">
		<!-- change to style.css for testing -->
    <link rel="stylesheet" type="text/css" href="style.min.css">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Play" media="none">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway" media="none">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Julius+Sans+One" media="none">
    <script>
      //facebook widget
      window.onload = function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.async = true;
				js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk');

      //mobile view compact menu
      function showmenu() {
        document.getElementById('nav').classList.toggle('show');
      }

      //hide welcome message on scroll
      function yScroll(){
        main = document.getElementById('main');
        yPos = window.pageYOffset;
        main.style.transitionDuration = "0.3s";
        if(yPos > (document.documentElement.clientHeight / 6)) {
          main.style.opacity = "0";
        } else {
          main.style.opacity = "1";
        }
      }
      window.addEventListener('scroll', yScroll);

      //slide in UI onload
      window.onload = function() {
        head = document.getElementById('headNav');
        head.style.top = "0px";
        arrow = document.getElementById('scrollIndicator');
        arrow.style.margin = "0px";
        main = document.getElementById('main');
				yPos = window.pageYOffset;
        if(yPos > (document.documentElement.clientHeight / 6)) {
          main.style.opacity = "0";
        } else {
          main.style.opacity = "1";
        }

        //variables for smooth scrolling page shortcuts
        var targetOffset, currentPosition,
        body = document.getElementById('contentToScroll'),
        aboutUsButton = document.getElementById('aboutUsTab'),
        newsButton = document.getElementById('newsTab'),
        vehicleButton = document.getElementById('vehicleTab'),
        sponsorsButton = document.getElementById('sponsorsTab'),
        connectButton = document.getElementById('connectTab'),
        subButton = document.getElementById('subButton'),
        arrowButton = document.getElementById('arrowButton'),
        animateTime = 900;

        aboutUsButton.addEventListener('click', smoothscroll);
        newsButton.addEventListener('click', smoothscroll);
        vehicleButton.addEventListener('click', smoothscroll);
        sponsorsButton.addEventListener('click', smoothscroll);
        connectButton.addEventListener('click', smoothscroll);
        subButton.addEventListener('click', smoothscroll);
        arrowButton.addEventListener('click', smoothscroll);

        function getPageScroll() {
          var yScroll;
          if(window.pageYOffset) {
            yScroll = window.pageYOffset;
          } else if (document.documentElement && document.documentElement.scrollTop) {
            yScroll = document.documentElement.scrollTop;
          } else if (document.getElementById('contentToScroll')) {
            yScroll = document.getElementById('contentToScroll').scrollTop;
          }
          return yScroll;
        }

        function smoothscroll(event) {
          targetOffset = document.getElementById(event.target.hash.substr(1)).offsetTop;
          currentPosition = getPageScroll();

          if((currentPosition - targetOffset) <= 10 && (currentPosition - targetOffset) >= -10) {
            animateTime = 0;
          } else {
            animateTime = 900;
          }
					totalHeight = document.documentElement.scrollHeight;
					windowHeight = document.documentElement.clientHeight;
					//check if the target position is greater than the height of the website, if so, it subtracts the difference so the scrolling can't go past the bottom (measured from the top of the window)
					if((totalHeight - windowHeight) < (currentPosition - (currentPosition - targetOffset))) {
						targetOffset = targetOffset - ((currentPosition - (currentPosition - targetOffset)) - (totalHeight - windowHeight));
					}
          body.classList.add('contentToScroll');
          body.style.WebkitTransform = "translate(0, " + (currentPosition - targetOffset) + "px)";
          body.style.MozTransform = "translate(0, " + (currentPosition - targetOffset) + "px)";
          body.style.transform = "translate(0, " + (currentPosition - targetOffset) + "px)";

          window.setTimeout(function () {
            body.classList.remove('contentToScroll');
            body.style.cssText = "";
            window.scrollTo(0, targetOffset);
            main.style.transitionDuration = "0s";
            main.style.opacity = "0";
          }, animateTime);

          event.preventDefault();
        }
      }
    </script>
  </head>
  <body>

<?php include 'header.html'; ?>

	<div id="contentToScroll">
    <div class="parallaxI">
      <div>
        <div id='bubbles'></div>
        <div id='bubbles2'></div>
        <div id='bubbles3'></div>
      </div>
      <div class="mainWelcome" id="main">
        <h1 class="homeTitle">MIZZOU SURF</h1>
        <hr class="fancy">
        <h2 class="homeMsg">University of Missouri Student's Underwater Robotics Foundation</h2>
      </div>
      <div id="scrollIndicator">
        <a id="subButton" class="sub diveAnim" href="#aboutUs"></a>
        <a id="arrowButton" class="arrow" href="#aboutUs"></a>
      </div>
    </div>

    <div id="aboutUs" class="container">
      <div class="content">
        <h3 class="sectionTitle">Welcome to Mizzou SURF</h3>
        Student's Underwater Robotics Foundation is a student organization that strives to implement the knowledge of engineering courses- utilizing them by manufacturing marine robotics projects. SURF is a competition team with an element of robotic research.
        <br><br><br>
        <h3 class="sectionTitle">Meet the Team: </h3>
      </div>
    </div>

    <div id="news">
      <div class="contentAlt">
        <h3 class="sectionTitleAlt">News</h3>
        <div class="newsArticles">
          <h4 class="articleTitle">Lorem ipsum dolor sit amet</h4>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque, nunc at rhoncus commodo, sapien tortor imperdiet nisl, vitae elementum libero felis ac metus. Proin eu tellus tincidunt, pharetra elit eget, rhoncus elit. Proin at sapien tristique, auctor ante nec, pharetra nunc. Nullam non egestas justo, nec feugiat urna. Cras sollicitudin massa neque, nec mollis dolor feugiat ac. Integer eget ligula vel neque venenatis ullamcorper. Pellentesque ac tincidunt augue, at laoreet mauris. Donec eleifend eros elit, in mattis tellus tincidunt eu. Suspendisse sed sodales lorem, at lacinia arcu. Fusce lacinia imperdiet augue ut hendrerit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
        </div>
        <hr class="fancy">
        <div class="newsArticles">
          <h4 class="articleTitle">Morbi nec aliquet</h4>
          Phasellus sodales leo vitae neque finibus commodo. Morbi ut ligula nulla. Cras sed odio nec orci iaculis tempor. Phasellus viverra suscipit nunc nec placerat. Phasellus non mattis lacus, a sagittis nulla. Ut pellentesque nibh nisl, eget pellentesque eros lacinia rhoncus. Donec sem urna, posuere sit amet facilisis et, bibendum et nulla. Morbi nec aliquet ligula, nec dignissim quam.
        </div>
        <hr class="fancy">
        <div class="newsArticles">
          <h4 class="articleTitle">Mauris felis mauris, maximus sit amet libero</h4>
          Pellentesque feugiat molestie libero, ultricies fermentum massa dapibus sed. Integer at pharetra ipsum. Fusce id hendrerit mi, a malesuada ligula. Mauris felis mauris, maximus sit amet libero volutpat, hendrerit tempor ligula. Praesent in dictum erat. Pellentesque ac nunc at metus venenatis tristique a ac arcu. Nulla dui nunc, accumsan eu ornare eu, dignissim gravida nisi. Integer eleifend condimentum lectus, id varius mi blandit a. Nulla at ligula nec nisi fermentum scelerisque.
        </div>
        <hr class="fancy">
        <div id="newsLink">
          <a href="news.php" class="head">More ></a>
        </div>
      </div>
    </div>

    <div id="vehicle" class="container">
      <div class="content">
        <h3 class="sectionTitle">Vehicle</h3>
        <img src="images/submarine.png" alt="sub" id="subImg">
        <br>(maybe some tech facts and stuff)
      </div>
    </div>

    <div id="sponsors">
      <div class="contentAlt">
        <h3 class="sectionTitleAlt">Sponsors</h3>
        <br><br><br><hr class="fancy">
        <img src="images/fakelogos/dundermifflin.jpg" alt="dunder" class="sponsorImg">
        <img src="images/fakelogos/oceanic.png" alt="oceanic" class="sponsorImg">
        <img src="images/fakelogos/wayne.png" alt="wayne" class="sponsorImg">
        <img src="images/fakelogos/stark.png" alt="stark" class="sponsorImg">
        <img src="images/fakelogos/piedpiper.png" alt="piedpiper" class="sponsorImg">
        <hr class="fancy"><br><br><br>
        Want to help sponsor our team? Click the link below to donate or contact us for more ways to help!
      </div>
    </div>

<?php include "footer.html"; ?>

	</div>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Play">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Julius+Sans+One">

  </body>
</html>
