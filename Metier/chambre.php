<?php
    class chambre{
        private $id_ch,$etage,$nb_lit,$num_chambre;
        public function construct0($id_ch,$etage,$nb_lit,$num_chambre)
        {
            $chambre = new chambre();
            $chambre->setIdCh($id_ch);
            $chambre->setEtage($etage);
            $chambre->setNbLit($nb_lit);
            $chambre->setNumChambre($num_chambre);
            return $chambre;
        }
        public function construct1($etage,$nb_lit,$num_chambre)
        {
            $chambre = new chambre();
            $chambre->setEtage($etage);
            $chambre->setNbLit($nb_lit);
            $chambre->setNumChambre($num_chambre);
            return $chambre;
        }
        /**
         * @return mixed
         */
        public function getIdCh()
        {
            return $this->id_ch;
        }

        /**
         * @param mixed $id_ch
         */
        public function setIdCh($id_ch)
        {
            $this->id_ch = $id_ch;
        }

        /**
         * @return mixed
         */
        public function getEtage()
        {
            return $this->etage;
        }

        /**
         * @param mixed $etage
         */
        public function setEtage($etage)
        {
            $this->etage = $etage;
        }

        /**
         * @return mixed
         */
        public function getNbLit()
        {
            return $this->nb_lit;
        }

        /**
         * @param mixed $nb_lit
         */
        public function setNbLit($nb_lit)
        {
            $this->nb_lit = $nb_lit;
        }

        /**
         * @return mixed
         */
        public function getNumChambre()
        {
            return $this->num_chambre;
        }

        /**
         * @param mixed $num_chambre
         */
        public function setNumChambre($num_chambre)
        {
            $this->num_chambre = $num_chambre;
        }


    }

?>
