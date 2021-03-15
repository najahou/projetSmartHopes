<?php


class  rappel{

      private $id,$heur,$medicament_id, $patient_id, $nb_fois;
      function __construct()
      {

      }
      //Constructeur a 2 valeur pour l'ajour
      function getrappel1($heur,$nb_fois,$medicament_id, $patient_id){
          $t = new rappel();
          $t->setHeur($heur);
          $t ->setMedicamentId($medicament_id);
          $t ->setPatientId($patient_id);
          $t ->setNbFois($nb_fois);
          return $t;
      }

 
 /**
       * @param mixed $id
       */


	public function getNbFois() {
		return $this->nb_fois;
	}

      /**
       * @param mixed $nb_fois
       */
	public function setNbFois($nb_fois) {
		$this->nb_fois=$nb_fois;
	}

	public function getHeur() {
		return $this->heur;
	}

    /**
       * @param mixed $heur
       */

	public function setHeur($heur) {
		$this->heur = $heur;
	}

	public function getPatientId() {
		return $this->patient_id;
	}

    /**
       * @param mixed $patient_id
       */
	public function setPatientId($patient_id) {
		$this->patient_id = $patient_id;
	}

	public function getMedicamentId() {
		return $this->medicament_id;
	}
 /**
       * @param mixed $medicament_id
       */
	public function setMedicamentId($medicament_id) {
		$this->medicament_id = $medicament_id;
	}

    }
?>