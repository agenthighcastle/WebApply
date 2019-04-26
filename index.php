 <!---
   Created by Tutorialwork
   https://YouTube.com/Tutorialwork
   © <?php echo date("Y"); ?> - WebApply
 --->
 <?php
if(!file_exists("mysql.php")){
  header("Location: setup/index.php");
  exit;
}
require("datamanager.php");
require('assets/languages/lang_'.getSetting("lang").'.php');
 ?>
<?php require ("core/_header.php");?>
  <body>
  <a href="login.php" class="loginicon"><i class="fas fa-sign-in-alt"></i></a>
  <section id="intro">
	<div class="content">
	  <div class="container">
		<h1><?php echo INDEX_HEADLINE; ?></h1>
		<p><?php echo INDEX_DESC; ?>
	  </div>
	</div>
  </section>
  <section id="primary">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			<p><a href="apply.php?type=supporter" class="btn btn-green">Supporter</a></p>
			</div>
			<div class="col-md-4">
			<p><a href="apply.php?type=developer" class="btn btn-blue">Developer</a></p>
			</div>
			<div class="col-md-4">
			<p><a href="apply.php?type=builder" class="btn btn-orange">Builder</a></p>
			</div>
		</div>
	</div>
  </section>
  </body>
</html>
