

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

// On organise la session user
if (isset($_SESSION['user'])) {

$queryFetch = $pdo->prepare("SELECT * FROM users WHERE email = '{$_SESSION['user']['email']}'");
$queryFetch->execute();
$user = $queryFetch->fetch();
}

// On déclare i pour les boucles produits
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
    // On interagit avec tous les articles qui sont dans le panier
    if (isset($_SESSION['panier' . $dataProduct['nom_produit']]) && $_SESSION['panier' . $dataProduct['nom_produit']] >0 ) 
    {
      // On diminue le stock en accord avec le nombre de produits achetés
      $achatPrep = $pdo->prepare("UPDATE produits SET stock = stock - :stock WHERE nom_produit = :nom_produit");
      $achatPrep->execute(array(
        'stock' => $_SESSION['panier' . $dataProduct['nom_produit']],
        'nom_produit' => $dataProduct['nom_produit']
      ));
      
      // On crée un achat
      $queryInsert = "INSERT INTO
      achats (id_achat, id_produit, nb_produit, id_user, date_achat) 
      VALUES (:id_achat, :id_produit, :nb_produit, :id_user, :date_achat)";

      if (!isset($_SESSION['user']['id_user'])) {
        $_SESSION['user']['id_user'] = 0;
      }

      $today = date("Y-m-d");
      $ajoutPrep = $pdo->prepare($queryInsert);
      $ajoutPrep->execute(
        [
          'id_achat' => NULL,
          'id_produit' => $dataProduct['id_produit'],
          'nb_produit' => $_SESSION['panier' . $dataProduct['nom_produit']],
          'id_user' => $user['id_user'],
          'date_achat' => $today,
        ]
      );
    }
    $_SESSION['panier' . $dataProduct['nom_produit']] = 0;
  }
}

<<<<<<< HEAD
// Récupérer les achats
if (isset($_SESSION['user']['email'])) {
$queryAchat = $pdo->query("SELECT * FROM users u
INNER JOIN achats a ON u.id_user = a.id_user
INNER JOIN produits p ON p.id_produit = a.id_produit
WHERE email = '{$_SESSION['user']['email']}'");
}

=======
>>>>>>> cb48d33f4d951ec52081ae4e53f671d7e2d428e5
// Get the register form
if(isset($_POST['envoyer']) && $_POST['envoyer'] == "S'inscrire") {

  extract($_POST); //convertir les indices sous la forme de variable
<<<<<<< HEAD
  if (preg_match('/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email)) {
    if (iconv_strlen($mdp) < 8 || iconv_strlen($mdp) >20) {
      if (preg_match('/[_a-z0-9-\s])$/', $adresse)) {
        if (preg_match("/^([a-zA-Z' ]+)$/", $nom)) {
          if (preg_match("/^([a-zA-Z-\-' ]+)$/", $prenom)) {
            if (preg_match("/^([0-9' ]+)$/", $num_tel) && iconv_strlen($num_tel = 10 )){
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
            else {$errorForm = 'Veuillez entrer un numéro de téléphone correct';}
          }
          else {$errorForm = 'Veuillez entrer un vrai prenom';}
        }
        else {$errorForm = 'Veuillez entrer un vrai nom';}
      }
      else {$errorForm = 'Veuillez entrer une vraie adresse';}
    }
    else {$errorForm = 'Veuillez entrer un mot de passe d\'une longueur comprise entre 8 et 20 caractères';}
  }
  else {$errorForm =  'Veuillez entrer une adresse e-mail correcte';}
=======

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
  $_SESSION['user']['email'] = $email;
  $_SESSION['user']['mdp'] = $mdp;
  header('location:profil.php?');
  exit();
>>>>>>> cb48d33f4d951ec52081ae4e53f671d7e2d428e5
}

// Pour maintenir les réponses lors du rechargement de la page
$content = "";
$champPrenom = $_POST['prenom'] ?? null;
$champNom = $_POST['nom'] ?? null;
$champEmail = $_POST['email'] ?? null;
$champMdp = $_POST['mdp'] ?? null;
$champAdresse = $_POST['adresse'] ?? null;
$champNumTel = $_POST['num_tel'] ?? null;

?>

