<?php

namespace Nemundo\Html\Script;


use Nemundo\Com\JavaScript\AbstractJavaScriptCode;
use Nemundo\Html\Container\AbstractHtmlContainer;


class JavaScript extends AbstractHtmlContainer
{

    /**
     * @var string
     */
    public $src;



    // addLine
    public function addCodeLine($line)
    {
        $this->addHtml($line);
        return $this;
    }


    public function addCode(AbstractJavaScriptCode $code) {


        foreach ($code->getCode() as $line) {
            $this->addCodeLine($line);
        }


    }


    public function getHtml()
    {

        $this->tagName = 'script';


        //$this->returnOneLine=true;

        $this->addAttribute('type', 'text/javascript');
        $this->addAttribute('src', $this->src);

        return parent::getHtml();

    }

}