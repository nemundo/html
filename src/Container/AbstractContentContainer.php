<?php

namespace Nemundo\Html\Container;


use Nemundo\Core\Language\Translation;

class AbstractContentContainer extends AbstractHtmlContainer
{

    /**
     * @var string|string[]
     */
    public $content;

    public function getHtml()
    {

        //$content = (new Translation())->getText($this->content);
        //$this->addHtml($content);

        $this->addHtml($this->content);

        return parent::getHtml();

    }

}