<?php


namespace step;

use Exception;

class B
{
    /**
     * @Given a is :num1
     * @throws Exception
     */
    public function aIs($num1)
    {
        throw new Exception('B');
    }

    /**
     * @Then b will be :num1
     */
    public function bWillBe($num1)
    {

    }
}