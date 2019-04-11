<?php

namespace Nemundo\Html\Block;


use Nemundo\Com\Container\ContentTrait;

class ContentDiv extends Div
{

    use ContentTrait;

    public function getHtml()
    {

        $this->returnOneLine = true;
        $this->addHtml($this->getContent());
        return parent::getHtml();

    }


}
