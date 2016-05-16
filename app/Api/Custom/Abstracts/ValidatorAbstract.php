<?php namespace MySecurePortal\Api\Custom\Abstracts;


abstract class ValidatorAbstract
{

    abstract protected function returnRules();

    public function getRules()
    {
        return $this->returnRules();
    }

}