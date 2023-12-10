
<?php
$conn = mysqli_connect('locahost' , 'root', 'amro1234', 'contact_db') or die('connection failed');
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$date = $_POST['date'];
$insert = mysqli_query($conn, "INSERT INTO 'contact_form' (name,email,number,date) VALUES('$name','$email','$number','$date')") or die('query failed');
if($insert){
  $message[] = 'appointment made successfully';
}
else{
  $message[] = 'appointment failed';
}
?>








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dental Care Clinic</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="styling.css" />
  </head>

  <body>
    <header class="header fixed-top">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <a href="#home" class="logo">dental<span>Care.</span></a>
          <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
          </nav>
          <a href="#contact" class="link-btn">Make Appointment</a>

          <div id="menu-btn" class="fas fa-bars"></div>
        </div>
      </div>
    </header>



 <section class="home" id="home">
    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>Let's Brighten your Smile</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab vero dolore dolorum nostrum hic facilis maiores?</p>
                <a href="contact" class="link-btn">Make Appointment</a>
            </div>
        </div>
    </div>
 </section>


 <section class="about" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 image">
                <img src="teeth care.png" alt="" class="w-100 mb-5 mb-md-0">
            </div>
            <div class="col-md-6 content">
                <span>about us</span>
                <h3>True Healthcare For Your Family</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse veniam aspernatur eveniet velit doloribus! Repudiandae, dolorem?</p>
                <a href="contact" class="link-btn">Make Appointment</a>
            </div>
        </div>
    </div>
 </section>






 <section class="services" id="services">
    <h1 class="heading">Our Services</h1>
    <div class="box-container container">
        <div class="box">
            <img src="Dental Implants.png" alt="">
            <h3>Dental Implants</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi soluta cumque eum unde, ipsam dicta beatae!</p>
        </div>
        <div class="box">
            <img src="Fillings and Restorations.png" alt="">
            <h3>Fillings and Restorations</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi soluta cumque eum unde, ipsam dicta beatae!</p>
        </div>
        <div class="box">
            <img src="Orthodontic Treatments.png" alt="">
            <h3>Orthodontic Treatments</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi soluta cumque eum unde, ipsam dicta beatae!</p>
        </div>
        <div class="box">
            <img src="teeth care.png" alt="">
            <h3>Teeth Care</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi soluta cumque eum unde, ipsam dicta beatae!</p>
        </div>
        <div class="box">
            <img src="Teeth Cleaning and Scaling.png" alt="">
            <h3>Teeth Cleaning and Scaling</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi soluta cumque eum unde, ipsam dicta beatae!</p>
        </div>
        <div class="box">
            <img src="Tooth Extractions.png" alt="">
            <h3>Tooth Extractions</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi soluta cumque eum unde, ipsam dicta beatae!</p>
        </div>
    </div>
 </section>


<section class="contact" id="contact">
    <h1 class="heading">Make Appointment</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<?php
if(isset($message)){
  foreach($message as $message){
    echo '<p class="message">'.$message.'</p>';
  }
}

?>


      <span>your name:</span>
        <input type="text" name="name" placeholder="enter your name" class="box">
        <span>your email:</span>
        <input type="email" name="email" placeholder="enter your email" class="box">
        <span>your phone number:</span>
        <input type="telephone" name="number" placeholder="enter your number" class="box">
        <span>appointment date:</span>
        <input type="datetime-local" name="date"class="box">
        <input type="submit" value="make appointment" name="submit" class="link-btn">
    </form>
</section>






    <script src="script.js"></script>
  <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
