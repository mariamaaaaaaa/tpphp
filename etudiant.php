
<?php
Class etudiant{
     
    protected $name;
    protected $lastname;
    protected $classe;
    protected $numero;
    protected $email;
    protected $adresse;
    protected $moyenne;
    protected $age;
    protected $sexe;
    protected $identifiant;
    

    //pour créer un constructeur
    public function __construct ($row){
        
        if ($row!= null){
            $this ->name = $row["name"];
            $this -> lastname= $row["lastname"];
            $this -> classe= $row["classe"]; //this permet de pointer
            $this -> numero= $row["numero"];
            $this -> email= $row["email"];
            $this -> adresse = $row["adresse"];
            $this -> moyenne = $row["moyenne"];
            $this -> age = $row["age"];
            $this -> sexe = $row["sexe"];
            $this -> identifiant = $row["identifiant"];
        }
    }

    public function getname(){
        return $this -> name;
    }
    public function getlastname(){
        return $this -> lastname;
    }
    public function getclasse(){
        return $this -> classe;
    }
    public function getnumero(){
        return $this -> numero;
    }
    public function getemail(){
        return $this -> email;
    }
    public function getadresse(){
        return $this -> adresse;
    }
    public function getmoyenne(){
        return $this -> moyenne;
    }
    public function getage(){
        return $this -> age;
    }
    public function getsexe(){
        return $this -> sexe;
    }
    public function getidentifiant(){
        return $this -> identifiant;
    }
    

     

    
}

//NOTES
//les getters accèdent a une variable , les setters les modifies
//CONSTRUCTEURS permet de creer la classe ou l'objet et d'initialiser les données des attributs de l'objet
 //$row=["name" => "diouf",
                //"lastname" => "maya" ];

 



 
 