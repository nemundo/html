<?php

namespace Nemundo\Html\Form\Select;


use Nemundo\Html\Form\AbstractFormItem;


class Select extends AbstractFormItem
{

    /**
     * @var bool
     */
    public $disabled = false;

    /**
     * @var bool
     */
    public $multiple = false;


    public function getHtml()
    {

        $this->tagName = 'select';

        if ($this->disabled) {
            $this->addAttributeWithoutValue('disabled');
        }

        if ($this->multiple) {
            $this->addAttributeWithoutValue('multiple');
            $this->name = $this->name . '[]';
            //$this->addAttribute('size', '10');
        }

        return parent::getHtml();

    }

}