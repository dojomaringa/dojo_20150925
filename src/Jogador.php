<?php

namespace JokenPo;

class Jogador
{
    private $nome;
    private $mao;

    public function __construct($nome, $mao) {
        $this->nome = $nome;
        $this->mao = $mao;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getMao() {
        return $this->mao;
    }
}