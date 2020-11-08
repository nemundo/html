<?php

namespace Nemundo\Html\Container;


use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Language\Translation;
use Nemundo\Html\Header\AbstractHeaderHtmlContainer;
use Nemundo\Html\Header\LibraryHeader;


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


    private $header='';


    public function addCssClass($cssClass)
    {

        $this->cssClassList[] = $cssClass;
        return $this;

    }


/*
    public function getHeader() {


        //$header='';

        return $this->header;

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

                //$html .= $com->getContent();


                if ($com->isObjectOfClass(AbstractHeaderHtmlContainer::class)) {

                    //(new Debug())->write($com->getContent());
                    //$this->header .= $com->getContent();
                    LibraryHeader::addHeaderContainer($com);


                } else {

                    $html .= $com->getContent();

                }

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