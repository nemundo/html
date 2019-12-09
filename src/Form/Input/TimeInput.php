<?php


namespace Nemundo\Html\Form\Input;


use Nemundo\Html\Container\AbstractContainer;

class TimeInput extends AbstractInput
{

    public function __construct(AbstractContainer $parentContainer = null)
    {
        parent::__construct($parentContainer);
        $this->addAttribute('type', 'time');
    }

}