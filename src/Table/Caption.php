<?php

namespace Nemundo\Html\Table;


use Nemundo\Html\Container\AbstractHtmlContainer;

class Caption extends AbstractHtmlContainer
{

    /**
     * @var string
     */
    public $caption;

    public function getHtml()
    {
        $this->tagName = 'caption';
        $this->returnOneLine = true;
        $this->addHtml($this->caption);
        return parent::getHtml();
    }

}