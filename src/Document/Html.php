<?php

namespace Nemundo\Html\Document;


use Nemundo\Html\Container\AbstractHtmlContainer;

class Html extends AbstractHtmlContainer
{

    public function getHtml()
    {

        $this->tagName = 'html';
        return parent::getHtml();

    }

}