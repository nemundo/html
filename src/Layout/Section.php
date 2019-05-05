<?php

namespace Nemundo\Com\Html\Structure;


use Nemundo\Html\Container\AbstractHtmlContainer;
use Nemundo\Com\Container\ContentTrait;

class Section extends AbstractHtmlContainer
{

    use ContentTrait;

    public function getContent()
    {
        $this->tagName = 'section';
        $this->addContent($this->getContent());
        return parent::getContent();
    }

}