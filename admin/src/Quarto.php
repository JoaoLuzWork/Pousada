<?php

    class Quartos
    {
        
        private $id;
        private $estado;

        public function __construct($id, $estado)
        {
            $this->id =$id;
            $this->estado =$estado;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of estado
         */ 
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */ 
        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }
    }