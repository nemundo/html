<?php

namespace Nemundo\Html\Formatting;

use Nemundo\Html\Container\AbstractContentContainer;

class Underline extends AbstractContentContainer
{

    public function getHtml()
    {
        $this->tagName = 'u';
        return parent::getHtml();
    }


}
