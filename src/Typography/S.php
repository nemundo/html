<?php

namespace Nemundo\Html\Typography;

use Nemundo\Html\Container\AbstractContentContainer;

class S extends AbstractContentContainer
{

    public function getHtml()
    {

        $this->tagName = 's';

        return parent::getHtml();
    }


}
