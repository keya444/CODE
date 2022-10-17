 
      <?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}





?>








<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html>
<head>
<title>Font Awesome 5 Icons</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!--Get your own code at fontawesome.com-->
</head>
<body>
 





<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Navigation -->

  <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
    <div class="container">
    <h5><p align="left"><a class="navbar-brand" href="index.html"><a><i class='fas fa-laptop' style='font-size:36px'>keya's world</a></a></i></a></a></h5>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>

         

         <li class="nav-item">
            <u><a class="nav-link" href="webpage.php">Courses</a></u>
            <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="401.php">Quiz</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="login.php">Log In</a>
          </li>

         
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>


          



<!--Main Navigation-->
<header>
    <style>
      
      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
      h5{
        color:#fff;
      }
    </style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic Bootstrap Template</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>









<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<div id='title'>
  <span>
    
  </span>
  <br>
  <span>
    
  </span>
</div>




    <div class="carousel-item active">
      <img src="https://pbs.twimg.com/media/FE0gstJWUAE0rRP?format=jpg&name=4096x4096" class="d-block w-100" alt="...">
     
      <div class="carousel-caption d-none d-md-block">
     




<form action="home.php"></form>
      <div class="sp-container">
  <div class="sp-content">
    <div class="sp-globe"></div>
    <h2 class="frame-1">Hello <?php echo $username;?></h2>
    <h2 class="frame-2">This website will help you in your computer studies</h2>
    <h2 class="frame-3">Computer engineers get interesting challenges</h2>
    <h2 class="frame-4">Let's go</h2>
   
  </div>
</div>




  
      
        
    <h5>click to move next slide</h5>
        <p>This website present by @keya</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://voltcave.com/wp-content/uploads/2020/04/pc_battlestations-1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <div class="sp-container">
  <div class="sp-content">
    <div class="sp-globe"></div>
   
    <h2 class="frame-1">Welcome <?php echo $username;?></h2>
    <h2 class="frame-2"> Software engineers are genius</h2>
    <h2 class="frame-3">and work on biggest projects across the world.</h2>
   
      

    </h2>

  </div>
</div>



        <h5>click to move next slide</h5>
        <p>This website present by @keya</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/originals/8a/6d/02/8a6d02e423ce39e6f8389e1458dd4104.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">

      <div class="sp-container">
  <div class="sp-content">
    <div class="sp-globe"></div>
    <h2 class="frame-1">Get Ready <?php echo $username;?></h2>
    <h2 class="frame-2">Computer engineers get interesting challenges</h2>
    <h2 class="frame-3">and opportunities to learn new skills.</h2>
   
    

    </h2>

  </div>
</div>




        <h5>click to move next slide</h5>
        <p>This website present by @keya</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<style>
  h2{
    color:grey;
  }
</style>




      


    <!-- Navbar -->






  
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
















    
    <!-- Background image -->
  </header>
  <!--Main Navigation-->
  
  <!--Main layout-->
  <main class="mt-5">
    <div class="container">
      <!--Section: Content-->
      <section>
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <img src="https://edynamiclearning.com/wp-content/uploads/2020/10/EDL322_Programming-2a-Procedural-Programming.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                
              </a>
            </div>
          </div>
         
          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Computer programing langugues</strong></h4>
            <p class="text-muted">
            A program is a set of instructions that tells a computer what to do in order to come up with a solution to a particular problem. Programs are written in a language that computers can understand, known as programming language. Each programming language has its own syntax, which consists of a set of rules that dictate how words and symbols can be put together to form a program. There are hundreds of different programming languages, each with their own logic and syntax. Only a few of them are really popular, but a programmer can easily use a dozen or more languages during a career.
            </p>
            <p><strong>High-Level-Langugues</strong></p>
            <p class="text-muted">
            A high-level language (HLL) is a programming language such as C+,C#,PYTHON,JAVA.....Etc
            </p>
          </div>
        </div>
      </section>
      <!--Section: Content-->
     
      <hr class="my-5" />

      <!--Section: Content-->
      <section class="text-center">
     

<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<div id='title'>
  <span>
    
  </span>
  <br>
  <span>
    
  </span>
</div>




<div class="card-sliders ">
  <div class="container ">
    <div class="row align-items-center">
      <div class="col-md">
      <h1 class="shimmer">CSE   COURSES</h1>
        <center><p class="">On the website we will learn coding(C/C++/JAVA/PYTHON),*Web developement(HTML,CSS,JS,BOOTSTRAP),SOFTWARE Engineering..Etc</p></center>
        
        <div class="row mt-5">
          <div class="col-lg">
            <div class="card-decks">
              <div class="card-deck deck-active">
                <div class="card">
                  <img class="card-img" src="https://www.zdnet.com/a/img/resize/0a6b0be2f543ddbf313fc83a706b807b77c3c202/2021/07/19/8a337c80-5ed6-43a1-98fb-b981d420890f/programming-languages-shutterstock-1680857539.jpg?auto=webp&fit=crop&height=900&width=1200" alt="Card image">
                  <div class="card-img-overlay">
                   <h5 class="card-title">Programing Langugue</h5>
                   <p class="card-text">The computer language is defined as code or syntax which is used to write programs or any specific applications.</p>
                   <p class="card-text">
                     Programer
                     <a href="https://www.educba.com/types-of-computer-language/">GO it</a>
                  </p>
                  </div>
                </div>
                <div class="card">
                <img class="card-img" src="https://co-well.vn/wp-content/uploads/2021/11/coding-2-e1638182298102.jpeg" alt="Card image">
                <div class="card-img-overlay">
                 <h5 class="card-title">web development</h5>
                 <p class="card-text">Web developers create and maintain websites. They are also responsible for the site's technical aspects, such as its performance and capacity</p>
                 <p class="card-text">
                   web desiner
                   <a href="https://www.w3schools.com/html/default.asp">Go it</a>
                </p>
                </div>
              </div>
                <div class="card">
                <img class="card-img" src="https://dm0qx8t0i9gc9.cloudfront.net/thumbnails/video/cW5lDBG/glowing-light-blue-abstract-programming-code-background-on-dark-software-or-script-development-concept_rgg0rnttyl_thumbnail-1080_01.png" alt="Card image">
                <div class="card-img-overlay">
                 <h5 class="card-title">SOFTWARE</h5>
                 <p class="card-text">Software engineers design and create computer systems and applications to solve real-world problems</p>
                 <p class="card-text">
                   SOFTWARE ENGINEER
                   <a href="https://www.computerscience.org/careers/software-engineer/">GO it</a>
                </p>
                </div>
              </div>
              </div>
              <div class="card-deck">
                <div class="card">
                  <img class="card-img" src="https://www.mooc.org/hubfs/what-computer-programming-jobs-offer-remote-work-jpg.jpeg" alt="Card image">
                  <div class="card-img-overlay">
                   <h5 class="card-title">Programing Langugue</h5>
                   <p class="card-text">The computer language is defined as code or syntax which is used to write programs or any specific applications.</p>
                   <p class="card-text">
                     Programer
                     <a href="https://www.pexels.com/nl-nl/@aleksey-kuprikov-1883853">
</a>
                  </p>
                  </div>
                </div>
                <div class="card">
                <img class="card-img" src="https://cdn.britannica.com/30/199930-131-B3D1D347/computer.jpg?q=60" alt="Card image">
                <div class="card-img-overlay">
                 <h5 class="card-title">web development</h5>
                 <p class="card-text">Web developers create and maintain websites. They are also responsible for the site's technical aspects, such as its performance and capacity</p>
                 <p class="card-text">
                   
                   <a href="https://www.pexels.com/nl-nl/@braydenlaw"></a>
                </p>
                </div>
              </div>
                <div class="card">
                <img class="card-img" src="https://as2.ftcdn.net/v2/jpg/03/80/55/23/1000_F_380552331_jisB7NCXzM9scalUpViIU7S36XW0uzfT.jpg" alt="Card image">
                <div class="card-img-overlay">
                 <h5 class="card-title">>SOFTWARE</h5>
                 <p class="card-text">Software engineers design and create computer systems and applications to solve real-world problems</p>
                 <p class="card-text">
                   
                   <a href="https://www.pexels.com/nl-nl/@braydenlaw"></a>
                </p>
                </div>
              </div>
              </div>
            </div>
          </div>

        </div>
      
        
      </div>
    </div>
    
  </div>
</div>

<style>
  body {
  height: 100%;
  background: black;
  color: #FFF;
  font-family: "montserrat";
}
body:before {
  content: "";
  height: 100%;
  width: 100%;

  position: absolute;
}

