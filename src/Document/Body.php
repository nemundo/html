<?php

namespace Nemundo\Html\Document;


use Nemundo\Html\Container\AbstractContentContainer;
use Nemundo\Html\Container\AbstractHtmlContainer;


class Body extends AbstractContentContainer  // AbstractHtmlContainer
{

    protected function loadContainer()
    {
        $this->tagName = 'body';
    }


}