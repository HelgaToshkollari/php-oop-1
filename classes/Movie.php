<?php


class Movie {
    private $titolo;
    private $genere ;
    private $lingua;
    private $trama;
    private $actor_name;
    private $actor_surname;

    public function setTitolo ($_titolo){
        $this->titolo = $_titolo;
    }
    public function getTitolo (){
        return $this->titolo;
    }


    public function setGenere(array $_genere){
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


    public function setActorName ($_actor_name){
        $this->actor_name = $_actor_name;
    }
    public function getActorName (){
        return $this->actor_name;
    }

    
    public function setActorSurname ($_actor_surname){
        $this->actor_surname = $_actor_surname;
    }
    public function getActorSurname (){
        return $this->actor_surname ;
    }

    function __construct($titolo, array $genere ,$lingua,$trama,$actor_name,$actor_surname){

        $this->setTitolo($titolo);
        $this->setLingua($lingua);
        $this->setTrama($trama);
        $this->setActorName($actor_name);
        $this->setActorSurname($actor_surname);
        $this->setGenere($genere);
        
        


    }

    public function getActor(){
        return $this->actor_name . " " . $this->actor_surname;
    }
    

}
?>

