<?php

use Advmaker\CronExpression\CronExpressionGenerator;

class CronExpressionGeneratorTest extends PHPUnit_Framework_TestCase
{
    public function testDefault()
    {
        $generator = new CronExpressionGenerator();
        $this->assertEquals('* * * * *', $generator->getExpression());
    }

    public function testDaily()
    {
        $generator = new CronExpressionGenerator();
        $this->any();
    }


}
