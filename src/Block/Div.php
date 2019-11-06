<?php

namespace Nemundo\Html\Block;

use Nemundo\Html\Container\AbstractContentContainer;

class Div extends AbstractContentContainer //AbstractHtmlContainer
{

    public function getContent()
    {
        $this->tagName = 'div';
        return parent::getContent();
    }

}
