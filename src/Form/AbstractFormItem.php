<?php

namespace Nemundo\Html\Form;


use Nemundo\Html\Container\AbstractHtmlContainer;

abstract class AbstractFormItem extends AbstractHtmlContainer
{

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $value;


    public function getHtml()
    {
        $this->addAttribute('name', $this->name);
        return parent::getHtml();
    }

}