.card-sliders {
  overflow: hidden;
  height: 95vh;
}
.card-sliders .container {
  height: 100% !important;
}
.card-sliders .container .row {
  height: 100%;
}
.card-sliders .card-decks .card-deck {
  display: none;
}
.card-sliders .card-decks .card-deck.deck-active {
  display: flex;
}
.card-sliders .card-decks .card-deck .card {
  font-size: 0.8rem;
  border: 0;
  border-radius: 1.25rem;
  box-shadow: 0 10px 20px 2px #181A28;
  color: #FFF;
  height: 300px;
  overflow: hidden;
}
.card-sliders .card-decks .card-deck .card h1, .card-sliders .card-decks .card-deck .card h2, .card-sliders .card-decks .card-deck .card h3, .card-sliders .card-decks .card-deck .card h4, .card-sliders .card-decks .card-deck .card h5, .card-sliders .card-decks .card-deck .card h6 {
  font-weight: bold;
}
.card-sliders .card-decks .card-deck .card a {
  color: #3BCEAC;
}
.card-sliders .card-decks .card-deck .card img {
  width: 200%;
  height: 200%;
  object-fit: cover;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.card-sliders .card-decks .card-deck .card .card-img-overlay {
  background: rgba(0, 0, 0, 0.5);
}

/* Custom animate.css delay */
.animated.delay-02s {
  -webkit-animation-delay: 0.2s;
  animation-delay: 0.2s;
}

.animated.delay-04s {
  -webkit-animation-delay: 0.4s;
  animation-delay: 0.4s;
}
</style>

<script>
  // The current slide
var slideOrder = 0;

// Pause between slides in miliseconds
var slidePause = 8000;

// The slides array
var slides = $(".card-decks .card-deck");

$(document).ready(function(){
  nextSlide(slideOrder)
})

function autoSlide(){
  autoSlideTimeout = setTimeout(function() {
    
    // Check if the slideOrder is not bigger
    // than the available amount of slides
    if(slides.length <= slideOrder){
      slideOrder = 0;
    }

    // Give us the next slide
    nextSlide(slideOrder);
    
    
    slideOrder++;
  }, slidePause);
}

function theDelay(index){
  // Maybe a bit dirty but we need to get the exact
  // pause between all the slides and we dont want a
  // point in the variable because of css
  var delay = (0.2 * index)
  var delayClass = parseInt(delay.toString().replace(".", ""));
  
  return "0" + delayClass
}

function nextSlide(deck){
  //  Find the current active deck
  var currentDeck = slides.closest(".deck-active")
  var currentCards = currentDeck.find(".card");
  
  // Find the target deck we want to load in
  var nextDeck = slides.eq(deck);
  
  currentCards.each(function(index){
    var delay = theDelay(index);
    var card =$(this)
    // Remove all the animate.css classess
    card.removeClass().attr('class', 'card');

    
    
    card.addClass("animated flipOutY fast delay-" + delay + "s");
    setTimeout(function(){
      card.find(".card-img-overlay").fadeOut();
      card.find(".card-img").removeAttr('style');
    }, ((delay + 8) * 50))
    
    
  });
  
  //  Animate.css class "fast" is timed for 0.8s
  //  we delay each CARD (not card-deck) intro by 0.2s 
  // so 0.8 + 0.2 = 1s
  //
  // 1 times each card without the first one * 1000
  // = the amount of seconds we have to wait before the new
  // we end this function
  //
  // I didn't remove the 1 because of the explanation
  var timeout = ((1 * (currentCards.length - 1)) * 1000)
  
  setTimeout(function(){
    if(nextDeck.length){
      // Hide the current deck so the new deck
      // gets the right position then clean the
      // current deck
      currentDeck.removeClass("deck-active");
      currentDeck.find(".card").each(function(){
        $(this).removeClass().attr('class', 'card');
      })

      nextDeck.find(".card").each(function(index){
        var delay = theDelay(index);
        
        var card = $(this);
        setTimeout(function(){
          card.find(".card-img-overlay").stop().fadeIn();
          card.find(".card-img").animate({height: '110%', width: '110%'}, {duration:(slidePause / 2), easing: 'swing', queue: false });
      
        }, ((delay + 8) * 10))
        card.addClass("animated flipInY fast delay-" + delay + "s");
      
        
        
        
      })
      nextDeck.addClass("deck-active");
      autoSlide();
    }else{
      // Try to reset the process
      console.error("Card flipper, did not find the target deck. Did you remove it?")
      slideOrder = 0;
      autoSlide();
    }
    
  }, timeout)
}
</script>
        
      
  <!--Footer-->
  <footer class="bg-light text-lg-start">
    <div class="py-4 text-center">
      <a role="button" class="btn btn-primary btn-lg m-2"
        href="https://www.w3schools.com/html/default.asp" rel="nofollow" target="_blank">
        start study for(HTML,CSS,JS,BOOTSTRAP,PHP,MYSQL)
      </a>
      <a role="button" class="btn btn-primary btn-lg m-2" href="https://www.javatpoint.com/c-programming-language-tutorial" target="_blank">
        start study (C,C++,JAVA,PYTHON)
      </a>
    </div>

    <hr class="m-0" />

    

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    
      <a class="text-dark" href="https://mdbootstrap.com/"></a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->

  
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
/>
  

<div class="blue-bg"></div>
<div class="white-bg shadow"></div>
<div class="content">
  <h2></h2>
  <p></p>

  <p></p>
</div>

<style>
 @font-face {
  font-family: "ubuntu";
  font-style: italic;
  font-weight: 300;
  src: local("Lato Light Italic"), local("Lato-LightItalic"), url(https://fonts.gstatic.com/s/ubuntucondensed/v8/u-4k0rCzjgs5J7oXnJcM_0kACGMtT-Dfqw.woff2) format("woff2");
}
body {
  height: 100vh;
  margin: 0;
  background-color: black;
  font-family: "ubuntu", Arial, sans-serif;
  overflow-x: hidden;
  display: grid;
  place-items: center;
}

a {
  text-decoration: none;
  color: black;
}

.wrapper {
  text-align: center;
}
.wrapper h1 {
  color: #fff;
  font-size: 92px;
  text-transform: uppercase;
  font-weight: 700;
  font-family: "Josefin Sans", sans-serif;
  background: linear-gradient(to right, #000 10%, #25abe8 50%, #57d75b 60%);
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 1.5s linear infinite;
  display: inline-block;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
h4{
  color:white;
}
</style>





<style>
  body {
  background: #000;
}
.shimmer {
  font-family: "Lato";
  font-weight: 300;
  font-size: 3em;
  margin: 0 auto;
  padding: 0 140px 0 0;
  display: inline;
  margin-bottom: 0;
}
p {
  font-family: "Lato";
  font-weight: 300;
  font-size: 1em;
  color: rgba(255,255,255,0.65);
  width: 500px;
  text-align: justify;
  line-height: 1.5em;
  border-top: 1px dashed rgba(255,255,255,0.2);
  margin: 10px 0 0 5px;
  padding-top: 10px;
}
p a {
  text-decoration: none;
  color: #000;
}
p a:visted {
  color: #000;
}
.shimmer {
  text-align: center;
  color: rgba(255,255,255,0.1);
  background: -webkit-gradient(linear, left top, right top, from(#222), to(#222), color-stop(0.5, #fff));
  background: -moz-gradient(linear, left top, right top, from(#222), to(#222), color-stop(0.5, #fff));
  background: gradient(linear, left top, right top, from(#222), to(#222), color-stop(0.5, #fff));
  -webkit-background-size: 125px 100%;
  -moz-background-size: 125px 100%;
  background-size: 125px 100%;
  -webkit-background-clip: text;
  -moz-background-clip: text;
  background-clip: text;
  -webkit-animation-name: shimmer;
  -moz-animation-name: shimmer;
  animation-name: shimmer;
  -webkit-animation-duration: 2s;
  -moz-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-iteration-count: infinite;
  -moz-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  background-repeat: no-repeat;
  background-position: 0 0;
  background-color: #222;
}
@-moz-keyframes shimmer {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}
@-webkit-keyframes shimmer {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}
@-o-keyframes shimmer {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}
@keyframes shimmer {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}
</style>








  <style>
body {
  background: #000 url() no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: 'Barlow', sans-serif;
  color:red;
}


.container {
  width: 100%;
  position: relative;
  overflow: hidden;
}
a {
  text-decoration: none;
}
h1.main, p.demos {
  -webkit-animation-delay: 18s;
  -moz-animation-delay: 18s;
  -ms-animation-delay: 18s;
  animation-delay: 18s;
}
.sp-container {
  position: fixed;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  z-index: 0;
  background: -webkit-radial-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3) 35%, rgba(0, 0, 0, 0.50));
  background: -moz-radial-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3) 35%, rgba(0, 0, 0, 0.50));
  background: -ms-radial-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3) 35%, rgba(0, 0, 0, 0.50));
  background: radial-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3) 35%, rgba(0, 0, 0, 0.50));
}
.sp-content {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0px;
  top: 0px;
  z-index: 1000;
}
.sp-container h2 {
  position: absolute;
  top: 50%;
  line-height: 100px;
  height: 90px;
  margin-top: -50px;
  font-size: 90px;
  width: 100%;
  text-align: center;
  color: transparent;
  -webkit-animation: blurFadeInOut 3s ease-in backwards;
  -moz-animation: blurFadeInOut 3s ease-in backwards;
  -ms-animation: blurFadeInOut 3s ease-in backwards;
  animation: blurFadeInOut 3s ease-in backwards;
}
.sp-container h2.frame-1 {
  -webkit-animation-delay: 0s;
  -moz-animation-delay: 0s;
  -ms-animation-delay: 0s;
  animation-delay: 0s;
  
}
.sp-container h2.frame-2 {
  -webkit-animation-delay: 3s;
  -moz-animation-delay: 3s;
  -ms-animation-delay: 3s;
  animation-delay: 3s;
}
.sp-container h2.frame-3 {
  -webkit-animation-delay: 6s;
  -moz-animation-delay: 6s;
  -ms-animation-delay: 6s;
  animation-delay: 6s;
}
.sp-container h2.frame-4 {
  font-size: 200px;
  -webkit-animation-delay: 9s;
  -moz-animation-delay: 9s;
  -ms-animation-delay: 9s;
  animation-delay: 9s;
}
.sp-container h2.frame-5 {
  -webkit-animation: none;
  -moz-animation: none;
  -ms-animation: none;
  animation: none;
  color: transparent;
  text-shadow: 0px 0px 1px #fff;
}
.sp-container h2.frame-5 span {
  -webkit-animation: blurFadeIn 3s ease-in 12s backwards;
  -moz-animation: blurFadeIn 1s ease-in 12s backwards;
  -ms-animation: blurFadeIn 3s ease-in 12s backwards;
  animation: blurFadeIn 3s ease-in 12s backwards;
  color: transparent;
  text-shadow: 0px 0px 1px #000;
}
.sp-container h2.frame-5 span:nth-child(2) {
  -webkit-animation-delay: 13s;
  -moz-animation-delay: 13s;
  -ms-animation-delay: 13s;
  animation-delay: 13s;
}
.sp-container h2.frame-5 span:nth-child(3) {
  -webkit-animation-delay: 14s;
  -moz-animation-delay: 14s;
  -ms-animation-delay: 14s;
  animation-delay: 14s;
}
.sp-globe {
  position: absolute;
  width: 282px;
  height: 273px;
  left: 50%;
  top: 50%;
  margin: -137px 0 0 -141px;
  background: transparent url(http://web-sonick.zz.mu/images/sl/globe.png) no-repeat top left;
  -webkit-animation: fadeInBack 3.6s linear 14s backwards;
  -moz-animation: fadeInBack 3.6s linear 14s backwards;
  -ms-animation: fadeInBack 3.6s linear 14s backwards;
  animation: fadeInBack 3.6s linear 14s backwards;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
  filter: alpha(opacity=30);
  opacity: 0.3;
  -webkit-transform: scale(5);
  -moz-transform: scale(5);
  -o-transform: scale(5);
  -ms-transform: scale(5);
  transform: scale(5);
}
.sp-circle-link {
  position: absolute;
  left: 50%;
  bottom: 100px;
  margin-left: -50px;
  text-align: center;
  line-height: 100px;
  width: 100px;
  height: 100px;
  background: blue;
  color: red;
  font-size: 25px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  -webkit-animation: fadeInRotate 1s linear 16s backwards;
  -moz-animation: fadeInRotate 1s linear 16s backwards;
  -ms-animation: fadeInRotate 1s linear 16s backwards;
  animation: fadeInRotate 1s linear 16s backwards;
  -webkit-transform: scale(1) rotate(0deg);
  -moz-transform: scale(1) rotate(0deg);
  -o-transform: scale(1) rotate(0deg);
  -ms-transform: scale(1) rotate(0deg);
  transform: scale(1) rotate(0deg);
}
.sp-circle-link:hover {
  background: #85373b;
  color: #000;
}
/**/

@-webkit-keyframes blurFadeInOut {
  0% {
    opacity: 0;
    text-shadow: 0px 0px 40px #fff;
    -webkit-transform: scale(1.3);
  }
  20%, 75% {
    opacity: 1;
    text-shadow: 0px 0px 1px #fff;
    -webkit-transform: scale(1);
  }
  100% {
    opacity: 0;
    text-shadow: 0px 0px 50px #fff;
    -webkit-transform: scale(0);
  }
}
@-webkit-keyframes blurFadeIn {
  0% {
    opacity: 0;
    text-shadow: 0px 0px 40px #fff;
    -webkit-transform: scale(1.3);
  }
  50% {
    opacity: 0.5;
    text-shadow: 0px 0px 10px #fff;
    -webkit-transform: scale(1.1);
  }
  100% {
    opacity: 1;
    text-shadow: 0px 0px 1px #fff;
    -webkit-transform: scale(1);
  }
}
@-webkit-keyframes fadeInBack {
  0% {
    opacity: 0;
    -webkit-transform: scale(0);
  }
  50% {
    opacity: 0.4;
    -webkit-transform: scale(2);
  }
  100% {
    opacity: 0.2;
    -webkit-transform: scale(5);
  }
}
@-webkit-keyframes fadeInRotate {
  0% {
    opacity: 0;
    -webkit-transform: scale(0) rotate(360deg);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1) rotate(0deg);
  }
}
/**/

@-moz-keyframes blurFadeInOut {
  0% {
    opacity: 0;
    text-shadow: 0px 0px 40px #fff;
    -moz-transform: scale(1.3);
  }
  20%, 75% {
    opacity: 1;
    text-shadow: 0px 0px 1px #fff;
    -moz-transform: scale(1);
  }
  100% {
    opacity: 0;
    text-shadow: 0px 0px 50px #fff;
    -moz-transform: scale(0);
  }
}
@-moz-keyframes blurFadeIn {
  0% {
    opacity: 0;
    text-shadow: 0px 0px 40px #fff;
    -moz-transform: scale(1.3);
  }
  100% {
    opacity: 1;
    text-shadow: 0px 0px 1px #fff;
    -moz-transform: scale(1);
  }
}
@-moz-keyframes fadeInBack {
  0% {
    opacity: 0;
    -moz-transform: scale(0);
  }
  50% {
    opacity: 0.4;
    -moz-transform: scale(2);
  }
  100% {
    opacity: 0.2;
    -moz-transform: scale(5);
  }
}
@-moz-keyframes fadeInRotate {
  0% {
    opacity: 0;
    -moz-transform: scale(0) rotate(360deg);
  }
  100% {
    opacity: 1;
    -moz-transform: scale(1) rotate(0deg);
  }
}
/**/

@keyframes blurFadeInOut {
  0% {
    opacity: 0;
    text-shadow: 0px 0px 40px #fff;
    transform: scale(1.3);
  }
  20%, 75% {
    opacity: 1;
    text-shadow: 0px 0px 1px #fff;
    transform: scale(1);
  }
  100% {
    opacity: 0;
    text-shadow: 0px 0px 50px #fff;
    transform: scale(0);
  }
}
@keyframes blurFadeIn {
  0% {
    opacity: 0;
    text-shadow: 0px 0px 40px #fff;
    transform: scale(1.3);
  }
  50% {
    opacity: 0.5;
    text-shadow: 0px 0px 10px #fff;
    transform: scale(1.1);
  }
  100% {
    opacity: 1;
    text-shadow: 0px 0px 1px #fff;
    transform: scale(1);
  }
}
@keyframes fadeInBack {
  0% {
    opacity: 0;
    transform: scale(0);
  }
  50% {
    opacity: 0.4;
    transform: scale(2);
  }
  100% {
    opacity: 0.2;
    transform: scale(5);
  }
}
@keyframes fadeInRotate {
  0% {
    opacity: 0;
    transform: scale(0) rotate(360deg);
  }
  100% {
    opacity: 1;
    transform: scale(1) rotate(0deg);
  }
}
</style>
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<div id='title'>
  <span>
    
  </span>
  <br>
  <span>
    
  </span>
</div>
      




<style>
@import url(https://fonts.googleapis.com/css?family=Raleway:400,700,900,400italic,700italic,900italic);

*,
:before,
:after {
    box-sizing: border-box;
}

body {
    background-color: #000;
    color: #011a32;
    font: 16px/1.25 'Raleway', sans-serif;
    text-align: center;
}

#wrapper {
    margin-left: auto;
    margin-right: auto;
    max-width: 80em;
}

#container {
    display: flex;
    flex-direction: column;
    float: left;
    justify-content: center;
    min-height: 100vh;
    padding: 1em;
    width: 100%;
}

h1 {
    animation: text-shadow 1.5s ease-in-out infinite;
    font-size: 5em;
    font-weight: 900;
    line-height: 1;
}

h1:hover {
    animation-play-state: paused;
}

a {
    color: #024794;
}

a:hover {
    text-decoration: none;
}

@keyframes text-shadow {
    0% {  
        transform: translateY(0);
        text-shadow: 
            0 0 0 #0c2ffb, 
            0 0 0 #2cfcfd, 
            0 0 0 #fb203b, 
            0 0 0 #fefc4b;
    }

    20% {  
        transform: translateY(-1em);
        text-shadow: 
            0 0.125em 0 #0c2ffb, 
            0 0.25em 0 #2cfcfd, 
            0 -0.125em 0 #fb203b, 
            0 -0.25em 0 #fefc4b;
    }

    40% {  
        transform: translateY(0.5em);
        text-shadow: 
            0 -0.0625em 0 #0c2ffb, 
            0 -0.125em 0 #2cfcfd, 
            0 0.0625em 0 #fb203b, 
            0 0.125em 0 #fefc4b;
    }
    
   60% {
        transform: translateY(-0.25em);
        text-shadow: 
            0 0.03125em 0 #0c2ffb, 
            0 0.0625em 0 #2cfcfd, 
            0 -0.03125em 0 #fb203b, 
            0 -0.0625em 0 #fefc4b;
    }

    80% {  
        transform: translateY(0);
        text-shadow: 
            0 0 0 #0c2ffb, 
            0 0 0 #2cfcfd, 
            0 0 0 #fb203b, 
            0 0 0 #fefc4b;
    }
}

@media (prefers-reduced-motion: reduce) {
    * {
      animation: none !important;
      transition: none !important;
    }
}
  </style>





 

 


   <style>
    html {
  height: 100%;
  background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
  overflow: hidden;
}

#stars {
  width: 1px;
  height: 1px;
  background: transparent;
  box-shadow: 1922px 1702px #FFF , 1809px 1571px #FFF , 1245px 795px #FFF , 1763px 1696px #FFF , 1797px 658px #FFF , 1496px 1577px #FFF , 459px 1664px #FFF , 250px 772px #FFF , 628px 1083px #FFF , 1680px 1443px #FFF , 1817px 1517px #FFF , 105px 372px #FFF , 66px 1188px #FFF , 663px 1292px #FFF , 1880px 308px #FFF , 84px 1965px #FFF , 108px 874px #FFF , 706px 1004px #FFF , 900px 177px #FFF , 1213px 1525px #FFF , 553px 1548px #FFF , 1127px 1608px #FFF , 636px 846px #FFF , 1873px 526px #FFF , 1815px 1810px #FFF , 1935px 777px #FFF , 1451px 1221px #FFF , 1801px 1836px #FFF , 1568px 1893px #FFF , 1178px 578px #FFF , 1930px 375px #FFF , 582px 48px #FFF , 744px 1047px #FFF , 1291px 1045px #FFF , 1530px 1113px #FFF , 206px 1379px #FFF , 1955px 1427px #FFF , 685px 923px #FFF , 685px 1505px #FFF , 352px 1025px #FFF , 1768px 1740px #FFF , 1068px 1568px #FFF , 1386px 1237px #FFF , 1196px 69px #FFF , 1396px 511px #FFF , 1131px 1597px #FFF , 792px 473px #FFF , 291px 1573px #FFF , 1013px 1247px #FFF , 709px 1402px #FFF , 823px 1032px #FFF , 1693px 851px #FFF , 705px 517px #FFF , 1839px 594px #FFF , 104px 1967px #FFF , 1213px 347px #FFF , 797px 845px #FFF , 2px 1730px #FFF , 1475px 1384px #FFF , 1280px 690px #FFF , 1348px 1969px #FFF , 1013px 304px #FFF , 1525px 1079px #FFF , 738px 636px #FFF , 1609px 1686px #FFF , 1447px 26px #FFF , 893px 726px #FFF , 887px 180px #FFF , 802px 255px #FFF , 285px 894px #FFF , 352px 1976px #FFF , 1469px 1813px #FFF , 1958px 1324px #FFF , 1149px 838px #FFF , 625px 949px #FFF , 278px 1720px #FFF , 154px 342px #FFF , 1907px 1404px #FFF , 1887px 986px #FFF , 1953px 283px #FFF , 577px 1771px #FFF , 639px 1302px #FFF , 707px 1823px #FFF , 1366px 179px #FFF , 30px 1912px #FFF , 926px 1114px #FFF , 568px 1140px #FFF , 1834px 630px #FFF , 627px 193px #FFF , 1633px 1458px #FFF , 854px 675px #FFF , 1185px 801px #FFF , 1546px 142px #FFF , 1425px 921px #FFF , 1948px 905px #FFF , 1596px 436px #FFF , 244px 690px #FFF , 1198px 452px #FFF , 521px 1872px #FFF , 577px 992px #FFF , 964px 1289px #FFF , 323px 1440px #FFF , 99px 1860px #FFF , 1791px 285px #FFF , 318px 568px #FFF , 131px 1496px #FFF , 1770px 1586px #FFF , 263px 303px #FFF , 1964px 971px #FFF , 610px 848px #FFF , 703px 1983px #FFF , 1645px 1513px #FFF , 1828px 62px #FFF , 1246px 990px #FFF , 1936px 1214px #FFF , 934px 1710px #FFF , 1387px 659px #FFF , 1938px 1806px #FFF , 1777px 1412px #FFF , 1479px 822px #FFF , 1556px 1576px #FFF , 231px 18px #FFF , 1806px 1581px #FFF , 872px 1669px #FFF , 64px 1578px #FFF , 683px 414px #FFF , 1340px 1804px #FFF , 1382px 1328px #FFF , 177px 1650px #FFF , 1360px 850px #FFF , 1098px 1455px #FFF , 353px 1795px #FFF , 812px 1689px #FFF , 614px 1114px #FFF , 1068px 531px #FFF , 1210px 568px #FFF , 1316px 1506px #FFF , 835px 1854px #FFF , 247px 37px #FFF , 1757px 1077px #FFF , 1203px 1996px #FFF , 1857px 445px #FFF , 1031px 187px #FFF , 1037px 725px #FFF , 1369px 1792px #FFF , 1894px 737px #FFF , 644px 1586px #FFF , 214px 931px #FFF , 1466px 664px #FFF , 1332px 652px #FFF , 1718px 1172px #FFF , 644px 282px #FFF , 265px 968px #FFF , 1887px 921px #FFF , 471px 389px #FFF , 312px 1082px #FFF , 1849px 1935px #FFF , 1932px 243px #FFF , 1967px 1565px #FFF , 1664px 1854px #FFF , 1524px 1522px #FFF , 1582px 883px #FFF , 1394px 1646px #FFF , 701px 942px #FFF , 1570px 981px #FFF , 1156px 647px #FFF , 150px 919px #FFF , 977px 602px #FFF , 411px 429px #FFF , 547px 383px #FFF , 1986px 663px #FFF , 799px 1509px #FFF , 522px 1036px #FFF , 1482px 848px #FFF , 699px 122px #FFF , 1751px 1086px #FFF , 940px 1469px #FFF , 1837px 631px #FFF , 982px 196px #FFF , 1348px 999px #FFF , 1396px 434px #FFF , 414px 426px #FFF , 15px 1541px #FFF , 1898px 13px #FFF , 619px 1723px #FFF , 389px 1501px #FFF , 1591px 488px #FFF , 1360px 631px #FFF , 977px 476px #FFF , 119px 1306px #FFF , 1671px 1196px #FFF , 981px 608px #FFF , 829px 925px #FFF , 1097px 554px #FFF , 692px 1420px #FFF , 312px 551px #FFF , 850px 1090px #FFF , 1416px 1183px #FFF , 1457px 979px #FFF , 739px 270px #FFF , 409px 1810px #FFF , 1389px 483px #FFF , 1289px 1058px #FFF , 1903px 1349px #FFF , 98px 496px #FFF , 1343px 1571px #FFF , 185px 131px #FFF , 303px 1680px #FFF , 966px 1753px #FFF , 894px 1995px #FFF , 1178px 498px #FFF , 493px 38px #FFF , 957px 171px #FFF , 1373px 966px #FFF , 800px 1441px #FFF , 975px 560px #FFF , 1910px 1691px #FFF , 141px 693px #FFF , 981px 1435px #FFF , 947px 1112px #FFF , 837px 775px #FFF , 700px 425px #FFF , 1689px 468px #FFF , 1262px 1061px #FFF , 981px 686px #FFF , 943px 343px #FFF , 282px 1400px #FFF , 790px 1726px #FFF , 172px 1704px #FFF , 546px 672px #FFF , 1292px 1131px #FFF , 721px 518px #FFF , 904px 255px #FFF , 177px 1480px #FFF , 1288px 1974px #FFF , 1770px 768px #FFF , 674px 420px #FFF , 1151px 711px #FFF , 852px 1227px #FFF , 982px 1436px #FFF , 1580px 340px #FFF , 760px 461px #FFF , 1755px 1513px #FFF , 1897px 1037px #FFF , 1182px 1846px #FFF , 1441px 856px #FFF , 867px 485px #FFF , 1710px 1360px #FFF , 1634px 1508px #FFF , 782px 1861px #FFF , 116px 784px #FFF , 454px 1610px #FFF , 1633px 712px #FFF , 1113px 1316px #FFF , 1881px 512px #FFF , 251px 1017px #FFF , 1828px 266px #FFF , 359px 1209px #FFF , 24px 357px #FFF , 703px 897px #FFF , 908px 1794px #FFF , 198px 1888px #FFF , 464px 1874px #FFF , 8px 1155px #FFF , 1022px 710px #FFF , 529px 1540px #FFF , 1619px 225px #FFF , 29px 310px #FFF , 28px 589px #FFF , 1342px 99px #FFF , 253px 938px #FFF , 9px 1661px #FFF , 855px 994px #FFF , 652px 1541px #FFF , 491px 1850px #FFF , 452px 1436px #FFF , 1730px 336px #FFF , 172px 530px #FFF , 584px 818px #FFF , 672px 1874px #FFF , 1494px 1412px #FFF , 645px 1621px #FFF , 177px 233px #FFF , 1955px 977px #FFF , 1019px 867px #FFF , 705px 1995px #FFF , 1301px 1502px #FFF , 176px 1869px #FFF , 1299px 690px #FFF , 316px 198px #FFF , 101px 702px #FFF , 236px 1558px #FFF , 73px 1044px #FFF , 1553px 938px #FFF , 193px 438px #FFF , 1756px 224px #FFF , 15px 1223px #FFF , 26px 879px #FFF , 1779px 1943px #FFF , 14px 497px #FFF , 891px 961px #FFF , 1593px 1261px #FFF , 1585px 653px #FFF , 132px 955px #FFF , 1393px 230px #FFF , 1767px 1848px #FFF , 1649px 597px #FFF , 410px 178px #FFF , 428px 1718px #FFF , 816px 90px #FFF , 1466px 1848px #FFF , 1125px 952px #FFF , 1855px 1736px #FFF , 730px 1301px #FFF , 882px 1670px #FFF , 1110px 555px #FFF , 744px 830px #FFF , 1515px 1286px #FFF , 433px 1714px #FFF , 1124px 1703px #FFF , 1732px 1447px #FFF , 402px 337px #FFF , 694px 42px #FFF , 1004px 553px #FFF , 501px 1768px #FFF , 1850px 150px #FFF , 1470px 607px #FFF , 1389px 718px #FFF , 66px 1574px #FFF , 415px 588px #FFF , 130px 833px #FFF , 1509px 988px #FFF , 1483px 390px #FFF , 89px 545px #FFF , 1177px 160px #FFF , 18px 28px #FFF , 311px 810px #FFF , 415px 446px #FFF , 1835px 1285px #FFF , 649px 1305px #FFF , 1664px 24px #FFF , 1964px 655px #FFF , 130px 1483px #FFF , 1643px 499px #FFF , 1177px 1556px #FFF , 881px 859px #FFF , 1039px 615px #FFF , 993px 244px #FFF , 1829px 479px #FFF , 1890px 369px #FFF , 281px 1565px #FFF , 819px 550px #FFF , 1045px 1992px #FFF , 228px 1181px #FFF , 1700px 960px #FFF , 1298px 1507px #FFF , 212px 1329px #FFF , 654px 1556px #FFF , 1211px 1899px #FFF , 1546px 963px #FFF , 410px 1892px #FFF , 180px 218px #FFF , 1042px 1690px #FFF , 1199px 858px #FFF , 1374px 1768px #FFF , 543px 572px #FFF , 1352px 1975px #FFF , 185px 1789px #FFF , 1173px 1328px #FFF , 473px 1705px #FFF , 460px 1885px #FFF , 1718px 775px #FFF , 657px 1805px #FFF , 1009px 482px #FFF , 606px 604px #FFF , 377px 1590px #FFF , 568px 1260px #FFF , 876px 792px #FFF , 734px 1347px #FFF , 1943px 447px #FFF , 138px 1676px #FFF , 495px 95px #FFF , 399px 1479px #FFF , 1991px 3px #FFF , 1753px 1059px #FFF , 890px 1717px #FFF , 980px 1090px #FFF , 240px 1796px #FFF , 1177px 1546px #FFF , 64px 618px #FFF , 1034px 1275px #FFF , 1786px 600px #FFF , 585px 895px #FFF , 1513px 851px #FFF , 13px 383px #FFF , 1230px 1308px #FFF , 591px 393px #FFF , 1455px 75px #FFF , 366px 1368px #FFF , 1988px 632px #FFF , 1924px 155px #FFF , 1059px 42px #FFF , 678px 293px #FFF , 1863px 1280px #FFF , 1352px 1456px #FFF , 1161px 1864px #FFF , 80px 1371px #FFF , 1558px 89px #FFF , 31px 1828px #FFF , 173px 412px #FFF , 494px 12px #FFF , 1488px 403px #FFF , 14px 557px #FFF , 860px 599px #FFF , 1520px 905px #FFF , 1867px 1765px #FFF , 1180px 239px #FFF , 1069px 639px #FFF , 389px 1992px #FFF , 1182px 570px #FFF , 1118px 1170px #FFF , 684px 144px #FFF , 574px 1235px #FFF , 802px 1231px #FFF , 674px 1597px #FFF , 1137px 1399px #FFF , 1968px 1457px #FFF , 1759px 154px #FFF , 289px 1631px #FFF , 129px 703px #FFF , 712px 748px #FFF , 1425px 1953px #FFF , 208px 108px #FFF , 466px 392px #FFF , 1749px 136px #FFF , 1955px 1319px #FFF , 1379px 1831px #FFF , 1758px 1495px #FFF , 92px 841px #FFF , 941px 1279px #FFF , 1863px 1462px #FFF , 1944px 1314px #FFF , 1191px 1699px #FFF , 1325px 1782px #FFF , 590px 1098px #FFF , 1950px 677px #FFF , 901px 1944px #FFF , 959px 1622px #FFF , 206px 1969px #FFF , 1172px 1225px #FFF , 1361px 781px #FFF , 1747px 835px #FFF , 1936px 593px #FFF , 1666px 205px #FFF , 420px 1305px #FFF , 1752px 548px #FFF , 157px 1454px #FFF , 1956px 1098px #FFF , 884px 1343px #FFF , 1529px 1673px #FFF , 496px 754px #FFF , 534px 1887px #FFF , 1778px 186px #FFF , 389px 1016px #FFF , 161px 796px #FFF , 524px 532px #FFF , 685px 1901px #FFF , 218px 353px #FFF , 1405px 1661px #FFF , 665px 1908px #FFF , 521px 104px #FFF , 1382px 1653px #FFF , 908px 363px #FFF , 844px 789px #FFF , 333px 1792px #FFF , 1652px 1738px #FFF , 1285px 1150px #FFF , 244px 701px #FFF , 1678px 197px #FFF , 1236px 1026px #FFF , 1666px 238px #FFF , 1144px 467px #FFF , 611px 1861px #FFF , 90px 330px #FFF , 605px 199px #FFF , 938px 773px #FFF , 1748px 1278px #FFF , 586px 709px #FFF , 364px 1146px #FFF , 857px 1202px #FFF , 1046px 110px #FFF , 334px 1859px #FFF , 232px 910px #FFF , 1112px 279px #FFF , 631px 12px #FFF , 1501px 5px #FFF , 640px 683px #FFF , 1546px 746px #FFF , 1262px 1136px #FFF , 1591px 1765px #FFF , 1074px 1685px #FFF , 392px 958px #FFF , 546px 591px #FFF , 1680px 1915px #FFF , 650px 1269px #FFF , 841px 1354px #FFF , 1420px 1404px #FFF , 1272px 520px #FFF , 1590px 1543px #FFF , 1065px 1577px #FFF , 141px 1980px #FFF , 329px 445px #FFF , 1419px 405px #FFF , 1512px 407px #FFF , 908px 462px #FFF , 1339px 54px #FFF , 959px 1240px #FFF , 1699px 318px #FFF , 564px 1402px #FFF , 210px 9px #FFF , 150px 1737px #FFF , 61px 49px #FFF , 1863px 715px #FFF , 81px 365px #FFF , 1394px 1635px #FFF , 570px 397px #FFF , 739px 259px #FFF , 788px 1848px #FFF , 1022px 605px #FFF , 1410px 330px #FFF , 11px 625px #FFF , 242px 490px #FFF , 626px 638px #FFF , 298px 1342px #FFF , 441px 278px #FFF , 156px 1201px #FFF , 1810px 29px #FFF , 1383px 277px #FFF , 1444px 661px #FFF , 1470px 1077px #FFF , 932px 1792px #FFF , 184px 522px #FFF , 1569px 1127px #FFF , 169px 1307px #FFF , 1764px 1372px #FFF , 9px 415px #FFF , 1468px 1521px #FFF , 1676px 1453px #FFF , 1312px 1919px #FFF , 391px 1512px #FFF , 708px 2px #FFF , 913px 1866px #FFF , 1541px 10px #FFF , 1692px 1502px #FFF , 260px 1263px #FFF , 1835px 1740px #FFF , 360px 1834px #FFF , 198px 780px #FFF , 667px 1402px #FFF , 25px 271px #FFF , 233px 1735px #FFF , 1639px 1703px #FFF , 507px 1553px #FFF , 730px 773px #FFF , 1941px 196px #FFF , 1337px 1019px #FFF , 702px 978px #FFF , 5px 1402px #FFF , 1586px 15px #FFF , 1527px 1232px #FFF , 59px 389px #FFF , 1651px 1859px #FFF , 43px 476px #FFF , 197px 722px #FFF , 147px 415px #FFF , 89px 408px #FFF , 1929px 8px #FFF , 904px 1853px #FFF , 1375px 257px #FFF , 259px 819px #FFF , 605px 1382px #FFF , 481px 1807px #FFF , 1039px 1218px #FFF , 681px 1296px #FFF , 241px 480px #FFF , 1346px 1754px #FFF , 357px 1692px #FFF , 671px 1624px #FFF , 810px 1781px #FFF , 1104px 1284px #FFF , 36px 944px #FFF , 19px 1189px #FFF , 458px 145px #FFF , 1623px 1982px #FFF , 1090px 218px #FFF , 700px 892px #FFF , 1279px 1747px #FFF , 1476px 813px #FFF , 1515px 289px #FFF , 659px 297px #FFF , 550px 1082px #FFF , 1187px 745px #FFF , 424px 150px #FFF , 343px 1212px #FFF , 1413px 1491px #FFF , 1698px 212px #FFF , 1942px 1876px #FFF , 1026px 532px #FFF , 1770px 107px #FFF , 1282px 61px #FFF , 484px 616px #FFF , 457px 1692px #FFF , 1190px 1960px #FFF , 902px 1293px #FFF , 887px 161px #FFF , 1983px 696px #FFF , 1739px 1553px #FFF , 152px 1685px #FFF , 497px 481px #FFF , 1936px 1523px #FFF , 1719px 1790px #FFF , 1860px 301px #FFF , 1205px 409px #FFF , 395px 411px #FFF , 1161px 1900px #FFF , 1860px 246px #FFF , 1665px 1196px #FFF , 829px 536px #FFF , 733px 1320px #FFF , 573px 1506px #FFF , 1827px 910px #FFF , 532px 1808px #FFF , 155px 1728px #FFF , 1847px 144px #FFF , 1024px 1950px #FFF , 380px 514px #FFF , 956px 1244px #FFF , 1116px 1246px #FFF , 1693px 1285px #FFF , 776px 1385px #FFF , 473px 784px #FFF , 71px 499px #FFF , 1003px 302px #FFF , 1027px 1181px #FFF , 556px 97px #FFF , 945px 401px #FFF , 170px 1px #FFF , 1053px 980px #FFF , 747px 1329px #FFF , 671px 1324px #FFF , 1320px 1887px #FFF , 219px 1492px #FFF , 481px 1764px #FFF , 990px 342px #FFF , 293px 1815px #FFF , 1874px 1220px #FFF , 1991px 400px #FFF , 1817px 1739px #FFF , 1536px 868px #FFF , 1300px 1007px #FFF , 860px 1325px #FFF , 1467px 1706px #FFF , 1593px 55px #FFF , 724px 374px #FFF , 1189px 1054px #FFF , 1363px 1170px #FFF , 880px 1681px #FFF , 347px 405px #FFF , 1801px 1311px #FFF , 1203px 789px #FFF , 1490px 1893px #FFF , 1004px 1953px #FFF , 1132px 1064px #FFF , 442px 1192px #FFF , 713px 802px #FFF , 142px 512px #FFF , 1918px 1726px #FFF , 1107px 1310px #FFF , 1680px 1033px #FFF , 282px 893px #FFF , 821px 1841px #FFF , 1262px 1786px #FFF , 1354px 1188px #FFF , 1141px 126px #FFF , 160px 574px #FFF , 716px 570px #FFF , 554px 1102px #FFF , 775px 1965px #FFF , 1905px 940px #FFF , 733px 857px #FFF , 1229px 918px #FFF , 1107px 1928px #FFF , 535px 1241px #FFF , 1890px 577px #FFF , 797px 63px #FFF , 1560px 1810px #FFF , 1755px 1762px #FFF , 1796px 1854px #FFF , 1160px 996px #FFF , 1116px 1294px #FFF;
  animation: animStar 50s linear infinite;
}
#stars:after {
  content: " ";
  position: absolute;
  top: 2000px;
  width: 1px;
  height: 1px;
  background: transparent;
  box-shadow: 1922px 1702px #FFF , 1809px 1571px #FFF , 1245px 795px #FFF , 1763px 1696px #FFF , 1797px 658px #FFF , 1496px 1577px #FFF , 459px 1664px #FFF , 250px 772px #FFF , 628px 1083px #FFF , 1680px 1443px #FFF , 1817px 1517px #FFF , 105px 372px #FFF , 66px 1188px #FFF , 663px 1292px #FFF , 1880px 308px #FFF , 84px 1965px #FFF , 108px 874px #FFF , 706px 1004px #FFF , 900px 177px #FFF , 1213px 1525px #FFF , 553px 1548px #FFF , 1127px 1608px #FFF , 636px 846px #FFF , 1873px 526px #FFF , 1815px 1810px #FFF , 1935px 777px #FFF , 1451px 1221px #FFF , 1801px 1836px #FFF , 1568px 1893px #FFF , 1178px 578px #FFF , 1930px 375px #FFF , 582px 48px #FFF , 744px 1047px #FFF , 1291px 1045px #FFF , 1530px 1113px #FFF , 206px 1379px #FFF , 1955px 1427px #FFF , 685px 923px #FFF , 685px 1505px #FFF , 352px 1025px #FFF , 1768px 1740px #FFF , 1068px 1568px #FFF , 1386px 1237px #FFF , 1196px 69px #FFF , 1396px 511px #FFF , 1131px 1597px #FFF , 792px 473px #FFF , 291px 1573px #FFF , 1013px 1247px #FFF , 709px 1402px #FFF , 823px 1032px #FFF , 1693px 851px #FFF , 705px 517px #FFF , 1839px 594px #FFF , 104px 1967px #FFF , 1213px 347px #FFF , 797px 845px #FFF , 2px 1730px #FFF , 1475px 1384px #FFF , 1280px 690px #FFF , 1348px 1969px #FFF , 1013px 304px #FFF , 1525px 1079px #FFF , 738px 636px #FFF , 1609px 1686px #FFF , 1447px 26px #FFF , 893px 726px #FFF , 887px 180px #FFF , 802px 255px #FFF , 285px 894px #FFF , 352px 1976px #FFF , 1469px 1813px #FFF , 1958px 1324px #FFF , 1149px 838px #FFF , 625px 949px #FFF , 278px 1720px #FFF , 154px 342px #FFF , 1907px 1404px #FFF , 1887px 986px #FFF , 1953px 283px #FFF , 577px 1771px #FFF , 639px 1302px #FFF , 707px 1823px #FFF , 1366px 179px #FFF , 30px 1912px #FFF , 926px 1114px #FFF , 568px 1140px #FFF , 1834px 630px #FFF , 627px 193px #FFF , 1633px 1458px #FFF , 854px 675px #FFF , 1185px 801px #FFF , 1546px 142px #FFF , 1425px 921px #FFF , 1948px 905px #FFF , 1596px 436px #FFF , 244px 690px #FFF , 1198px 452px #FFF , 521px 1872px #FFF , 577px 992px #FFF , 964px 1289px #FFF , 323px 1440px #FFF , 99px 1860px #FFF , 1791px 285px #FFF , 318px 568px #FFF , 131px 1496px #FFF , 1770px 1586px #FFF , 263px 303px #FFF , 1964px 971px #FFF , 610px 848px #FFF , 703px 1983px #FFF , 1645px 1513px #FFF , 1828px 62px #FFF , 1246px 990px #FFF , 1936px 1214px #FFF , 934px 1710px #FFF , 1387px 659px #FFF , 1938px 1806px #FFF , 1777px 1412px #FFF , 1479px 822px #FFF , 1556px 1576px #FFF , 231px 18px #FFF , 1806px 1581px #FFF , 872px 1669px #FFF , 64px 1578px #FFF , 683px 414px #FFF , 1340px 1804px #FFF , 1382px 1328px #FFF , 177px 1650px #FFF , 1360px 850px #FFF , 1098px 1455px #FFF , 353px 1795px #FFF , 812px 1689px #FFF , 614px 1114px #FFF , 1068px 531px #FFF , 1210px 568px #FFF , 1316px 1506px #FFF , 835px 1854px #FFF , 247px 37px #FFF , 1757px 1077px #FFF , 1203px 1996px #FFF , 1857px 445px #FFF , 1031px 187px #FFF , 1037px 725px #FFF , 1369px 1792px #FFF , 1894px 737px #FFF , 644px 1586px #FFF , 214px 931px #FFF , 1466px 664px #FFF , 1332px 652px #FFF , 1718px 1172px #FFF , 644px 282px #FFF , 265px 968px #FFF , 1887px 921px #FFF , 471px 389px #FFF , 312px 1082px #FFF , 1849px 1935px #FFF , 1932px 243px #FFF , 1967px 1565px #FFF , 1664px 1854px #FFF , 1524px 1522px #FFF , 1582px 883px #FFF , 1394px 1646px #FFF , 701px 942px #FFF , 1570px 981px #FFF , 1156px 647px #FFF , 150px 919px #FFF , 977px 602px #FFF , 411px 429px #FFF , 547px 383px #FFF , 1986px 663px #FFF , 799px 1509px #FFF , 522px 1036px #FFF , 1482px 848px #FFF , 699px 122px #FFF , 1751px 1086px #FFF , 940px 1469px #FFF , 1837px 631px #FFF , 982px 196px #FFF , 1348px 999px #FFF , 1396px 434px #FFF , 414px 426px #FFF , 15px 1541px #FFF , 1898px 13px #FFF , 619px 1723px #FFF , 389px 1501px #FFF , 1591px 488px #FFF , 1360px 631px #FFF , 977px 476px #FFF , 119px 1306px #FFF , 1671px 1196px #FFF , 981px 608px #FFF , 829px 925px #FFF , 1097px 554px #FFF , 692px 1420px #FFF , 312px 551px #FFF , 850px 1090px #FFF , 1416px 1183px #FFF , 1457px 979px #FFF , 739px 270px #FFF , 409px 1810px #FFF , 1389px 483px #FFF , 1289px 1058px #FFF , 1903px 1349px #FFF , 98px 496px #FFF , 1343px 1571px #FFF , 185px 131px #FFF , 303px 1680px #FFF , 966px 1753px #FFF , 894px 1995px #FFF , 1178px 498px #FFF , 493px 38px #FFF , 957px 171px #FFF , 1373px 966px #FFF , 800px 1441px #FFF , 975px 560px #FFF , 1910px 1691px #FFF , 141px 693px #FFF , 981px 1435px #FFF , 947px 1112px #FFF , 837px 775px #FFF , 700px 425px #FFF , 1689px 468px #FFF , 1262px 1061px #FFF , 981px 686px #FFF , 943px 343px #FFF , 282px 1400px #FFF , 790px 1726px #FFF , 172px 1704px #FFF , 546px 672px #FFF , 1292px 1131px #FFF , 721px 518px #FFF , 904px 255px #FFF , 177px 1480px #FFF , 1288px 1974px #FFF , 1770px 768px #FFF , 674px 420px #FFF , 1151px 711px #FFF , 852px 1227px #FFF , 982px 1436px #FFF , 1580px 340px #FFF , 760px 461px #FFF , 1755px 1513px #FFF , 1897px 1037px #FFF , 1182px 1846px #FFF , 1441px 856px #FFF , 867px 485px #FFF , 1710px 1360px #FFF , 1634px 1508px #FFF , 782px 1861px #FFF , 116px 784px #FFF , 454px 1610px #FFF , 1633px 712px #FFF , 1113px 1316px #FFF , 1881px 512px #FFF , 251px 1017px #FFF , 1828px 266px #FFF , 359px 1209px #FFF , 24px 357px #FFF , 703px 897px #FFF , 908px 1794px #FFF , 198px 1888px #FFF , 464px 1874px #FFF , 8px 1155px #FFF , 1022px 710px #FFF , 529px 1540px #FFF , 1619px 225px #FFF , 29px 310px #FFF , 28px 589px #FFF , 1342px 99px #FFF , 253px 938px #FFF , 9px 1661px #FFF , 855px 994px #FFF , 652px 1541px #FFF , 491px 1850px #FFF , 452px 1436px #FFF , 1730px 336px #FFF , 172px 530px #FFF , 584px 818px #FFF , 672px 1874px #FFF , 1494px 1412px #FFF , 645px 1621px #FFF , 177px 233px #FFF , 1955px 977px #FFF , 1019px 867px #FFF , 705px 1995px #FFF , 1301px 1502px #FFF , 176px 1869px #FFF , 1299px 690px #FFF , 316px 198px #FFF , 101px 702px #FFF , 236px 1558px #FFF , 73px 1044px #FFF , 1553px 938px #FFF , 193px 438px #FFF , 1756px 224px #FFF , 15px 1223px #FFF , 26px 879px #FFF , 1779px 1943px #FFF , 14px 497px #FFF , 891px 961px #FFF , 1593px 1261px #FFF , 1585px 653px #FFF , 132px 955px #FFF , 1393px 230px #FFF , 1767px 1848px #FFF , 1649px 597px #FFF , 410px 178px #FFF , 428px 1718px #FFF , 816px 90px #FFF , 1466px 1848px #FFF , 1125px 952px #FFF , 1855px 1736px #FFF , 730px 1301px #FFF , 882px 1670px #FFF , 1110px 555px #FFF , 744px 830px #FFF , 1515px 1286px #FFF , 433px 1714px #FFF , 1124px 1703px #FFF , 1732px 1447px #FFF , 402px 337px #FFF , 694px 42px #FFF , 1004px 553px #FFF , 501px 1768px #FFF , 1850px 150px #FFF , 1470px 607px #FFF , 1389px 718px #FFF , 66px 1574px #FFF , 415px 588px #FFF , 130px 833px #FFF , 1509px 988px #FFF , 1483px 390px #FFF , 89px 545px #FFF , 1177px 160px #FFF , 18px 28px #FFF , 311px 810px #FFF , 415px 446px #FFF , 1835px 1285px #FFF , 649px 1305px #FFF , 1664px 24px #FFF , 1964px 655px #FFF , 130px 1483px #FFF , 1643px 499px #FFF , 1177px 1556px #FFF , 881px 859px #FFF , 1039px 615px #FFF , 993px 244px #FFF , 1829px 479px #FFF , 1890px 369px #FFF , 281px 1565px #FFF , 819px 550px #FFF , 1045px 1992px #FFF , 228px 1181px #FFF , 1700px 960px #FFF , 1298px 1507px #FFF , 212px 1329px #FFF , 654px 1556px #FFF , 1211px 1899px #FFF , 1546px 963px #FFF , 410px 1892px #FFF , 180px 218px #FFF , 1042px 1690px #FFF , 1199px 858px #FFF , 1374px 1768px #FFF , 543px 572px #FFF , 1352px 1975px #FFF , 185px 1789px #FFF , 1173px 1328px #FFF , 473px 1705px #FFF , 460px 1885px #FFF , 1718px 775px #FFF , 657px 1805px #FFF , 1009px 482px #FFF , 606px 604px #FFF , 377px 1590px #FFF , 568px 1260px #FFF , 876px 792px #FFF , 734px 1347px #FFF , 1943px 447px #FFF , 138px 1676px #FFF , 495px 95px #FFF , 399px 1479px #FFF , 1991px 3px #FFF , 1753px 1059px #FFF , 890px 1717px #FFF , 980px 1090px #FFF , 240px 1796px #FFF , 1177px 1546px #FFF , 64px 618px #FFF , 1034px 1275px #FFF , 1786px 600px #FFF , 585px 895px #FFF , 1513px 851px #FFF , 13px 383px #FFF , 1230px 1308px #FFF , 591px 393px #FFF , 1455px 75px #FFF , 366px 1368px #FFF , 1988px 632px #FFF , 1924px 155px #FFF , 1059px 42px #FFF , 678px 293px #FFF , 1863px 1280px #FFF , 1352px 1456px #FFF , 1161px 1864px #FFF , 80px 1371px #FFF , 1558px 89px #FFF , 31px 1828px #FFF , 173px 412px #FFF , 494px 12px #FFF , 1488px 403px #FFF , 14px 557px #FFF , 860px 599px #FFF , 1520px 905px #FFF , 1867px 1765px #FFF , 1180px 239px #FFF , 1069px 639px #FFF , 389px 1992px #FFF , 1182px 570px #FFF , 1118px 1170px #FFF , 684px 144px #FFF , 574px 1235px #FFF , 802px 1231px #FFF , 674px 1597px #FFF , 1137px 1399px #FFF , 1968px 1457px #FFF , 1759px 154px #FFF , 289px 1631px #FFF , 129px 703px #FFF , 712px 748px #FFF , 1425px 1953px #FFF , 208px 108px #FFF , 466px 392px #FFF , 1749px 136px #FFF , 1955px 1319px #FFF , 1379px 1831px #FFF , 1758px 1495px #FFF , 92px 841px #FFF , 941px 1279px #FFF , 1863px 1462px #FFF , 1944px 1314px #FFF , 1191px 1699px #FFF , 1325px 1782px #FFF , 590px 1098px #FFF , 1950px 677px #FFF , 901px 1944px #FFF , 959px 1622px #FFF , 206px 1969px #FFF , 1172px 1225px #FFF , 1361px 781px #FFF , 1747px 835px #FFF , 1936px 593px #FFF , 1666px 205px #FFF , 420px 1305px #FFF , 1752px 548px #FFF , 157px 1454px #FFF , 1956px 1098px #FFF , 884px 1343px #FFF , 1529px 1673px #FFF , 496px 754px #FFF , 534px 1887px #FFF , 1778px 186px #FFF , 389px 1016px #FFF , 161px 796px #FFF , 524px 532px #FFF , 685px 1901px #FFF , 218px 353px #FFF , 1405px 1661px #FFF , 665px 1908px #FFF , 521px 104px #FFF , 1382px 1653px #FFF , 908px 363px #FFF , 844px 789px #FFF , 333px 1792px #FFF , 1652px 1738px #FFF , 1285px 1150px #FFF , 244px 701px #FFF , 1678px 197px #FFF , 1236px 1026px #FFF , 1666px 238px #FFF , 1144px 467px #FFF , 611px 1861px #FFF , 90px 330px #FFF , 605px 199px #FFF , 938px 773px #FFF , 1748px 1278px #FFF , 586px 709px #FFF , 364px 1146px #FFF , 857px 1202px #FFF , 1046px 110px #FFF , 334px 1859px #FFF , 232px 910px #FFF , 1112px 279px #FFF , 631px 12px #FFF , 1501px 5px #FFF , 640px 683px #FFF , 1546px 746px #FFF , 1262px 1136px #FFF , 1591px 1765px #FFF , 1074px 1685px #FFF , 392px 958px #FFF , 546px 591px #FFF , 1680px 1915px #FFF , 650px 1269px #FFF , 841px 1354px #FFF , 1420px 1404px #FFF , 1272px 520px #FFF , 1590px 1543px #FFF , 1065px 1577px #FFF , 141px 1980px #FFF , 329px 445px #FFF , 1419px 405px #FFF , 1512px 407px #FFF , 908px 462px #FFF , 1339px 54px #FFF , 959px 1240px #FFF , 1699px 318px #FFF , 564px 1402px #FFF , 210px 9px #FFF , 150px 1737px #FFF , 61px 49px #FFF , 1863px 715px #FFF , 81px 365px #FFF , 1394px 1635px #FFF , 570px 397px #FFF , 739px 259px #FFF , 788px 1848px #FFF , 1022px 605px #FFF , 1410px 330px #FFF , 11px 625px #FFF , 242px 490px #FFF , 626px 638px #FFF , 298px 1342px #FFF , 441px 278px #FFF , 156px 1201px #FFF , 1810px 29px #FFF , 1383px 277px #FFF , 1444px 661px #FFF , 1470px 1077px #FFF , 932px 1792px #FFF , 184px 522px #FFF , 1569px 1127px #FFF , 169px 1307px #FFF , 1764px 1372px #FFF , 9px 415px #FFF , 1468px 1521px #FFF , 1676px 1453px #FFF , 1312px 1919px #FFF , 391px 1512px #FFF , 708px 2px #FFF , 913px 1866px #FFF , 1541px 10px #FFF , 1692px 1502px #FFF , 260px 1263px #FFF , 1835px 1740px #FFF , 360px 1834px #FFF , 198px 780px #FFF , 667px 1402px #FFF , 25px 271px #FFF , 233px 1735px #FFF , 1639px 1703px #FFF , 507px 1553px #FFF , 730px 773px #FFF , 1941px 196px #FFF , 1337px 1019px #FFF , 702px 978px #FFF , 5px 1402px #FFF , 1586px 15px #FFF , 1527px 1232px #FFF , 59px 389px #FFF , 1651px 1859px #FFF , 43px 476px #FFF , 197px 722px #FFF , 147px 415px #FFF , 89px 408px #FFF , 1929px 8px #FFF , 904px 1853px #FFF , 1375px 257px #FFF , 259px 819px #FFF , 605px 1382px #FFF , 481px 1807px #FFF , 1039px 1218px #FFF , 681px 1296px #FFF , 241px 480px #FFF , 1346px 1754px #FFF , 357px 1692px #FFF , 671px 1624px #FFF , 810px 1781px #FFF , 1104px 1284px #FFF , 36px 944px #FFF , 19px 1189px #FFF , 458px 145px #FFF , 1623px 1982px #FFF , 1090px 218px #FFF , 700px 892px #FFF , 1279px 1747px #FFF , 1476px 813px #FFF , 1515px 289px #FFF , 659px 297px #FFF , 550px 1082px #FFF , 1187px 745px #FFF , 424px 150px #FFF , 343px 1212px #FFF , 1413px 1491px #FFF , 1698px 212px #FFF , 1942px 1876px #FFF , 1026px 532px #FFF , 1770px 107px #FFF , 1282px 61px #FFF , 484px 616px #FFF , 457px 1692px #FFF , 1190px 1960px #FFF , 902px 1293px #FFF , 887px 161px #FFF , 1983px 696px #FFF , 1739px 1553px #FFF , 152px 1685px #FFF , 497px 481px #FFF , 1936px 1523px #FFF , 1719px 1790px #FFF , 1860px 301px #FFF , 1205px 409px #FFF , 395px 411px #FFF , 1161px 1900px #FFF , 1860px 246px #FFF , 1665px 1196px #FFF , 829px 536px #FFF , 733px 1320px #FFF , 573px 1506px #FFF , 1827px 910px #FFF , 532px 1808px #FFF , 155px 1728px #FFF , 1847px 144px #FFF , 1024px 1950px #FFF , 380px 514px #FFF , 956px 1244px #FFF , 1116px 1246px #FFF , 1693px 1285px #FFF , 776px 1385px #FFF , 473px 784px #FFF , 71px 499px #FFF , 1003px 302px #FFF , 1027px 1181px #FFF , 556px 97px #FFF , 945px 401px #FFF , 170px 1px #FFF , 1053px 980px #FFF , 747px 1329px #FFF , 671px 1324px #FFF , 1320px 1887px #FFF , 219px 1492px #FFF , 481px 1764px #FFF , 990px 342px #FFF , 293px 1815px #FFF , 1874px 1220px #FFF , 1991px 400px #FFF , 1817px 1739px #FFF , 1536px 868px #FFF , 1300px 1007px #FFF , 860px 1325px #FFF , 1467px 1706px #FFF , 1593px 55px #FFF , 724px 374px #FFF , 1189px 1054px #FFF , 1363px 1170px #FFF , 880px 1681px #FFF , 347px 405px #FFF , 1801px 1311px #FFF , 1203px 789px #FFF , 1490px 1893px #FFF , 1004px 1953px #FFF , 1132px 1064px #FFF , 442px 1192px #FFF , 713px 802px #FFF , 142px 512px #FFF , 1918px 1726px #FFF , 1107px 1310px #FFF , 1680px 1033px #FFF , 282px 893px #FFF , 821px 1841px #FFF , 1262px 1786px #FFF , 1354px 1188px #FFF , 1141px 126px #FFF , 160px 574px #FFF , 716px 570px #FFF , 554px 1102px #FFF , 775px 1965px #FFF , 1905px 940px #FFF , 733px 857px #FFF , 1229px 918px #FFF , 1107px 1928px #FFF , 535px 1241px #FFF , 1890px 577px #FFF , 797px 63px #FFF , 1560px 1810px #FFF , 1755px 1762px #FFF , 1796px 1854px #FFF , 1160px 996px #FFF , 1116px 1294px #FFF;
}

