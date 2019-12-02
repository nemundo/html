<?php

namespace Nemundo\Html\Container;


use Nemundo\Core\Base\AbstractBaseClass;
use Nemundo\Core\Language\Translation;


abstract class AbstractTagContainer extends AbstractContainer
{

    /**
     * @var string
     */
    protected $tagName;

    /**
     * @var bool
     */
    protected $renderClosingTag = true;

    /**
     * @var bool
     */
    protected $returnOneLine = false;

    private $attributeList = [];

    private $attributeWithoutValue = [];

    /**
     * @var AbstractTagContainer[]
     */
    protected $containerList = [];

    /**
     * @var string
     */
    private $content = '';


    // addDataProperty

    public function addDataAttribute($attribute, $value)
    {

        //if ($value !== null) {
            $this->attributeList['data-'.$attribute] = $value;
        //}

    }



    protected function addAttribute($attribute, $value)
    {

        if ($value !== null) {
            $this->attributeList[$attribute] = $value;
        }

    }

    protected function addAttributeWithoutValue($attribute)
    {

        $this->attributeWithoutValue[] = $attribute;

    }


    protected function getAttribute()
    {

        $attribute = '';

        foreach ($this->attributeList as $key => $value) {
            $attribute = $attribute . ' ' . $key . '="' . $value . '"';
        }

        foreach ($this->attributeWithoutValue as $value) {
            $attribute = $attribute . ' ' . $value;
        }

        return $attribute;
    }


    protected function getOpeningTag()
    {

        $closing = '>';
        if (!$this->renderClosingTag) {
            $closing = ' />';
        }

        $html = '<' . $this->tagName . $this->getAttribute() . $closing;

        $html .= PHP_EOL;

        return $html;

    }


    protected function getClosingTag()
    {

        $html = '</' . $this->tagName . '>' . PHP_EOL;
        return $html;

    }


    // getContent
    public function getContent()
    {

        $html = '';


            if ($this->tagName !== null) {
                $html = $this->getOpeningTag();
            }

            //$html .= $this->html;

            $html .= parent::getContent();


            /*foreach ($this->getContainerList() as $com) {
                $html .= $com->getHtml();
            }*/

            if ($this->tagName !== null) {
                if ($this->renderClosingTag) {
                    $html .= $this->getClosingTag();
                }
            }

            if ($this->returnOneLine) {
                $html = str_replace(PHP_EOL, '', $html);
            }

            $html .= PHP_EOL;

        return $html;

    }


    /*
    protected function addHtml($html)
    {

        $this->html .= $conttext . PHP_EOL;
        return $this;

    }*/

}