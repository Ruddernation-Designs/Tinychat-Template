<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="msapplication-config" content="none"/>
		<meta name="description" content="Website Name" />
		<meta name="keywords" content="Ruddernation Designs, Tinychat video chat, Tinychat API, Tinychat room spy" />
		<meta name="author" content="Ruddernation Designs" />
		<meta name="Copyright" content="Ruddernation Designs"/>
		<title>Tinychat API</title>
		<link rel="shortcut icon" href="assets/images/ico/favicon.ico">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="homepage is-preload"  oncontextmenu="return false">
		<div id="page-wrapper">

<!-- Header -->
				<div id="header">

<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="/" id="logo">Tinychat API</a></h1>
								<hr />
								<p>Search for your friends on Tinychat.</p>
							</header>
							<footer>
								<a href="#banner" class="button circled scrolly">Touch!</a>
								 <br>
							</footer>
						</div>

<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#">Main</a>
										<ul>
												<li><a href="/" title="Homepage">Home</a></li>
												<li><a href="#" title="2">Page 2</a></li>
												<li><a href="#" target="" title="3">Page 3</a></li>
										</ul>
								</li>
								<li><a href="#">Others</a>
									<ul>
										<li><a href="#" target="" title="4">Page 4</a></li>
										<li><a href="#" target="" title="5">Page 5</a></li>
										<li><a href="#" target="" title="6">Page 6</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Help</a>
										<ul>
												<li><a href="/cookie-policy" title="View my cookie policy.">Cookies Policy</a></li>
												<li><a href="/privacy-policy" title="View my privacy policy.">Privacy Policy</a></li>
												<li><a href="/tac" title="View my terms and conditions.">Terms and Conditions</a></li>
										</ul>
								</li>
							</ul>
						</nav>
				</div>

			<!-- Main -->
				<div class="wrapper style2">
					<br>
					<article id="canvas" class="container special">
						<header>
<!-- Tinychat API Start -->
<?php 
					
if(isset($_POST['chosen'])) {
	$room = $_POST['room'];
	
	if(preg_match('/^[a-z0-9]/', $room)){
		$room=preg_replace('/[^a-zA-Z0-9]/', '',$room);
		if (strlen($room) < 3)
			$room = substr($room, 0, 0);
		if (strlen($room) > 36)
			$room = substr(0, 36);
		
		function userdata($data) {
			$curl = curl_init();
    		curl_setopt($curl, CURLOPT_URL, $data);
    		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_REFERER, "https://tinychat.com");
			$new = curl_exec($curl);
    		curl_close($curl);
			return $new;
		}
			$data=html_entity_decode(userdata('https://tinychat.com/api/v1.0/user/profile?username='.$room.''));
			$new = json_decode($data, true);
	}
} 
							?>
<br>
<form method="post">
<input type="text" tabindex="1" name="room" title="Just enter the name of the tinychat room and press spy." placeholder="Type in the Tinychat room name" id="roomname" list="roomdata" autofocus required/> 
<input type="hidden" name="chosen" value="true">
	<br>
<button type="submit" class="button2">View Details</button></form>
<?php 
#As this is old code some of it maybe showing that it's deprecated or will be in the next release(s) of PHP.
if (preg_match('/^[a-z0-9]/', $room))
{
	$room=preg_replace('/[^a-zA-Z0-9]/','',$room);
	{
	if(isset($_POST['chosen']))
	{
	if ($new["result"] == "nouser") {
		echo '<h2>Sorry, that profile does not exist!</h2>';
		echo '<h4>Page will refresh in 5 seconds.</h4>';
		echo("<meta http-equiv='refresh' content='5; url=/api/'>"); 
	}
		elseif
		($new["result"] == 'success'){
		echo '<br><img src="'.$new["avatarUrl"].'" class="chatimage"  title="'.$new["username"].'" alt="'.$new["username"].'"></img><br>';
		echo '<br><h4>Room Info & gifts</h4>';
			
		echo '<p><br>Username: ' .$new["username"].'';
		$url = '@(http)?(s)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@';  
		$new["biography"] = preg_replace($url, '<strong><a href="http$2://$4" target="_blank" title="$0">$0</a></strong>',$new["biography"]);
		if (!empty($new["biography"] ==""))
				 {
		echo '<br>Biography: Please use <a href="https://www.ruddernation.com">Ruddernation Designs</a> instead, Thank you.';
		}
			else
		echo '<br>Biography: ' .$new["biography"].'';
		if ($new["gender"] == "M")
					{
						echo str_replace("M", "", ""), '<br>' ,'Gender: Male';
					}
					elseif ($new["gender"] == "F")
					{
						echo str_replace("F", "", ""), '<br>' ,'Gender: Female';
					}
		echo '<br>Age: ' .$new["age"].'';
			
	if (!empty($new["location"] == ""))
			{
		echo '<br>' ,'Location: The World Wide Web.';
			}
		else
		echo '<br>Location: ' .$new["location"].'';
			if (!empty($new["role"] ==""))
				 {
		echo '<br>Membership: None';
		}
			else
		echo '<br>Membership: ' .$new["role"].'';
		echo '<br>Points: ' .$new["giftpoints"]." - ".'To Next Level: '.$new["percentToNextAchieve"].'%</p>';
		
} 
			
		echo '<br><a href="/chat" title="Takes you to the chat page." class="button">Join Chat</a>';

					}
				}
			}
		
?>
<!-- Tinychat API End -->
<!-- Footer -->
				<div id="footer">
				<!-- Contact -->
	<section class="contact">
			<h3>I'm Social</h3>
		<p>Just search *name*.</p>
			<ul class="icons">
<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
<li><a href="#" class="icon brands fa-stack-overflow"><span class="label">StackOverflow</span></a></li>
<li><a href="#" class="icon brands fa-wordpress"><span class="label">WordPress</span></a></li>
<li><a href="#" class="icon brands fa-bitbucket"><span class="label">BitBucket</span></a></li>
<li><a href="#" class="icon brands fa-stack-exchange"><span class="label">Stack Exchange</span></a></li>
</ul>
						</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>
											<a href="https://www.ruddernation.com" class="footer" title="Created and Designed by Ruddernation Designs">Ruddernation&trade; Designs 1998 - <span id="current_year"></span></a> | 
											<a href="/cookie-policy" class="footer" title="Cookie Policy">Cookie Policy</a> | 
											<a href="/privacy-policy" class="footer" title="Privacy Policy">Privacy Policy</a> | 
											<a href="/tac" class="footer" title="Terms and Conditions">Terms and Conditions</a></li>
										</ul>
									</div>

							</div>

		<i id="top-page" class="icon solid fa-arrow-up circled"></i>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script type="text/javascript">document.getElementById('current_year').innerHTML = new Date().getFullYear();
				document.getElementById('current_month').innerHTML = new Date().toLocaleString('default', { month: 'long' });</script>
			<script src="assets/js/stt.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>
