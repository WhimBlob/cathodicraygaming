<?php
try
{
	$pdo = new PDO('mysql:host=localhost;dbname=cathodic_ray_gamer;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(PDOException $e)
{
  die('<ul><li>Erreur sur le fichier : ' . $e->getFile() . '</li><li>Erreur à la ligne ' . $e->getLine() . '</li><li>Message derreur : ' . $e->getMessage() . '</li></ul>');
}

$content = "";

// On déclaire i pour les boucles produits
$i = 0;

// On sort toute la table produits
$queryProduct = $pdo->query("SELECT * FROM `produits`");

// Les trois derniers produits
$queryProduct3 = $pdo->query("SELECT * FROM `produits` ORDER BY id_produit DESC
LIMIT 3");

// Fonction pour afficher les stocks sur les trois produits
function Availability($nbproduct)
{
  if(($nbproduct) > 10) {
    $availability = 'En Stock';
  }
    else if($nbproduct > 0) {
      $availability = 'Il en reste ' . $nbproduct;
    }
    else {
      $availability = 'Non disponible';
    }
  return $availability;
}

// On déclare le prix total
$prixtotal = 0;

// Lancer l'achat
if(isset($_POST['acheter']) && $_POST['acheter'] == "Acheter") {
  while ($dataProduct = $queryProduct->fetch()) 
  {
    if (isset($_SESSION['panier' . $dataProduct['nom_produit']]) && $_SESSION['panier' . $dataProduct['nom_produit']] >0 ) 
    {
      // On diminue le stock en accord avec le nombre de produits achetés
      $achatPrep = $pdo->prepare("UPDATE produits SET stock = stock - :stock WHERE nom_produit = :nom_produit");
      $achatPrep->execute(array(
        'stock' => $_SESSION['panier' . $dataProduct['nom_produit']],
        'nom_produit' => $dataProduct['nom_produit']
      ));
    }
    $_SESSION['panier' . $dataProduct['nom_produit']] = 0;
  }
}

// Get the register form
if(isset($_POST['envoyer']) && $_POST['envoyer'] == "S'inscrire") {

  extract($_POST); //convertir les indices sous la forme de variable

  $mdpCrypt = password_hash($mdp, PASSWORD_DEFAULT);

  $queryInsert = "INSERT INTO
  users (id_user, prenom, nom, email, mdp, adresse, num_tel, rights) VALUES (:id_user, :prenom, :nom, :email, :mdp, :adresse, :num_tel, '0')";

  $reqPrep = $pdo->prepare($queryInsert);
  $reqPrep->execute(
    [
      'id_user' => NULL,
      'prenom' => $prenom,
      'nom' => $nom,
      'email' => $email,
      'mdp' => $mdpCrypt, //Puisque mot de passe crypté
      'adresse' => $adresse,
      'num_tel' => $num_tel,
    ]
  );
  exit();
}

// Check connection
// if(isset($_POST['email']) and isset($_POST['mdp']))
// {
//     $email = $_POST['email'];
//     $mdp = $_POST['mdp'];
//     $querylogin = "SELECT * FROM `users` WHERE email='$email' and mdp='$mdp'";
//     $resultlogin = mysql_query($querylogin) or die(mysql_error());
//     $count = mysql_num_rows($resultlogin);
//     if ($count == 1){
//         $_SESSION['email'] = $email;
//         header('Location: profil.php');
//     }
//     else
//     {
//         $msg = "Wrong credentials";
//     }
// }

// if(isset($_SESSION['email'])) {
// $firstname = $pdo->prepare('SELECT prenom FROM users WHERE email = ?');
// $firstname->execute(array($_SESSION['email']));

// $lastname = $pdo->prepare('SELECT nom FROM users WHERE email = ?');
// $lastname->execute(array($_SESSION['email']));
// }


// Pour maintenir les réponses lors du rechargement de la page
$content = "";
$champPrenom = $_POST['prenom'] ?? null;
$champNom = $_POST['nom'] ?? null;
$champEmail = $_POST['email'] ?? null;
$champMdp = $_POST['mdp'] ?? null;
$champAdresse = $_POST['adresse'] ?? null;
$champNumTel = $_POST['num_tel'] ?? null;

?>

