<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="msapplication-config" content="none"/>
		<meta name="description" content="Website Name" />
		<meta name="keywords" content="Ruddernation Designs, Tinychat video chat, Tinychat API, 
									   Tinychat room spy" />
		<meta name="author" content="Ruddernation Designs" />
		<meta name="Copyright" content="Ruddernation Designs"/>
		<title>Tinychat Video Chat</title>
		<link rel="shortcut icon" href="../assets/images/ico/favicon.ico">
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="homepage is-preload"  oncontextmenu="return false">
		<div id="page-wrapper">

<!-- Header -->
				<div id="header">

<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="/" id="logo">Tinychat Video Chat</a></h1>
								<hr />
								<p>Come and join this HTML5 video chat and make some new friends.</p>
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
			<section id="banner">
					<header>
						<h2>Here you can join or create a Tinychat room</h2>
					</header>
				</section>
			<!-- Main -->
				<div class="wrapper style2">
					<br>
					<article id="canvas" class="container special">
						<header>
							<p>
								<form method="post" class="form">
<input type="text" name="room" title="Enter the Tinychat, Room Name, If it does not exist then it will create the room for you." tabindex="1" placeholder="Enter the Tinychat room you would like to join." id="roomname" list="roomdata" autocomplete="on" required/>
<input type="hidden" name="submitted" value="true">
<br><input type="submit" class="button" tabindex="2" value="Enter"/> <a href="" data-text="rnd<?php echo GenerateHash(10); ?>" class="button">Random Room</a>
<!-- Tinychat Video Chat Start -->
<?php
#This is the code to access and display the information of the user,
#As this is old code some of it maybe showing that it's deprecated or will be in the next few releases of PHP.
$room = filter_input(INPUT_POST, 'room'); 
									if(preg_match('/^[a-z0-9]/', $room=strtolower($room)))
									{
										$room=preg_replace('/[^a-zA-Z0-9]/','',$room); 
										{
			$chatString = "";
#This will check the form if the request is 3 characters or less or if it has more than 36 characters and inform the user to correct it.
		if (strlen($room) < 3){
			echo '<div class="thumbnail"><h2>The Tinychat room needs to be more than 3 characters!</h2></div></div></div>'; 
			return;
}
											else
												if (strlen($room) > 36){ 
													echo '<div class="thumbnail"><h2>The Tinychat room needs to be less than 36 characters!</h2></div></div></div>'; 
													return;
												}
										}
									}
	
if(isset($_POST['submitted'])) {
		echo '<div id="content"><iframe src="https://tinychat.com/'.$room.'" name="room" frameborder="0" scrolling="no" height="100%" width="100%" allow="microphone; camera;  fullscreen;"></iframe></div>';
	}
			function GenerateHash($qtd){ 
					$characters = 'abcdefghijklmopqrstuvxwyz0123456789'; 
					$amountofcharacters = strlen($characters); 
					$amountofcharacters--; 
					$Hash=NULL; 
   			for($x=1;$x<=$qtd;$x++){ 
        				$Position = rand(0,$amountofcharacters); 
        				$Hash .= substr($characters,$Position,1); 
}
return $Hash;
			}
									?>
<!-- Tinychat Video Chat End -->
			<br><br>
			<h3>Are you having issues with your account not showing you're logged in?</h3><br>
			<p>For those of you having issues with being logged in on your account, then please read below.<br>
					I've tested this using Firefox, Edge and Chrome on Windows 10/11, MacOS versions (Monterey/Big Sur)  &amp; Linux versions (Ubuntu/Kali/Mint/Zorin) with it working on the browsers, There is an issue with Chrome on Windows 10, but that was about 12 months ago and has most probably been fixed now.<br>
					Install a cookie editor on your browser,<br>
					Open developer tools on your browser, then locate your cookie editor, search for tinychat.com and locate a cookie named "remember_random-number", then change the value for "Same Site" to "none" and remove the tick for "HttpOnly" and add a tick in "Secure", Check here for <a href="https://wordpress.org/plugins/tc-video-chat/#screenshots" title="Screenshots from my WordPress plugin" target="_blank">screenshots.</a><br>
					Once complete, open the <a href="https://www.ruddernation.com/chat" title="Tinychat Video Chat">chat</a> page and refresh, you should now be logged in with your account showing.</p>
							</article >
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
			<script src="../assets/js/jquery.min.js"></script>
			<script type="text/javascript">document.getElementById('current_year').innerHTML = new Date().getFullYear();
				document.getElementById('current_month').innerHTML = new Date().toLocaleString('default', { month: 'long' });</script>
			<script src="../assets/js/stt.js"></script>
			<script src="../assets/js/jquery.dropotron.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
	</body>
</html>
