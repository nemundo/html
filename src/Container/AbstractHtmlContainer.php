<?php

namespace Nemundo\Html\Container;


use Nemundo\Core\Language\Translation;


abstract class AbstractHtmlContainer extends AbstractTagContainer
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


    public function getHeader() {


        $header='';

        return $header;

    }


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

        return $html;

    }








    protected function addContent($content)
    {

        $text = $content;
        if (is_array($content)) {
            $text = (new Translation())->getText($content);
        }

        $this->content .= $text ;

        return $this;

    }

}