<?php

class besoin
{
    private $capture, $msg_vocale,$type_demande,$patientid;

    /**
     * @return mixed
     */
    public function getPatientid()
    {
        return $this->patientid;
    }

    /**
     * @param mixed $patientid
     */
    public function setPatientid($patientid)
    {
        $this->patientid = $patientid;
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

    /**
     * besoin constructor.
     * @param $capture
     * @param $msg_vocale
     */
    public function construct0($capture, $msg_vocale,$patientid)
    {
        $besoin=new besoin();
        $besoin->setCapture($capture);
        $besoin->setMsgVocale($msg_vocale);
        $besoin->setPatientid($patientid);

        return $besoin;
    }

    /**
     * @return mixed
     */
    public function getCapture()
    {
        return $this->capture;
    }

    /**
     * @param mixed $capture
     */
    public function setCapture($capture)
    {
        $this->capture = $capture;
    }

    /**
     * @return mixed
     */
    public function getMsgVocale()
    {
        return $this->msg_vocale;
    }

    /**
     * @param mixed $msg_vocale
     */
    public function setMsgVocale($msg_vocale)
    {
        $this->msg_vocale = $msg_vocale;
    }







}
?>

