<?php

namespace Nemundo\Html\Form\Select;


use Nemundo\Html\Container\AbstractHtmlContainer;

abstract class AbstractOptgroupOption extends AbstractHtmlContainer
{

    /**
     * @var string
     */
    public $label;

    /**
     * @var bool
     */
    public $disabled = false;


    public function getHtml()
    {

        if ($this->disabled) {
            $this->addAttributeWithoutValue('disabled');
        }

        return parent::getHtml();

    }

}