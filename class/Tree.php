<?php

    class Arbre
    {

        /*
        * @var string
        */
        protected string $espece;

        protected int $recolteFruit;

        protected string $numero;
        protected  int $maxFruit = 100;
        protected  int $minFruit = 90;

        protected static $registry = array();

        public function __construct($numero, $espece, $recolteFruit)
        {
            $this->numero = $numero;
            $this->checkVars();
            $this->espece = $espece;
            $this->setRecolteFruit($recolteFruit, $this->maxFruit, $this->minFruit);
            self::$registry[] = $this->numero;
        }

        public function setEspece($espece)
        {
            $this->espece = $espece;
        }

        public function setMaxFruit($maxFruit)
        {
            $this->maxFruit = $maxFruit;
        }

        public function setMinFruit($minFruit)
        {
            $this->minFruit = $minFruit;
        }

        public function setRecolteFruit($recolteFruit, $maxFruit,$minFruit )
        {   
            if (($recolteFruit > $maxFruit) || ($recolteFruit < $minFruit)) {
                throw new Exception('La récolte de fruit doit être comprise entre ' . $minFruit . ' et ' . $maxFruit);
            }else{
                $this->recolteFruit = $recolteFruit;
            }
        }
        public function getEspece()
        {
            return $this->espece;
        }

        public function getMaxFruit()
        {
            return $this->maxFruit;
        }

        public function getMinFruit()
        {
            return $this->minFruit;
        }

        public function getRecolteFruit()
        {
            return $this->recolteFruit;
        }

        public function getNumero()
        {
            return $this->numero;
        }

        public function checkVars()
        {
            if (empty($this->numero)) {
                trigger_error('Numero is a required parameter.');
            }
            elseif (in_array($this->numero, self::$registry)) 
            {
                trigger_error('ID "'.$this->numero.'" was used already. Please insert a unique name.');
            }
        }

    }