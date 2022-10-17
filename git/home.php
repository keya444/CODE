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





<HTML>
<HEAD>
<TITLE>Welcome</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
</HEAD>
<BODY>

<div class="phppot-container">
		<div class="page-header">
			<span class="login-signup">
<center><a href="login.php">LOG OUT</a></span></center></div>
	
	
<h1><div class="page-content">Welcome    <?php echo $username;?></div><br>
<h5></h5>


<center><a><button type="button"><a href="super.php">GET STARTED</a></button></h1></a></center><center><i class="fa fa-hand-o-right" style="font-size:48px;color:red"></i></center>

       
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<style>
h1{
    color:white;
}

h6{
	color:red;
}
</style>





<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>



<a class="btn btn-gold" href="javascript:void(0)">See</a>
<div class="congrats">
	<div class="el ang-a animated d-none" data-in="zoomOut"></div>
	<div class="el ang-b animated d-none" data-in="zoomOut"></div>
	<div class="el glow animated d-none" data-in="fadeIn"></div>
	<div class="el bg bg-1 animated d-none" data-in="fadeIn" data-out="zoomOut"></div>
	<div class="el dots animated d-none"> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i> <i></i></div>
	<div class="el bg bg-2 animated d-none" data-in="zoomIn" data-out="bounceOut"></div>
	<div class="el ang-c animated d-none" data-in="zoomOut"></div>
	<div class="el shine animated d-none" data-in="shineIn" data-out="fadeOut"></div>
	<div class="el text animated d-none" data-in="zoomOutIn" data-out="zoomOutLeft">CONGRATULATIONS</div>
</div>

<style>
body {
	margin: 0;


 background-color: #20002A;


	font: 300 18px/18px Teko, sans-serif;
}
*,
:after,
:before {
	box-sizing: border-box;
}
.float-left {
	float: left;
}
.float-right {
	float: right;
}
.d-none {
	display: none;
}
.clearfix:after,
.clearfix:before {
	content: "";
	display: table;
}
.clearfix:after {
	clear: both;
	display: block;
}