#stars2 {
  width: 2px;
  height: 2px;
  background: transparent;
  box-shadow: 759px 300px #FFF , 1154px 879px #FFF , 1570px 364px #FFF , 611px 661px #FFF , 1282px 1192px #FFF , 1092px 808px #FFF , 1051px 1598px #FFF , 1524px 1921px #FFF , 1285px 481px #FFF , 670px 1094px #FFF , 244px 561px #FFF , 1519px 704px #FFF , 1785px 191px #FFF , 119px 1260px #FFF , 586px 387px #FFF , 223px 690px #FFF , 268px 880px #FFF , 1862px 108px #FFF , 1985px 1812px #FFF , 1699px 330px #FFF , 1302px 1796px #FFF , 1677px 756px #FFF , 1783px 1021px #FFF , 464px 879px #FFF , 1472px 374px #FFF , 1778px 1485px #FFF , 770px 246px #FFF , 1160px 1009px #FFF , 321px 662px #FFF , 543px 1266px #FFF , 1672px 1732px #FFF , 251px 1541px #FFF , 1588px 1191px #FFF , 1012px 688px #FFF , 553px 1983px #FFF , 597px 29px #FFF , 1182px 979px #FFF , 196px 108px #FFF , 1293px 1192px #FFF , 1196px 1133px #FFF , 163px 659px #FFF , 1325px 1380px #FFF , 545px 1873px #FFF , 1697px 1008px #FFF , 1350px 94px #FFF , 1715px 1084px #FFF , 1464px 1694px #FFF , 1180px 280px #FFF , 1025px 1357px #FFF , 1639px 1953px #FFF , 1139px 621px #FFF , 91px 267px #FFF , 1152px 597px #FFF , 1156px 449px #FFF , 1480px 512px #FFF , 1232px 1076px #FFF , 949px 996px #FFF , 1581px 1824px #FFF , 449px 1696px #FFF , 1156px 786px #FFF , 17px 1247px #FFF , 1578px 1826px #FFF , 745px 10px #FFF , 1182px 1883px #FFF , 1259px 1711px #FFF , 230px 1376px #FFF , 1013px 797px #FFF , 1758px 251px #FFF , 380px 736px #FFF , 1528px 1705px #FFF , 1087px 1091px #FFF , 637px 352px #FFF , 1335px 1332px #FFF , 1865px 295px #FFF , 363px 707px #FFF , 387px 648px #FFF , 376px 477px #FFF , 380px 619px #FFF , 1247px 153px #FFF , 1876px 64px #FFF , 1936px 1101px #FFF , 1749px 718px #FFF , 464px 1866px #FFF , 1212px 684px #FFF , 1987px 183px #FFF , 1643px 1019px #FFF , 1865px 1688px #FFF , 12px 1651px #FFF , 360px 664px #FFF , 93px 1027px #FFF , 1434px 223px #FFF , 95px 1455px #FFF , 1728px 1401px #FFF , 1349px 231px #FFF , 696px 1117px #FFF , 1558px 504px #FFF , 765px 1624px #FFF , 113px 1397px #FFF , 1607px 1255px #FFF , 414px 1532px #FFF , 738px 1814px #FFF , 985px 720px #FFF , 1898px 208px #FFF , 1318px 737px #FFF , 1709px 1123px #FFF , 883px 103px #FFF , 619px 506px #FFF , 1269px 433px #FFF , 301px 1276px #FFF , 1932px 1888px #FFF , 522px 319px #FFF , 793px 945px #FFF , 1163px 1072px #FFF , 1866px 101px #FFF , 1552px 716px #FFF , 993px 1752px #FFF , 1413px 939px #FFF , 1859px 501px #FFF , 1733px 502px #FFF , 1706px 1920px #FFF , 1777px 1800px #FFF , 1480px 414px #FFF , 1872px 1108px #FFF , 358px 1177px #FFF , 771px 36px #FFF , 924px 711px #FFF , 498px 1824px #FFF , 798px 1341px #FFF , 1409px 398px #FFF , 1872px 157px #FFF , 155px 567px #FFF , 282px 850px #FFF , 1221px 1933px #FFF , 71px 531px #FFF , 813px 1151px #FFF , 3px 722px #FFF , 1252px 1320px #FFF , 1258px 660px #FFF , 1346px 655px #FFF , 1873px 903px #FFF , 1374px 892px #FFF , 1090px 682px #FFF , 1075px 784px #FFF , 1250px 938px #FFF , 242px 65px #FFF , 1618px 170px #FFF , 149px 1939px #FFF , 124px 1583px #FFF , 686px 110px #FFF , 1222px 1400px #FFF , 420px 75px #FFF , 420px 273px #FFF , 134px 411px #FFF , 549px 1822px #FFF , 776px 537px #FFF , 1726px 471px #FFF , 687px 559px #FFF , 1215px 1699px #FFF , 502px 876px #FFF , 1090px 23px #FFF , 1554px 1803px #FFF , 1041px 302px #FFF , 927px 604px #FFF , 792px 882px #FFF , 736px 355px #FFF , 470px 1682px #FFF , 1302px 939px #FFF , 296px 864px #FFF , 1413px 1689px #FFF , 1868px 1825px #FFF , 1325px 1224px #FFF , 738px 993px #FFF , 822px 1244px #FFF , 1048px 816px #FFF , 802px 452px #FFF , 1730px 422px #FFF , 834px 1589px #FFF , 268px 510px #FFF , 443px 1167px #FFF , 1161px 1935px #FFF , 1741px 365px #FFF , 73px 428px #FFF , 202px 1006px #FFF , 707px 215px #FFF , 1862px 1562px #FFF , 1218px 179px #FFF , 1935px 842px #FFF , 1979px 132px #FFF , 380px 1757px #FFF , 318px 71px #FFF , 1172px 1873px #FFF , 86px 1953px #FFF , 1037px 1795px #FFF , 1083px 1982px #FFF , 1950px 287px #FFF , 670px 655px #FFF , 1559px 1004px #FFF , 935px 1058px #FFF , 1770px 539px #FFF , 591px 1594px #FFF;
  animation: animStar 100s linear infinite;
}
#stars2:after {
  content: " ";
  position: absolute;
  top: 2000px;
  width: 2px;
  height: 2px;
  background: transparent;
  box-shadow: 759px 300px #FFF , 1154px 879px #FFF , 1570px 364px #FFF , 611px 661px #FFF , 1282px 1192px #FFF , 1092px 808px #FFF , 1051px 1598px #FFF , 1524px 1921px #FFF , 1285px 481px #FFF , 670px 1094px #FFF , 244px 561px #FFF , 1519px 704px #FFF , 1785px 191px #FFF , 119px 1260px #FFF , 586px 387px #FFF , 223px 690px #FFF , 268px 880px #FFF , 1862px 108px #FFF , 1985px 1812px #FFF , 1699px 330px #FFF , 1302px 1796px #FFF , 1677px 756px #FFF , 1783px 1021px #FFF , 464px 879px #FFF , 1472px 374px #FFF , 1778px 1485px #FFF , 770px 246px #FFF , 1160px 1009px #FFF , 321px 662px #FFF , 543px 1266px #FFF , 1672px 1732px #FFF , 251px 1541px #FFF , 1588px 1191px #FFF , 1012px 688px #FFF , 553px 1983px #FFF , 597px 29px #FFF , 1182px 979px #FFF , 196px 108px #FFF , 1293px 1192px #FFF , 1196px 1133px #FFF , 163px 659px #FFF , 1325px 1380px #FFF , 545px 1873px #FFF , 1697px 1008px #FFF , 1350px 94px #FFF , 1715px 1084px #FFF , 1464px 1694px #FFF , 1180px 280px #FFF , 1025px 1357px #FFF , 1639px 1953px #FFF , 1139px 621px #FFF , 91px 267px #FFF , 1152px 597px #FFF , 1156px 449px #FFF , 1480px 512px #FFF , 1232px 1076px #FFF , 949px 996px #FFF , 1581px 1824px #FFF , 449px 1696px #FFF , 1156px 786px #FFF , 17px 1247px #FFF , 1578px 1826px #FFF , 745px 10px #FFF , 1182px 1883px #FFF , 1259px 1711px #FFF , 230px 1376px #FFF , 1013px 797px #FFF , 1758px 251px #FFF , 380px 736px #FFF , 1528px 1705px #FFF , 1087px 1091px #FFF , 637px 352px #FFF , 1335px 1332px #FFF , 1865px 295px #FFF , 363px 707px #FFF , 387px 648px #FFF , 376px 477px #FFF , 380px 619px #FFF , 1247px 153px #FFF , 1876px 64px #FFF , 1936px 1101px #FFF , 1749px 718px #FFF , 464px 1866px #FFF , 1212px 684px #FFF , 1987px 183px #FFF , 1643px 1019px #FFF , 1865px 1688px #FFF , 12px 1651px #FFF , 360px 664px #FFF , 93px 1027px #FFF , 1434px 223px #FFF , 95px 1455px #FFF , 1728px 1401px #FFF , 1349px 231px #FFF , 696px 1117px #FFF , 1558px 504px #FFF , 765px 1624px #FFF , 113px 1397px #FFF , 1607px 1255px #FFF , 414px 1532px #FFF , 738px 1814px #FFF , 985px 720px #FFF , 1898px 208px #FFF , 1318px 737px #FFF , 1709px 1123px #FFF , 883px 103px #FFF , 619px 506px #FFF , 1269px 433px #FFF , 301px 1276px #FFF , 1932px 1888px #FFF , 522px 319px #FFF , 793px 945px #FFF , 1163px 1072px #FFF , 1866px 101px #FFF , 1552px 716px #FFF , 993px 1752px #FFF , 1413px 939px #FFF , 1859px 501px #FFF , 1733px 502px #FFF , 1706px 1920px #FFF , 1777px 1800px #FFF , 1480px 414px #FFF , 1872px 1108px #FFF , 358px 1177px #FFF , 771px 36px #FFF , 924px 711px #FFF , 498px 1824px #FFF , 798px 1341px #FFF , 1409px 398px #FFF , 1872px 157px #FFF , 155px 567px #FFF , 282px 850px #FFF , 1221px 1933px #FFF , 71px 531px #FFF , 813px 1151px #FFF , 3px 722px #FFF , 1252px 1320px #FFF , 1258px 660px #FFF , 1346px 655px #FFF , 1873px 903px #FFF , 1374px 892px #FFF , 1090px 682px #FFF , 1075px 784px #FFF , 1250px 938px #FFF , 242px 65px #FFF , 1618px 170px #FFF , 149px 1939px #FFF , 124px 1583px #FFF , 686px 110px #FFF , 1222px 1400px #FFF , 420px 75px #FFF , 420px 273px #FFF , 134px 411px #FFF , 549px 1822px #FFF , 776px 537px #FFF , 1726px 471px #FFF , 687px 559px #FFF , 1215px 1699px #FFF , 502px 876px #FFF , 1090px 23px #FFF , 1554px 1803px #FFF , 1041px 302px #FFF , 927px 604px #FFF , 792px 882px #FFF , 736px 355px #FFF , 470px 1682px #FFF , 1302px 939px #FFF , 296px 864px #FFF , 1413px 1689px #FFF , 1868px 1825px #FFF , 1325px 1224px #FFF , 738px 993px #FFF , 822px 1244px #FFF , 1048px 816px #FFF , 802px 452px #FFF , 1730px 422px #FFF , 834px 1589px #FFF , 268px 510px #FFF , 443px 1167px #FFF , 1161px 1935px #FFF , 1741px 365px #FFF , 73px 428px #FFF , 202px 1006px #FFF , 707px 215px #FFF , 1862px 1562px #FFF , 1218px 179px #FFF , 1935px 842px #FFF , 1979px 132px #FFF , 380px 1757px #FFF , 318px 71px #FFF , 1172px 1873px #FFF , 86px 1953px #FFF , 1037px 1795px #FFF , 1083px 1982px #FFF , 1950px 287px #FFF , 670px 655px #FFF , 1559px 1004px #FFF , 935px 1058px #FFF , 1770px 539px #FFF , 591px 1594px #FFF;
}

