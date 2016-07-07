<?php

namespace CaioFRAlmeida\TddState;

use CaioFRAlmeida\TddState\Step\Fail;

class Tdd
{
    /**
     * @var TddStep
     */
    private $step;

    public function __construct()
    {
        $this->setStep(new Fail());
    }

    public function setStep(TddStep $step)
    {
        $this->step = $step;
        return $this;
    }

    public function atualStep()
    {
        return $this->step->__toString();
    }

    public function gotoNextStep()
    {
        $this->step->next($this);
    }
}
