<?php

namespace Nemundo\Html\Table;


use Nemundo\Html\Container\AbstractHtmlContainer;

class Tbody extends AbstractHtmlContainer
{

    public function getHtml()
    {
        $this->tagName = 'tbody';
        return parent::getHtml();
    }

}