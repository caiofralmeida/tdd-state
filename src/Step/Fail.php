<?php

namespace CaioFRAlmeida\TddState\Step;

use CaioFRAlmeida\TddState\TddStep;
use CaioFRAlmeida\TddState\Tdd;

class Fail implements TddStep
{
    /**
     * @return null
     */
    public function next(Tdd $tdd)
    {
        $tdd->setStep(new Pass());
    }
    
    /**
     * @return string
     */
    public function __toString()
    {
        return 'fail';
    }
}
