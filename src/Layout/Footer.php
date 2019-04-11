<?php

namespace Nemundo\Html\Layout;


use Nemundo\Html\Container\AbstractHtmlContainer;


class Footer extends AbstractHtmlContainer
{


    public function getHtml()
    {
        $this->tagName = 'footer';
        return parent::getHtml();
    }

}