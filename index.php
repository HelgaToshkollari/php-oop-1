<?php
require_once __DIR__ . "/classes/Movie.php";
require_once __DIR__ . "/db.php";


//$myMovie = new Movie("Nope",["horror","comedy"],"eng","alieni invisibili , Ranch ","Steven","Yeun");

//$myMovie -> titolo = "mamma ho perso l'aereo";
//$myMovie->getActor();
//$myMovie->setTitolo("yes");
//$myMovie->setGenere("horror");
//$myMovie->setLingua("eng");
//$myMovie->setTrama("alieni invisibili , Ranch , Steven Yeun");
//var_dump($myMovie);

//echo $myMovie->getActor();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 justify-content-center d-flex flex-wrap gap-3">

                    <?php foreach($movieList as $movie){ ?>
                        
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $movie->getTitolo() ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $movie->getGenere() ?></h6>
                                <p class="card-text"><?php echo $movie->getTrama() ?></p>
                                <p class="card-text"><?php echo $movie->getLingua() ?></p>
                                <p class="card-text"><?php echo $movie->getActor() ?></p>
                            </div>
                        </div>
                        
                    <?php } ?>
                        
                </div>
            </div>
        </div>
                        
    </main>
    
</body>
</html>