.animated {
	animation-duration: 1s;
	animation-fill-mode: both;
}
.animated.infinite {
	animation-iteration-count: infinite;
}
.animated.delay-1s {
	animation-delay: 1s;
}
.animated.delay-2s {
	animation-delay: 2s;
}
.animated.delay-3s {
	animation-delay: 3s;
}
.animated.delay-4s {
	animation-delay: 4s;
}
.animated.delay-5s {
	animation-delay: 5s;
}
@keyframes bounce {
	0%,
	20%,
	53%,
	80%,
	to {
		animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
		transform: translateZ(0);
	}
	40%,
	43% {
		animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
		transform: translate3d(0, -30px, 0);
	}
	70% {
		animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
		transform: translate3d(0, -15px, 0);
	}
	90% {
		transform: translate3d(0, -4px, 0);
	}
}
.bounce {
	animation-name: bounce;
	transform-origin: center bottom;
}
@keyframes flash {
	0%,
	50%,
	to {
		opacity: 1;
	}
	25%,
	75% {
		opacity: 0;
	}
}
.flash {
	animation-name: flash;
}
@keyframes pulse {
	0% {
		transform: scaleX(1);
	}
	50% {
		transform: scale3d(1.05, 1.05, 1.05);
	}
	to {
		transform: scaleX(1);
	}
}
.pulse {
	animation-name: pulse;
}
@keyframes rubberBand {
	0% {
		transform: scaleX(1);
	}
	30% {
		transform: scale3d(1.25, 0.75, 1);
	}
	40% {
		transform: scale3d(0.75, 1.25, 1);
	}
	50% {
		transform: scale3d(1.15, 0.85, 1);
	}
	65% {
		transform: scale3d(0.95, 1.05, 1);
	}
	75% {
		transform: scale3d(1.05, 0.95, 1);
	}
	to {
		transform: scaleX(1);
	}
}
.rubberBand {
	animation-name: rubberBand;
}
@keyframes shake {
	0%,
	to {
		transform: translateZ(0);
	}
	10%,
	30%,
	50%,
	70%,
	90% {
		transform: translate3d(-10px, 0, 0);
	}
	20%,
	40%,
	60%,
	80% {
		transform: translate3d(10px, 0, 0);
	}
}
.shake {
	animation-name: shake;
}
@keyframes headShake {
	0% {
		transform: translateX(0);
	}
	6.5% {
		transform: translateX(-6px) rotateY(-9deg);
	}
	18.5% {
		transform: translateX(5px) rotateY(7deg);
	}
	31.5% {
		transform: translateX(-3px) rotateY(-5deg);
	}
	43.5% {
		transform: translateX(2px) rotateY(3deg);
	}
	50% {
		transform: translateX(0);
	}
}
.headShake {
	animation-timing-function: ease-in-out;
	animation-name: headShake;
}
@keyframes swing {
	20% {
		transform: rotate(15deg);
	}
	40% {
		transform: rotate(-10deg);
	}
	60% {
		transform: rotate(5deg);
	}
	80% {
		transform: rotate(-5deg);
	}
	to {
		transform: rotate(0deg);
	}
}
.swing {
	transform-origin: top center;
	animation-name: swing;
}
@keyframes tada {
	0% {
		transform: scaleX(1);
	}
	10%,
	20% {
		transform: scale3d(0.9, 0.9, 0.9) rotate(-3deg);
	}
	30%,
	50%,
	70%,
	90% {
		transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
	}
	40%,
	60%,
	80% {
		transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
	}
	to {
		transform: scaleX(1);
	}
}
.tada {
	animation-name: tada;
}
@keyframes wobble {
	0% {
		transform: translateZ(0);
	}
	15% {
		transform: translate3d(-25%, 0, 0) rotate(-5deg);
	}
	30% {
		transform: translate3d(20%, 0, 0) rotate(3deg);
	}
	45% {
		transform: translate3d(-15%, 0, 0) rotate(-3deg);
	}
	60% {
		transform: translate3d(10%, 0, 0) rotate(2deg);
	}
	75% {
		transform: translate3d(-5%, 0, 0) rotate(-1deg);
	}
	to {
		transform: translateZ(0);
	}
}
.wobble {
	animation-name: wobble;
}
@keyframes jello {
	0%,
	11.1%,
	to {
		transform: translateZ(0);
	}
	22.2% {
		transform: skewX(-12.5deg) skewY(-12.5deg);
	}
	33.3% {
		transform: skewX(6.25deg) skewY(6.25deg);
	}
	44.4% {
		transform: skewX(-3.125deg) skewY(-3.125deg);
	}
	55.5% {
		transform: skewX(1.5625deg) skewY(1.5625deg);
	}
	66.6% {
		transform: skewX(-0.78125deg) skewY(-0.78125deg);
	}
	77.7% {
		transform: skewX(0.390625deg) skewY(0.390625deg);
	}
	88.8% {
		transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
	}
}
.jello {
	animation-name: jello;
	transform-origin: center;
}
@keyframes bounceIn {
	0%,
	20%,
	40%,
	60%,
	80%,
	to {
		animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	}
	0% {
		opacity: 0;
		transform: scale3d(0.3, 0.3, 0.3);
	}
	20% {
		transform: scale3d(1.1, 1.1, 1.1);
	}
	40% {
		transform: scale3d(0.9, 0.9, 0.9);
	}
	60% {
		opacity: 1;
		transform: scale3d(1.03, 1.03, 1.03);
	}
	80% {
		transform: scale3d(0.97, 0.97, 0.97);
	}
	to {
		opacity: 1;
		transform: scaleX(1);
	}
}
.bounceIn {
	animation-duration: 0.75s;
	animation-name: bounceIn;
}
@keyframes bounceInDown {
	0%,
	60%,
	75%,
	90%,
	to {
		animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	}
	0% {
		opacity: 0;
		transform: translate3d(0, -3000px, 0);
	}
	60% {
		opacity: 1;
		transform: translate3d(0, 25px, 0);
	}
	75% {
		transform: translate3d(0, -10px, 0);
	}
	90% {
		transform: translate3d(0, 5px, 0);
	}
	to {
		transform: translateZ(0);
	}
}
.bounceInDown {
	animation-name: bounceInDown;
}
@keyframes bounceInLeft {
	0%,
	60%,
	75%,
	90%,
	to {
		animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	}
	0% {
		opacity: 0;
		transform: translate3d(-3000px, 0, 0);
	}
	60% {
		opacity: 1;
		transform: translate3d(25px, 0, 0);
	}
	75% {
		transform: translate3d(-10px, 0, 0);
	}
	90% {
		transform: translate3d(5px, 0, 0);
	}
	to {
		transform: translateZ(0);
	}
}
.bounceInLeft {
	animation-name: bounceInLeft;
}
@keyframes bounceInRight {
	0%,
	60%,
	75%,
	90%,
	to {
		animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	}
	0% {
		opacity: 0;
		transform: translate3d(3000px, 0, 0);
	}
	60% {
		opacity: 1;
		transform: translate3d(-25px, 0, 0);
	}
	75% {
		transform: translate3d(10px, 0, 0);
	}
	90% {
		transform: translate3d(-5px, 0, 0);
	}
	to {
		transform: translateZ(0);
	}
}
.bounceInRight {
	animation-name: bounceInRight;
}
@keyframes bounceInUp {
	0%,
	60%,
	75%,
	90%,
	to {
		animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
	}
	0% {
		opacity: 0;
		transform: translate3d(0, 3000px, 0);
	}
	60% {
		opacity: 1;
		transform: translate3d(0, -20px, 0);
	}
	75% {
		transform: translate3d(0, 10px, 0);
	}
	90% {
		transform: translate3d(0, -5px, 0);
	}
	to {
		transform: translateZ(0);
	}
}
.bounceInUp {
	animation-name: bounceInUp;
}
@keyframes bounceOut {
	20% {
		transform: scale3d(0.9, 0.9, 0.9);
	}
	50%,
	55% {
		opacity: 1;
		transform: scale3d(1.1, 1.1, 1.1);
	}
	to {
		opacity: 0;
		transform: scale3d(0.3, 0.3, 0.3);
	}
}
.bounceOut {
	animation-duration: 0.75s;
	animation-name: bounceOut;
}
@keyframes bounceOutDown {
	20% {
		transform: translate3d(0, 10px, 0);
	}
	40%,
	45% {
		opacity: 1;
		transform: translate3d(0, -20px, 0);
	}
	to {
		opacity: 0;
		transform: translate3d(0, 2000px, 0);
	}
}
.bounceOutDown {
	animation-name: bounceOutDown;
}
@keyframes bounceOutLeft {
	20% {
		opacity: 1;
		transform: translate3d(20px, 0, 0);
	}
	to {
		opacity: 0;
		transform: translate3d(-2000px, 0, 0);
	}
}
.bounceOutLeft {
	animation-name: bounceOutLeft;
}
@keyframes bounceOutRight {
	20% {
		opacity: 1;
		transform: translate3d(-20px, 0, 0);
	}
	to {
		opacity: 0;
		transform: translate3d(2000px, 0, 0);
	}
}
.bounceOutRight {
	animation-name: bounceOutRight;
}
@keyframes bounceOutUp {
	20% {
		transform: translate3d(0, -10px, 0);
	}
	40%,
	45% {
		opacity: 1;
		transform: translate3d(0, 20px, 0);
	}
	to {
		opacity: 0;
		transform: translate3d(0, -2000px, 0);
	}
}
.bounceOutUp {
	animation-name: bounceOutUp;
}
@keyframes fadeIn {
	0% {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
}
.fadeIn {
	animation-name: fadeIn;
}
@keyframes fadeInDown {
	0% {
		opacity: 0;
		transform: translate3d(0, -100%, 0);
	}
	to {
		opacity: 1;
		transform: translateZ(0);
	}
}
.fadeInDown {
	animation-name: fadeInDown;
}
@keyframes fadeInDownBig {
	0% {
		opacity: 0;
		transform: translate3d(0, -2000px, 0);
	}
	to {
		opacity: 1;
		transform: translateZ(0);
	}
}
.fadeInDownBig {
	animation-name: fadeInDownBig;
}
@keyframes fadeInLeft {
	0% {
		opacity: 0;
		transform: translate3d(-100%, 0, 0);
	}
	to {
		opacity: 1;
		transform: translateZ(0);
	}
}
.fadeInLeft {
	animation-name: fadeInLeft;
}
@keyframes fadeInLeftBig {
	0% {
		opacity: 0;
		transform: translate3d(-2000px, 0, 0);
	}
	to {
		opacity: 1;
		transform: translateZ(0);
	}
}
.fadeInLeftBig {
	animation-name: fadeInLeftBig;
}
@keyframes fadeInRight {
	0% {
		opacity: 0;
		transform: translate3d(100%, 0, 0);
	}
	to {
		opacity: 1;
		transform: translateZ(0);
	}
}
.fadeInRight {
	animation-name: fadeInRight;
}
@keyframes fadeInRightBig {
	0% {
		opacity: 0;
		transform: translate3d(2000px, 0, 0);
	}
	to {
		opacity: 1;
		transform: translateZ(0);
	}
}
.fadeInRightBig {
	animation-name: fadeInRightBig;
}
@keyframes fadeInUp {
	0% {
		opacity: 0;
		transform: translate3d(0, 100%, 0);
	}
	to {
		opacity: 1;
		transform: translateZ(0);
	}
}
.fadeInUp {
	animation-name: fadeInUp;
}
@keyframes fadeInUpBig {
	0% {
		opacity: 0;
		transform: translate3d(0, 2000px, 0);
	}
	to {
		opacity: 1;
		transform: translateZ(0);
	}
}
.fadeInUpBig {
	animation-name: fadeInUpBig;
}
@keyframes fadeOut {
	0% {
		opacity: 1;
	}
	to {
		opacity: 0;
	}
}
.fadeOut {
	animation-name: fadeOut;
}
@keyframes fadeOutDown {
	0% {
		opacity: 1;
	}
	to {
		opacity: 0;
		transform: translate3d(0, 100%, 0);
	}
}
.fadeOutDown {
	animation-name: fadeOutDown;
}
@keyframes fadeOutDownBig {
	0% {
		opacity: 1;
	}
	to {
		opacity: 0;
		transform: translate3d(0, 2000px, 0);
	}
}
.fadeOutDownBig {
	animation-name: fadeOutDownBig;
}
@keyframes fadeOutLeft {
	0% {
		opacity: 1;
	}
	to {
		opacity: 0;
		transform: translate3d(-100%, 0, 0);
	}
}
.fadeOutLeft {
	animation-name: fadeOutLeft;
}
@keyframes fadeOutLeftBig {
	0% {
		opacity: 1;
	}
	to {
		opacity: 0;
		transform: translate3d(-2000px, 0, 0);
	}
}
.fadeOutLeftBig {
	animation-name: fadeOutLeftBig;
}
@keyframes fadeOutRight {
	0% {
		opacity: 1;
	}
	to {
		opacity: 0;
		transform: translate3d(100%, 0, 0);
	}
}
.fadeOutRight {
	animation-name: fadeOutRight;
}
@keyframes fadeOutRightBig {
	0% {
		opacity: 1;
	}
	to {
		opacity: 0;
		transform: translate3d(2000px, 0, 0);
	}
}
.fadeOutRightBig {
	animation-name: fadeOutRightBig;
}
@keyframes fadeOutUp {
	0% {
		opacity: 1;
	}
	to {
		opacity: 0;
		transform: translate3d(0, -100%, 0);
	}
}
.fadeOutUp {
	animation-name: fadeOutUp;
}
@keyframes fadeOutUpBig {
	0% {
		opacity: 1;
	}
	to {
		opacity: 0;
		transform: translate3d(0, -2000px, 0);
	}
}
.fadeOutUpBig {
	animation-name: fadeOutUpBig;
}
@keyframes flip {
	0% {
		transform: perspective(400px) scaleX(1) translateZ(0) rotateY(-1turn);
		animation-timing-function: ease-out;
	}
	40% {
		transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-190deg);
		animation-timing-function: ease-out;
	}
	50% {
		transform: perspective(400px) scaleX(1) translateZ(150px) rotateY(-170deg);
		animation-timing-function: ease-in;
	}
	80% {
		transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translateZ(0)
			rotateY(0deg);
		animation-timing-function: ease-in;
	}
	to {
		transform: perspective(400px) scaleX(1) translateZ(0) rotateY(0deg);
		animation-timing-function: ease-in;
	}
}
.animated.flip {
	-webkit-backface-visibility: visible;
	backface-visibility: visible;
	animation-name: flip;
}
@keyframes flipInX {
	0% {
		transform: perspective(400px) rotateX(90deg);
		animation-timing-function: ease-in;
		opacity: 0;
	}
	40% {
		transform: perspective(400px) rotateX(-20deg);
		animation-timing-function: ease-in;
	}
	60% {
		transform: perspective(400px) rotateX(10deg);
		opacity: 1;
	}
	80% {
		transform: perspective(400px) rotateX(-5deg);
	}
	to {
		transform: perspective(400px);
	}
}
.flipInX {
	-webkit-backface-visibility: visible !important;
	backface-visibility: visible !important;
	animation-name: flipInX;
}
@keyframes flipInY {
	0% {
		transform: perspective(400px) rotateY(90deg);
		animation-timing-function: ease-in;
		opacity: 0;
	}
	40% {
		transform: perspective(400px) rotateY(-20deg);
		animation-timing-function: ease-in;
	}
	60% {
		transform: perspective(400px) rotateY(10deg);
		opacity: 1;
	}
	80% {
		transform: perspective(400px) rotateY(-5deg);
	}
	to {
		transform: perspective(400px);
	}
}
.flipInY {
	-webkit-backface-visibility: visible !important;
	backface-visibility: visible !important;
	animation-name: flipInY;
}
@keyframes flipOutX {
	0% {
		transform: perspective(400px);
	}
	30% {
		transform: perspective(400px) rotateX(-20deg);
		opacity: 1;
	}
	to {
		transform: perspective(400px) rotateX(90deg);
		opacity: 0;
	}
}
.flipOutX {
	animation-duration: 0.75s;
	animation-name: flipOutX;
	-webkit-backface-visibility: visible !important;
	backface-visibility: visible !important;
}
@keyframes flipOutY {
	0% {
		transform: perspective(400px);
	}
	30% {
		transform: perspective(400px) rotateY(-15deg);
		opacity: 1;
	}
	to {
		transform: perspective(400px) rotateY(90deg);
		opacity: 0;
	}
}
.flipOutY {
	animation-duration: 0.75s;
	-webkit-backface-visibility: visible !important;
	backface-visibility: visible !important;
	animation-name: flipOutY;
}
@keyframes lightSpeedIn {
	0% {
		transform: translate3d(100%, 0, 0) skewX(-30deg);
		opacity: 0;
	}
	60% {
		transform: skewX(20deg);
		opacity: 1;
	}
	80% {
		transform: skewX(-5deg);
	}
	to {
		transform: translateZ(0);
	}
}
.lightSpeedIn {
	animation-name: lightSpeedIn;
	animation-timing-function: ease-out;
}
@keyframes lightSpeedOut {
	0% {
		opacity: 1;
	}
	to {
		transform: translate3d(100%, 0, 0) skewX(30deg);
		opacity: 0;
	}
}
.lightSpeedOut {
	animation-name: lightSpeedOut;
	animation-timing-function: ease-in;
}
@keyframes rotateIn {
	0% {
		transform-origin: center;
		transform: rotate(-200deg);
		opacity: 0;
	}
	to {
		transform-origin: center;
		transform: translateZ(0);
		opacity: 1;
	}
}
.rotateIn {
	animation-name: rotateIn;
}
@keyframes rotateInDownLeft {
	0% {
		transform-origin: left bottom;
		transform: rotate(-45deg);
		opacity: 0;
	}
	to {
		transform-origin: left bottom;
		transform: translateZ(0);
		opacity: 1;
	}
}
.rotateInDownLeft {
	animation-name: rotateInDownLeft;
}
@keyframes rotateInDownRight {
	0% {
		transform-origin: right bottom;
		transform: rotate(45deg);
		opacity: 0;
	}
	to {
		transform-origin: right bottom;
		transform: translateZ(0);
		opacity: 1;
	}
}
.rotateInDownRight {
	animation-name: rotateInDownRight;
}
@keyframes rotateInUpLeft {
	0% {
		transform-origin: left bottom;
		transform: rotate(45deg);
		opacity: 0;
	}
	to {
		transform-origin: left bottom;
		transform: translateZ(0);
		opacity: 1;
	}
}
.rotateInUpLeft {
	animation-name: rotateInUpLeft;
}
@keyframes rotateInUpRight {
	0% {
		transform-origin: right bottom;
		transform: rotate(-90deg);
		opacity: 0;
	}
	to {
		transform-origin: right bottom;
		transform: translateZ(0);
		opacity: 1;
	}
}
.rotateInUpRight {
	animation-name: rotateInUpRight;
}
@keyframes rotateOut {
	0% {
		transform-origin: center;
		opacity: 1;
	}
	to {
		transform-origin: center;
		transform: rotate(200deg);
		opacity: 0;
	}
}
.rotateOut {
	animation-name: rotateOut;
}
@keyframes rotateOutDownLeft {
	0% {
		transform-origin: left bottom;
		opacity: 1;
	}
	to {
		transform-origin: left bottom;
		transform: rotate(45deg);
		opacity: 0;
	}
}
.rotateOutDownLeft {
	animation-name: rotateOutDownLeft;
}
@keyframes rotateOutDownRight {
	0% {
		transform-origin: right bottom;
		opacity: 1;
	}
	to {
		transform-origin: right bottom;
		transform: rotate(-45deg);
		opacity: 0;
	}
}
.rotateOutDownRight {
	animation-name: rotateOutDownRight;
}
@keyframes rotateOutUpLeft {
	0% {
		transform-origin: left bottom;
		opacity: 1;
	}
	to {
		transform-origin: left bottom;
		transform: rotate(-45deg);
		opacity: 0;
	}
}
.rotateOutUpLeft {
	animation-name: rotateOutUpLeft;
}
@keyframes rotateOutUpRight {
	0% {
		transform-origin: right bottom;
		opacity: 1;
	}
	to {
		transform-origin: right bottom;
		transform: rotate(90deg);
		opacity: 0;
	}
}
.rotateOutUpRight {
	animation-name: rotateOutUpRight;
}
@keyframes hinge {
	0% {
		transform-origin: top left;
		animation-timing-function: ease-in-out;
	}
	20%,
	60% {
		transform: rotate(80deg);
		transform-origin: top left;
		animation-timing-function: ease-in-out;
	}
	40%,
	80% {
		transform: rotate(60deg);
		transform-origin: top left;
		animation-timing-function: ease-in-out;
		opacity: 1;
	}
	to {
		transform: translate3d(0, 700px, 0);
		opacity: 0;
	}
}
.hinge {
	animation-duration: 2s;
	animation-name: hinge;
}
@keyframes jackInTheBox {
	0% {
		opacity: 0;
		transform: scale(0.1) rotate(30deg);
		transform-origin: center bottom;
	}
	50% {
		transform: rotate(-10deg);
	}
	70% {
		transform: rotate(3deg);
	}
	to {
		opacity: 1;
		transform: scale(1);
	}
}
.jackInTheBox {
	animation-name: jackInTheBox;
}
@keyframes rollIn {
	0% {
		opacity: 0;
		transform: translate3d(-100%, 0, 0) rotate(-120deg);
	}
	to {
		opacity: 1;
		transform: translateZ(0);
	}
}
.rollIn {
	animation-name: rollIn;
}
@keyframes rollOut {
	0% {
		opacity: 1;
	}
	to {
		opacity: 0;
		transform: translate3d(100%, 0, 0) rotate(120deg);
	}
}
.rollOut {
	animation-name: rollOut;
}
@keyframes zoomIn {
	0% {
		opacity: 0;
		transform: scale3d(0.3, 0.3, 0.3);
	}
	50% {
		opacity: 1;
	}
}
.zoomIn {
	animation-name: zoomIn;
}
@keyframes zoomInDown {
	0% {
		opacity: 0;
		transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
		animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	}
	60% {
		opacity: 1;
		transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
		animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	}
}
.zoomInDown {
	animation-name: zoomInDown;
}
@keyframes zoomInLeft {
	0% {
		opacity: 0;
		transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
		animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	}
	60% {
		opacity: 1;
		transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
		animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	}
}
.zoomInLeft {
	animation-name: zoomInLeft;
}
@keyframes zoomInRight {
	0% {
		opacity: 0;
		transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
		animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	}
	60% {
		opacity: 1;
		transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
		animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	}
}
.zoomInRight {
	animation-name: zoomInRight;
}
@keyframes zoomInUp {
	0% {
		opacity: 0;
		transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
		animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	}
	60% {
		opacity: 1;
		transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
		animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	}
}
.zoomInUp {
	animation-name: zoomInUp;
}
@keyframes zoomOut {
	0% {
		opacity: 1;
	}
	50% {
		opacity: 0;
		transform: scale3d(0.3, 0.3, 0.3);
	}
	to {
		opacity: 0;
	}
}
.zoomOut {
	animation-name: zoomOut;
}
@keyframes zoomOutDown {
	40% {
		opacity: 1;
		transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
		animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	}
	to {
		opacity: 0;
		transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
		transform-origin: center bottom;
		animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	}
}
.zoomOutDown {
	animation-name: zoomOutDown;
}
@keyframes zoomOutLeft {
	40% {
		opacity: 1;
		transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
	}
	to {
		opacity: 0;
		transform: scale(0.1) translate3d(-2000px, 0, 0);
		transform-origin: left center;
	}
}
.zoomOutLeft {
	animation-name: zoomOutLeft;
}
@keyframes zoomOutRight {
	40% {
		opacity: 1;
		transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
	}
	to {
		opacity: 0;
		transform: scale(0.1) translate3d(2000px, 0, 0);
		transform-origin: right center;
	}
}
.zoomOutRight {
	animation-name: zoomOutRight;
}
@keyframes zoomOutUp {
	40% {
		opacity: 1;
		transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
		animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
	}
	to {
		opacity: 0;
		transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
		transform-origin: center bottom;
		animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
	}
}
.zoomOutUp {
	animation-name: zoomOutUp;
}
@keyframes slideInDown {
	0% {
		transform: translate3d(0, -100%, 0);
		visibility: visible;
	}
	to {
		transform: translateZ(0);
	}
}
.slideInDown {
	animation-name: slideInDown;
}
@keyframes slideInLeft {
	0% {
		transform: translate3d(-100%, 0, 0);
		visibility: visible;
	}
	to {
		transform: translateZ(0);
	}
}
.slideInLeft {
	animation-name: slideInLeft;
}
@keyframes slideInRight {
	0% {
		transform: translate3d(100%, 0, 0);
		visibility: visible;
	}
	to {
		transform: translateZ(0);
	}
}
.slideInRight {
	animation-name: slideInRight;
}
@keyframes slideInUp {
	0% {
		transform: translate3d(0, 100%, 0);
		visibility: visible;
	}
	to {
		transform: translateZ(0);
	}
}
.slideInUp {
	animation-name: slideInUp;
}
@keyframes slideOutDown {
	0% {
		transform: translateZ(0);
	}
	to {
		visibility: hidden;
		transform: translate3d(0, 100%, 0);
	}
}
.slideOutDown {
	animation-name: slideOutDown;
}
@keyframes slideOutLeft {
	0% {
		transform: translateZ(0);
	}
	to {
		visibility: hidden;
		transform: translate3d(-100%, 0, 0);
	}
}
.slideOutLeft {
	animation-name: slideOutLeft;
}
@keyframes slideOutRight {
	0% {
		transform: translateZ(0);
	}
	to {
		visibility: hidden;
		transform: translate3d(100%, 0, 0);
	}
}
.slideOutRight {
	animation-name: slideOutRight;
}
@keyframes slideOutUp {
	0% {
		transform: translateZ(0);
	}
	to {
		visibility: hidden;
		transform: translate3d(0, -100%, 0);
	}
}
.slideOutUp {
	animation-name: slideOutUp;
}
.bg {
	background-image: url(data:image/png;base64,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);
}
.ang-a {
	background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 450 301.39' style='enable-background:new 0 0 450 301.39;' xml:space='preserve'%3E%3Cstyle type='text/css'%3E .st0%7Bfill:%23FED30B;%7D%0A%3C/style%3E%3Cg%3E%3Cpath class='st0' d='M224.17,50.15l165.85,221.24H59.69L224.17,50.15 M224.07,0L0,301.39h450L224.07,0L224.07,0z'/%3E%3C/g%3E%3C/svg%3E%0A");
}
.ang-b {
	background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 236.17 158.17'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill:%23fed30b;%7D%3C/style%3E%3C/defs%3E%3Cpath class='cls-1' d='M117.65,25.07l88.53,118.1H29.84l87.81-118.1M117.6,0,0,158.17H236.17L117.6,0Z'/%3E%3C/svg%3E");
}
.ang-c {
	background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 109.57 52.86'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill:%23fed30b;fill-rule:evenodd;%7D%3C/style%3E%3C/defs%3E%3Cpath class='cls-1' d='M53.82,0,0,52.86H109.57Z'/%3E%3C/svg%3E");
}
.dots {
	width: 50px;
	height: 50px;
	margin-left: -25px;
	margin-top: -25px;
}
.dots i {
	top: 50%;
	left: 50%;
	position: absolute;
	width: 4px;
	height: 4px;
	border-radius: 50%;
	background-color: gold;
	animation: shoot 5s ease-out infinite;
	animation-name: shoot, fade;
}
.dots i:nth-child(1) {
	transform: translate(-87px, -139px);
	animation-duration: 1.34s;
	animation-delay: -0.6968s;
}
.dots i:nth-child(2) {
	transform: translate(110px, 14px);
	animation-duration: 2.38s;
	animation-delay: -1.7136s;
}
.dots i:nth-child(3) {
	transform: translate(-98px, -79px);
	animation-duration: 1.17s;
	animation-delay: -0.9828s;
}
.dots i:nth-child(4) {
	transform: translate(102px, 116px);
	animation-duration: 2.49s;
	animation-delay: -1.245s;
}
.dots i:nth-child(5) {
	transform: translate(-46px, -67px);
	animation-duration: 2.09s;
	animation-delay: -2.8006s;
}
.dots i:nth-child(6) {
	transform: translate(24px, 125px);
	animation-duration: 2.46s;
	animation-delay: -1.8696s;
}
.dots i:nth-child(7) {
	transform: translate(-113px, -64px);
	animation-duration: 1.06s;
	animation-delay: -0.9328s;
}
.dots i:nth-child(8) {
	transform: translate(113px, 31px);
	animation-duration: 1.46s;
	animation-delay: -1.3724s;
}
.dots i:nth-child(9) {
	transform: translate(-85px, -33px);
	animation-duration: 1.3s;
	animation-delay: -455ms;
}
.dots i:nth-child(10) {
	transform: translate(142px, 129px);
	animation-duration: 1.3s;
	animation-delay: -1.534s;
}
.dots i:nth-child(11) {
	transform: translate(-14px, -76px);
	animation-duration: 1.07s;
	animation-delay: -1.3589s;
}
.dots i:nth-child(12) {
	transform: translate(30px, 39px);
	animation-duration: 1.83s;
	animation-delay: -0.7869s;
}
.dots i:nth-child(13) {
	transform: translate(-56px, -37px);
	animation-duration: 2.05s;
	animation-delay: -0.9635s;
}
.dots i:nth-child(14) {
	transform: translate(63px, 49px);
	animation-duration: 1.11s;
	animation-delay: -0.8325s;
}
.dots i:nth-child(15) {
	transform: translate(-104px, -138px);
	animation-duration: 1.69s;
	animation-delay: -1.7238s;
}
.dots i:nth-child(16) {
	transform: translate(83px, 80px);
	animation-duration: 1.26s;
	animation-delay: -0.5166s;
}
.dots i:nth-child(17) {
	transform: translate(-119px, -122px);
	animation-duration: 2.2s;
	animation-delay: -2.86s;
}
.dots i:nth-child(18) {
	transform: translate(135px, 135px);
	animation-duration: 2.42s;
	animation-delay: -1.089s;
}
.dots i:nth-child(19) {
	transform: translate(-141px, -70px);
	animation-duration: 2.29s;
	animation-delay: -1.9694s;
}
.dots i:nth-child(20) {
	transform: translate(63px, 106px);
	animation-duration: 1.93s;
	animation-delay: -1.9686s;
}
.dots i:nth-child(21) {
	transform: translate(-84px, -47px);
	animation-duration: 2.05s;
	animation-delay: -1.599s;
}
.dots i:nth-child(22) {
	transform: translate(57px, 40px);
	animation-duration: 1.4s;
	animation-delay: -0.91s;
}
.dots i:nth-child(23) {
	transform: translate(-74px, -99px);
	animation-duration: 1.71s;
	animation-delay: -2.2914s;
}
.dots i:nth-child(24) {
	transform: translate(43px, 116px);
	animation-duration: 1.95s;
	animation-delay: -2.886s;
}
.dots i:nth-child(25) {
	transform: translate(-26px, -8px);
	animation-duration: 1.77s;
	animation-delay: -1.0089s;
}
.dots i:nth-child(26) {
	transform: translate(97px, 37px);
	animation-duration: 1.43s;
	animation-delay: -572ms;
}
.dots i:nth-child(27) {
	transform: translate(-39px, -53px);
	animation-duration: 1.26s;
	animation-delay: -1.5246s;
}
.dots i:nth-child(28) {
	transform: translate(53px, 34px);
	animation-duration: 2.11s;
	animation-delay: -2.1311s;
}
.dots i:nth-child(29) {
	transform: translate(-3px, -50px);
	animation-duration: 1.52s;
	animation-delay: -1.3224s;
}
.dots i:nth-child(30) {
	transform: translate(144px, 78px);
	animation-duration: 2.33s;
	animation-delay: -2.796s;
}
.dots i:nth-child(31) {
	transform: translate(-95px, -83px);
	animation-duration: 2.17s;
	animation-delay: -0.1953s;
}
.dots i:nth-child(32) {
	transform: translate(52px, 58px);
	animation-duration: 2.12s;
	animation-delay: -1.3992s;
}
.dots i:nth-child(33) {
	transform: translate(-73px, -99px);
	animation-duration: 1.89s;
	animation-delay: -0.9261s;
}
.dots i:nth-child(34) {
	transform: translate(62px, 144px);
	animation-duration: 1.2s;
	animation-delay: -1.2s;
}
.dots i:nth-child(35) {
	transform: translate(-13px, -5px);
	animation-duration: 2.48s;
	animation-delay: -0.6448s;
}
.dots i:nth-child(36) {
	transform: translate(24px, 4px);
	animation-duration: 1.28s;
	animation-delay: -0.4736s;
}
.dots i:nth-child(37) {
	transform: translate(-40px, -55px);
	animation-duration: 1.95s;
	animation-delay: -97.5ms;
}
.dots i:nth-child(38) {
	transform: translate(130px, 28px);
	animation-duration: 2.44s;
	animation-delay: -2.9768s;
}
.dots i:nth-child(39) {
	transform: translate(-40px, -90px);
	animation-duration: 1.82s;
	animation-delay: -2.5116s;
}
.dots i:nth-child(40) {
	transform: translate(32px, 26px);
	animation-duration: 2.33s;
	animation-delay: -2.4931s;
}
.dots i:nth-child(41) {
	transform: translate(-21px, -3px);
	animation-duration: 1.25s;
	animation-delay: -1.15s;
}
.dots i:nth-child(42) {
	transform: translate(35px, 49px);
	animation-duration: 1.87s;
	animation-delay: -1.9635s;
}
.dots i:nth-child(43) {
	transform: translate(-31px, -145px);
	animation-duration: 1.99s;
	animation-delay: -0.8955s;
}
.dots i:nth-child(44) {
	transform: translate(105px, 19px);
	animation-duration: 1.8s;
	animation-delay: -576ms;
}
.dots i:nth-child(45) {
	transform: translate(-7px, -70px);
	animation-duration: 2.25s;
	animation-delay: -1.8s;
}
.dots i:nth-child(46) {
	transform: translate(26px, 104px);
	animation-duration: 1.52s;
	animation-delay: -2.204s;
}
.dots i:nth-child(47) {
	transform: translate(-47px, -149px);
	animation-duration: 2.12s;
	animation-delay: -2.2896s;
}
.dots i:nth-child(48) {
	transform: translate(74px, 36px);
	animation-duration: 2.28s;
	animation-delay: -2.4624s;
}
.dots i:nth-child(49) {
	transform: translate(-150px, -132px);
	animation-duration: 2.46s;
	animation-delay: -1.1316s;
}
.dots i:nth-child(50) {
	transform: translate(111px, 113px);
	animation-duration: 1.34s;
	animation-delay: -0.4422s;
}
@keyframes shoot {
	0% {
		transform: translate(0, 0);
	}
}
@keyframes fade {
	to {
		opacity: 0;
	}
}

