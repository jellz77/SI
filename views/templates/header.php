<html>
<head>
	<link href="assets/css/style.css" type="text/css" rel="stylesheet"  />
	<link href="/assets/bootstrap_css/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
	<link rel="icon" href="/assets/bootstrap_css/favicon.ico">
</head>

<body>
	<div class="container">		
		<div id="navbar" class="navbar-collapse collapse navbar-inverse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="?controller=matterentry&action=view<?php cmurl();?>">Matter Entry</a>            </li>
				<li><a href="?controller=mp&action=view&clnt=<?php cmurl();?>">Matter Profile</a></li>
				<li><a href="?controller=address&action=view<?php cmurl();?>">Address Info</a></li>
				<li><a href="?controller=parties&action=view<?php cmurl();?>">Parties/Conflicts</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">e-Matter Data</a></li>
						<li><a href="#">Table Maintenance</a></li>
						<li><a href="#">Bulk Recon Note Upload</a></li>						
						<li><a href="#">Client Services</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Budgeting<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Budget vs Actuals</a></li>
						<li><a href="#">Budget Admin</a></li>
						<li><a href="#">Budget Summary</a></li>
					</ul>
				</li>
			</ul>
		</div>	
	<!--nav>
		<ul>
			<li>
				<a href="?controller=matterentry&action=view<?php cmurl();?>">Matter Entry</a>            
			</li>
			<li>
				<a href="?controller=mp&action=view&clnt=<?php cmurl();?>">Matter Profile</a>
			</li>
			<li>
				<a href="?controller=address&action=view<?php cmurl();?>">Address Info</a>
			</li>
			<li>
				<a href="?controller=parties&action=view<?php cmurl();?>">Parties/Conflicts</a>
			</li>
			<li>
				<a href="#">Admin</a>
				<ul>
					<li><a href="#">e-Matter Data</a></li>
					<li><a href="#">Table Maintenance</a></li>
					<li><a href="#">Bulk Recon Note Upload</a></li>
					<li><a href="#">Client Services</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Budgeting</a>
				<ul>
					<li><a href="#">Budget vs Actuals</a></li>
					<li><a href="#">Budget Admin</a></li>
					<li><a href="#">Budget Summary</a></li>
				</ul>
			</li>        
		</ul>
	</nav-->



	



