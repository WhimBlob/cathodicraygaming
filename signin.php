<?php include 'ressources/templates/header.php';
session_start();
//connexion à la bdd : 
define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', 'root'); //root pour MAC et LINUX
define('DATABASE', 'cathodic_ray_gamer');

$dsn = 'mysql:host=' . HOSTNAME . ';dbname=' . DATABASE;

try { //on essaie le code...
	$pdo = new PDO($dsn, USERNAME, PASSWORD);
} catch (PDOException $e) { //...en cas d'erreur on la capture
	die('<ul><li>Erreur sur le fichier : ' . $e->getFile() . '</li><li>Erreur à la ligne ' . $e->getLine() . '</li><li>Message d\'erreur : ' . $e->getMessage() . '</li></ul>');
}

if (isset($_SESSION['user'])) {
	header('location:profil.php?connect=forbidden');
	exit();
}

$content = "";

if (isset($_GET['access']) && $_GET['access'] == 'forbidden') {
	$content .= '<div style="background:tomato;padding:2%;">Pour accéder à la page profil, vous devez être connecté </div>';
}



if (isset($_POST['connexion'])) {

	extract($_POST);

	$email = $_POST['email'];
	$mdp = $_POST['mdp'];

	$reqEmail = $pdo->prepare("SELECT email FROM users WHERE email = '{$email}' ");
	$reqEmail->execute();
	$resultEmail = $reqEmail->fetch(PDO::FETCH_ASSOC);


	$reqMdp = $pdo->prepare("SELECT mdp FROM users WHERE mdp = '{$mdp}' AND email = '{$email}'");
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
			$_SESSION['user']['status'] = $status;

			header('location:profil.php');
			exit();
		} else {
			print("existe pas");
		}
	} else {
		print('Le nom d\'utilisateur ou le mot de passe ne sont pas valides');
	}
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
								<button name="deconnexion">deco</button>
								<?php
								//destruction de la session + redirection
								if (isset($_GET['session']) && $_GET['session'] == 'deconnexion') {
									session_destroy(); //on détruit
									exit();
								}
								?>

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