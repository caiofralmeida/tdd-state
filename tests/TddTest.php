<?php

namespace CaioFRAlmeidaTest\TddState;

use CaioFRAlmeida\TddState\Tdd;
use CaioFRAlmeida\TddState\Step\Fail;
use CaioFRAlmeida\TddState\Step\Pass;
use CaioFRAlmeida\TddState\Step\Refactor;

class TddTest extends \PHPUnit_Framework_TestCase
{
    private $tdd;

    public function setUp()
    {
        $this->tdd = new Tdd();
    }

    /**
     * @test
     */
    public function deveExibirEstadoPadraoAoInicializar()
    {
        $this->assertEquals('fail', $this->tdd->atualStep());
    }

    /**
     * @test
     */
    public function deveExibirPassQuandoIrParaOproximoEstado()
    {
        $this->tdd->gotoNextStep();
        $this->assertEquals('pass', $this->tdd->atualStep());
    }

    /**
     * @test
     */
    public function deveExibirRefactorQuandoEstiverEmPassEirParaProximoEstado()
    {
        $this->tdd->gotoNextStep();
        $this->tdd->gotoNextStep();

        $this->assertEquals('refactor', $this->tdd->atualStep());
    }

    /**
     * @test
     */
    public function deveExibirFailQuandoEstiverEmRefactorEirParaProximoEstado()
    {
        $this->tdd->gotoNextStep();
        $this->tdd->gotoNextStep();
        $this->tdd->gotoNextStep();

        $this->assertEquals('fail', $this->tdd->atualStep());
    }

    public function provedorEstadosValidos()
    {
        return [
            ['pass', new Fail()],
            ['refactor', new Pass()],
            ['fail', new Refactor()]
        ];
    }

    /**
     * @dataProvider provedorEstadosValidos
     * @test
     */
    public function deveIrParaEstadoCorreto($expected, $atualState)
    {
        $this->tdd->setStep($atualState);
        $this->tdd->gotoNextStep();

        $this->assertEquals($expected, $this->tdd->atualStep());
    }


}
