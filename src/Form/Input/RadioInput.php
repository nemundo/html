<?php

namespace Nemundo\Html\Form\Input;


class RadioInput extends AbstractYesNo
{

    public function getHtml()
    {

        $this->addAttribute('type','radio');

        return parent::getHtml();
    }

}
