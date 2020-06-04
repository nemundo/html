<?php

namespace Nemundo\Html\Table;


use Nemundo\Html\Container\AbstractContentContainer;


abstract class AbstractTableCell extends AbstractContentContainer
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

        $this->returnOneLine = true;

        $this->addAttribute('colspan', $this->colspan);
        $this->addAttribute('width', $this->width);

        if ($this->nowrap) {
            $this->addAttributeWithoutValue('nowrap');
        }

        return parent::getContent();

    }

}