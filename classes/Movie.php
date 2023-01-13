<?php

class Movie {
    private $titolo;
    private $genere;
    private $lingua;
    private $trama;

    public function setTitolo ($_titolo){
        $this->titolo = $_titolo;
    }
    public function getTitolo (){
        return $this->titolo;
    }


    public function setGenere ($_genere){
        $this->genere = $_genere;
    }
    public function getGenere(){
        return $this->genere;
    }


    public function setLingua ($_lingua){
        $this->lingua = $_lingua;
    }
    public function getLingua (){
        return $this->lingua;
    }


    public function setTrama ($_trama){
        $this->trama = $_trama;
    }
    public function getTrama (){
        return $this->trama;
    }

    function __construct($titolo,$genere,$lingua,$trama){

        $this->setTitolo($titolo);
        $this->setGenere($genere);
        $this->setLingua($lingua);
        $this->setTrama($trama);

    }
    

    

}
?>

