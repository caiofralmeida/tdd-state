<?php

namespace CaioFRAlmeida\TddState\Step;

use CaioFRAlmeida\TddState\TddStep;
use CaioFRAlmeida\TddState\Tdd;

class Refactor implements TddStep
{
    /**
     * @return null
     */
    public function next(Tdd $tdd)
    {
        $tdd->setStep(new Fail());
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return 'refactor';
    }
}
