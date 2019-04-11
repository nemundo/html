<?php

namespace Nemundo\Html\Button;


use Nemundo\Html\Container\AbstractHtmlContainer;

class Button extends AbstractHtmlContainer
{

    /**
     * @var string|string[]
     */
    public $label;

    /**
     * @var bool
     */
    public $disabled = false;



    public function getHtml()
    {

        $this->tagName = 'button';
        $this->addHtml($this->label);

        if ($this->disabled) {
            $this->addAttributeWithoutValue('disabled');
        }

        return parent::getHtml();

    }

}
