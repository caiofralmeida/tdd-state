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

    /**
     * @param TddStep $step
     * @return Tdd
     */
    public function setStep(TddStep $step)
    {
        $this->step = $step;
        return $this;
    }

    /**
     * @return string
     */
    public function atualStep()
    {
        return $this->step->__toString();
    }

    /**
     * @return null
     */
    public function gotoNextStep()
    {
        $this->step->next($this);
    }
}
