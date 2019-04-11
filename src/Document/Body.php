<?php

namespace Nemundo\Html\Document;


use Nemundo\Html\Container\AbstractHtmlContainer;


class Body extends AbstractHtmlContainer
{

    protected function loadContainer()
    {
        $this->tagName = 'body';
    }


}