<?php

namespace Nemundo\Com\Html\Structure;


use Nemundo\Html\Container\AbstractHtmlContainer;
use Nemundo\Com\Container\ContentTrait;

class Section extends AbstractHtmlContainer
{

    use ContentTrait;

    public function getHtml()
    {
        $this->tagName = 'section';
        $this->addHtml($this->getContent());
        return parent::getHtml();
    }

}