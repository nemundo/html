<?php

namespace Nemundo\Html\Form\Textarea;


use Nemundo\Html\Form\AbstractFormItem;

class Textarea extends AbstractFormItem
{

    /**
     * @var bool
     */
    public $readOnly = false;

    /**
     * @var bool
     */
    public $autofocus = false;

    /**
     * @var bool
     */
    public $autocomplete = false;

    /**
     * @var int
     */
    public $rows = 4;

    /**
     * @var int
     */
    public $cols = 50;

    /**
     * @var string
     */
    public $placeholder;

    /**
     * @var string
     */
    //public $value;


    public function getHtml()
    {

        $this->returnOneLine = true;
        $this->tagName = 'textarea';

        // to do
        // required

        $this->addAttribute('rows', $this->rows);
        $this->addAttribute('cols', $this->cols);
        $this->addAttribute('placeholder', $this->placeholder);

        if ($this->readOnly) {
            $this->addAttributeWithoutValue('readonly');
        }

        if (!$this->autocomplete) {
            $this->addAttribute('autocomplete', 'off');
        }

        if ($this->autofocus) {
            $this->addAttributeWithoutValue('autofocus');
        }

        // korrekt wäre content!!!
        $this->addHtml($this->value);

        return parent::getHtml();

    }

}
