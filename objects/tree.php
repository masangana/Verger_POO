<?php

declare(strict_types=1);
    class Arbre
    {
        private string $espece;
        private int $maxFruit;
        private int $minFruit;

        public function __construct($espece, $maxFruit, $minFruit)
        {
            $this->espece = $espece;
            $this->maxFruit = $maxFruit;
            $this->minFruit = $minFruit;
        }

        public function setEspece(string $espece )
        {
            $this->espece = $espece;
        }

        public function setMaxFruit(int $maxFruit)
        {
            $this->maxFruit = $maxFruit;
        }

        public function setMinFruit(int $minFruit)
        {
            $this->minFruit = $minFruit;
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

    }