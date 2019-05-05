<?php

namespace Nemundo\Html\Header;


use Nemundo\Html\Container\AbstractHtmlContainer;

class AbstractLink extends AbstractHtmlContainer
{

    /**
     * @var
     */
    public $href;

    public $media;


    public function getContent()
    {

        $this->tagName = 'link';
        $this->renderClosingTag = false;
        $this->addAttribute('rel', 'stylesheet');
        $this->addAttribute('href', $this->href);

        if ($this->media !== null) {
            $this->addAttribute('media', $this->media);
        }

        return parent::getContent();
    }

}