<?php

namespace Nemundo\Html\Block;


use Nemundo\Com\Container\ContentTrait;

class ContentDiv extends Div
{

    use ContentTrait;

    public function getContent()
    {

        $this->returnOneLine = true;
        $this->addContent($this->getContent());
        return parent::getContent();

    }


}
