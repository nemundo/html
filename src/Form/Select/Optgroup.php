<?php

namespace Nemundo\Html\Form\Select;

class Optgroup extends AbstractOptgroupOption
{

    public function getHtml()
    {

        $this->tagName = 'optgroup';
        $this->addAttribute('label', $this->label);

        return parent::getHtml();

    }

}