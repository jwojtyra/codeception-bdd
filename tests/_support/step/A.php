<?php


namespace step;


use Exception;

class A
{
    /**
     * @Given a is :num1
     * @throws Exception
     */
    public function aIs($num1)
    {
        throw new Exception('A');
    }

    /**
     * @Then b will be :num1
     */
    public function bWillBe($num1)
    {

    }
}