<?php

namespace Nemundo\Html\Header;


use Nemundo\Html\Container\AbstractHtmlContainer;



class JavaScriptHeader extends AbstractHtmlContainer
{

    public $src;


    public function getHtml()
    {

        $this->tagName = 'script';
        $this->returnOneLine = true;
        $this->addAttribute('src', $this->src);

        return parent::getHtml();
    }

}