<?php
require_once "./classes/Movie.php";

$myMovie = new Movie("Nope","horror","eng","alieni invisibili , Ranch ","Steven","Yeun");
//$myMovie -> titolo = "mamma ho perso l'aereo";
//$myMovie->getActor();
//$myMovie->setTitolo("yes");
//$myMovie->setGenere("horror");
//$myMovie->setLingua("eng");
//$myMovie->setTrama("alieni invisibili , Ranch , Steven Yeun");
 var_dump($myMovie);

 echo $myMovie->getActor();

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
    
</body>
</html>