<?php

namespace Nemundo\Html\Hyperlink;

use Nemundo\Html\Container\AbstractContentContainer;


// AbstractA
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

    /**
     * @var string
     */
    protected $title;


    public function getHtml()
    {

        $this->tagName = 'a';
        $this->returnOneLine = true;

        $this->addAttribute('href', $this->href);
        $this->addAttribute('target', $this->target);
        $this->addAttribute('title', $this->title);

        return parent::getHtml();

    }

}
