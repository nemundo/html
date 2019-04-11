<?php

namespace Nemundo\Html\Form\Button;


use Nemundo\Core\Language\Translation;
use Nemundo\Html\Button\Button;

class SubmitButton extends Button
{

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $value;

    protected function loadContainer()
    {
        parent::loadContainer();
        $this->label = 'Submit';
    }

    public function getHtml()
    {

        $this->addAttribute('type', 'submit');
        $this->addAttribute('name', $this->name);
        $this->addAttribute('value', (new Translation())->getText($this->value));

        return parent::getHtml();

    }


    public function getValue()
    {

        $value = '';
        if (isset($_REQUEST[$this->name])) {
            $value = trim($_REQUEST[$this->name]);
        }
        return $value;

    }

}