<?php

namespace Nemundo\Html\Form\Formatting;


use Nemundo\Html\Container\AbstractContentContainer;

class Label extends AbstractContentContainer
{

    public $for;

    public function getHtml()
    {

        $this->tagName = 'label';
        $this->addAttribute('for', $this->for);

        return parent::getHtml();
    }

}