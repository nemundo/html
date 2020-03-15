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


    public function getContent()
    {

        $this->tagName = 'textarea';
        $this->returnOneLine = false;   // true;  // false;

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


        /*
        $value = $this->value;

        if ($value == null) {
            $value='';
        }

        $value=trim($value);*/

        $this->addContent($this->value);

        //$this->content .= $text . PHP_EOL;


        return parent::getContent();

    }

}
