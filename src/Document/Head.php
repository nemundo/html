<?php

namespace Nemundo\Html\Document;


use Nemundo\Html\Container\AbstractContentContainer;
use Nemundo\Html\Container\AbstractHtmlContainer;

class Head extends AbstractContentContainer  //HtmlConContainer
{

    public function getContent()
    {
        $this->tagName = 'head';
        return parent::getContent();
    }


}