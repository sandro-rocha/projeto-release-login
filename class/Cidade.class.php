<?php

class Cidade {
    private $uf;
    private $Nomecidade;
    
    function getUf() {
        return $this->uf;
    }

    function getNomecidade() {
        return $this->Nomecidade;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setNomecidade($Nomecidade) {
        $this->Nomecidade = $Nomecidade;
    }
}
