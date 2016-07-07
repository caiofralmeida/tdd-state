<?php

namespace CaioFRAlmeida\TddState;

interface TddStep
{
    /**
     * @return null
     */
    public function next(Tdd $tdd);

    /**
     * @return string
     */
    public function __toString();
}
