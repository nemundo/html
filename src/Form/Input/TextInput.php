<?php

namespace Nemundo\Html\Form\Input;


class TextInput extends AbstractInput
{

    /**
     * @var bool
     */
    public $required = false;

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
     * @var bool
     */
    public $disabled = false;

    /**
     * @var mixed
     */
    public $size;

    /**
     * @var mixed
     */
    public $maxLength;

    /**
     * @var string
     */
    public $placeholder;

    /**
     * @var InputType
     */
    public $inputType = InputType::TEXT;


    public function getHtml()
    {

        //$this->checkBooleanProperty('autofocus');

        $this->addAttribute('type', $this->inputType);
        $this->addAttribute('placeholder', $this->placeholder);
        $this->addAttribute('size', $this->size);
        $this->addAttribute('maxlength', $this->maxLength);

        if ($this->readOnly) {
            $this->addAttributeWithoutValue('readonly');
        }

        if (!$this->autocomplete) {
            $this->addAttribute('autocomplete', 'off');
            //$this->addAttribute('autocomplete', 'new-password');
        }

        if ($this->autofocus) {
            $this->addAttributeWithoutValue('autofocus');
        }

        if ($this->disabled) {
            $this->addAttributeWithoutValue('disabled');
        }

        if ($this->required) {
            $this->addAttributeWithoutValue('required');
        }

        return parent::getHtml();

    }

}