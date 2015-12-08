<?php

class Usuario {
    private $usuario;
    private $email;
    private $senha;
    private $uf;
    private $cidade;
    function getEmail() {
        return $this->email;
    }

    function getUf() {
        return $this->uf;
    }

    function getCidade() {
        return $this->cidade;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }
    
    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    public function autenticar($usuario, $senha) {
        
        
    }
    
}
