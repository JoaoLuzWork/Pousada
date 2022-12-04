<?php
    class Clientes
    {

        private $id;
        Private $nome;
        Private $dataNasc;
        Private $profissao;
        Private $estadoCivil;
        Private $RG;
        Private $CPF;
        Private $endereco;
        Private $nCasa;
        Private $cidade;
        Private $bairro;
        Private $email;
        Private $placaV;
        Private $phone;
        Private $acompanhante;

        public function __construct($id, $nome, $dataNasc, $profissao, $estadoCivil, $RG, $CPF, $endereco, $nCasa, $cidade, $bairro, $email, $placaV, $phone, $acompanhante)
        {
            $this->id = $id;
            $this->nome = $nome;
            $this->dataNasc = $dataNasc;
            $this->profissao = $profissao;
            $this->estadoCivil = $estadoCivil;
            $this->RG = $RG;
            $this->CPF = $CPF;
            $this->endereco = $endereco;
            $this->nCasa = $nCasa;
            $this->cidade = $cidade;
            $this->bairro = $bairro;
            $this->email = $email;
            $this->placaV = $placaV;
            $this->phone = $phone;
            $this->acompanhante = $acompanhante;
        }


        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of dataNasc
         */ 
        public function getDataNasc()
        {
                return $this->dataNasc;
        }

        /**
         * Set the value of dataNasc
         *
         * @return  self
         */ 
        public function setDataNasc($dataNasc)
        {
                $this->dataNasc = $dataNasc;

                return $this;
        }

        /**
         * Get the value of profissao
         */ 
        public function getProfissao()
        {
                return $this->profissao;
        }

        /**
         * Set the value of profissao
         *
         * @return  self
         */ 
        public function setProfissao($profissao)
        {
                $this->profissao = $profissao;

                return $this;
        }

        /**
         * Get the value of estadoCivil
         */ 
        public function getEstadoCivil()
        {
                return $this->estadoCivil;
        }

        /**
         * Set the value of estadoCivil
         *
         * @return  self
         */ 
        public function setEstadoCivil($estadoCivil)
        {
                $this->estadoCivil = $estadoCivil;

                return $this;
        }

        /**
         * Get the value of RG
         */ 
        public function getRG()
        {
                return $this->RG;
        }

        /**
         * Set the value of RG
         *
         * @return  self
         */ 
        public function setRG($RG)
        {
                $this->RG = $RG;

                return $this;
        }

        /**
         * Get the value of CPF
         */ 
        public function getCPF()
        {
                return $this->CPF;
        }

        /**
         * Set the value of CPF
         *
         * @return  self
         */ 
        public function setCPF($CPF)
        {
                $this->CPF = $CPF;

                return $this;
        }

        /**
         * Get the value of endereco
         */ 
        public function getEndereco()
        {
                return $this->endereco;
        }

        /**
         * Set the value of endereco
         *
         * @return  self
         */ 
        public function setEndereco($endereco)
        {
                $this->endereco = $endereco;

                return $this;
        }

        /**
         * Get the value of nCasa
         */ 
        public function getNCasa()
        {
                return $this->nCasa;
        }

        /**
         * Set the value of nCasa
         *
         * @return  self
         */ 
        public function setNCasa($nCasa)
        {
                $this->nCasa = $nCasa;

                return $this;
        }

        /**
         * Get the value of cidade
         */ 
        public function getCidade()
        {
                return $this->cidade;
        }

        /**
         * Set the value of cidade
         *
         * @return  self
         */ 
        public function setCidade($cidade)
        {
                $this->cidade = $cidade;

                return $this;
        }

        /**
         * Get the value of bairro
         */ 
        public function getBairro()
        {
                return $this->bairro;
        }

        /**
         * Set the value of bairro
         *
         * @return  self
         */ 
        public function setBairro($bairro)
        {
                $this->bairro = $bairro;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of placaV
         */ 
        public function getPlacaV()
        {
                return $this->placaV;
        }

        /**
         * Set the value of placaV
         *
         * @return  self
         */ 
        public function setPlacaV($placaV)
        {
                $this->placaV = $placaV;

                return $this;
        }

        /**
         * Get the value of phone
         */ 
        public function getPhone()
        {
                return $this->phone;
        }

        /**
         * Set the value of phone
         *
         * @return  self
         */ 
        public function setPhone($phone)
        {
                $this->phone = $phone;

                return $this;
        }

        /**
         * Get the value of acompanhante
         */ 
        public function getAcompanhante()
        {
                return $this->acompanhante;
        }

        /**
         * Set the value of acompanhante
         *
         * @return  self
         */ 
        public function setAcompanhante($acompanhante)
        {
                $this->acompanhante = $acompanhante;

                return $this;
        }
    } 