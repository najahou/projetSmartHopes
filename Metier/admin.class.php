<?php
 /*created by hamza */
  class  admin{

      private $id,$adresse,$cin,$prenom,$nom, $sexe,$telephone,$type,$password,$actif;
      function __construct()
      {

      }
      //Constructeur a 2 valeur pour l'ajour
      function getadmin1($nom,$prenom,$adresse,$cin,$sexe,$telephone,$password){
          $t = new admin();
          $t->setAdresse($adresse);
          $t ->setCin($cin);
          $t ->setPrenom($prenom);
          $t ->setNom($nom);
          $t->setSexe($sexe);
          $t ->setTelephone($telephone);
          $t ->setPassword($password);
          $t ->setType("Responsable");
          $t ->setActif(TRUE);
          return $t;
      }
     
    
      /**
       * @param mixed $id
       */
      public function seId($id)
      {
          $this->id = $id;
      }

      /**
       * @return mixed
       */
      public function getId()
      {
          return $this->id;
      }

      /**
       * @return mixed
       */
      public function getAdresse()
      {
          return $this->adresse;
      }

      /**
       * @param mixed $adresse
       */
      public function setAdresse($adresse)
      {
          $this->adresse = $adresse;
      }

      /**
       * @return mixed
       */
      public function getCin()
      {
          return $this->cin;
      }

      /**
       * @param mixed $cin
       */
      public function setCin($cin)
      {
          $this->cin = $cin;
      }
  
      /**
       * @return mixed
       */
      public function getPrenom()
      {
          return $this->prenom;
      }

  /**
       * @param mixed $prenom
       */
      public function setPrenom($prenom)
      {
          $this->prenom = $prenom;
      }

       /**
       * @param mixed $nom
       */
      public function setNom($nom)
      {
          $this->nom = $nom;
      }

        /**
       * @return mixed
       */
      public function getNom()
      {
          return $this->nom;
      }

         /**
       * @param mixed $sexe
       */
      public function setSexe($sexe)
      {
          $this->sexe= $sexe;
      }

        /**
       * @return mixed
       */
      public function getSexe()
      {
          return $this->sexe;
      }


         /**
       * @param mixed $telephone
       */
      public function setTelephone($telephone)
      {
          $this->telephone = $telephone;
      }

        /**
       * @return mixed
       */
      public function getTelephone()
      {
          return $this->telephone;
      }


             /**
       * @param mixed $password
       */
      public function setPassword($Password)
      {
          $this->password= $Password;
      }

        /**
       * @return mixed
       */
      public function getPassword()
      {
          return $this->password;
      }

               /**
       * @param mixed $type
       */
      public function setType($type)
      {
          $this->type= $type;
      }

        /**
       * @return mixed
       */
      public function getType()
      {
          return $this->type;
      
      }

        /**
       * @param mixed $actif
       */
      public function setActif($actif)
      {
          $this->actif= $actif;
      }

        /**
       * @return mixed
       */
      public function getActif()
      {
          return $this->actif;
      }


  }


?>