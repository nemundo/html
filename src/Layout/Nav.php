<?php

namespace Nemundo\Html\Layout;


use Nemundo\Html\Container\AbstractHtmlContainer;

class Nav extends AbstractHtmlContainer
{

    public function getHtml()
    {
        $this->tagName = 'nav';
        return parent::getHtml();
    }

}
