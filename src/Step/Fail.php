<?php

namespace CaioFRAlmeida\TddState\Step;

use CaioFRAlmeida\TddState\TddStep;
use CaioFRAlmeida\TddState\Tdd;

class Fail implements TddStep
{
    public function next(Tdd $tdd)
    {
        $tdd->setStep(new Pass());
    }

    public function __toString()
    {
        return 'fail';
    }
}
