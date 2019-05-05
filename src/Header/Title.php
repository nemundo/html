<?php

namespace Nemundo\Html\Header;


use Nemundo\Html\Container\AbstractContentContainer;

class Title extends AbstractContentContainer
{

    public function getContent()
    {

        $this->tagName = 'title';
        $this->returnOneLine = true;

        return parent::getContent();

    }

}