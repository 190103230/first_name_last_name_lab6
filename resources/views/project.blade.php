<!DOCTYPE html>
<html>

<head>
	<title>{{__("project")}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="project/css/project.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

	<script src="https://api-maps.yandex.ru/2.1/?apikey=Your API key&lang=en_US" type="text/javascript">
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function () {
			$(".btn1").click(function () {
				$("#myDIV").toggle();
			});
		});
		$(document).ready(function () {
			$(".btn3").click(function () {
				$("#div1").fadeToggle();

			});
		});
		$(document).ready(function () {
			$(".btn4").click(function () {
				$(".mor").slideToggle();
			});
		});

		function func() {
			window.scrollBy(0, 4000);
		}
		$(document).ready(function () {
			$(".SignUP").click(function () {
				$(".hidden").toggle(1);
			});
		});
		$(document).ready(function () {
			$(".link_cancel").click(function () {
				$(".hidden").toggle(1);
			});
		});

		ymaps.ready(init);

		function init() {
			var myMap = new ymaps.Map("map", {
				center: [55.76, 37.64],
				zoom: 10
			}, {
				searchControlProvider: 'yandex#search'
			}),

				// Creating a geo object with the "Point" geometry type.
				myGeoObject = new ymaps.GeoObject({
					// The geometry description.
					geometry: {
						type: "Point",
						coordinates: [55.8, 37.8]
					},
					// Properties.
					properties: {
						// The placemark content.
						iconContent: 'I\'m draggable',
						hintContent: 'Come on, drag already!'
					}
				}, {
					/**
					 * Options.
					 * The placemark's icon will stretch to fit its contents.
					 */
					preset: 'islands#blackStretchyIcon',
					// The placemark can be dragged.
					draggable: true
				}),
				myPieChart = new ymaps.Placemark([
					55.847, 37.6
				], {
					// Data for generating a diagram.
					data: [
						{ weight: 8, color: '#0E4779' },
						{ weight: 6, color: '#1E98FF' },
						{ weight: 4, color: '#82CDFF' }
					],
					iconCaption: "Diagram"
				}, {
					// Defining a custom placemark layout.
					iconLayout: 'default#pieChart',
					// Radius of the diagram, in pixels.
					iconPieChartRadius: 30,
					// The radius of the central part of the layout.
					iconPieChartCoreRadius: 10,
					// Fill style for the core.
					iconPieChartCoreFillStyle: '#ffffff',
					// The style for lines between sectors and the outline of the diagram.
					iconPieChartStrokeStyle: '#ffffff',
					// Width of the sector dividing lines and diagram outline.
					iconPieChartStrokeWidth: 3,
					// Maximum width of the placemark caption.
					iconPieChartCaptionMaxWidth: 200
				}),
				myPolyline = new ymaps.Polyline([
					// Specifying the coordinates of the vertices of the polyline.
					[55.833, 37.715],
					[55.782, 37.615],
					[55.687, 37.53],
					[55.695, 37.435]
				], {
					/**
					 * Describing the properties of the geo object.
					 *  The contents of the balloon.
					 */
					balloonContent: "Polyline"
				}, {
					/**
					 * Setting options for the geo object. Disabling the close button on a balloon.
					 * 
					 */
					balloonCloseButton: false,
					// The line color.
					strokeColor: "#000000",
					// Line width.
					strokeWidth: 4,
					// The transparency coefficient.
					strokeOpacity: 0.5
				}),

				myRectangle = new ymaps.Rectangle([
					// Setting the coordinates of the diagonal corners of the rectangle.
					[55.73, 37.55],
					[55.81, 37.69]
				], {
					//Properties
					hintContent: 'You can\'t drag me!',
					balloonContent: 'Rectangle 1'
				}, {
					/**
					 * Options.
					 *  The fill color and transparency.
					 */
					fillColor: '#7df9ff33',
					/**
					 * Additional fill transparency.
					 *  The resulting transparency will not be #33(0.2), but 0.1(0.2*0.5).
					 */
					fillOpacity: 0.5,
					// Stroke color.
					strokeColor: '#0000FF',
					// Stroke transparency.
					strokeOpacity: 0.5,
					// Line width.
					strokeWidth: 2,
					/**
					 * The radius of rounded corners.
					 *  This option is accepted only for a rectangle.
					 */
					borderRadius: 6
				});

			myMap.geoObjects
				.add(myRectangle)
				.add(myGeoObject)
				.add(myPieChart)
				.add(myPolyline)
				.add(new ymaps.Placemark([55.684758, 37.738521], {
					balloonContent: 'the color of <strong>the water on Bondi Beach</strong>'
				}, {
					preset: 'islands#icon',
					iconColor: '#0095b6'
				}))
				.add(new ymaps.Placemark([55.833436, 37.715175], {
					balloonContent: '<strong>greyish-brownish-maroon</strong> color'
				}, {
					preset: 'islands#dotIcon',
					iconColor: '#735184'
				}))
				.add(new ymaps.Placemark([55.687086, 37.529789], {
					balloonContent: 'the color of <strong>enamored toads</strong>'
				}, {
					preset: 'islands#circleIcon',
					iconColor: '#3caa3c'
				}))
				.add(new ymaps.Placemark([55.782392, 37.614924], {
					balloonContent: 'the color of <strong>Surprise Dauphin</strong>'
				}, {
					preset: 'islands#circleDotIcon',
					iconColor: 'yellow'
				}))
				.add(new ymaps.Placemark([55.642063, 37.656123], {
					balloonContent: '<strong>red</strong> color'
				}, {
					preset: 'islands#redSportIcon'
				}))
				.add(new ymaps.Placemark([55.826479, 37.487208], {
					balloonContent: '<strong>Facebook</strong> color'
				}, {
					preset: 'islands#governmentCircleIcon',
					iconColor: '#3b5998'
				}))
				.add(new ymaps.Placemark([55.694843, 37.435023], {
					balloonContent: '<strong>crocodile\'s nose</strong> color',

				}, {
					preset: 'islands#greenDotIconWithCaption'
				}))
				.add(new ymaps.Placemark([55.790139, 37.814052], {
					balloonContent: '<strong>blue</strong> color',
					iconCaption: 'Really, really long but super interesting text'
				}, {
					preset: 'islands#blueCircleDotIconWithCaption',
					iconCaptionMaxWidth: '50'
				}));
		}
		function logIn() {
			window.scrollTo(0, 0);
			if (document.getElementById("sign_in").textContent == "Log In") {
				document.querySelector(".form").style.display = "flex";
				$(".form").animate({ opacity: '1' }, 1500);
				document.querySelector("body").style.overflow = "hidden";
				Choose(document.querySelector("#ready"));
			}
			else {
				$("#avatar").fadeOut("slow");
				document.getElementById("sign_in").innerHTML = "Log In";
			}
		}

		function Close() {
			$(".form").animate({ opacity: '0' }, "slow");
			document.getElementById("_username").value = "";
			document.getElementById("_email").value = "";
			document.getElementById("_password").value = "";
			document.getElementById("repeatPassword").value = "";
			document.querySelector("body").style.overflow = "scroll";
			document.querySelector(".form-content").style.height = "0px";
			document.querySelector(".form").style.display = "none";
		}
		function SignIn(name) {
			$("#avatar").fadeIn("slow");
			document.getElementById("user_name").innerHTML = name;
			document.getElementById("sign_in").innerHTML = "Log Out";
			Close();
		}
		function Choose(arg) {
			if (arg.textContent == "Sign Up") {
				document.getElementById("_username").placeholder = "Firstname&Lastname";
				document.getElementById("log_in").innerHTML = "Create Account";
				document.getElementById("ready").style.color = "darkgray";
				document.getElementById("not_ready").style.color = "red";
				$("#repeatPassword").fadeIn("slow");
				$("#_email").fadeIn("slow");
				$(".form-content").animate({ height: '550px' }, "slow");
			}
			else {
				document.getElementById("_username").placeholder = "Username";
				document.getElementById("log_in").innerHTML = "Log In";
				document.getElementById("ready").style.color = "red";
				document.getElementById("not_ready").style.color = "darkgray";
				$("#repeatPassword").fadeOut("slow");
				$("#_email").fadeOut("slow");
				$(".form-content").animate({ height: '380px' }, "slow");
			}
		}

		function changeImg() {
			document.getElementById("latest").src = "img/late3.png";
		}

		function normalImg() {
			document.getElementById("latest").src = "img/late.png";
		}
	</script>

