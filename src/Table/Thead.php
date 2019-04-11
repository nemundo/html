<?php

namespace Nemundo\Html\Table;


use Nemundo\Html\Container\AbstractHtmlContainer;

class Thead extends AbstractHtmlContainer
{

    public function getHtml()
    {
        $this->tagName = 'thead';
        return parent::getHtml();
    }

}
