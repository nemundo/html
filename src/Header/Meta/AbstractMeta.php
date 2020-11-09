<?php

namespace Nemundo\Html\Header\Meta;


use Nemundo\Html\Header\AbstractHeaderHtmlContainer;

abstract class AbstractMeta extends AbstractHeaderHtmlContainer
{

    /*
    public function addAttribute($attribute, $value)
    {


        parent::addAttribute($attribute, $value);
    }*/


    public function getContent()
    {

        $this->tagName = 'meta';
        $this->renderClosingTag = false;

        return parent::getContent();

    }

}