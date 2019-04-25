<?php

namespace Nemundo\Html\Script;


use Nemundo\Html\Container\AbstractHtmlContainer;


class JavaScript extends AbstractHtmlContainer
{

    /**
     * @var string
     */
    public $src;



    // addLine
    // addHtml
    public function addCodeLine($line)
    {
        $this->addHtml($line);
        return $this;
    }


    public function getHtml()
    {

        $this->tagName = 'script';
        $this->addAttribute('type', 'text/javascript');
        $this->addAttribute('src', $this->src);

        return parent::getHtml();

    }

}