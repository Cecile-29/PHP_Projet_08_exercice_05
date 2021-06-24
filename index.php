<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet08 Exercice05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-11 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet08 Exercice05</h1>
            <h2 class="col-12 text-info text-center">Afficher le timestamp courant et afficher le timestamp du 1er février 2021.</h2>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php 
                echo 'le timestamp actuel est :  '. time() .'  ';
            ?>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php 
                $timeStampPremierFevrier2021 = mktime(0,0,0,1,2,2021);
                echo 'le timestamp du 1er février 2021 récupérer avec la fonction mktime() est :  ' .$timeStampPremierFevrier2021; 
            ?>
        </div>
                <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php  
                $timeStampPremierFevrier2021 = strtotime('2021/01/02');   
                echo ' le timestamp du 1er février 2021 est bien identique avec la fonction strtotime() :  ' .$timeStampPremierFevrier2021;
            ?>
        </div>
    </div>
</body>
</html>