<?php include 'ressources/templates/header.php';


if (isset($_SESSION['user'])) {
	header('location:profil.php');
	exit();
}

if (isset($_POST['connexion'])) {

	extract($_POST);

	$email = $_POST['email'];
	$mdp = $_POST['mdp'];

	$reqEmail = $pdo->prepare("SELECT email FROM users WHERE email = '{$email}' ");
	$reqEmail->execute();
	$resultEmail = $reqEmail->fetch(PDO::FETCH_ASSOC);


	$reqMdp = $pdo->prepare("SELECT mdp FROM users WHERE mdp = '{$mdp}' AND email = '{$email}' ");
	$reqMdp->execute();
	$resultMdp = $reqMdp->fetch(PDO::FETCH_ASSOC);


	$reqAdmin = $pdo->prepare("SELECT rights FROM users WHERE email = '{$email}' ");
	$reqAdmin->execute();
	$resultAdmin = $reqAdmin->fetch(PDO::FETCH_ASSOC);

	//Si retour = 0 alors email pas dans la liste
	if ((($countemail = $reqEmail->rowCount()) != 0) && (($countMdp = $reqMdp->rowCount()) != 0)) {

		$cmpMail = $resultEmail['email'];

		if ($cmpMail == $email) {
			$_SESSION['user']['prenom'] = $prenom;
			$_SESSION['user']['email'] = $email;
			$_SESSION['user']['mdp'] = $mdp;
			$_SESSION['user']['status'] = $resultAdmin;

			header('location:profil.php');
			exit();
		} else {
			$content = "Cette adresse email n'existe pas";
		}
	} else {
		$content = 'L\'adresse mail ou le mot de passe ne sont pas valides';
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
					<h3 class="thin text-center">Sign in to your account</h3>
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

						<hr>

						<div class="row">
							<div class="col-lg-8">
								<b><a href="">Forgot password?</a></b>
							</div>
							<div class="col-lg-4 text-right">
								<button class="btn btn-action" type="submit" name="connexion">Sign in</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main> <!-- /container -->
<?php include 'ressources/templates/footer.php'; ?>