<?php

namespace Nemundo\Html\Formatting;

use Nemundo\Html\Container\AbstractContentContainer;

class Small extends AbstractContentContainer
{

    public function getHtml()
    {
        $this->tagName = 'small';
        return parent::getHtml();
    }


}
