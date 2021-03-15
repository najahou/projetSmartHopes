<?php

class medicament{

private $id_medic, $reference, $nom_medicament, $effects, $contreIndication,$pharmacie_id,$quantite;


    /**
     * medicament constructor.
     * @param $id_medic
     * @param $reference
     * @param $nom_medicament
     * @param $effects
     * @param $contreIndication
     */
    public function construct0($id_medic, $reference, $nom_medicament, $effects, $contreIndication,$quantite,$pharmacie_id)
    {
        $medicament = new medicament();
        $medicament->setIdMedic($id_medic);
        $medicament->setReference($reference);
        $medicament->setNomMedicament($nom_medicament);
        $medicament->setEffects($effects);
        $medicament->setContreIndication($contreIndication);
        $medicament->setQuantite($quantite);
        $medicament->setPharmacieId($pharmacie_id);
        return $medicament;
    }
    public function construct1($reference, $nom_medicament, $effects, $contreIndication,$pharmacie_id)
    {
        $medicament = new medicament();
        $medicament->setReference($reference);
        $medicament->setNomMedicament($nom_medicament);
        $medicament->setEffects($effects);
        $medicament->setContreIndication($contreIndication);
        $medicament->setPharmacieId($pharmacie_id);
        return $medicament;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }


    /**
     * @return mixed
     */
    public function getIdMedic()
    {
        return $this->id_medic;
    }

    /**
     * @param mixed $id_medic
     */
    public function setIdMedic($id_medic)
    {
        $this->id_medic = $id_medic;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return mixed
     */
    public function getNomMedicament()
    {
        return $this->nom_medicament;
    }

    /**
     * @param mixed $nom_medicament
     */
    public function setNomMedicament($nom_medicament)
    {
        $this->nom_medicament = $nom_medicament;
    }

    /**
     * @return mixed
     */
    public function getEffects()
    {
        return $this->effects;
    }

    /**
     * @param mixed $effects
     */
    public function setEffects($effects)
    {
        $this->effects = $effects;
    }

    /**
     * @return mixed
     */
    public function getContreIndication()
    {
        return $this->contreIndication;
    }

    /**
     * @param mixed $contreIndication
     */
    public function setContreIndication($contreIndication)
    {
        $this->contreIndication = $contreIndication;
    }
    /**
     * @return mixed
     */
    public function getPharmacieId()
    {
        return $this->pharmacie_id;
    }

    /**
     * @param mixed $pharmacie_id
     */
    public function setPharmacieId($pharmacie_id)
    {
        $this->pharmacie_id = $pharmacie_id;
    }


}
?>