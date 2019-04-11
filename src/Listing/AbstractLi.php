<?php

namespace Nemundo\Html\Listing;


use Nemundo\Html\Container\AbstractHtmlContainer;


abstract class AbstractLi extends AbstractHtmlContainer
{


    public function getHtml()
    {
        $this->tagName = 'li';
        return parent::getHtml();
    }

}