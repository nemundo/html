<?php

namespace Nemundo\Html\Table;


use Nemundo\Html\Container\AbstractHtmlContainer;


abstract class AbstractTable extends AbstractHtmlContainer
{

    /**
     * @var string
     */
    public $caption;

    /**
     * @var int
     */
    public $border;

    /**
     * @var int
     */
    public $cellSpacing;

    /**
     * @var int
     */
    public $cellPadding;

    /**
     * @var int
     */
    public $width;


    public function getHtml()
    {

        $this->tagName = 'table';

        //$this->addAttribute('class', $this->cssClass);
        $this->addAttribute('border', $this->border);
        $this->addAttribute('width', $this->width);
        $this->addAttribute('cellspacing', $this->cellSpacing);
        $this->addAttribute('cellpadding', $this->cellPadding);

        if ($this->caption !== null) {
            $caption = new Caption($this);
            $caption->addHtml($this->caption);
        }

        return parent::getHtml();

    }

}