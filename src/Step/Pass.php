<?php

namespace CaioFRAlmeida\TddState\Step;

use CaioFRAlmeida\TddState\TddStep;
use CaioFRAlmeida\TddState\Tdd;

class Pass implements TddStep
{
    public function next(Tdd $tdd)
    {
        $tdd->setStep(new Refactor());
    }

    public function __toString()
    {
        return 'pass';
    }
}
