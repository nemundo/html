<?php

namespace Nemundo\Html\Container;

use Nemundo\Core\Base\AbstractBaseClass;
use Nemundo\Core\Language\Translation;


abstract class AbstractHtmlContainer extends AbstractBaseClass
{

    /**
     * @var string
     */
    public $id;

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

    private $attributeWithoutValue = array();

    /**
     * @var AbstractHtmlContainer[]
     */
    protected $containerList = [];

    /**
     * @var string
     */
    protected $html = '';


    public function __construct(AbstractHtmlContainer $parentContainer = null)
    {

        if ($parentContainer !== null) {
            $parentContainer->addContainer($this);
        }

        $this->loadContainer();

    }


    protected function loadContainer()
    {

    }


    public function addContainer(AbstractHtmlContainer $container)
    {
        $this->containerList[] = $container;
        return $this;
    }


    public function getContainerList($recursive = false)
    {

        /** @var AbstractHtmlContainer[] $containerList */
        $containerList = [];

        foreach ($this->containerList as $container) {

            $containerList[] = $container;

            if ($recursive) {
                $containerList = array_merge($containerList, $container->getContainerList(true));
            }

        }

        return $containerList;

    }


    public function addCssClass($cssClass)
    {

        $this->cssClassList[] = $cssClass;
        return $this;

    }


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

    }


    public function getHtml()
    {

        $html = '';

        if ($this->visible) {

            $this->addAttribute('id', $this->id);

            $this->cssClassList = array_unique($this->cssClassList);
            if (sizeof($this->cssClassList) > 0) {
                $this->addAttribute('class', join(' ', $this->cssClassList));
            }

            if ($this->tagName !== null) {
                $html = $this->getOpeningTag();
            }

            $html .= $this->html;

            foreach ($this->getContainerList() as $com) {
                $html .= $com->getHtml();
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

        return $html;

    }


    protected function addHtml($html)
    {

        $text = $html;
        if (is_array($html)) {
            $text = (new Translation())->getText($html);
        }

        $this->html .= $text . PHP_EOL;
        return $this;

    }

}