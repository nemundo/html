<?php

namespace Nemundo\Html\Form\Input;


class HiddenInput extends AbstractInput
{

    public function getHtml()
    {

        $this->addAttribute('type', 'hidden');

        return parent::getHtml();

    }

}
