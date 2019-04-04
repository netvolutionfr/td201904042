<?php
$serveur = "localhost";
$dbname = "td20190404";
$dbuser = "root";
$dbpassword = "root";

$connexion = new PDO("mysql:host=$serveur;dbname=$dbname",$dbuser,$dbpassword);

$requete = $connexion->query('SELECT * FROM contact ORDER BY nom');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau de contacts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Contacts</h1>
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($ligne = $requete->fetch()) {
        ?>
        <tr>
            <td><?php echo $ligne['nom']; ?></td>
            <td><?php echo $ligne['prenom']; ?></td>
            <td><?php echo $ligne['tel']; ?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
