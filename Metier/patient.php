<?php
class patient{
    private $id,$nom,$prenom,$cin,$dat_naissance,$sexe,$telephone,$adresse,$num_dossier,$ville,$id_securite,$photo,$chambre_id,$typepersonne;

    public function construct0($id,$nom,$prenom,$cin,$dat_naissance,$sexe,$telephone,$adresse,$num_dossier,$ville,$id_securite,$photo,$chambre_id)
    {
        $patient = new patient();
        $patient->setId($id);
        $patient->setNom($nom);
        $patient->setPrenom($prenom);
        $patient->setCin($cin);
        $patient->setDatNaissance($dat_naissance);
        $patient->setSexe($sexe);
        $patient->setTelephone($telephone);
        $patient->setAdresse($adresse);
        $patient->setNumDossier($num_dossier);
        $patient->setVille($ville);
        $patient->setIdSecurite($id_securite);
        $patient->setPhoto($photo);
        $patient->setChambreId($chambre_id);


        return $patient;
    }
    public function construct1($nom,$prenom,$cin,$dat_naissance,$sexe,$telephone,$adresse,$num_dossier,$ville,$id_securite,$photo,$chambre_id)
    {
        $patient = new patient();

        $patient->setNom($nom);
        $patient->setPrenom($prenom);
        $patient->setCin($cin);
        $patient->setDatNaissance($dat_naissance);
        $patient->setSexe($sexe);
        $patient->setTelephone($telephone);
        $patient->setAdresse($adresse);
        $patient->setNumDossier($num_dossier);
        $patient->setVille($ville);
        $patient->setIdSecurite($id_securite);
        $patient->setPhoto($photo);
        $patient->setChambreId($chambre_id);
        $patient->setTypepersonne('patient');
        return $patient;
    }

    /**
     * @return mixed
     */
    public function getTypepersonne()
    {
        return $this->typepersonne;
    }

    /**
     * @param mixed $typepersonne
     */
    public function setTypepersonne($typepersonne)
    {
        $this->typepersonne = $typepersonne;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
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
    public function getDatNaissance()
    {
        return $this->dat_naissance;
    }

    /**
     * @param mixed $dat_naissance
     */
    public function setDatNaissance($dat_naissance)
    {
        $this->dat_naissance = $dat_naissance;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
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
    public function getNumDossier()
    {
        return $this->num_dossier;
    }

    /**
     * @param mixed $num_dossier
     */
    public function setNumDossier($num_dossier)
    {
        $this->num_dossier = $num_dossier;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getIdSecurite()
    {
        return $this->id_securite;
    }

    /**
     * @param mixed $id_securite
     */
    public function setIdSecurite($id_securite)
    {
        $this->id_securite = $id_securite;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getChambreId()
    {
        return $this->chambre_id;
    }

    /**
     * @param mixed $chambre_id
     */
    public function setChambreId($chambre_id)
    {
        $this->chambre_id = $chambre_id;
    }



}

?>