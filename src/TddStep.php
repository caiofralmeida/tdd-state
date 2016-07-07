<?php

namespace CaioFRAlmeida\TddState;

interface TddStep
{
    /**
     * @return Cycle
     */
    public function next(Tdd $tdd);

    /**
     * @return string
     */
    public function __toString();
}
