<?php namespace Advmaker\CronExpression;

class CronExpressionGenerator
{
    protected $expression;

    public function __construct($expression = '* * * * *')
    {
        $this->setExpression($expression);
    }

    public function getExpression()
    {
        return $this->expression;
    }

    public function setExpression($expression)
    {
        $this->expression = $expression;
    }
}