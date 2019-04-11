<?php

namespace Nemundo\Html\Multimedia;


use Nemundo\Html\Container\AbstractHtmlContainer;


// https://www.w3schools.com/tags/tag_source.asp
class Source extends AbstractHtmlContainer
{

    /**
     * @var string
     */
    public $src;

    /**
     * @var string
     */
    public $type;


    public function getHtml()
    {

        $this->tagName='source';

        $this->addAttribute('src',$this->src);
        $this->addAttribute('type',$this->type);

        return parent::getHtml();

    }

}