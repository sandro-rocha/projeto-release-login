<?php

class Estado {
    private $siglaUF;
    private $nomeEstado;
    
    function getSiglaUF() {
        return $this->siglaUF;
    }

    function getNomeEstado() {
        return $this->nomeEstado;
    }

    function setSiglaUF($siglaUF) {
        $this->siglaUF = $siglaUF;
    }

    function setNomeEstado($nomeEstado) {
        $this->nomeEstado = $nomeEstado;
    }    
}
