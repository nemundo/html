<?php

namespace Nemundo\Html\Heading;


use Nemundo\Html\Container\AbstractContentContainer;

class H6 extends AbstractContentContainer
{

    public function getHtml()
    {
        $this->tagName = 'h6';
        return parent::getHtml();
    }

}
