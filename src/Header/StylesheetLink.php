<?php

namespace Nemundo\Html\Header;


use Nemundo\Html\Container\AbstractHtmlContainer;

class StylesheetLink extends AbstractHtmlContainer
{

    /**
     * @var
     */
    public $href;

    public $media;


    public function getHtml()
    {

        $this->tagName = 'link';
        $this->renderClosingTag = false;
        $this->addAttribute('rel', 'stylesheet');
        $this->addAttribute('href', $this->href);

        if ($this->media !== null) {
            $this->addAttribute('media', $this->media);
        }

        return parent::getHtml();
    }

}