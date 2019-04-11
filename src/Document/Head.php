<?php

namespace Nemundo\Html\Document;


use Nemundo\Html\Container\AbstractHtmlContainer;

class Head extends AbstractHtmlContainer
{

    public function getHtml()
    {
        $this->tagName = 'head';
        return parent::getHtml();
    }


}