<?php

namespace CaioFRAlmeida\TddState\Step;

use CaioFRAlmeida\TddState\TddStep;
use CaioFRAlmeida\TddState\Tdd;

class Pass implements TddStep
{
    /**
     * @return null
     */
    public function next(Tdd $tdd)
    {
        $tdd->setStep(new Refactor());
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return 'pass';
    }
}
