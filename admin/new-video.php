<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<title>Semantic ui Admin Layout - Sidebar + Navbar</title>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.css'>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="ui sidebar vertical left menu overlay visible" style="-webkit-transition-duration: 0.1s; overflow: visible !important;">
			<div class="item logo">
				<img src="https://image.flaticon.com/icons/svg/866/866218.svg" /><img src="https://image.flaticon.com/icons/svg/866/866218.svg" style="display: none" />
			</div>
			<div class="ui accordion">
				<a class="left float-left item">
					<i class="flag icon"></i>
					<b>Dashboard</b>
				</a>
				<div class="title item">
					<i class="dropdown icon"></i> Videos
				</div>
				<div class="content">
					<a class="active item" href="new-video.php">New</a>
				</div>
			</div>
			<div class="ui dropdown item displaynone">
				<!-- <z>Dashboard</z> -->
				<i class="flag icon"></i>
			</div>
			<div class="ui dropdown item displaynone">
				<!-- <z>Layout</z> -->
				<i class="video icon"></i>
				<div class="menu">
					<div class="header">
						Videos
					</div>
					<div class="ui divider"></div>
					<a class="item" href="new-video.php">New</a>
				</div>
			</div>
		</div>
		<div class="pusher">
			<div class="ui menu asd borderless" style="border-radius: 0!important; border: 0; margin-left: 260px; -webkit-transition-duration: 0.1s;">
				<a class="item openbtn">
					<i class="icon content"></i>
				</a>
				<a class="item">New</a>
				<!-- <div class="right menu">
					<div class="ui dropdown item">
						Language 
						<i class="dropdown icon"></i>
						<div class="menu">
							<a class="item">English</a>
							<a class="item">Russian</a>
							<a class="item">Spanish</a>
						</div>
					</div>
					<div class="item">
						<div class="ui primary button">Button</div>
					</div>
				</div> -->
            </div>
        </div>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.js'></script>
		<script  src="js/index.js"></script>
	</body>
</html>
