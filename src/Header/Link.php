<?php

namespace Nemundo\Html\Header;


use Nemundo\Html\Container\AbstractHtmlContainer;

class Link extends AbstractHtmlContainer
{

    /**
     * @var string
     */
    public $href;

    /**
     * @var string
     */
    public $media;

    /**
     * @var string
     */
    public $rel = 'stylesheet';

    public function getContent()
    {

        $this->tagName = 'link';
        $this->renderClosingTag = false;
        $this->addAttribute('rel', $this->rel);
        $this->addAttribute('href', $this->href);
        $this->addAttribute('media', $this->media);

        return parent::getContent();

    }

}