.el {
	position: absolute;
	top: 50%;
	left: 50%;
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
}
.ang-a {
	width: 300px;
	height: 200px;
	margin-top: -100px;
	margin-left: -150px;
}
.ang-b {
	width: 135px;
	height: 90px;
	margin-top: -32px;
	margin-left: -67.5px;
}
.ang-c {
	width: 50px;
	height: 22px;
	margin-top: 12px;
	margin-left: -25px;
}
.bg,
.text {
	height: 75px;
	width: 500px;
	margin-left: -250px;
	margin-top: -20px;
}
.bg-2 {
	height: 105px;
	width: 700px;
	margin-left: -350px;
	margin-top: -35px;
	opacity: 0.5;
}
.congrats {
	top: 50%;
	left: 50%;
	width: 100px;
	height: 100px;
	position: fixed;
	margin-top: -50px;
	margin-left: -50px;
}
.text {
	font-size: 62px;
	font-style: italic;
	color: white;
	font-weight: 400;
	text-align: center;
	line-height: 72px;
	padding: 6px 0;
	text-shadow: 0 2px 3px rgba(0, 0, 0, 0.3);
}
.glow {
	height: 75px;
	width: 600px;
	margin-left: -300px;
	margin-top: -20px;
	background: -moz-linear-gradient(
		left,
		rgba(0, 0, 0, 0) 0%,
		rgba(254, 197, 12, 1) 50%,
		rgba(0, 0, 0, 0) 100%
	);
	background: -webkit-linear-gradient(
		left,
		rgba(0, 0, 0, 0) 0%,
		rgba(254, 197, 12, 1) 50%,
		rgba(0, 0, 0, 0) 100%
	);
	background: linear-gradient(
		to right,
		rgba(0, 0, 0, 0) 0%,
		rgba(254, 197, 12, 1) 50%,
		rgba(0, 0, 0, 0) 100%
	);
}
.shine {
	height: 75px;
	margin-top: -20px;
	width: 200px;
	margin-left: -100px;
	border-radius: 50%;
	background-color: transparent;
	filter: blur(0px);
	box-shadow: none;
}
.btn {
	margin: 0 auto;
	margin-top: 10%;
	display: block;
	width: 50px;
	text-align: center;
	position: relative;
	z-index: 10;
	text-decoration: none;
	padding: 4px 8px;
	text-transform: uppercase;
	color: white;
	border-radius: 1px;
}
.btn.btn-gold {
	color: #55260c;
	background-image: radial-gradient(#fffe01, #f9c41e);
	box-shadow: 0 0 15px #f9c41e;
}

.bg {
	animation-delay: 0.15s;
}
.bg-2 {
	animation-duration: 0.2s;
}
.ang-b {
	animation-delay: 0.2s;
}
.ang-c {
	animation-delay: 0.6s;
	animation-duration: 0.1s;
}
.text {
	animation-duration: 0.3s;
	transition: all 0.6s ease-in-out 0s;
}
.txt-ind {
	text-indent: -20px;
}
.glow {
	animation-duration: 0.4s;
}
.zoomOutIn {
	-webkit-animation-name: zoomOutIn;
	animation-name: zoomOutIn;
}
.shineIn {
	animation: shineIn 0.3s forwards;
}

@-webkit-keyframes zoomOutIn {
	from {
		-webkit-transform: scale(3);
		transform: scale(3);
	}
	to {
		-webkit-transform: scale(1);
		transform: scale(1);
	}
	80% {
		-webkit-transform: scale(1);
		transform: scale(1);
	}
	85% {
		-webkit-transform: scale(1.5);
		transform: scale(1.5);
	}
}

@keyframes zoomOutIn {
	from {
		-webkit-transform: scale(3);
		transform: scale(3);
	}
	to {
		-webkit-transform: scale(1);
		transform: scale(1);
	}
	80% {
		-webkit-transform: scale(1);
		transform: scale(1);
	}
	85% {
		-webkit-transform: scale(1.5);
		transform: scale(1.5);
	}
}
@-webkit-keyframes shineIn {
	to {
		background-color: #fff33a;
		filter: blur(35px);
		box-shadow: 0 0 35px #fff33a;
	}
}
@keyframes shineIn {
	to {
		background-color: #fff33a;
		filter: blur(35px);
		box-shadow: 0 0 35px #fff33a;
	}
}

@media (max-width: 580px) {
	.congrats {
		transform: scale(0.55);
	}
}

</style>

<script>
$(function(){
	var btn = $('.btn'), bg_1 = $('.bg-1'), bg_2 = $('.bg-2'), ang_a = $('.ang-a'), ang_b = $('.ang-b'), ang_c = $('.ang-c'), text = $('.text'), glow = $('.glow'), dots = $('.dots'), shine = $('.shine');
	var start = function(){
		ang_a.removeClass('d-none').removeClass(ang_a.data('in')).addClass(ang_a.data('in'));
		ang_b.removeClass('d-none').removeClass(ang_b.data('in')).addClass(ang_b.data('in'));
		ang_c.removeClass('d-none').removeClass(ang_c.data('in')).addClass(ang_c.data('in'));
		bg_2.removeClass('d-none').removeClass(bg_2.data('out')).addClass(bg_2.data('in'));
		setTimeout(function(){
			bg_1.removeClass('d-none').removeClass(bg_1.data('out')).addClass(bg_1.data('in'));
		},500);
		btn.fadeOut(200);
	}
	btn.on('click',start);
	bg_2.off().on('animationend webkitAnimationEnd oAnimationEnd mozAnimationEnd',function(){
		setTimeout(function(){
		bg_2.fadeOut('fast').addClass('d-none').removeClass(bg_2.data('in'));
			text.removeClass('d-none').addClass(text.data('in'));
		},600);
	});
	text.off().on('animationend webkitAnimationEnd oAnimationEnd mozAnimationEnd',function(){
		setTimeout(function(){
			text.addClass('txt-ind');
			glow.removeClass('d-none').addClass(glow.data('in'));
			dots.removeClass('d-none');
			shine.removeClass('d-none').addClass(shine.data('in'));
		},50);
		
	});
	glow.off().on('animationend webkitAnimationEnd oAnimationEnd mozAnimationEnd',function(){
		bg_2.removeAttr('style').removeClass('d-none').addClass(bg_2.data('out'));
	});
	shine.off().on('animationend webkitAnimationEnd oAnimationEnd mozAnimationEnd',function(){
		setTimeout(function(){
			dots.fadeOut(300);
			glow.fadeOut(500);
		},1000);
		setTimeout(function(){
			shine.fadeOut(400);
			bg_1.removeClass(bg_1.data('in')).addClass(bg_1.data('out'));
		},2000);
		setTimeout(function(){
			text.removeClass(text.data('in')).addClass(text.data('out'));
			setTimeout(function(){
				$(document).trigger('animate:reset');
			},500);
		},2500);
	});

	$(document).on('animate:reset',function(){
		$('.el').each(function(){
			$(this).addClass('d-none').removeClass($(this).data('in')).removeClass($(this).data('out')).removeAttr('style');
		});
		text.removeClass('txt-ind');
		btn.fadeIn(200);
	});
});
</script>









<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>
<div class="snowflake"></div>

</a>


<style>
	html, body {
  padding: 0;
  margin: 0;
  width: 100vw;
  height: 100vh;
  position: relative;
  overflow: hidden;
  background: linear-gradient(#123, #111);
}

.snowflake {
  --size: 1vw;
  width: var(--size);
  height: var(--size);
  background: white;
  border-radius: 50%;
  position: absolute;
  top: -5vh;
}

@keyframes snowfall {
  0% {
    transform: translate3d(var(--left-ini), 0, 0);
  }
  100% {
    transform: translate3d(var(--left-end), 110vh, 0);
  }
}
.snowflake:nth-child(1) {
  --size: 1vw;
  --left-ini: -1vw;
  --left-end: 1vw;
  left: 16vw;
  animation: snowfall 14s linear infinite;
  animation-delay: -7s;
}

.snowflake:nth-child(2) {
  --size: 0.6vw;
  --left-ini: 2vw;
  --left-end: 0vw;
  left: 12vw;
  animation: snowfall 12s linear infinite;
  animation-delay: -5s;
}

.snowflake:nth-child(3) {
  --size: 0.2vw;
  --left-ini: -1vw;
  --left-end: 10vw;
  left: 37vw;
  animation: snowfall 11s linear infinite;
  animation-delay: -2s;
}

.snowflake:nth-child(4) {
  --size: 0.8vw;
  --left-ini: -1vw;
  --left-end: -9vw;
  left: 87vw;
  animation: snowfall 8s linear infinite;
  animation-delay: -9s;
}

.snowflake:nth-child(5) {
  --size: 0.2vw;
  --left-ini: 1vw;
  --left-end: -7vw;
  left: 6vw;
  animation: snowfall 6s linear infinite;
  animation-delay: -1s;
}

.snowflake:nth-child(6) {
  --size: 1vw;
  --left-ini: -9vw;
  --left-end: -1vw;
  left: 26vw;
  animation: snowfall 7s linear infinite;
  animation-delay: -3s;
}

.snowflake:nth-child(7) {
  --size: 1vw;
  --left-ini: -9vw;
  --left-end: 8vw;
  left: 44vw;
  animation: snowfall 13s linear infinite;
  animation-delay: -5s;
}

.snowflake:nth-child(8) {
  --size: 1vw;
  --left-ini: 1vw;
  --left-end: -6vw;
  left: 8vw;
  animation: snowfall 10s linear infinite;
  animation-delay: -2s;
}

.snowflake:nth-child(9) {
  --size: 0.4vw;
  --left-ini: -4vw;
  --left-end: 2vw;
  left: 58vw;
  animation: snowfall 7s linear infinite;
  animation-delay: -7s;
}

.snowflake:nth-child(10) {
  --size: 1vw;
  --left-ini: 3vw;
  --left-end: -3vw;
  left: 66vw;
  animation: snowfall 7s linear infinite;
  animation-delay: -6s;
}

.snowflake:nth-child(11) {
  --size: 1vw;
  --left-ini: -4vw;
  --left-end: -6vw;
  left: 71vw;
  animation: snowfall 8s linear infinite;
  animation-delay: -7s;
}

.snowflake:nth-child(12) {
  --size: 0.8vw;
  --left-ini: -9vw;
  --left-end: -3vw;
  left: 97vw;
  animation: snowfall 15s linear infinite;
  animation-delay: -7s;
}

.snowflake:nth-child(13) {
  --size: 1vw;
  --left-ini: -6vw;
  --left-end: -2vw;
  left: 18vw;
  animation: snowfall 8s linear infinite;
  animation-delay: -4s;
}

.snowflake:nth-child(14) {
  --size: 0.6vw;
  --left-ini: -7vw;
  --left-end: 9vw;
  left: 24vw;
  animation: snowfall 13s linear infinite;
  animation-delay: -2s;
}

.snowflake:nth-child(15) {
  --size: 0.8vw;
  --left-ini: -5vw;
  --left-end: 10vw;
  left: 65vw;
  animation: snowfall 9s linear infinite;
  animation-delay: -6s;
}

.snowflake:nth-child(16) {
  --size: 0.6vw;
  --left-ini: 10vw;
  --left-end: -6vw;
  left: 57vw;
  animation: snowfall 7s linear infinite;
  animation-delay: -1s;
}

.snowflake:nth-child(17) {
  --size: 0.4vw;
  --left-ini: 6vw;
  --left-end: -6vw;
  left: 4vw;
  animation: snowfall 6s linear infinite;
  animation-delay: -8s;
}

.snowflake:nth-child(18) {
  --size: 0.6vw;
  --left-ini: 0vw;
  --left-end: 1vw;
  left: 56vw;
  animation: snowfall 6s linear infinite;
  animation-delay: -2s;
}

.snowflake:nth-child(19) {
  --size: 0.2vw;
  --left-ini: -2vw;
  --left-end: 1vw;
  left: 13vw;
  animation: snowfall 13s linear infinite;
  animation-delay: -1s;
}

.snowflake:nth-child(20) {
  --size: 0.4vw;
  --left-ini: 1vw;
  --left-end: -7vw;
  left: 77vw;
  animation: snowfall 6s linear infinite;
  animation-delay: -10s;
}

.snowflake:nth-child(21) {
  --size: 0.4vw;
  --left-ini: 5vw;
  --left-end: 0vw;
  left: 15vw;
  animation: snowfall 7s linear infinite;
  animation-delay: -9s;
}

.snowflake:nth-child(22) {
  --size: 0.2vw;
  --left-ini: 8vw;
  --left-end: 2vw;
  left: 58vw;
  animation: snowfall 6s linear infinite;
  animation-delay: -1s;
}

.snowflake:nth-child(23) {
  --size: 0.8vw;
  --left-ini: 3vw;
  --left-end: -3vw;
  left: 10vw;
  animation: snowfall 6s linear infinite;
  animation-delay: -10s;
}

.snowflake:nth-child(24) {
  --size: 0.8vw;
  --left-ini: -8vw;
  --left-end: -7vw;
  left: 60vw;
  animation: snowfall 8s linear infinite;
  animation-delay: -1s;
}

.snowflake:nth-child(25) {
  --size: 0.4vw;
  --left-ini: 4vw;
  --left-end: -5vw;
  left: 39vw;
  animation: snowfall 8s linear infinite;
  animation-delay: -7s;
}

.snowflake:nth-child(26) {
  --size: 0.6vw;
  --left-ini: -3vw;
  --left-end: -4vw;
  left: 89vw;
  animation: snowfall 8s linear infinite;
  animation-delay: -10s;
}

.snowflake:nth-child(27) {
  --size: 1vw;
  --left-ini: 10vw;
  --left-end: 10vw;
  left: 10vw;
  animation: snowfall 8s linear infinite;
  animation-delay: -7s;
}

.snowflake:nth-child(28) {
  --size: 0.2vw;
  --left-ini: -6vw;
  --left-end: -6vw;
  left: 94vw;
  animation: snowfall 7s linear infinite;
  animation-delay: -6s;
}

.snowflake:nth-child(29) {
  --size: 0.4vw;
  --left-ini: -7vw;
  --left-end: -6vw;
  left: 4vw;
  animation: snowfall 13s linear infinite;
  animation-delay: -7s;
}

.snowflake:nth-child(30) {
  --size: 0.4vw;
  --left-ini: -4vw;
  --left-end: -3vw;
  left: 72vw;
  animation: snowfall 8s linear infinite;
  animation-delay: -6s;
}

.snowflake:nth-child(31) {
  --size: 0.2vw;
  --left-ini: 10vw;
  --left-end: -7vw;
  left: 8vw;
  animation: snowfall 11s linear infinite;
  animation-delay: -3s;
}

.snowflake:nth-child(32) {
  --size: 0.4vw;
  --left-ini: 6vw;
  --left-end: -4vw;
  left: 64vw;
  animation: snowfall 7s linear infinite;
  animation-delay: -10s;
}

.snowflake:nth-child(33) {
  --size: 0.4vw;
  --left-ini: 6vw;
  --left-end: 6vw;
  left: 56vw;
  animation: snowfall 7s linear infinite;
  animation-delay: -5s;
}

.snowflake:nth-child(34) {
  --size: 1vw;
  --left-ini: -2vw;
  --left-end: 5vw;
  left: 44vw;
  animation: snowfall 15s linear infinite;
  animation-delay: -8s;
}

.snowflake:nth-child(35) {
  --size: 0.6vw;
  --left-ini: -8vw;
  --left-end: 9vw;
  left: 91vw;
  animation: snowfall 14s linear infinite;
  animation-delay: -4s;
}

.snowflake:nth-child(36) {
  --size: 0.4vw;
  --left-ini: -2vw;
  --left-end: -1vw;
  left: 30vw;
  animation: snowfall 11s linear infinite;
  animation-delay: -5s;
}

.snowflake:nth-child(37) {
  --size: 0.2vw;
  --left-ini: -1vw;
  --left-end: 1vw;
  left: 73vw;
  animation: snowfall 9s linear infinite;
  animation-delay: -2s;
}

.snowflake:nth-child(38) {
  --size: 0.8vw;
  --left-ini: -9vw;
  --left-end: -1vw;
  left: 77vw;
  animation: snowfall 15s linear infinite;
  animation-delay: -4s;
}

.snowflake:nth-child(39) {
  --size: 0.2vw;
  --left-ini: -3vw;
  --left-end: -9vw;
  left: 42vw;
  animation: snowfall 6s linear infinite;
  animation-delay: -3s;
}

.snowflake:nth-child(40) {
  --size: 0.2vw;
  --left-ini: -8vw;
  --left-end: -4vw;
  left: 94vw;
  animation: snowfall 11s linear infinite;
  animation-delay: -4s;
}

.snowflake:nth-child(41) {
  --size: 0.6vw;
  --left-ini: 1vw;
  --left-end: 0vw;
  left: 90vw;
  animation: snowfall 7s linear infinite;
  animation-delay: -4s;
}

.snowflake:nth-child(42) {
  --size: 0.6vw;
  --left-ini: 8vw;
  --left-end: -9vw;
  left: 24vw;
  animation: snowfall 9s linear infinite;
  animation-delay: -5s;
}

.snowflake:nth-child(43) {
  --size: 0.8vw;
  --left-ini: 6vw;
  --left-end: 0vw;
  left: 88vw;
  animation: snowfall 10s linear infinite;
  animation-delay: -6s;
}

.snowflake:nth-child(44) {
  --size: 0.6vw;
  --left-ini: -9vw;
  --left-end: 2vw;
  left: 52vw;
  animation: snowfall 8s linear infinite;
  animation-delay: -9s;
}

.snowflake:nth-child(45) {
  --size: 0.6vw;
  --left-ini: 9vw;
  --left-end: -5vw;
  left: 64vw;
  animation: snowfall 14s linear infinite;
  animation-delay: -9s;
}

.snowflake:nth-child(46) {
  --size: 0.8vw;
  --left-ini: 0vw;
  --left-end: 1vw;
  left: 44vw;
  animation: snowfall 10s linear infinite;
  animation-delay: -6s;
}

.snowflake:nth-child(47) {
  --size: 1vw;
  --left-ini: 8vw;
  --left-end: 6vw;
  left: 94vw;
  animation: snowfall 6s linear infinite;
  animation-delay: -3s;
}

.snowflake:nth-child(48) {
  --size: 0.2vw;
  --left-ini: -1vw;
  --left-end: 5vw;
  left: 19vw;
  animation: snowfall 12s linear infinite;
  animation-delay: -4s;
}

.snowflake:nth-child(49) {
  --size: 1vw;
  --left-ini: -5vw;
  --left-end: -6vw;
  left: 18vw;
  animation: snowfall 8s linear infinite;
  animation-delay: -9s;
}

.snowflake:nth-child(50) {
  --size: 0.2vw;
  --left-ini: 7vw;
  --left-end: 7vw;
  left: 64vw;
  animation: snowfall 10s linear infinite;
  animation-delay: -4s;
}

/* added small blur every 6 snowflakes*/
.snowflake:nth-child(6n) {
  filter: blur(1px);
}

/***/
#youtube {
  z-index: 2;
  display: block;
  width: 100px;
  height: 70px;
  position: absolute;
  bottom: 20px;
  right: 20px;
  background: red;
  border-radius: 50%/11%;
  transition: transform 0.5s;
}

#youtube:hover,
#youtube:focus {
  transform: scale(1.1);
}

#youtube::before {
  content: "";
  display: block;
  position: absolute;
  top: 7.5%;
  left: -6%;
  width: 112%;
  height: 85%;
  background: red;
  border-radius: 9%/50%;
}

#youtube::after {
  content: "";
  display: block;
  position: absolute;
  top: 20px;
  left: 40px;
  width: 45px;
  height: 30px;
  border: 15px solid transparent;
  box-sizing: border-box;
  border-left: 30px solid white;
}

#youtube span {
  font-size: 0;
  position: absolute;
  width: 0;
  height: 0;
  overflow: hidden;
}
</style>