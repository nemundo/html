<?php

namespace Nemundo\Html\Block;


use Nemundo\Html\Container\AbstractHtmlContainer;

class Hr extends AbstractHtmlContainer
{
    public function getHtml()
    {
        $this->tagName = 'hr';
        $this->renderClosingTag = false;
        $this->returnOneLine = true;

        return parent::getHtml();
    }

}
