<?php

namespace Nemundo\Html\Hyperlink;

use Nemundo\Html\Container\AbstractContentContainer;


abstract class AbstractHyperlink extends AbstractContentContainer
{

    /**
     * @var string
     */
    protected $href;

    /**
     * @var string
     */
    protected $target;

    public function getContent()
    {

        $this->tagName = 'a';
        $this->returnOneLine = true;

        $this->addAttribute('href', $this->href);
        $this->addAttribute('target', $this->target);

        return parent::getContent();

    }

}
