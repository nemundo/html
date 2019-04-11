<?php

namespace Nemundo\Html\Formatting;

use Nemundo\Html\Container\AbstractContentContainer;

class Strong extends AbstractContentContainer
{

    public function getHtml()
    {
        $this->tagName = 'strong';
        return parent::getHtml();
    }


}
