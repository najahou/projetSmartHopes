<?php


class urgent
{
    private  $patient_id,  $description,$type_demande;

    /**
     * urgent constructor.
     * @param $patient_id
     * @param $description
     * @param $type_demande
     */
    public function construct0($patient_id, $description)
    {
        $urgent = new urgent();
        $urgent->setPatientId($patient_id);
        $urgent->setDescription($description);
        $urgent->setTypeDemande('urgent');

        return$urgent;
    }

    /**
     * @return mixed
     */
    public function getPatientId()
    {
        return $this->patient_id;
    }

    /**
     * @param mixed $patient_id
     */
    public function setPatientId($patient_id)
    {
        $this->patient_id = $patient_id;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getTypeDemande()
    {
        return $this->type_demande;
    }

    /**
     * @param mixed $type_demande
     */
    public function setTypeDemande($type_demande)
    {
        $this->type_demande = $type_demande;
    }

}
?>