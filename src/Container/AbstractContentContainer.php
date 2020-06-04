<?php

namespace Nemundo\Html\Container;


use Nemundo\Core\Language\Translation;

class AbstractContentContainer extends AbstractHtmlContainer
{

    /**
     * @var string|string[]
     */
    public $content;

    /**
     * @var bool
     */
    public $editable = false;

    public function getContent()
    {

        $this->returnOneLine = true;

        if ($this->editable) {
            $this->addAttribute('contenteditable','true');
            //$this->addAttributeWithoutValue('contenteditable');
        }

        $content = (new Translation())->getText($this->content);
        $this->addContent($content);

        return parent::getContent();

    }

}