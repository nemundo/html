<?php

namespace Nemundo\Html\Form\Input;


class SubmitInput extends AbstractInput
{

    public function getHtml()
    {

        $this->addAttribute('type', 'submit');
        return parent::getHtml();

    }

}
