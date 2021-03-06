		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
    				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
      					<button type="button" class="navbar-toggle" data-toggle="collapse"
      				        	data-target="#bs-example-navbar-collapse-1">
     				   		<span class="sr-only">Toggle navigation</span>
       	 					<span class="icon-bar"></span>
       	 					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
      					</button>
      					<a class="navbar-brand" href="accueil.php">Accueil</a>
    				</div>
    
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
				
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown">Graphique <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="graphique.php#edition">Édition</a></li>
							</ul>
						</li>
					
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown">Alertes et événements <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="alertes_et_evenements.php#historique">Historique</a></li>
								<li><a href="alertes_et_evenements.php#edition">Édition</a></li>
								<li><a href="alertes_et_evenements.php#test_messagerie">Test de la messagerie</a></li>
							</ul>
						</li>
					
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown">Capteurs <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="capteurs.php#liste">Liste</a></li>
								<li><a href="capteurs.php#edition">Édition</a></li>
							</ul>
						</li>
					
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown">Sessions <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="sessions.php#historique_connexions">Historique des connexions</a></li>
								<li><a href="sessions.php#liste_comptes_utilisateurs">Liste des comptes utilisateurs</a></li>
								<li><a href="sessions.php#edition_comptes_utilisateurs">Édition des comptes utilisateurs</a></li>
							</ul>
						</li>
					
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown">Système <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="systeme.php#identification_systeme">Identification système</a></li>
								<li><a href="systeme.php#parametres_reseaux">Paramètres réseaux</a></li>
								<li><a href="systeme.php#dates_et_heures">Date et heure</a></li>
								<li><a href="systeme.php#liste_services_distants">Liste des services distants</a></li>
								<li><a href="systeme.php#edition_services_distants">Édition des services distants</a></li>
								<li><a href="systeme.php#liberation_espace_disque">Libération d'espace disque</a></li>
							</ul>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li><a href="deconnexion.php">[<?php echo $_SESSION["username"]; ?>] Déconnexion</a></li>
      					</ul>

				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
