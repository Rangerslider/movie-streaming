<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		/* default stylings */
		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}

		/* provides background color to body */
		body {
			background-color: rgb(255, 235, 235);
		}

		/* ----- container stylings:
		-> centers the whole content of the page
		-> defines width and height for container ----- */
		.containers {
			display: flex;
			margin: auto;
			width: 100%;
			height: 100%;
		}
		/* ----- end of container stylings ----- */

		/* provides padding to main heading */
		.main-heading {
			padding: 2rem 0 2rem 0;
		}

		.content {
			position: relative;
		}

		/* ----- carousel content stylings ----- */
		/* places the carousel content on center of the carousel */
		.carousel-content {
			position: absolute;
			/*to center the content horizontally and vertically*/
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			text-align: center;
			z-index: 50;
		}
		.carousel-heading {
			font-size: 3rem;
			color: #308d46;
			margin-bottom: 1rem;
		}
		/*----- end of carousel content stylings ----- */

		/* ----- slideshow stylings ----- */
		.slideshow {
			height: 100%;
			overflow: hidden; /* to hide slides in x-direction */
			position: relative;
		}
		/* wrapper which wraps all the slideshow images stylings */
		.slideshow-wrapper {
			display: flex;
			/* We give it width as 400% because we are making a
			4 image carousel. If you want to make for example,
			5 images carousel, then give width as 500%. */
			width: 300%;
			position: relative;
			/* you can change the animation settings from below */
			animation: slideshow 20s infinite;
		}
		/* define width and height for images*/
		.slide {
			width: 100%;
			height: 100%;
		}
		.slide-img {
			width: 100%;
			height: 60%;
			object-fit: fill;
		}
		/* @keyframes are used to provide animations
		We make these settings for 4 image carousel.
		Make modification accourding to your needs. */
		@keyframes slideshow {
			0% { left: 0; }
			10% { left: 0; }
			15% { left: -100%; }
			25% { left: -100%; }
			30% { left: -200%; }
			40% { left: -200%; }
			60% { left: -200%; }
			70% { left: -200%; }
			75% { left: -100%; }
			85% { left: -100%; }
			90% { left: 0%; }
		}
		/* ----- end of slideshow stylings ----- */

		/* ----- carousel control buttons stylings ----- */
		.slide-btn {
			background-color: #bbb;
			border-radius: 50%;
			border: .2rem solid #d38800;
			width: 1.2rem;
			height: 1.2rem;
			outline: none;
			cursor: pointer;
			/* stylings for positioning the buttons at
			the bottom of the carousel */
			position: absolute;
			bottom: 10%;
			left: 50%;
			transform: translateX(-50%);
			z-index: 70;
		}
		/* As we provide position as absolute,
		the buttons places one over the other.
		So, we have to place them individually
		at their correct positions. */
		.slide-btn-1 {
			left: 45%;
		}
		.slide-btn-2 {
			left: 50%;
		}
		.slide-btn-3 {
			left: 55%;
		}
		/* When we focus on the particular button,
		the animation stops to that particular image
		to which the button is associated. */
		.slide-btn-1:focus~.slideshow-wrapper {
			animation: none;
			left: 0;
		}
		.slide-btn-2:focus~.slideshow-wrapper {
			animation: none;
			left: -100%;
		}
		.slide-btn-3:focus~.slideshow-wrapper {
			animation: none;
			left: -200%;
		}
		.slide-btn-4:focus~.slideshow-wrapper {
			animation: none;
			left: -300%;
		}
		/* when we focus on the button, the background color changes */
		.slide-btn:focus {
			background-color: #308d46;
		}
		/* ----- end of carousel control buttons stylings ----- */
	</style>
</head>
<body>
	<div class="containers">
		<div class="content">
			<!-- The content which is placed at the center of the carousel -->
			<div class="slideshow">
				<!-- carousel control buttons -->
				<button class="slide-btn slide-btn-1"></button>
				<button class="slide-btn slide-btn-2"></button>
				<button class="slide-btn slide-btn-3"></button>
				<!-- carousel wrapper which contains all images -->
				<div class="slideshow-wrapper">
					<div class="slide">
						<img class="slide-img" src="images/squid.png">
					</div>
					<div class="slide">
						<img class="slide-img" src="images/peaky.png">
					</div>
					<div class="slide">
						<img class="slide-img" src="images/money.png">
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
