<?php

namespace Nemundo\Html\Formatting;

use Nemundo\Html\Container\AbstractContentContainer;

class Bold extends AbstractContentContainer
{

    public function getHtml()
    {
        $this->tagName = 'b';
        return parent::getHtml();
    }


}
