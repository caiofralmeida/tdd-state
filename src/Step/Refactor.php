<?php

namespace CaioFRAlmeida\TddState\Step;

use CaioFRAlmeida\TddState\TddStep;
use CaioFRAlmeida\TddState\Tdd;

class Refactor implements TddStep
{
    public function next(Tdd $tdd)
    {
        $tdd->setStep(new Fail());
    }

    public function __toString()
    {
        return 'refactor';
    }
}
