<?php
<<<<<<< HEAD
/* Smarty version 3.1.30, created on 2019-10-30 17:51:21
=======
/* Smarty version 3.1.30, created on 2019-10-30 18:19:36
>>>>>>> devmaster
  from "/Applications/XAMPP/xamppfiles/htdocs/mesprojets/Samane_workspace/samane1.9.0-Final/samanemvc/src/view/excel/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
<<<<<<< HEAD
  'unifunc' => 'content_5db9bf89cabcc2_57715446',
=======
  'unifunc' => 'content_5db9c628f170b6_25596016',
>>>>>>> devmaster
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '395311656c960be00e0be5aa2530a146dd9861d7' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/mesprojets/Samane_workspace/samane1.9.0-Final/samanemvc/src/view/excel/index.html',
      1 => 1571921216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5db9bf89cabcc2_57715446 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5db9c628f170b6_25596016 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> devmaster
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Excel generator</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>
	<body>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">Menu test page </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getID/1">Menu test get id page </a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Menu test list page </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Upload/index">upload file </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
PdfGenerator/generate">Samane Generate pdf file </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ExcelGenerator/generate">Samane Generate excel file </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
ExcelGenerator/read">Samane read excel file </a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Email/sendMail">Samane Mailing </a></li>
			</ul>
		</div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<?php if (isset($_smarty_tpl->tpl_vars['excelResult']->value)) {?>
						<div class="alert alert-warning">
							<?php echo $_smarty_tpl->tpl_vars['excelResult']->value;?>

							<br/>
							<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/folder/excel/samane.xlsx">Download file generated</a>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
