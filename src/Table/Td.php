<?php

namespace Nemundo\Html\Table;


use Nemundo\Html\Container\AbstractContentContainer;

class Td extends AbstractContentContainer
{

    /**
     * @var int
     */
    public $colspan;

    /**
     * @var bool
     */
    public $nowrap = false;

    /**
     * @var int
     */
    public $width;


    public function getContent()
    {

        $this->tagName = 'td';
        $this->returnOneLine = true;

        $this->addAttribute('colspan', $this->colspan);
        $this->addAttribute('width', $this->width);

        // style oder Bootstrap
        //$this->addAttribute('align', 'right');

        if ($this->nowrap) {
            $this->addAttributeWithoutValue('nowrap');
        }

        return parent::getContent();

    }

}