#stars3 {
  width: 3px;
  height: 3px;
  background: transparent;
  box-shadow: 619px 1333px #FFF , 126px 1391px #FFF , 1342px 1628px #FFF , 117px 87px #FFF , 740px 499px #FFF , 1235px 112px #FFF , 1156px 1127px #FFF , 349px 165px #FFF , 1664px 245px #FFF , 1070px 1863px #FFF , 1734px 308px #FFF , 1827px 1768px #FFF , 1268px 447px #FFF , 1417px 1799px #FFF , 1087px 434px #FFF , 176px 1788px #FFF , 1846px 1968px #FFF , 1785px 1566px #FFF , 1693px 1694px #FFF , 1021px 1256px #FFF , 105px 1559px #FFF , 14px 884px #FFF , 1150px 1276px #FFF , 115px 423px #FFF , 1362px 726px #FFF , 1154px 65px #FFF , 1719px 1881px #FFF , 1350px 3px #FFF , 1110px 1137px #FFF , 1053px 1941px #FFF , 181px 935px #FFF , 1086px 897px #FFF , 1707px 1941px #FFF , 1233px 328px #FFF , 757px 1619px #FFF , 1647px 1754px #FFF , 124px 1586px #FFF , 471px 1648px #FFF , 1676px 1565px #FFF , 1072px 919px #FFF , 1766px 962px #FFF , 24px 1283px #FFF , 88px 280px #FFF , 1806px 195px #FFF , 245px 832px #FFF , 1375px 679px #FFF , 1834px 914px #FFF , 839px 23px #FFF , 1459px 928px #FFF , 1148px 441px #FFF , 84px 300px #FFF , 1350px 1527px #FFF , 470px 250px #FFF , 676px 875px #FFF , 98px 1347px #FFF , 1881px 1382px #FFF , 1041px 1200px #FFF , 1325px 1254px #FFF , 1200px 634px #FFF , 405px 1702px #FFF , 1094px 523px #FFF , 1989px 1031px #FFF , 5px 975px #FFF , 578px 1454px #FFF , 972px 1944px #FFF , 1507px 1421px #FFF , 1501px 597px #FFF , 1245px 838px #FFF , 868px 1039px #FFF , 65px 680px #FFF , 1725px 1832px #FFF , 983px 1839px #FFF , 1408px 1419px #FFF , 1868px 1094px #FFF , 1919px 1795px #FFF , 917px 269px #FFF , 1816px 1256px #FFF , 1865px 963px #FFF , 19px 388px #FFF , 626px 105px #FFF , 112px 1851px #FFF , 1797px 1355px #FFF , 1345px 424px #FFF , 490px 451px #FFF , 1204px 1816px #FFF , 960px 1820px #FFF , 1311px 1080px #FFF , 935px 80px #FFF , 1987px 1784px #FFF , 87px 1671px #FFF , 438px 691px #FFF , 520px 485px #FFF , 157px 728px #FFF , 739px 1677px #FFF , 1953px 1750px #FFF , 1774px 1157px #FFF , 570px 285px #FFF , 1879px 1851px #FFF , 378px 1124px #FFF , 607px 1657px #FFF;
  animation: animStar 150s linear infinite;
}
#stars3:after {
  content: " ";
  position: absolute;
  top: 2000px;
  width: 3px;
  height: 3px;
  background: transparent;
  box-shadow: 619px 1333px #FFF , 126px 1391px #FFF , 1342px 1628px #FFF , 117px 87px #FFF , 740px 499px #FFF , 1235px 112px #FFF , 1156px 1127px #FFF , 349px 165px #FFF , 1664px 245px #FFF , 1070px 1863px #FFF , 1734px 308px #FFF , 1827px 1768px #FFF , 1268px 447px #FFF , 1417px 1799px #FFF , 1087px 434px #FFF , 176px 1788px #FFF , 1846px 1968px #FFF , 1785px 1566px #FFF , 1693px 1694px #FFF , 1021px 1256px #FFF , 105px 1559px #FFF , 14px 884px #FFF , 1150px 1276px #FFF , 115px 423px #FFF , 1362px 726px #FFF , 1154px 65px #FFF , 1719px 1881px #FFF , 1350px 3px #FFF , 1110px 1137px #FFF , 1053px 1941px #FFF , 181px 935px #FFF , 1086px 897px #FFF , 1707px 1941px #FFF , 1233px 328px #FFF , 757px 1619px #FFF , 1647px 1754px #FFF , 124px 1586px #FFF , 471px 1648px #FFF , 1676px 1565px #FFF , 1072px 919px #FFF , 1766px 962px #FFF , 24px 1283px #FFF , 88px 280px #FFF , 1806px 195px #FFF , 245px 832px #FFF , 1375px 679px #FFF , 1834px 914px #FFF , 839px 23px #FFF , 1459px 928px #FFF , 1148px 441px #FFF , 84px 300px #FFF , 1350px 1527px #FFF , 470px 250px #FFF , 676px 875px #FFF , 98px 1347px #FFF , 1881px 1382px #FFF , 1041px 1200px #FFF , 1325px 1254px #FFF , 1200px 634px #FFF , 405px 1702px #FFF , 1094px 523px #FFF , 1989px 1031px #FFF , 5px 975px #FFF , 578px 1454px #FFF , 972px 1944px #FFF , 1507px 1421px #FFF , 1501px 597px #FFF , 1245px 838px #FFF , 868px 1039px #FFF , 65px 680px #FFF , 1725px 1832px #FFF , 983px 1839px #FFF , 1408px 1419px #FFF , 1868px 1094px #FFF , 1919px 1795px #FFF , 917px 269px #FFF , 1816px 1256px #FFF , 1865px 963px #FFF , 19px 388px #FFF , 626px 105px #FFF , 112px 1851px #FFF , 1797px 1355px #FFF , 1345px 424px #FFF , 490px 451px #FFF , 1204px 1816px #FFF , 960px 1820px #FFF , 1311px 1080px #FFF , 935px 80px #FFF , 1987px 1784px #FFF , 87px 1671px #FFF , 438px 691px #FFF , 520px 485px #FFF , 157px 728px #FFF , 739px 1677px #FFF , 1953px 1750px #FFF , 1774px 1157px #FFF , 570px 285px #FFF , 1879px 1851px #FFF , 378px 1124px #FFF , 607px 1657px #FFF;
}

