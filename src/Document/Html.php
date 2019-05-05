<?php

namespace Nemundo\Html\Document;


use Nemundo\Html\Container\AbstractHtmlContainer;

class Html extends AbstractHtmlContainer
{

    public function getContent()
    {

        $this->tagName = 'html';
        return parent::getContent();

    }

}