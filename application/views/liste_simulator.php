<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="liste.css">
    <title>Document</title>
</head>
<body>
   
<div class="table-container">
    <table>
        <tr>
            <th>Nom</th>
            <th>Montant du prêt</th>
            <th>Taux effectif global</th>
            <th>Durée d'amortissement</th>
            <th>Date de début de l'emprunt</th>
            <th>Mensualite a payer</th>
            <th>Cout de credit</th>
            <th>Cout total du pret</th>
        </tr>
        
        <?php for(){?> 
            <tr>
                <td><a href='tableau_amortissement.php?id=<?php echo  ?>'><?php echo  ?></a></td>
                <td><?php echo  ?></td>
                <td><?php echo  ?></td>
                <td><?php echo  ?></td>
                <td><?php echo  ?></td>
                <td><?php echo  ?></td>
                <td><?php echo  ?></td>
                <td><?php echo  ?></td>
            </tr>    
            <?php }  ?>   
    </table>
</div>


</body>
</html>