#title {
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  color: #FFF;
  text-align: center;
  font-family: "lato", sans-serif;
  font-weight: 300;
  font-size: 50px;
  letter-spacing: 10px;
  margin-top: -60px;
  padding-left: 10px;
}
#title span {
  background: -webkit-linear-gradient(white, #38495a);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

@keyframes animStar {
  from {
    transform: translateY(0px);
  }
  to {
    transform: translateY(-2000px);
  }
}

</style>


<section class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col text-center mb-5">
         <h1 class="display-4">Are you ready for computer science  interesting subject study</h1>
  <p class="lead"></p>
      </div>
    </div>
  <div class="row">
 <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Coding</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">Computer Programing in C</a></h4>
           <small><i class="far fa-clock"></i> developed by Dennis Ritchie at Bell Laboratories in 1972.</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="https://play-lh.googleusercontent.com/Ccj8KpZixnc4hJJjtRM6An33PcL0etqny29_nBKS_gHoy-GyYJ3c6IazLsq87Pt8Jelh" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
  <a href="https://youtu.be/7Dh73z3icd8"><button type="button" class="btn btn-info">click here</button></a>
    <h6 class="my-0 text-white d-block"></h6>
     <small></small>
  </div>
</div>
          </div>
        </div>
      </div></div>
     <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Coding</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">Computer programing in JAVA</a></h4>
           <small><i class="far fa-clock"></i> The Java programming language was developed by Sun Microsystems in the early 1990</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="https://ubiqum.com/assets/uploads/2019/10/screenshot-2021-02-11-at-115416.png" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
  <a href="https://youtu.be/ntLJmHOJ0ME"><button type="button" class="btn btn-info">click here</button></a>
    <h6 class="my-0 text-white d-block"></h6>
     <small></small>
  </div>
</div>
          </div>
        </div>
      </div></div>
  <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?computer,design');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?computer,design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Programer/Gamer</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#"></a>HighLevel Langugue PYTHON</h4>
           <small><i class="far fa-clock"></i> Python was created by Guido van Rossum, and first released on February 20, 1991.</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Python.svg/1200px-Python.svg.png" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
  <a href="https://youtu.be/QXeEoD0pB3E"><button type="button" class="btn btn-info">click here</button></a>
  
     <small></small>
  </div>
</div>
          </div>
        </div>
      </div></div>
   
    <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">web designer</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">Web development</a></h4>
           <small><i class="far fa-clock"></i> HTML,CSS,JS</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="http://cdn.shopify.com/s/files/1/0599/9339/1360/products/HTML_CSS_JS.png?v=1655214330" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
  <a href="https://youtu.be/6mbwJ2xhgzM"><button type="button" class="btn btn-info">click here</button></a>
    <h6 class="my-0 text-white d-block"></h6>
     <small></small>
  </div>
</div>
          </div>
        </div>
      </div></div>
     <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">web designer</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">Website backend work</a></h4>
           <small><i class="far fa-clock"></i>  PHP & MYSQL is designed as a fully backend-focused language, it can be well integrated with HTML, centralized servers, and databases</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="https://www.iteindia.in/wp-content/uploads/2019/10/php_mysql.png" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
  <a href="https://youtu.be/JtG3bb6scEE"><button type="button" class="btn btn-info">click here</button></a>
    <h6 class="my-0 text-white d-block"></h6>
     <small></small>
  </div>
</div>
          </div>
        </div>
      </div></div>
  <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?computer,design');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?computer,design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">Software Engineer</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">Sofeware Engineering</a></h4>
           <small><i class="far fa-clock"></i> Software is a set of instructions, data or programs used to operate computers and execute specific tasks</i> </small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="https://gtectvm.com/wp-content/uploads/2021/02/software.jpg" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
  <a href="https://youtu.be/b7hmU72GRaE"><button type="button" class="btn btn-info">click here</button></a>
    <h6 class="my-0 text-white d-block"></h6>
     <small></small>
  </div>
</div>
          </div>
        </div>
      </div></div>
  
</div>
  
</div>
</section>

<style>
  body {
  /* Created with https://www.css-gradient.com */
  
}

.wrapper {
  margin: 10vh;
}

.card {
  border: none;
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  overflow: hidden;
  border-radius: 20px;
  min-height: 450px;
  box-shadow: 0 0 12px 0 rgba(0, 0, 0, 0.2);
}
@media (max-width: 768px) {
  .card {
    min-height: 350px;
  }
}
@media (max-width: 420px) {
  .card {
    min-height: 300px;
  }
}
.card.card-has-bg {
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
  background-size: 120%;
  background-repeat: no-repeat;
  background-position: center center;
}
.card.card-has-bg:before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: inherit;
  -webkit-filter: grayscale(1);
  -moz-filter: grayscale(100%);
  -ms-filter: grayscale(100%);
  -o-filter: grayscale(100%);
  filter: grayscale(100%);
}
.card.card-has-bg:hover {
  transform: scale(0.98);
  box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.3);
  background-size: 130%;
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
}
.card.card-has-bg:hover .card-img-overlay {
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  background: #024794;
  background: linear-gradient(0deg, rgba(4, 69, 114, 0.5) 0%, #011a32 100%);
}
.card .card-footer {
  background: none;
  border-top: none;
}
.card .card-footer .media img {
  border: solid 3px rgba(255, 255, 255, 0.3);
}
.card .card-meta {
  color: #090a0f;
}
.card .card-body {
  transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
}
.card:hover {
  cursor: pointer;
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
}
.card:hover .card-body {
  margin-top: 30px;
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
}
.card .card-img-overlay {
  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
  background:#25abe8;
  background: linear-gradient(0deg, rgba(35, 79, 109, 0.3785889356) 0%, #455f71 100%);
}
</style>






























<style>
  body {
  font-family: Rubik,Arial,sans-serif;
    font-weight: 1000;
    font-size: 1rem;
    overflow-x: hidden;
    color: darkblue;

    margin-block: 10px 20px;
writing-mode: horizontal-tb;
}

h6 {
    font-size: 1rem;
    line-height: 1.375;
  font-family: Rubik,Arial,sans-serif;
  font-weight: 1000;
    color: darkblue;
}

a {
  color: black;
  font-weight: 500;
  text-decoration: none;
  background-color: transparent;
}

a:hover {
  color:red;
  text-decoration: none;
}

footer {

  background:lightblue;


}
</style>




</b>
      </b>

      <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
<footer>
  <div class="container pt-5 border-bottom">
    <div class="row">
      <div class="col-md-3 col-sm-12 mb-3 text-center">
        <svg class="img-fluid" width="200px" height="60px" viewBox="0 0 200 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
                <desc>Created with Sketch.</desc>
                <defs>
                  <linearGradient x1="46.3528198%" y1="45.7301342%" x2="92.3528198%" y2="93.7383901%" id="linearGradient-1">
                    <stop stop-color="#0062A5" offset="0%"></stop>
                    <stop stop-color="#AB53F1" offset="100%"></stop>
                  </linearGradient>
                  <linearGradient x1="92.1981982%" y1="53.027027%" x2="-4.8018018%" y2="53.027027%" id="linearGradient-2">
                    <stop stop-color="#0062A5" offset="0%"></stop>
                    <stop stop-color="#B3D0E4" stop-opacity="0" offset="100%"></stop>
                  </linearGradient>
                  <linearGradient x1="7.90990991%" y1="48.7027027%" x2="105.90991%" y2="48.7027027%" id="linearGradient-3">
                    <stop stop-color="#0062A5" offset="0%"></stop>
                    <stop stop-color="#B3D0E4" stop-opacity="0" offset="100%"></stop>
                  </linearGradient>
                </defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Artboard-1" fill-rule="nonzero">
                    <path d="M73.06,31.42 L73.06,38.37 L70,38.37 L70,21.63 L70.33,21.63 L78.45,29.49 C79.1310308,30.2054305 79.7656568,30.9636415 80.35,31.76 C80.35,31.76 80.13,29.88 80.13,28.76 L80.13,21.76 L83.2,21.76 L83.2,38.52 L82.86,38.52 L74.74,30.66 C74.0561755,29.9415168 73.4150749,29.1835489 72.82,28.39 C72.9516804,29.3952399 73.0317854,30.4065648 73.06,31.42 Z M87,38.37 L94.08,21.63 L94.36,21.63 L101.73,38.37 L98.24,38.37 L97.48,36.49 L90.94,36.49 L90.18,38.37 L87,38.37 Z M93.23,30.76 L90.95,36.49 L97.49,36.49 L95.14,30.76 C94.67,29.59 94.14,27.76 94.14,27.76 C93.8845892,28.7750055 93.5775228,29.7763088 93.22,30.76 L93.23,30.76 Z M111.89,38.59 C109.641395,38.6072415 107.482485,37.7091851 105.9095,36.1022502 C104.336514,34.4953154 103.484755,32.3177246 103.55,30.07 C103.55,25.4639452 107.283945,21.73 111.89,21.73 C116.496055,21.73 120.23,25.4639452 120.23,30.07 C120.295318,32.319474 119.442205,34.4986338 117.867032,36.1058764 C116.291859,37.713119 114.130333,38.6099734 111.88,38.59 L111.89,38.59 Z M111.89,35.54 C114.83,35.54 116.82,33.17 116.82,30.07 C116.82,26.97 114.82,24.61 111.89,24.61 C108.96,24.61 107,27 107,30.07 C107,33.14 108.94,35.54 111.88,35.54 L111.89,35.54 Z M125.18,38.37 L125.18,21.77 L126.89,21.77 L126.89,36.77 L134.49,36.77 L134.49,38.33 L125.18,38.37 Z M145.55,38.57 C143.31008,38.5936271 141.15847,37.6976444 139.597361,36.0911764 C138.036252,34.4847083 137.202245,32.3083252 137.29,30.07 C137.184827,27.0450225 138.738627,24.2037113 141.342209,22.660044 C143.945792,21.1163767 147.184208,21.1163767 149.787791,22.660044 C152.391373,24.2037113 153.945173,27.0450225 153.84,30.07 C153.925245,32.3145495 153.084893,34.4956017 151.515632,36.1026763 C149.946371,37.7097509 147.785943,38.6017865 145.54,38.57 L145.55,38.57 Z M145.55,36.98 C149.32,36.98 152.07,34.03 152.07,30.07 C152.07,26.11 149.32,23.16 145.55,23.16 C141.78,23.16 139.06,26.16 139.06,30.07 C139.06,33.98 141.8,37 145.54,37 L145.55,36.98 Z M166.44,38.57 C164.171739,38.6381644 161.976869,37.7621541 160.378891,36.1509061 C158.780912,34.5396582 157.923081,32.3376202 158.01,30.07 C157.912953,27.8248637 158.748385,25.6394916 160.318367,24.0316327 C161.888349,22.4237738 164.053188,21.5364926 166.3,21.58 C168.395314,21.4553592 170.44289,22.2386845 171.92,23.73 L170.76,24.92 C169.599759,23.713047 167.971797,23.0706225 166.3,23.16 C162.51,23.16 159.79,26.16 159.79,30.07 C159.687181,31.8869811 160.343786,33.6650218 161.602853,34.9790778 C162.861919,36.2931338 164.610285,37.0251006 166.43,37 C168.148117,37.0734092 169.837112,36.5387379 171.2,35.49 L171.2,32.05 L166.41,32.05 L166.41,30.49 L172.81,30.49 L172.81,36.27 C171.071381,37.8505549 168.777205,38.677609 166.43,38.57 L166.44,38.57 Z M178.22,38.37 L178.22,21.77 L179.95,21.77 L179.95,38.37 L178.22,38.37 Z M193.38,38.57 C191.139234,38.5934995 188.986704,37.6978207 187.424035,36.0916916 C185.861366,34.4855625 185.025057,32.309279 185.11,30.07 C185.02786,27.8324212 185.865415,25.658777 187.42777,24.0548595 C188.990125,22.450942 191.141036,21.5566214 193.38,21.58 C195.932508,21.4336668 198.368901,22.6613955 199.77,24.8 L198.47,25.8 C197.349811,24.0949083 195.418602,23.1008477 193.38,23.18 C189.61,23.18 186.89,26.18 186.89,30.09 C186.89,34 189.6,37 193.37,37 C195.499727,37.0573112 197.506469,36.004718 198.67,34.22 L200,35.17 C198.527231,37.3742386 196.019446,38.6602817 193.37,38.57 L193.38,38.57 Z" id="name" fill="#0062A5"></path>
                    <g id="Group">
                      <g id="Oval"
                        <ellipse id="path-2" fill="#000000" cx="29.08" cy="30" rx="29.08" ry="29.07"></ellipse>
                        <ellipse id="path-2-2" fill="url(#linearGradient-1)" cx="29.08" cy="30" rx="29.08" ry="29.07"></ellipse>
                      </g>
                      <g id="Mask-3" transform="translate(8.000000, 20.000000)" fill="#FFFFFF">
                        <path d="M38.48,3.42 C34.8861387,-0.160155812 29.0738613,-0.160155812 25.48,3.42 L23.37,5.53 L25.5,7.7 L27.6,5.6 C30.0035582,3.20339344 33.8942837,3.20714984 36.2932098,5.60839309 C38.6921358,8.00963633 38.6921358,11.9003637 36.2932098,14.3016069 C33.8942837,16.7028502 30.0035582,16.7066066 27.6,14.31 L23.25,10 L21.08,7.82 L16.73,3.47 C13.1230113,-0.127705123 7.2832237,-0.122688558 3.68242139,3.48120829 C0.0816190774,7.08510513 0.0816190774,12.9248949 3.68242139,16.5287917 C7.2832237,20.1326886 13.1230113,20.1377051 16.73,16.54 L18.83,14.43 L16.66,12.2 L14.55,14.31 C12.1464418,16.7066066 8.25571625,16.7028502 5.85679023,14.3016069 C3.45786421,11.9003637 3.45786421,8.00963633 5.85679023,5.60839309 C8.25571625,3.20714984 12.1464418,3.20339344 14.55,5.6 L18.9,10 L21.82,12.91 L25.42,16.52 C27.6900159,19.0898749 31.1975524,20.1895735 34.5284494,19.3757219 C37.8593464,18.5618704 40.4645689,15.9686168 41.2937497,12.6415026 C42.1229305,9.31438853 41.0393948,5.80182543 38.48,3.52 L38.48,3.42 Z" id="path-4-3"></path>
                      </g>
                      <rect id="Rectangle-2" fill="url(#linearGradient-2)" opacity="0.8" transform="translate(23.776666, 35.003738) rotate(-45.000000) translate(-23.776666, -35.003738) " x="21.0016655" y="32.2287381" width="5.55" height="5.55"></rect>
                      <rect id="Rectangle-2-2" fill="url(#linearGradient-3)" opacity="0.8" transform="translate(34.285158, 24.698846) rotate(-45.000000) translate(-34.285158, -24.698846) " x="31.510158" y="21.923846" width="5.55" height="5.55"></rect>
                    </g>
                  </g>
                </g>
              </svg>
      </div>
      <div class="col-md-9 col-sm-12">

        <div class="col-md-3 col-sm-6 col-6 p-0 float-left mb-3">
          <h6 class="mb-4 font-weight-bold text-uppercase">COURSES</h6>
        <ul class="list-group">
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="https://www.javatpoint.com/c-programming-language-tutorial">programing in C</a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="https://www.javatpoint.com/java-tutorial">Programin in JAVA</a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="https://www.javatpoint.com/python-tutorial">Programing in PYTHON </a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="https://www.javatpoint.com/html-tutorial"> HTML,CSS,JS</a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="https://www.javatpoint.com/php-tutorial">PHP/MYSQL</a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="https://www.javatpoint.com/software-engineering-tutorial">Software</a></li>
        </ul>
        </div>

        <div class="col-md-3 col-sm-6 col-6 p-0 mb-3 float-left">
          <h6 class="mb-4 font-weight-bold text-uppercase">Study links</h6>
        <ul class="list-group">
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="">Website links</a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="">YOUTUBE LINKS</a></li>
        </ul>
        </div>

        <div class="col-md-3 col-sm-6 col-6 mb-3 p-0 float-left">
          <h6 class="mb-4 font-weight-bold text-uppercase">CONTACT</h6>
        <ul class="list-group">
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href=""></i>keya@gmail.com</a></li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href=""></i> 12345678</a></li>
        </ul>
        </div>

        <div class="col-md-3 col-sm-6 col-6 mb-3 p-0 float-left">
          <h5 class="mb-4 font-weight-bold text-uppercase">Connect</h5>
        <ul class="list-group">
          <li class="list-group-item bg-transparent border-0 p-0 mb-2">
            <a href="https://www.linkedin.com/company/naologic"><i class="fa fa-linkedin mr-1"></i> LinkedIn</a>
          </li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2">
            <a href="https://twitter.com/naologicerp"><i class="fa fa-twitter mr-1"></i> Twitter</a>       
          </li class="list-group-item bg-transparent border-0 p-0 mb-2">
          <li class="list-group-item bg-transparent border-0 p-0 mb-2"> 
            <a href="https://www.reddit.com/r/naologic/"><i class="fa fa-reddit mr-1"></i> Reddit</a>
          </li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2">
            <a href="https://plus.google.com/109511516185666043480" target="_blank"><i class="fa fa-google-plus mr-1"></i> Google+</a>
            
          </li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2">
            <a href="https://github.com/naologic" target="_blank"><i class="fa fa-github mr-1"></i> Github</a>  
          </li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2">
            <a href="https://blog.naologic.com" target="_blank"><i class="fa fa-medium mr-1"></i> Medium</a>
          </li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2">
            <a href="https://www.facebook.com/naologic/" target="_blank"><i class="fa fa-facebook mr-1"></i> Facebook</a>
          </li>
          <li class="list-group-item bg-transparent border-0 p-0 mb-2">
            <a href="https://www.youtube.com/channel/UCtHmuf2oQLnksokfz8GIbKA" target="_blank"><i class="fa fa-youtube mr-1"></i> YouTube</a>
          </li>
        </ul>
        </div>

      </div>
        <div class="col-md-12">
          <div class="py-4 d-flex justify-content-center align-items-center">
            <a class="mr-4" href="">Privacy & terms</a>
            <a href="">@keya</a>
          </div>
        </div>
    </div>
  </div>
</footer>



