<?php
require 'Characters.php';

class CharactersTests extends PHPUnit_Framework_TestCase
{
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new Characters();
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
    }

    public function testSe()
    {
        $result = $this->calculator->revertCharacters('Привет! Давно не виделись.');
        $this->assertEquals('Тевирп! Онвад ен ьсиледив.', $result);
    }

}