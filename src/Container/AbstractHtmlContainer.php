<?php

namespace Nemundo\Html\Container;


use Nemundo\Core\Base\AbstractBaseClass;
use Nemundo\Core\Language\Translation;


abstract class AbstractHtmlContainer extends AbstractTagContainer  // AbstractContainer
{

    /**
     * @var string
     */
    public $id;

    /**
     * @var string|string[]
     */
    public $title;

    /**
     * @var bool
     */
    public $visible = true;

    /**
     * @var string[]
     */
    protected $cssClassList = [];

    /**
     * @var string
     */
    //protected $tagName;

    /**
     * @var bool
     */
    //protected $renderClosingTag = true;

    /**
     * @var bool
     */
    //protected $returnOneLine = false;

    //private $attributeList = [];

    //private $attributeWithoutValue = array();

    /**
     * @var AbstractHtmlContainer[]
     */
    protected $containerList = [];

    /**
     * @var string
     */
    private $content = '';


    public function addCssClass($cssClass)
    {

        $this->cssClassList[] = $cssClass;
        return $this;

    }


    /*
    public function addAttribute($attribute, $value)
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

    }*/


    public function getContent()
    {

        $html = '';

        if ($this->visible) {

            $this->addAttribute('id', $this->id);

            if ($this->title !== null) {
                $this->addAttribute('title', (new Translation())->getText($this->title));
            }

            $this->cssClassList = array_unique($this->cssClassList);
            if (sizeof($this->cssClassList) > 0) {
                $this->addAttribute('class', join(' ', $this->cssClassList));
            }

            if ($this->tagName !== null) {
                $html = $this->getOpeningTag();
            }

            $html .= $this->content;

            foreach ($this->getContainerList() as $com) {
                $html .= $com->getContent();
            }

            if ($this->tagName !== null) {
                if ($this->renderClosingTag) {
                    $html .= $this->getClosingTag();
                }
            }

            if ($this->returnOneLine) {
                $html = str_replace(PHP_EOL, '', $html);
            }

            $html .= PHP_EOL;

        }

        //$html = trim($html);

        return $html;

    }


    protected function addContent($content)
    {

        $text = $content;
        if (is_array($content)) {
            $text = (new Translation())->getText($content);
        }

        $this->content .= $text . PHP_EOL;
        return $this;

    }

}