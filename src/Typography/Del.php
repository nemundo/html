<?php

namespace Nemundo\Html\Typography;

use Nemundo\Html\Container\AbstractContentContainer;

class Del extends AbstractContentContainer
{

    public function getHtml()
    {

        $this->tagName = 'del';

        return parent::getHtml();
    }


}
