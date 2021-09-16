<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"><!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/custom.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<title><?php echo($title); ?></title>
</head>
<body>

<header>
	<nav>
		<div class="nav-wrapper indigo">
			<div class="row">
				<div class="col s12">
					<a href="#" data-target="sidenav-1" class="left sidenav-trigger hide-on-medium-and-up"><i class="material-icons">menu</i></a>
					<a href="#" class="brand-logo"><?php echo($name); ?></a>
				</div>
			</div>
		</div>
	</nav>
</header>

<ul id="sidenav-1" class="sidenav sidenav-fixed indigo lighten-2">
	<li><a class="subheader">Always out except on mobile</a></li>
	<li><a href="#">Github</a></li>
	<li><a href="#">Twitter</a></li>
	<li><a href="#">Docs</a></li>
</ul>
