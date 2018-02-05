<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>page d'accueil</title>
	<!-- l'appel de base_url() vous permet de recupérer le chemin de votre site web  -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css"/>
</head>
<body>
    <div class="nav navbar navbar-default navbar-fixed-top">
        <ul class="nav navbar-nav">
			<!-- l'appel de base_url() vous permet de recupérer le chemin de votre site web  -->
            <li><a href="<?php echo base_url(); ?>Test/index">Menu page test</a></li>
            <li><a href="<?php echo base_url(); ?>Test/getID/1">Menu page test 2</a></li>
        </ul>
    </div>
	<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
		<div class="panel panel-info">
			<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
			<div class="panel-body">
				MODELE DEVELOPPE PAR Ngor SECK !
			</div>
		</div>
	</div>
</body>
</html>