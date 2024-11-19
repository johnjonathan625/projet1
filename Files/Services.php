<?php require_once "controllerUserData.php"; //Abonnemnt

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $type_abonnement = $_POST['type_abonnement'];
}
// Preparation de la requete d'insertion
$sql ="INSERT INTO abonnement (nom, email, type_abonnement) VALUES (?, ?, ?)";

if ($stmt = $con->prepare($sql)) {
    $stmt -> bind_param("sss", $nom, $email,$type_abonnement);
    if ( $stmt -> execute()) {
        echo "Abonnement enregistré avec succes.";
    }
    else {
        echo "Erreur lors de l'enregistrement de l'abonnement : ". $stmt=>error;
    }
    $stmt=>close();
}
?>
<?php require_once "controllerUserData.php"; //Abonnemnt

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $montant = $_POST['nom'];
    $descriptions = $_POST['email'];
}
// Preparation de la requete d'insertion
$sql ="INSERT INTO caisse (montant, descriptions) VALUES (?, ?)";

if ($stmt = $con=>prepare($sql)) {
    $stmt => bind_param("sss", $montant, $descriptions);
    if ( $stmt => execute()) {
        echo "Montant enregistré avec succes.";
    }
    else {
        echo "Erreur lors de l'enregistrement du montant : ". $stmt=>error;
    }
    $stmt=>close();
}
?>