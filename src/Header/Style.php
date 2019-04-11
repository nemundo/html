<?php

namespace Nemundo\Html\Header;


use Nemundo\Html\Container\AbstractHtmlContainer;

class Style extends AbstractHtmlContainer
{


    public function addStyle($style)
    {
        $this->addHtml($style);
        return $this;
    }

    public function getHtml()
    {

        $this->tagName = 'style';
        return parent::getHtml(); // TODO: Change the autogenerated stub
    }

}