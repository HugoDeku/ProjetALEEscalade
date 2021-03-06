<?php

require_once("../Model/Utilisateur.class.php");
require_once("../Model/DAO.class.php");
  class Evenement{      //Base De Données
    private $id;        //Id
    private $nom;       //Nom

    private $img; //Je crois on avais dis qu'il fallait une image d'illustation
    private $dateCreation; //Je pense que c'est important la date de création
   //A ajouter dans la BD

    private $dateDebut; //DateDebut
    private $dateFin;   //DateFin

    private $description;//Je crois qu'il faut une aussi description
    //A ajouter dans la BD
    private $officiel;  //Officiel
    private $numCrea;   //NumCrea
    private $nomLieu;   //NomLieu


    function __construct($id, $nom, $img, $dateCreation, $dateDebut, $dateFin, $description, $officiel, $numCrea, $nomLieu){
      $this->id=$id;
      $this->nom = $nom;

      //SI vous le garder
      $this->img = $img;
      $this->dateCreation = $dateCreation;

      $this->dateDebut = $dateDebut;
      $this->dateFin = $dateFin;

      $this->description = $description;//Je crois qu'il faut une aussi description

      $this->numCrea = $numCrea;
      $this->nomLieu = $nomLieu;
      $this->officiel = $officiel;

      assert(isset($this->id));
      assert(isset($this->nom));

      assert(isset($this->img));
      assert(isset($this->dateCreation));

      assert(isset($this->dateDebut));
      assert(isset($this->dateFin));
      assert(isset($this->numCrea));

      assert(isset($this->description));

      assert(isset($this->nomLieu));
      assert(isset($this->officiel));
    }

    function getId(){
      return $this->id;
    }

  function getNom(){
    return $this->nom;
  }

  function getImage(){
    return $this->img;
  }

  function getDateCreation(){
    return $this->dateCreation;
  }

  function getDateDebut(){
    return $this->dateDebut;
  }

  function getDateFin(){
    return $this->dateFin;
  }

  function getDuree(){
    $date1 = date('d/m/Y',strtotime($this->dateFin));
    $date2 = date('d/m/Y',strtotime($this->dateDebut));
    $interval = date_diff($date1,$date2);
    $nbJour = abs($date1 - $date2);
    return $nbJour+1;
  }

  function getNumCrea(){
    return $this->numCrea;
  }

  function getDescription(){
    return $this->description;
  }

  function getNomLieu(){
    return $this->nomLieu;
  }

  function getOfficiel(){
    return $this->officiel;
  }

  function setOfficiel($officiel){
    $this->officiel = $officiel;
  }

}
 ?>
