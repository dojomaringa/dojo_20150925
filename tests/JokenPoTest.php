<?php

include(__DIR__ . '/../vendor/autoload.php');

use JokenPo\Pedra;
use JokenPo\Tesoura;
use JokenPo\Papel;
use JokenPo\Jogada;
use JokenPo\Jogador;

class PedraTest extends PHPUnit_Framework_TestCase
{
    public function testDeveRetornarPapelQuandoEuPerder() {
        $pedra = new Pedra;
        $this->assertEquals($pedra->perde(), 'Papel');
    }

    public function testDeveRetornarTesouraQuandoEuGanhar() {
        $pedra = new Pedra;
        $this->assertEquals($pedra->ganho(), 'Tesoura');
    }
}

class TesouraTest extends PHPUnit_Framework_TestCase {

    public function testDeveRetornarPedraQuandoEuPerder() {

        $tesoura = new Tesoura;

        $this->assertEquals($tesoura->perde(), 'Pedra');
    }

    public function testDeveRetornarPapelQuandoEuGanhar() {

        $tesoura = new Tesoura;

        $this->assertEquals($tesoura->ganho(), 'Papel');
    }
}

class PapelTest extends PHPUnit_Framework_TestCase {
    public function testDeveRetornarTesouraQuandoEuPerder() {
        $papel = new Papel;
        $this->assertEquals($papel->perde(), 'Tesoura');
    }

    public function testeDeveRetornarPedraQuandoEuGanhar() {
        $papel = new Papel;
        $this->assertEquals($papel->ganho(), 'Pedra');
    }
}

class JogadorTest extends PHPUnit_Framework_TestCase {

    public function testDeveDefinirUmJogador() {
        $jogador = new Jogador('Rogerio', new Pedra);

        $this->assertEquals($jogador->getNome(), 'Rogerio');
        $this->assertInstanceOf('Pedra', $jogador->getMao());
    }

}

class JogadaTest extends PHPUnit_Framework_TestCase {

    public function testDeveDefinirUmaJogada() {
        $jogador1 = new Jogador('Rogerio', new Pedra);
        $jogador2 = new Jogador('Manolo', new Pedra);

        $jogada = new Jogada($jogador1, $jogador2);

        $this->assertEquals($jogada->jogar(), 'Vencedor');
    }

}