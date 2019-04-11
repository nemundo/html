<?php

namespace Nemundo\Html\Form;

use Nemundo\Html\Container\AbstractHtmlContainer;


class Form extends AbstractHtmlContainer
{

    /**
     * @var string
     */
    public $action = '';

    /**
     * @var FormMethod
     */
    public $formMethod = FormMethod::POST;


    public function getHtml()
    {

        $this->tagName = 'form';
        $this->addAttribute('name', $this->id);

        // notwendig für File Upload
        if (strtolower($this->formMethod) == 'post') {
            $this->addAttribute('enctype', 'multipart/form-data');
        }

        $this->addAttribute('action', $this->action);
        $this->addAttribute('method', $this->formMethod);

        return parent::getHtml();

    }

}
