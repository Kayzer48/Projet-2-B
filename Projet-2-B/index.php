<?php
//on inclut le fichier connect.php qui nous permet de nous connecter à la base de données
require_once('connect.php');
$sql='SELECT*FROM `etudiants`';

//on prépare la requête
$query=$db->prepare($sql);

//on exécute la requête
$query->execute();

//on stocke le résultat dans un tableau associatif
$result=$query->fetchALL(PDO::FETCH_ASSOC);
//var_dump($result);
require_once('close.php');
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Liste des étudiants</title>
    <meta name="description" content="This is an example of a meta description.">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="theme.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <section class="col-12">
                <table class="table"> 
                     <h1>Liste des étudiants</h1>
                        <thead> 
                            <th>id</th>
                            <th>nom</th>
                            <th>prénom</th>
                            <th>sexe</th>
                            <th>email</th>
                            <th>département</th>
                            <th>date de naissance</th>
                            <th>date du jour</th>
                            <th>age</th>
                            <th>id matières</th>    
                        </thead>
                        <tbody>
                            <?php   
                            //On boucle sur la variable result et on stocke le résultat dans test pour chaque ligne de tableau et on affiche le résultat
                            foreach($result as $test){
                            ?>
                                <tr>
                                    <td><?= $test['id'] ?> </td>
                                    <td><?= $test['nom'] ?></td>
                                    <td><?= $test['prenom'] ?></td>
                                    <td><?= $test['sexe'] ?></td>
                                    <td><?= $test['email'] ?></td>
                                    <td><?= $test['departement'] ?> </td>
                                    <td><?= $test['date_naissance'] ?></td>
                                    <td><?= $test['date_jour'] ?></td>
                                    <td><?= $test['age'] ?></td>
                                    <td><?= $test['id_matieres'] ?></td>
                                </tr>    
                            <?php 
                              }    
                            ?>                                                     
                         </tbody>
                 </table> 
            </section>
        </div>
    </div>
  </body>
</html>