<?php

namespace Nemundo\Html\Layout;


use Nemundo\Html\Container\AbstractHtmlContainer;


class Header extends AbstractHtmlContainer
{


    public function getHtml()
    {
        $this->tagName = 'header';
        return parent::getHtml();
    }

}