</head>

<body>
	<div class="nav navs">
		<label class="label1" for="toggle">&#9776;</label>
	</div>
	<input type="checkbox" id="toggle">
	<header>
		<div class="bas">

			<div class="navi">
				<div class="qweasd"><a href="#">><</a>
				</div>
				<div><a>{{__('news')}}</a></div>
				<div> <a>{{__('tv')}}</a></div>
				<div><a href="#">{{__('talks')}}</a></div>
				<div><a href="#">{{__('shop')}}</a></div>
				<div><a href="#">{{__('egency')}}</a></div>
				<div><a href="https://www.facebook.com"><i class="fab fa-facebook-square"></i></a></div>
				<div><a href="https://twitter.com/"><i class="fab fa-twitter-square"></i></a></div>
				<div class="meninatimmiras">
					<div> <a href="#">{{__('photography')}}</a></div>
					<div><a href="#">{{__('design')}}</a></div>
					<div> <a href="#">{{__('popculture')}}</a></div>
					<div> <a href="#">{{__('technology')}}</a></div>
					<div> <a href="#">{{__('graphic')}}</a></div>
					<div><a onclick="func()">{{__('more')}}</a></div>
				</div>
			</div>
		</div>
	</header>
	<div class="main">
		<h1 id="fub">fubiz</h1>
		<div class="orta">
			<div class="navii">
				<div> <a href="#" class="link_circle">{{__('photography')}}</a></div>
				<div><a href="#" class="link_circle">{{__('design')}}</a></div>
				<div> <a href="#" class="link_circle">{{__('popculture')}}</a></div>
				<div> <a href="#" class="link_circle">{{__('technology')}}</a></div>
				<div> <a href="#" class="link_circle">{{__('graphic')}}</a></div>
				<div><a onclick="func()" class="link_circle">{{__('more')}}</a></div>
			</div>
			<p id="par">{{__("Into The Intimacy of Daukha Peaple with Shed Majohid")}}</p>
		</div>

	</div>
	<p id="par2">{{__("The Highlights")}}</p>
	<div class="footer">

		<div>
			<div class="simple">
				<img class="photo" src="project/img/first.png">
				<p>{{__("design")}}</p>
				<h3>{{__("A Cliff House for Winter Hollydays")}}</h3>
			</div>
		</div>

		<div>
			<div class="simple">
				<img class="photo" src="project/img/second.png">
				<p>{{__("graphic")}}</p>
				<h3> {{__("Woman Power with Monica Garwood")}}</h3>

			</div>
		</div>


		<div>
			<div class="simple">
				<img class="photo" src="project/img/third.png">
				<p>{{__("graphic")}}</p>
				<h3>{{__("Awesome Cross Stich by Aheneah")}}</h3>

			</div>
		</div>
		<div>
			<div class="simple">
				<img class="photo" src="project/img/fourth.png">
				<p>{{__("design")}}</p>
				<h3>{{__("Design Floating Birds")}}</h3>

			</div>
		</div>

	</div>

	<div class="middle">
		<h1>{{__("Creativity Finder")}}</h1>
		<div id="box">
			<p>{{__("You are An art lover * from Somewhere * looking for Inspiration *")}} <a target="_blank"
					href="http://google.com" class="content-bottom-info__link">
					<span>{{__("Browse")}}</span>
				</a></p>
		</div>


	</div>
	<div class="latests">
		<div class="late">
			<img onmouseover="changeImg()" onmouseout="normalImg()" id="latest" src="project/img/late.png">
			<div class="text">Some Text</div>
		</div>
		<div class="adver">
			<button class="btn1">{{__("Hide and Show")}}</button><br>
			<div id="myDIV">fubiz</div>
			<button class="btn3">{{__("Click to fade in/out boxes")}}</button><br>

			<div id="div1">{{__("Jubiz - website of a company promoting its products in the field of design. We will provide services in the form of design solutions for apartments, houses, prints, etc. Аnd if you are a very creative person, and have ever worked in the field of design, write to us and we will consider your candidacy in our company ")}}</div>

			<button class="btn4">{{__("Slide")}}</button>
			<div class="mor">
				<iframe src="https://www.youtube.com/embed/MS8p-CgTJIg?autoplay=1&loop=1&controls=0"></iframe>
			</div>
			<object data="project/Add.html"></object>
		</div>
	</div>
	<div class="footer2">
		<div class="flexing">
			<div class="con">
				<div class="simple2">
					<img class="photo2" src="project/img/first.png">
					<p>{{__("design")}}</p>
					<h3>{{__("A Cliff House for Winter Hollydays")}}</h3>
				</div>
				<div class="simple2">
					<img class="photo2" src="project/img/third.png">
					<p>{{__("graphic")}}</p>
					<h3>{{__("Awesome Cross Stich by Aheneah")}}</h3>
				</div>

			</div>
			<div class="con">
				<div class="simple2">
					<img class="photo2" src="project/img/second.png">
					<p>{{__("graphic")}}</p>
					<h3> {{__("Woman Power with Monica Garwood")}}</h3>
				</div>
				<div class="simple2">
					<img class="photo2" src="project/img/fourth.png">
					<p>{{__("design")}}</p>
					<h3>{{__("Design Floating Birds")}}</h3>
				</div>

			</div>
		</div>
		<div class="con1">
			<h2>{{__("Most Popular")}}</h2>
			<div class="simple3">
				<video width="400" height="200" controls autoplay muted loop>
					<source src="project/Computer video.mp4" type="video/mp4">
				</video>
			</div>
			<div class="simple3">
				<object data="project/img/third.png" width="170" height="120"></object>
				<div>
					<p>{{__("graphic")}}</p>
					<h3>{{__("Awesome Cross Stich by Aheneah")}}</h3>
				</div>
			</div>
			<div class="simple3">
				<embed type="image/jpg" src="project/img/second.png" width="170" height="120">
				<div>
					<p>{{__("graphic")}}</p>
					<h3>{{__("Woman Power with Monica Garwood")}}</h3>
				</div>
			</div>
			<div class="simple3">
				<embed type="image/jpg" src="project/img/fourth.png" width="170" height="120">
				<div>
					<p>{{__("design")}}</p>
					<h3>{{__("Design Floating Birds")}}</h3>
				</div>
			</div>
			<div class="simple3">
				<img class="photo4" src="project/img/first.png">
				<div>
					<p>{{__("design")}}</p>
					<h3>{{__("A Cliff House for Winter Hollydays")}}</h3>
				</div>
			</div>
			<audio class="simple3" controls>
				<source src="project/Design Is.mp3" type="audio/mp3">
			</audio>
			<h3>fubiz</h3>
		</div>
	</div>
	<div class="map_class">
		<div id="map" style="width: 600px; height: 400px"></div>
		<div class="map_written">
			<address>
				{{__("Contact us: fubiz@gmail.com")}} <br>
				<strong>Box 564, Disneyland</strong> <br>
				<b>{{__("USA")}}</b> <br>
				<bdo dir="rtl">{{__("ecneirepxe euqinu a uoy evig lliw ew emoc uoy fI")}}</bdo> <br>
				<p>{{__("Best followers")}}</p>
				<ul>
					<li>{{__("User")}} <bdi>Dave</bdi> 21 {{__("projects")}}</li>
					<li>{{__("User")}} <bdi>Sasha</bdi> 14 {{__("projects")}}</li>
					<li>{{__("User")}} <bdi>أحمد</bdi> 10 {{__("projects")}}</li>
				</ul>

			</address>
		</div>
	</div>
	</div>
	<div class="asti">
		<h2>{{__("Stay Updated")}}</h2>
		<input type="text" name="email" placeholder="Your email adress">
		<button onclick="logIn()" id="sign_in" class="btn btn-outline-dark">{{__("Log In")}}</button>
		<div class="form">
			<div class="form-content">
				<div class="choose">
					<p onclick="Choose(this)" id="ready">{{__("Log In")}}</p>
					<p onclick="Choose(this)" id="not_ready">{{__("Sign Up")}}</p>
				</div>
				<img onclick="Close()" id="close_icon"
					src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQCyjpHyB8Wx4_kTyNbie6u7jrDhtuDrRZKQA&usqp=CAU"
					alt="close icon">
				<input class="input" type="text" name="Username" id="_username" placeholder="Username">
				<input class="input" type="email" name="Email" id="_email" placeholder="E-mail">
				<input class="input" type="password" name="Password" id="_password" placeholder="Password">
				<input class="input" type="password" name="Password" id="repeatPassword" placeholder="Repeat Password">
				<button onclick="SignIn(_username.value)" id="log_in" class="btn btn-outline-light">Log In</button>
			</div>
		</div>
		<div class="hidden">
			<div class="aboutU">
				<div>
					<form>
						<label for="birthday">{{__("Birthday:")}}</label>
						<input type="date" id="birthday" name="birthday">
						<br><br>
					</form>

					<form>
						<label for="rating">{{__("Rate out site(0 to 5):")}}</label>
						<input type="number" min="0" max="5">
						<br><br>
					</form>
				</div>
				<div>
					<form>
						<input type="checkbox">
						<label for="cus"> {{__("I am customer")}}</label><br>
						<input type="checkbox">
						<label for="des">{{__("I am designer")}}</label><br>
						<br>
					</form>
				</div>
				<div>

					<form>
						<p>{{__("Please select your marital status:")}}</p>
						<input type="radio" id="male" name="gender" value="male">
						<label for="male">{{__("Married")}}</label><br>
						<input type="radio" id="female" name="gender" value="female">
						<label for="female">{{__("Unmarried")}}</label><br>
						<br>
					</form>
				</div>
				<div>
					<form>
						<label for="gender">{{__("Gender:")}}</label>
						<select name="gender" id="gender">
							<option value="male">{{__("Male")}}</option>
							<option value="female">{{__("Female")}}</option>
							<option value="other">{{__("Other")}}</option>
						</select>
						<br><br>

						<a class="link_cancel" href="#">{{__("Cancel")}}</a>
						<a class="link_cancel" href="#">{{__("Submit")}}</a>
					</form>
				</div>
			</div>
		</div>
	</div>

	</div>
	<div class="more">
		<div class="container">
			<nav class="menu_nav">
				<a class="menu_link">{{__("About us")}}</a>
				<a class="menu_link">{{__("Advertisement")}}</a>
				<a class="menu_link">{{__("Press")}}</a>
				<a class="menu_link_special">fubiz</a>
				<a class="menu_link">{{__("Contact")}}</a>
				<a class="menu_link">{{__("Archives")}}</a>
				<a class="menu_link">{{__("Privacy")}}</a>
			</nav>
		</div>
	</div>

</body>

</html>