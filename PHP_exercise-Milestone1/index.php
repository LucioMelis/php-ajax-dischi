<?php
include('dischi.php');
// echo('<pre>');
// var_dump($arraydischi);
// echo('</pre>');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- link Css  -->
     <link rel="stylesheet" href="style.css">
    <title>Vue Dischi Php</title>
</head>

<body>
<div id="app">
    <!-- HEADER  -->
    <div class="container-header">
        <div class="content-img">
            <img class="img-header" src="img/spotify-logo-2.png" alt="logo-spotify" />
        </div>
    </div>
    <!-- MAIN -->
    <div class="container-main">
        <!-- Sezione Option -->
        <div class="select-disc">
        <h4>Seleziona il genere:</h4>
        <!-- Sezione Select Genere  -->
            <select name="disc-option">
                <option value="All">All</option>
                <option value="Pop">Pop</option>
                <option value="Metal">Metal</option>
                <option value="Rock">Rock</option>
                <option value="Jazz">Jazz</option>     
            </select>
        </div>
        <!-- Sezione Dischi  -->
        <div class="container-card">
            <?php
                foreach($arrayDischi as $dischi){
            ?>      
              
            <div class="content-card-disc">
                <img class="img-card" src="<?= $dischi['poster'] ?>" alt="<?= $dischi['author']?>">
                <h2><?= $dischi['title'] ?></h2>
                <p><?= $dischi['author'] ?></p>
                <p><?= $dischi['year'] ?></p>
            </div>
            <?php
                }
            ?>    
    </div>
</div>
</body>
</html>