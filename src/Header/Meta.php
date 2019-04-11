<?php

namespace Nemundo\Html\Header;


class Meta extends AbstractHeaderHtmlContainer
{


    public function addAttribute($attribute, $value)
    {
        parent::addAttribute($attribute, $value);
    }


    public function getHtml()
    {

        $this->tagName = 'meta';
        $this->renderClosingTag = false;

        return parent::getHtml();

    }

}