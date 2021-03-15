<?php

class  Pharmacie{

    private $code_pharmacie,$email,$location,$nompharmacie,$telephone;

    /**
     * Pharmacie constructor.
     * @param $code_pharmacie
     * @param $email
     * @param $location
     * @param $nompharmacie
     * @param $telephone
     */
    function Construct1($code_pharmacie, $email, $location, $nompharmacie, $telephone){
        $pharmacie = new Pharmacie();
        $pharmacie->setCodePharmacie($code_pharmacie);
        $pharmacie->setEmail($email);
        $pharmacie->setLocation($location);
        $pharmacie->setNompharmacie($nompharmacie);
        $pharmacie->setTelephone($telephone);
        return $pharmacie;
    }


    /**
     * @return mixed
     */
    public function getCodePharmacie()
    {
        return $this->code_pharmacie;
    }

    /**
     * @param mixed $code_pharmacie
     */
    public function setCodePharmacie($code_pharmacie)
    {
        $this->code_pharmacie = $code_pharmacie;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getNompharmacie()
    {
        return $this->nompharmacie;
    }

    /**
     * @param mixed $nompharmacie
     */
    public function setNompharmacie($nompharmacie)
    {
        $this->nompharmacie = $nompharmacie;
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


}
?>