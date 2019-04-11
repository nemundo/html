<?php

namespace Nemundo\Html\Form\Input;


// Checkbox
class CheckBoxInput extends AbstractYesNo
{

    public function getHtml()
    {

        $this->addAttribute('type','checkbox');

        return parent::getHtml();
    }

}
