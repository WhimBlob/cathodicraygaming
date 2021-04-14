<?php include 'ressources/templates/header.php';

 
if (isset($_SESSION['user'])) {
	header('location:profil.php');
	exit();
}

if (isset($_POST['connexion'])) 
{
	extract($_POST);
	try {
    $queryFetch = $pdo->prepare("SELECT * FROM users WHERE email = '{$email}'");
    $queryFetch->execute();
    $user = $queryFetch->fetch();
  } catch(Exception) {
    $content = "Cette adresse email n'existe pas";
  }

	if (isset($user['email']) && (password_verify($mdp, $user['mdp'])))
	{
		
		$cmpMail = $user['email'];

		if ($cmpMail == $email) 
		{			
			$_SESSION['user']['email'] = $email;
			$_SESSION['user']['mdp'] = $mdp;
			header('location:profil.php');
			exit();
		}
		
	} else 
	{
		$content = "Cette adresse email n'existe pas";
	}
}

?>

<?php
//destruction de la session + redirection
if (isset($_GET['session']) && $_GET['session'] == 'deconnexion') {
	session_destroy(); //on détruit
	exit();
}
?>

<!-- container -->
<main class="container" id="inscription">
	<ul class="breadcrumb">
		<li><a href="index.html">Accueil</a></li>
		<li class="active">Se Connecter</li>
	</ul>

	<section class="col-xs-12 maincontent row">
		<header class="page-header">
			<h1 class="page-title">Se connecter</h1>
		</header>

		<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3 class="thin text-center">Connexion à l'espace personnel</h3>
					<p class="text-center text-muted"><a href="signup.php">S'inscrire</a> </p>
					<hr>
					<p class="text-danger"> <?= $content ?></p>
					<form action="" method="post">
						<div class="top-margin">
							<label>Username/Email <span class="text-danger">*</span></label>
							<input type="text" name="email" class="form-control">
						</div>
						<div class="top-margin">
							<label>Password <span class="text-danger">*</span></label>
							<input type="password" name="mdp" class="form-control">
						</div>
						<div class="top-margin">
							<button class="btn btn-action" type="submit" name="connexion">Sign in</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main> <!-- /container -->
<?php include 'ressources/templates/footer.php'; ?>