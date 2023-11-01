<?php

    class Cachorro
    {
        //definindo os atributos da classe
        private $nome;
        private $raca;
        private $cor;
        private $peso;
        private $idade;
        private $dono;

        //definindo o método construtor que irá criar objetos dessa classe
        public function __construct() {}

        public function create($_nome, $_raca, $_cor, $_peso, $_idade, $_dono)
        {
            $this->nome = $_nome;
            $this->raca = $_raca;
            $this->cor = $_cor;
            $this->peso = $_peso;
            $this->idade = $_idade;
            $this->dono = $_dono;

        }

        //getters e setters
        public function set_Nome($_nome)
        {
            $this->nome = $_nome;
        }

        public function set_Raca($_raca)
        {
            $this->raca = $_raca;
        }

        public function get_Nome()
        {
            return $this->nome;
        }

        public function get_Raca()
        {
            return $this->raca;
        }

        //funções específicas da classe

        public function latir()
        {
            echo "$this->nome fez AU AU! <br>";
        }

        public function rosnar($_pessoa)
        {
            echo $this->dono == $_pessoa ? 
                                "$this->nome abanou o rabo. <br>" : 
                                "$this->nome rosnou para você. <br>";
        }

    }

?>