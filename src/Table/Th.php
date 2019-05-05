<?php

namespace Nemundo\Html\Table;

use Nemundo\Html\Container\AbstractContentContainer;

class Th extends AbstractContentContainer
{

    /**
     * @var int
     */
    public $colspan;

    public $nowrap = false;


    public function __construct(Thead $parentContainer = null)
    {
        parent::__construct($parentContainer);
    }


    public function getContent()
    {

        $this->tagName = 'th';
        $this->returnOneLine = true;

        $this->addAttribute('colspan', $this->colspan);

        if ($this->nowrap) {
            $this->addAttributeWithoutValue('nowrap');
        }

        return parent::getContent();

    }

}