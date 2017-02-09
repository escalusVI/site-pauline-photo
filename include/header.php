<div>
<a href=""><img src="images/logoHeader.png" class="pull-right hidden-xs"></a>
</div>

<nav class="row">
	<ul class=" list-inline text-center col-md-12 hidden-xs menu">
		<li class="col-lg-0.5"><a href="index.php">ACCUEIL</a></li>
		<li class="col-lg-0.5"><a href="aPropos.php">A PROPOS</a></li>
		<li class="col-lg-0.5"><a href="mariage.php">MARIAGE</a></li>
		<li class="col-lg-0.5"><a href="portrait.php">PORTRAIT</a></li>
		<li class="col-lg-0.5"><a href="formation.php">FORMATION</a></li>
		<li class="col-lg-0.5"><a href="#">PAUSE PHOTO</a></li>
		<li class="col-lg-0.5"><a href="#">TRAVAIL D'AUTEUR</a></li>
		<li class="col-lg-0.5"><a href="#">LINETTE</a></li>
		<li class="col-lg-0.5"><a href="#">ACCES CLIENT</a></li>
		<li class="col-lg-0.5"><a href="#">CONTACT</a></li>
	</ul>
	
	

    <!-- Navigation -->
		<a id="menu-toggle" href="#" class="visible-xs btn btn-dark btn-lg toggle">
		<span class="glyphicon glyphicon-menu-hamburger"></span>
		</a>
		<nav id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
				<li class="sidebar-brand">
					<a href="index.php"  onclick = $("#menu-close").click(); >ACCUEIL</a>
				</li>
				<li>
					<a href="aPropos.php" onclick = $("#menu-close").click(); >A PROPOS</a>
				</li>
				<li>
					<a href="mariage.php" onclick = $("#menu-close").click(); >MARIAGE</a>
				</li>
				<li>
					<a href="portrait.php" onclick = $("#menu-close").click(); >PORTRAIT</a>
				</li>
				<li>
					<a href="formation.php" onclick = $("#menu-close").click(); >FORMATION</a>
				</li>
				<li>
					<a href="#contact" onclick = $("#menu-close").click(); >PAUSE PHOTO</a>
				</li>
				<li>
					<a href="#contact" onclick = $("#menu-close").click(); >TRAVAIL D'AUTEUR</a>
				</li>
				<li>
					<a href="#contact" onclick = $("#menu-close").click(); >LINETTE</a>
				</li>
				<li>
					<a href="#contact" onclick = $("#menu-close").click(); >ACCES CLIENT</a>
				</li>
				<li>
					<a href="#contact" onclick = $("#menu-close").click(); >CONTACT</a>
				</li>
			</ul>
		</nav>
		<script src="bootstrap/js/bootsrap.js"></script>
		<script src="bootstrap/js/jquery.js"></script>
		<script src="bootstrap/js/jquery-3.1.1.js"></script>
	<script>
		
	 // Closes the sidebar menu
		$("#menu-close").click(function(e) {
			e.preventDefault();
			$("#sidebar-wrapper").toggleClass("active");
		});

		// Opens the sidebar menu
		$("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#sidebar-wrapper").toggleClass("active");
		});

	</script>
	
</nav>


