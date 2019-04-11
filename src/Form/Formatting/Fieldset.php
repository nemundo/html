<?php

namespace Nemundo\Html\Form\Formatting;


use Nemundo\Html\Container\AbstractHtmlContainer;

class Fieldset extends AbstractHtmlContainer
{

    public function getHtml()
    {
        $this->tagName = 'fieldset';
        parent::getHtml();
    }

}