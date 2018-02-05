<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap-cerulean.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css"/>
</head>
<body>
<div class="nav navbar navbar-inverse navbar-fixed-top">
    <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url(); ?>">Accueil</a></li>
        <li><a href="<?php echo base_url(); ?>Test/addTest">AJout de test</a></li>
    </ul>
</div>
<?php
if(isset($ok)){
    if($ok == 1){
        echo '<div class="alert alert-succes col-md-6 col-md-offset-3">Donnees ajoutees</div>';
    }
}
?>
<div class="container col-md-6 spacer">
    <div class="panel panel-primary">
        <div class="panel-heading">Formulaire d'ajout des Regions</div>
        <div class="panel-body">
            <form method="post" action="<?php echo base_url(); ?>Test/addTest">
                <div class="form-group">
                    <label class="control-label">Valeur du test</label>
                    <input class="form-control" type="text" name="valeur1" id="valeur1"/>
                </div>
				<div class="form-group">
                    <label class="control-label">Valeur2 du test</label>
                    <input class="form-control" type="text" name="valeur2" id="valeur2"/>
                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="valider" value="ENvoyer"/>
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>