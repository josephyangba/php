<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tableau.css">
    <title>Document</title>
</head>
<body>,
    <div class="big_banner">
        <h1>Visualisation de vos donnees</h1>
        <div class="second_banner">
            <div class="search">
                <form action="recherche.php" method="post">
                    <input type="text" placeholder="Recherchez..." name="search">
                    <button type="submit" name="validate">search</button>
                </form>
            </div>
            <div class="btn_container">
                <div class="return">
                    <a href="acceuil.html">Retour</a>
                </div>
                <div class="modif">
                    <a href="">modifier</a>
                </div>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th class="nom">Nom</th>
                    <th>Postnom</th>
                    <th>Prenom</th>
                    <th>Sexe</th>
                    <th>Adresse P</th>
                    <th>Adresse N</th>
                    <th>Profession</th>
                    <th>Telephone</th>
                </tr>
            </thead>
        </table>
        <?php
                    
            // require('carnet.txt');
            $files = file("carnet.txt");
            $result = explode("-", json_encode($files));
            $file = explode("|", json_encode($result));
            $space = explode(" ", json_encode($file));
            $tab = explode("\\", trim(json_encode($space)));
            // for ($i=0; $i < 9; $i++) { 
                ?>
            <tbody>
                <tr>
                    <td class="nom"><?php echo $space[0]; ?></td>
                    <td><?php echo $space[1] ?></td>
                    <td><?php echo $space[2] ?></td>
                    <td><?php echo $space[3] ?></td>
                    <td><?php echo $space[4] ?></td>
                    <td><?php echo $space[5] ?></td>
                    <td><?php echo $space[6] ?></td>
                    <td><?php echo $space[7] ?></td>
                </tr>
            </tbody>
            
            <?php
            // }
            ?>
            

            // var_dump(json_encode($files)[10]);
            // $file = explode("|", $files);
            // for ($i=0; $i < count($files); $i++) { 
            //     foreach ($files as $key) {
            //         echo $key;
            //     }
            // }
           <?php  
        ?>
    </div>
</body>
</html>