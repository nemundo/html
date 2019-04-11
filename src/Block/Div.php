<?php

namespace Nemundo\Html\Block;

use Nemundo\Html\Container\AbstractHtmlContainer;

class Div extends AbstractHtmlContainer
{

    public function getHtml()
    {
        $this->tagName = 'div';
        return parent::getHtml();
    }


}
