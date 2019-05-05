<?php

namespace Nemundo\Html\Container;


use Nemundo\Core\Language\Translation;

class AbstractContentContainer extends AbstractHtmlContainer
{

    /**
     * @var string|string[]
     */
    public $content;

    public function getContent()
    {

        $content = (new Translation())->getText($this->content);
        $this->addContent($content);

        return parent::getContent();

    }

}